<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public $fillable = ['facebook_id', 'token', 'phone'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
