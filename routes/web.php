<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
    return view('home',[
        "title" => "Home",]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Syamsul Huda",
        "site" => "syamsulhuda.com",
        "logo"  => "img/syamsulhudacom-logo.png"
    ]);
});



Route::get('/blog', [BlogController::class,'index']);

Route::get('/blog/{blog:slug}',[BlogController::class,'single']);

Route::get('/categories',[BlogController::class,'showCategories']);

Route::get('/categories/{category:slug}',[BlogController::class,'showCategory']);

Route::get('/author/{user:username}',[BlogController::class,'showAuthorBlog']);

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);


Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

Route::get('/dashboard/blogs/checkSlug',[DashboardPostController::class,'checkSlug'])->middleware('auth');
Route::resource('/dashboard/blogs',DashboardPostController::class)->middleware('auth');
