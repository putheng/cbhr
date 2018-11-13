<?php

namespace App\Models;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['name'];
    
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}
