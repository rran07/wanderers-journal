<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController
{
    public function index()
    {
        return view('blog.index');
    }

    public function show(Article $article)
    {
        return view('/', ['article' => $article]);
    }

    public function rendering(Article $article)
    {
        $articles = Article::latest()->paginate(4);

        return view('blog.index', ['articles' => $articles]);
    }
}
