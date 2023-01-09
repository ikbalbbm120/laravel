<?php

use App\Models\category;
use  App\Http\Controllers\login;
use App\Http\Controllers\register;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\postcontroller;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;


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

route::get('/login',[login::class,'index'])->name('login')->middleware('guest');
route::post('/login',[login::class,'authenticate']);
route::post('/logout',[login::class,'logout']);

route::get('/register',[register::class,'index'])->middleware('guest');
route::post('/register',[register::class,'store']);

route::get('/dashboard',function() {
    return view('dashboard.index');
})->middleware('auth');

route::get('/dashboard/posts/checkslug', [DashboardPostController::class,'CheckSlug'])->middleware('auth');
route::resource('/dashboard/posts',DashboardPostController::class)->middleware('auth');

route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');