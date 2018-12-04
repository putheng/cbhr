<?php

namespace App\Models;

use DB;
use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class PostView extends Model
{
    
    public function scopeViewOnDay($query, $days)
    {
        $day = Carbon::createFromDate(null, null, $days)->toDateString();

        return (int) $query->select(DB::raw("count('post_views.id') as views"))
            ->join('posts', 'post_views.post_id', '=', 'posts.id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->whereDate('post_views.created_at', $day)
            ->where('user_id', auth()->id())
            ->first()->views;
        
    }

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
