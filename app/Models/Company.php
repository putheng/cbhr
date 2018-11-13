<?php

namespace App\Models;

use App\User;
use App\Models\{Industry, CompanyType, EmployeeType, Listing};
use Illuminate\Database\Eloquent\Model;
use App\Traits\Eloquent\OrderableTrait;

class Company extends Model
{
    use OrderableTrait;
    
    protected $fillable = [
        'name',
        'user_id',
        'industry',
        'type',
        'employee',
        'logo_id',
        'address',
        'website',
        'phone',
        'description',
        'identifier'
    ];
    
    public function getRouteKeyName()
    {
        return 'identifier';
    }
    
    public function scopeGetCarousel($q)
    {
        $companies = $q->inRandomOrder()->take(10)->get();
        $data = [];
        foreach($companies as $company){
            $data[] = [
                'title' => $company->name,
                'url' => $company->avatarPath(),
                'link' => route('company.show', $company),
            ];
        }
        
        return json_encode($data, JSON_UNESCAPED_SLASHES);
    }
    
    public function avatar()
    {
        return $this->hasOne(Image::class, 'id', 'logo_id');
    }

    public function avatarPath()
    {
        if (!$this->logo_id) {
            return null;
        }

        return optional($this->avatar)->path();
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function listing()
    {
        return $this->belongsToMany(Listing::class);
    }
    
    public function listings()
    {
        return $this->HasMany(Listing::class);
    }
    
    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
    
    public function type()
    {
        return $this->belongsTo(CompanyType::class);
    }
    
    public function employee()
    {
        return $this->belongsTo(EmployeeType::class);
    }
}
