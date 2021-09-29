<?php

use App\Models\Post;
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
Route::get('/posts/{post}', function ($slug) {

    $post = Post::find($slug);

    return view('post',[
        // this means when i use $post in my blade to know it as $post of this page
       'post' => $post
    ]);
    // (url ,post variable) must contain theese letters (like validation)
})->where('post','[A-z_/-]+');
// dd('file does not exist');

  // return redirect('/');