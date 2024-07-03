<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController
{
    public function index()
    {
        $posts=Post::get();
        return view('posts.index',['posts'=>$posts]);
    }

    public function show(Post $post){
        return view('posts.show',['post'=>$post]);
    }
}