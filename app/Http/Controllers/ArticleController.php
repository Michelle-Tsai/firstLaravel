<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index() {
        //return 'hello laragirls';
        //return view('welcome');
        $articles = Article::all();
        return view('article.index', ['articles' => $articles]);
    }

    //route send parameter
    public function show($id) {
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
        //view(版面位址,放入(DB)參數,此為array);
    }
}
