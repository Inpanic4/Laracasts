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
        // Create a user with name john doe
       $user= User::factory()->create([
            'name'=>'John Doe'
        ]);
        // Create a category with name Work Category
        $category = Category::factory() ->create([
            'name' =>'Work'
        ]);

        // Create 5 posts with user id be John Doe's id
        Post::factory(5)->create([
            'user_id' =>$user->id
        ]);
        // Create 5 posts with category_id be the same with
        //  Work category's ID Which is $category variable
        Post::factory(5)->create([
            'category_id' =>$category->id
        ]);
        Category::factory(10)->create();
    }
}
