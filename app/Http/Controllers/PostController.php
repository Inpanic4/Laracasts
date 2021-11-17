<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        // Look the data as json format
        // return Post::latest()->filter(request(['search','category','author']))->paginate();

        return view('posts.index',[
            // One action handling all posts OR filter posts (search for a post)
            // Post:latest() OrdersBy all Posts with the column you provide in descending order with the default column will be created_at.
            'posts' => Post::latest()->filter(request(['search','category','author']))->paginate(9)->withQueryString() //Episode 44
        ]);
    }
    
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
    
        ]);
    }

  
}
