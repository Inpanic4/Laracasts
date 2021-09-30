<?php

use App\Models\Post;

use function GuzzleHttp\Promise\all;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
        'posts' => Post::all()

    ]);
});

// the url will hold  /post and {post} it means something else in our case the slug
Route::get('/posts/{post}', function ($slug) {



    return view('post', [
        // this means when i use $post in my blade to know it as $post of this page
        'post' => Post::findOrFail($slug)

    ]);
    // (url ,post variable) must contain theese letters (like validation)
});
// dd('file does not exist');

  // return redirect('/');