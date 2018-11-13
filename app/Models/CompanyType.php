<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;

class CompanyType extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['name', 'user_id'];
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
