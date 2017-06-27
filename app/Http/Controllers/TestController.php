<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class TestController extends Controller
{
    public function views($id){
        
        $article = Article::find($id);
            $article->category;
            $article->user;
            $article->tags;
        dd($article);
    }
}
