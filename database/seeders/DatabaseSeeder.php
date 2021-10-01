<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // If we run seed again this means drop the existing 
        // tables and create new ones truncate();
        User::truncate();
        Category::truncate();
        Post::truncate();

        // make 2 users
        $user = User::factory(2)->create();

        // make a category in my database
       $personal= Category::create([
            'name' => 'Personal',
            'slug' =>'personal',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' =>'family',
        ]);

       $work= Category::create([
            'name' => 'Work',
            'slug' =>'work',
        ]);

        Post::create([
            'user_id' => $user->first()->id,
            'category_id' =>$personal->first()->id,
            'title'=>'My First Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Excerpt first post',
            'body'=> 'Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit, sed do eiusmod tempor 
            incididunt ut labore et dolore magna aliqua.
             Consectetur libero id faucibus nisl. Dolor sed 
             viverra ipsum nunc aliquet bibendum. Diam quam nulla 
             porttitor massa id neque aliquam. In nisl nisi 
             scelerisque eu ultrices vitae. Aenean euismod 
             elementum nisi quis eleifend quam. Suspendisse 
             interdum consectetur libero id faucibus. In hac 
             habitasse platea dictumst quisque sagittis. Velit 
             euismod in pellentesque massa placerat duis ultricies lacus.'
        ]);
        Post::create([
            'user_id' => $user->first()->id,
            'category_id' =>$family->id,
            'title'=>'My Second Post',
            'slug' => 'my-second-post',
            'excerpt' => 'Excerpt first post',
            'body'=> 'Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit, sed do eiusmod tempor 
            incididunt ut labore et dolore magna aliqua.
             Consectetur libero id faucibus nisl. Dolor sed 
             viverra ipsum nunc aliquet bibendum. Diam quam nulla 
             porttitor massa id neque aliquam. In nisl nisi 
             scelerisque eu ultrices vitae. Aenean euismod 
             elementum nisi quis eleifend quam. Suspendisse 
             interdum consectetur libero id faucibus. In hac 
             habitasse platea dictumst quisque sagittis. Velit 
             euismod in pellentesque massa placerat duis ultricies lacus.'
        ]);
        Post::create([
            'user_id' => $user->first()->id,
            'category_id' =>$work->id,
            'title'=>'My Third Post',
            'slug' => 'my-third-post',
            'excerpt' => 'Excerpt first post',
            'body'=> 'Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit, sed do eiusmod tempor 
            incididunt ut labore et dolore magna aliqua.
             Consectetur libero id faucibus nisl. Dolor sed 
             viverra ipsum nunc aliquet bibendum. Diam quam nulla 
             porttitor massa id neque aliquam. In nisl nisi 
             scelerisque eu ultrices vitae. Aenean euismod 
             elementum nisi quis eleifend quam. Suspendisse 
             interdum consectetur libero id faucibus. In hac 
             habitasse platea dictumst quisque sagittis. Velit 
             euismod in pellentesque massa placerat duis ultricies lacus.'
        ]);
    }
}
