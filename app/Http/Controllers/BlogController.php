<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    public function show(){
    return view ('blog', [ 'articles' => Article::latest()->take(4)->get()
    ]);
    }

    public function showSub($id){
        $article = Article::find($id);

        return view('blogPost.show', ['article' => $article]);
    }
}
