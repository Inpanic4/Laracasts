<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function author()
    {
        // Why 'user_id' ????? Episode 54
        return $this->belongsTo(User::class, 'user_id');
    }
}
