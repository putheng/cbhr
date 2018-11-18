<?php

namespace App\Models;

use App\User;
use App\Models\{Processor, Company};
use Illuminate\Database\Eloquent\Model;
use App\Traits\Eloquent\OrderableTrait;

class Deposit extends Model
{
    use OrderableTrait;
    
    protected $fillable = ['amount', 'status'];
    
    public function scopeFromUser($query, User $user)
    {
        return $query->where('user_id', $user->id);
    }

    public function getProcessAttribute()
    {
        return $this->processor_id == 1 ? 'Wing' : 'Truemoney';
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function scopePending($query)
    {
        $query->where('status', 'pending');
    }
    
    public function scopeAccepted($query)
    {
        $query->where('status', 'accepted');
    }
    
    public function scopeCurrentUser($query)
    {
        return $query->where('user_id', request()->user()->id);
    }
    
    public function processor()
    {
        return $this->belongsTo(Processor::class);
    }

}
