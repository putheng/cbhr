<?php

namespace App\Models;

use App\Models\Deposit;
use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['name', 'minimum', 'recipient', 'code_length'];
    
    public function scopeIslive($query)
    {
    	return $query->where('code_length', true);
    }

    public function deposit()
    {
        return $this->hasMany(Deposit::class);
    }
}
