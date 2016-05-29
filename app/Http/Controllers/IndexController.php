<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Article::where('status', 1)->orderBy('score', 'desc')->paginate(15);
        return view('index.home', ['articles' => $articles]);
    }
}
