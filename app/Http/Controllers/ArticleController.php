<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;

class ArticleController extends Controller
{
    public function show(Request $request)
    {
        $article = Article::where('id', $request->id)->firstOrFail();
        return view('article.show', ['article' => $article]);
    }
}
