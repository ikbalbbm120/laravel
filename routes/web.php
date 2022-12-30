<?php
use  App\Http\Controllers\postcontroller;
use  App\Http\Controllers\login;
use App\Http\Controllers\register;
use App\Models\category;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        "title" => "home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "active" => 'about',
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
        'active' => 'categories',
        'categories' => category::all()
    ]);
});
route::get('/categories/{category:slug}',function(category $category) {
    return view('posts',[
        'title' => "post by category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category','user'),
    ]);
});

route::get('/authors/{author::username}',function(user $author) {
    return view('posts',[
        'title' => "post by author : $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load('category','user'),
    ]);
});

route::get('/login',[login::class,'index']);
route::get('/register',[register::class,'index']);