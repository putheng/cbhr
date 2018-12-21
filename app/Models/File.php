<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Apply;

class File extends Model
{
    protected $fillable = ['name', 'path', 'apply_id'];

    public function apply()
    {
    	return $this->belongsTo(Apply::class);
    }
}
