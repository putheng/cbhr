<?php

namespace App;

use App\Models\{
    Company, Listing, ListingPayment,
    Deposit, Image, Post, Withdraw,
    Publisher, DepositAction, Seeker
};
use App\Traits\Permissions\HasPermissionsTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, HasPermissionsTrait, SoftDeletes;

    public $price = 10;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active', 'avatar_id', 'usd'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function scopeByEmail($query, $email)
    {
        return $query->where('email', $email)->get();
    }
    
    public function avatar()
    {
        return $this->hasOne(Image::class, 'id', 'avatar_id');
    }

    public function avatarPath()
    {
        if (!$this->avatar_id) {
            return null;
        }

        return $this->avatar->path();
    }
    
    public function cost()
    {
        return $this->usd >= $this->price;
    }
    
    public function payListing()
    {
        $usd = ($this->usd - $this->price);
        
        if($usd <= 0){
            return false;
        }
        
        return $this->update(['usd' => $usd]);
    }
    
    public function withdraw()
    {
        return $this->HasMany(Withdraw::class);
    }
    
    public function company()
    {
        return $this->hasOne(Company::class);
    }
    
    public function post()
    {
        return $this->hasMany(Post::class);
    }
    
    public function listings()
    {
        return $this->hasMany(Listing::class);
    }
    
    public function listingPayment()
    {
        return $this->hasMany(ListingPayment::class, 'user_id', 'id');
    }
    
    public function deposit()
    {
        return $this->hasMany(Deposit::class);
    }

    public function publisher()
    {
        return $this->hasOne(Publisher::class);
    }

    public function seeker()
    {
        return $this->hasOne(Seeker::class);
    }
}
