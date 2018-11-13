<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['name'];
}
