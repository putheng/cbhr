<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['path'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function path()
    {
        return config('image.path.public') . $this->path;
    }
}
