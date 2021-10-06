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
// the url will hold  /post and {post:slug} it means something else in our case the slug
Route::get('/posts/{post:slug}',[PostController::class,'show']); 
// dd('file does not exist');

  // return redirect('/');
  Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        //$category->posts because we wanna grab all posts associated with that category
        'posts' => $category->posts,
        'currentCategory' =>$category,
        'categories' => Category::all()

    ]);
})->name('category');

 Route::get('authors/{author:username}', function (User $author) {

    return view('posts', [
        //$category->posts because we wanna grab all posts associated with that category
        'posts' => $author->posts,
        'categories' => Category::all()

    ]);
});

Route::get('/test', function () {
    return view('test');
});