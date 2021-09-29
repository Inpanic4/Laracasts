<?php


namespace App\Models;

use Illuminate\Support\Facades;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
//  extends Model
{
    public static function all()
    {
        $files = File::files(resource_path("posts/"));

        return array_map(function ($file) {
            return $file->getContents();
        }, $files);
    }
    public static function find($slug)
    {
        //  make a path variable holding the path of my-first-post or my-second-post


        // ddd($path);
        // If file not exists or redirect him to home page or dd the message
        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

        return file_get_contents($path);
    }
}
