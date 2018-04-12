<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $articles = \App\Article::with('user')->latest()->paginate(3);
        return view('articles.index', compact('articles'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ArticlesRequest $request
     * @return \Illuminate\Http\Response
     */


    public function store(\App\Http\Requests\ArticlesRequest $request) {
        $article = \App\User::find(1)->articles() ->create($request->all());
        if (! $article) {
            return back()
                ->with('flash_message', '글이 저장되지 않았습니다.')
                ->withInput();
        }
////        14.1. 이벤트 시스템 작동 기본 원리
       event(new \App\Events\ArticlesEvent($article));


       return redirect(route('articles.index'))
            ->with('flash_message', '작성하신 글이 저장되었습니다.');
    }
}