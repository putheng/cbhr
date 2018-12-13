<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Seeker extends Model
{
	protected $fillable = [
		'address', 'phone', 'birthday', 'gender', 'newsletter'
	];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
