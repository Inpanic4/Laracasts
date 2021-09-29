<?php

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


Route::get('/', function () {
    return view('posts');
});

// the url will hold  /post and {post} it means something else in our case the slug
Route::get('/post/{post}', function ($slug) {

    // make a path variable holding the path of my-first-post or my-second-post
    $path = __DIR__. "/../resources/posts/{$slug}.html";

    // ddd($path);
    // If file not exists or redirect him to home page or dd the message
    if (!file_exists($path)) {
        // return redirect('/');
        dd('file does not exist');
    }

    $post = file_get_contents($path);


    return view('post',[
        // this means when i use $post in my blade to know it as $post of this page
       'post' => $post
    ]);
    // (url ,post variable) must contain theese letters (like validation)
})->where('post','[A-z_/-]+');