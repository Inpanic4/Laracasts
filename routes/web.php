<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;



use App\Models\Category;
use Illuminate\Support\Facades\Route;


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



Route::get('/',[PostController::class,'index'])->name('home');
Route::get('/posts/{post:slug}',[PostController::class,'show']); 
// dd('file does not exist');



 Route::get('authors/{author:username}', function (User $author) {

    return view('posts.index', [
        //$category->posts because we wanna grab all posts associated with that category
        'posts' => $author->posts,

    ]);
});

Route::get('/test', function () {
    return view('test');
});