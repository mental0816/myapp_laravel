<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
class ArticlesController extends Controller
{
    public function index(){
        $articles = \App\Article::with('user')->get();

        return view('articles.index', compact('articles'));
    }
}
