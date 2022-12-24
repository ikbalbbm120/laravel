<?php
use  App\Http\Controllers\postcontroller;
use App\Models\category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\post;


Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "nama" => "ikbal",
        "email" => "ikbalganss20@gmail.com",
        "image" => "gambar1.jpg"
    ]);
});


Route::get('/blog',[postcontroller::class,'index']);


//halama single post
route::get('/posts/{post:slug}',[postcontroller::class,'show']);
route::get('/categories',function() {
    return view('categories',[
        'title' => 'post categories',
        'categories' => category::all()
    ]);
});
route::get('/categories/{category:slug}',function(category $category) {
    return view('posts',[
        'title' => "post by category : $category->name",
        'posts' => $category->posts->load('category','author'),
    ]);
});

route::get('/authors/{author:username}',function(user $author) {
    return view('posts',[
        'title' => "post by author : $author->name",
        'posts' => $author->posts->load('category','author'),
    ]);
});