<?php

namespace App\Models;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Filters\Listing\ListingFilters;
use App\Models\{
    Listing,Area,Category,Company,CompanyType,Education,EmployeeType,
    Experience,Industry,Level,Salary,Term, Gender, Post, Age};
use Illuminate\Database\Eloquent\{Model, Builder, SoftDeletes};
use App\Traits\Eloquent\{OrderableTrait, PivotOrderableTrait};

class Listing extends Model
{
    
    use SoftDeletes, OrderableTrait, PivotOrderableTrait;
    
    protected $fillable = ['identifier', 'live'];
    
    protected $dates = ['expires_at'];
    
    protected $hidden = [
        'company', 'area', 'salary', 'term'
    ];
    
    protected $appends = [
        'companyName',
        'companyLogo',
        'mainArea',
        'childArea',
        'formatedSalary',
        'formatedTerm',
        'formatedDescription',
        'formatedCreatedAt'
    ];

    public function getRouteKeyName()
    {
        return 'identifier';
    }
    
    public function getCompanyLogoAttribute()
    {
        return $this->company->avatarPath();
    }
    
    public function getFormatedCreatedAtAttribute()
    {
        return $this->created_at->diffForHumans();
    }
    
    public function getFormatedDescriptionAttribute()
    {
        return str_limit($this->description, 150);
    }
    
    public function getFormatedTermAttribute()
    {
        return $this->term->name;
    }
    
    public function getFormatedSalaryAttribute()
    {
        return $this->salary->name;
    }
    
    public function getCompanyNameAttribute()
    {
        return $this->company->name;
    }
    
    public function getMainAreaAttribute()
    {
        return optional($this->area->parent)->name;
    }
    
    public function getChildAreaAttribute()
    {
        return $this->area->name;
    }
    
    public function getStartedAttribute()
    {
        $explode = explode('/', $this->publish);
        
        return $explode[0];
    }
    
    public function getClosingAttribute()
    {
        $explode = explode('/', $this->publish);
        
        return $explode[1];
    }
    
    public function scopeFilter(Builder $builder, Request $request, array $filters = [])
    {
        return (new ListingFilters($request))->filter($builder);
    }

    public function scopeIsLive($query)
    {
        return $query->where('live', true);
    }

    public function scopeIsNotLive($query)
    {
        return $query->where('live', false);
    }

    public function scopeIsExpired($query)
    {
        return $query->where('expires_at', '<=', Carbon::now());
    }

    public function scopeIsNotExpired($query)
    {
        return $query->where('expires_at', '>=', Carbon::now());
    }

    public function scopeFromCategory($query, Category $category)
    {
        return $query->where('category_id', $category->id);
    }
    
    public function scopeInCategory($query, Category $category)
    {
        return $query->whereIn('category_id', array_merge(
            [$category->id],
            $category->descendants->pluck('id')->toArray()
        ));
    }

    public function scopeInArea($query, Area $area)
    {
        return $query->whereIn('area_id', array_merge(
            [$area->id],
            $area->descendants->pluck('id')->toArray()
        ));
    }

    public function live()
    {
        return $this->live;
    }

    public function scopeRelates($query)
    {
        return $query->where('category_id', $this->category_id)
            ->where(function($q){
                $q->where('id', '!=', $this->id);
            })->inRandomOrder()->take(5)->get();
    }

    public function ownedByUser(User $user)
    {
        return $this->user->id === $user->id;
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function scopeNotPosted($query, $post)
    {
        return $query->whereNotIn('id', $post);
    }
    
    public function scopePosted($query, $post)
    {
        return $query->whereIn('id', $post);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function age()
    {
        return $this->belongsTo(Age::class);
    }
    
    public function term()
    {
        return $this->belongsTo(Term::class);
    }
    
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    
    public function education()
    {
        return $this->belongsTo(Education::class);
    }
    
    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }
    
    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
    
    public function payment()
    {
        return $this->hasMany(ListingPayment::class, 'listing_payments');
    }
}
