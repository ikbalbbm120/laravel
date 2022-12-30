<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
use App\Models\category;
class postcontroller extends Controller
{
    public function index()
    
    {
        $title = '';
        if(request('category')) {
            $category = category::firstWhere('slug',request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = user::firstWhere('username',request('author'));
            $title = ' by ' . $author->name;
        }
        return view('posts', [
            "title" => "all posts" . $title,
            "active" => 'posts',
            "posts" => post::latest()->filter(request(['search','category','author']))->paginate(5)->withquerystring()
        
        ]);
    }
    public function show(post $post)
    {
        
        return view('post',[
            "title" => "single post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
