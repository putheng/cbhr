<?php

namespace App\Model\Admin;

use App\User;
use App\Models\Deposit;
use Illuminate\Database\Eloquent\Model;

class DepositAction extends Model
{
    protected $fillable = ['comment'];

    public function deposit()
    {
    	return $this->belongsTo(Deposit::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
