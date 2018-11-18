<?php

namespace App\Models;

use App\User;
use Carbon\Carbon;
use App\Traits\Eloquent\OrderableTrait;
use App\Events\{UserWithdraw, UserWithdrawDestroy};
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Withdraw extends Model
{
    use SoftDeletes, OrderableTrait;
    
    protected $dispatchesEvents = [
        'created' => UserWithdraw::class,
        'deleted' => UserWithdrawDestroy::class,
    ];
    
    protected $fillable = ['amount', 'processor', 'status'];
    
    public function scopeStatus($query, $status)
    {
        $query->where('status', $status);
    }

    public function getWithdrawStatusAttribute()
    {
        return $this->deleted_at == null ? ucfirst($this->status) : 'Cancel';
    }
    
    public function getAmountsAttribute()
    {
        return '$'. number_format($this->amount, 2);
    }
    
    public function getCreatedAttribute()
    {
        if (strpos($this->created_at, Carbon::now()->format('Y-m-d')) === false) {
            return $this->created_at;
        }
        
        return $this->created_at->diffForHumans();
    }
    
    public function ownedByUser(User $user)
    {
        return $this->user->id === $user->id;
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
