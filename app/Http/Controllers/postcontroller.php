<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class postcontroller extends Controller
{
    public function index()
    
    {
        return view('posts', [
            "title" => "all posts",
            // "posts" => post::all()
            "posts" => post::with(['author','category'])->latest()->get()
        
        ]);
    }
    public function show(post $post)
    {
        
        return view('post',[
            "title" => "single post",
            "post" => $post
        ]);
    }
}
