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
        $work = Category::factory()->create([
            'name' =>'Work'
        ]);
        $hobbies = Category::factory()->create([
            'name' =>'Hobbies'
        ]);
        $police = Category::factory()->create([
            'name' =>'Police'
        ]);
        $hooligan = Category::factory()->create([
            'name' =>'Hooligans'
        ]);
        $social = Category::factory()->create([
            'name' =>'Social'
        ]);
         Category::factory()->create([
            'name' =>'Empty'
        ]);

        // Create 5 posts with user id be John Doe's id
        Post::factory(5)->create([
            'category_id' =>$work->id,
            'user_id' =>$user->id
        ]);
        // Create 20 posts with category_id be the same with
        //  Work category's ID Which is $category variable
        Post::factory(20)->create([
            'category_id' =>$work->id
        ]);
        Post::factory(20)->create([
            'category_id' =>$hobbies->id
        ]);
        Post::factory(20)->create([
            'category_id' =>$police->id
        ]);
        Post::factory(20)->create([
            'category_id' =>$hooligan->id
        ]);
        Post::factory(20)->create([
            'category_id' =>$social->id
        ]);
     

    }
}
