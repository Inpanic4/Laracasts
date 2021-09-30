<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

use function GuzzleHttp\Promise\all;

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

        $files = File::files(resource_path("posts"));
        $posts = [];

        foreach ($files as $file ){
          $document  = YamlFrontMatter::parseFile($file);
          $posts[] = new Post(
              $document->title,
              $document->body()
          );

        }

    

    dd($posts);

    // return view('posts',[
    //     'posts' => Post::all()
       
    // ]);
});

// the url will hold  /post and {post} it means something else in our case the slug
Route::get('/posts/{post}', function ($slug) {



    return view('post',[
        // this means when i use $post in my blade to know it as $post of this page
       'post' => Post::find($slug)

    ]);
    // (url ,post variable) must contain theese letters (like validation)
})->where('post','[A-z_/-]+');
// dd('file does not exist');

  // return redirect('/');