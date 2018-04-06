<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
class ArticlesController extends Controller
{
    public function store(\App\Http\Requests\ArticlesRequest $request){
        $article = \App\User::find(1)->articles()->create($request->all());

        if (! $article) {
            return back()->with('flash_message', '글이 저장되지 않았습니다.') -> withInput();
        }

        return redirect(route('articles.index'))->with('flash_message', '작성하신 글이 저장되었습니다.');
    }
    public function index(){
        $articles = \App\Article::latest()->paginate(3);

        return view('articles.index', compact('articles'));
    }
    public function create(){
        return view('articles.create');
    }
}
