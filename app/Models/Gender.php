<?php

namespace App\Models;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['name'];
    
    public function listings()
    {
        return $this->hasMany(Listing::class);
    }
}
