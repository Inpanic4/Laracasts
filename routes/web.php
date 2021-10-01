<?php

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



Route::get('/', function () {
    
    return view('posts', [
        // Episode 26 
       'posts' => Post::latest()->get()
       
    ]);
});

// the url will hold  /post and {post:slug} it means something else in our case the slug
// Route::get('/posts/{post}', function (Post $post) {it will find the post with the id by default
Route::get('/posts/{post:slug}', function (Post $post) {



    return view('post', [
        // this means when i use $post in my blade to know it as $post of this page
        'post' => $post

    ]);
    // (url ,post variable) must contain theese letters (like validation)
});
// dd('file does not exist');

  // return redirect('/');
  Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        //$category->posts because we wanna grab all posts associated with that category
        'posts' => $category->posts

    ]);
});

 Route::get('authors/{author:username}', function (User $author) {

    return view('posts', [
        //$category->posts because we wanna grab all posts associated with that category
        'posts' => $author->posts

    ]);
});