<?php

namespace App\Http\Controllers;

use App\Models\Article;

class RelatedBlogController
{
    public function index()
    {
        return view('blog.index');
    }

    public function show(Article $article)
    {
        return view('related-contents-mini', ['article' => $article]);
    }
}
