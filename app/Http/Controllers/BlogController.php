<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController
{
    public function index()
    {
        $articles = Article::latest()->paginate(4);

        return view('blog.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        return view('/', ['article' => $article]);
    }
}
