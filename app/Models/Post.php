<?php


namespace App\Models;



use Illuminate\Support\Facades;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\ModelNotFoundException;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
//  extends Model
{
    public $title;
    public $body;
    public $slug;


    public function __construct($title,$slug,$body)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this ->body = $body;
    }
   
    public static function all()
    {
      return collect(File::files(resource_path("posts"))) 
        ->map(fn($file) =>YamlFrontMatter::parseFile($file))
        ->map(fn($document) => new Post(
            $document->title,
            $document->slug,
            $document->body()
        ))
        ->sortBy('title');
    }
    public static function find($slug)
    {
        return static::all()->firstWhere('slug',$slug);
    }
}
