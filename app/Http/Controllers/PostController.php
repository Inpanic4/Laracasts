<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        return view('posts',[
            'posts' => Post::latest()->filter(request(['search']))->get(),
            'categories' => Category::all()
        ]);
    }
    
    public function show(Post $post)
    {
        return view('post', [
            // this means when i use $post in my blade to know it as $post of this page
            'post' => $post
    
        ]);
    }

  
}
