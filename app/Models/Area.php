<?php

namespace App\Models;

use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use NodeTrait;
    
    public $timestamps = false;
    
    protected $fillable = ['name'];
    
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}
