<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class PostView extends Model
{
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
