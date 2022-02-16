<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //add
use App\Models\Post; //add

class PostsController extends Controller
{   
    function show($data){
    
        return view('post', ['post' => Post::where('slug', $data)->firstOrFail()]);
    }
}
