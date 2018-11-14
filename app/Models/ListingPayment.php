<?php

namespace App\Models;

use App\User;
use App\Models\Listing;
use Illuminate\Database\Eloquent\Model;

class ListingPayment extends Model
{
	public function getStatusAttribute($value)
	{
		return $value == 1 ? 'complete' : 'pending';
	}

	public function getProcessAttribute()
	{
		return Listing::find($this->processor_id)->title;
	}

    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
