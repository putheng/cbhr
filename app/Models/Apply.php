<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\File;

class Apply extends Model
{
    protected $fillable = ['username', 'email', 'listing_id', 'file_id'];

    public function files()
    {
    	return $this->hasMany(File::class);
    }

    public function listing()
    {
    	return $this->belongsTo(Listing::class);
    }
}
