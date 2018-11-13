<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['name'];
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
}
