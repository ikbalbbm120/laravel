<?php
use  App\Http\Controllers\postcontroller;
use App\Models\category;
use Illuminate\Support\Facades\Route;
use App\Models\post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
route::get('posts/{post}',[postcontroller::class,'show']);
route::get('/categories/{category:slug}',function(category $category) {
    return view('category',[
        'title' => $category->nama,
        'posts' => $category->posts,
        'category' => $category->nama
    ]);
});