<?php

namespace App\Models;

use DB;
use App\User;
use Carbon\Carbon;
use App\Models\{Listing, PostView};
use Illuminate\Database\Eloquent\Model;
use App\Traits\Eloquent\OrderableTrait;

class Post extends Model
{
    use OrderableTrait;
    
    protected $fillable = ['postid'];
    
    public $ecmp = 0.003;
    
    public function earn()
    {
        return ($this->views * $this->ecmp);
    }
    
    public function getTotalViewsAttribute()
    {
        $data = [];
        for ($x = 1; $x <= date('t'); $x++) {
            $view = PostView::viewOnDay($x);
            $data[] = $view;
        }
        
        return json_encode($data);
    }
    
    public function scopeListingExists($query, $id)
    {
        return $query->where('listing_id', $id)->get();
    }

    public function views()
    {
        return $this->hasMany(PostView::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
    
}
