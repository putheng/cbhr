<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching;

class Age extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['name'];
    
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}
