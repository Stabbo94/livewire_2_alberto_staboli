<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

/**
* @method \Illuminate\Routing\MiddlewareRegistrar middleware(string|array $middleware, array $options = [])
*/
class ArticleController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('article.create');
    }
    
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }
}
