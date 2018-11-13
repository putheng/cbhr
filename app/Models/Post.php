<?php

namespace App\Models;

use DB;
use App\User;
use Carbon\Carbon;
use App\Models\Listing;
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
            $view = Post::viewOnDay($x);
            $data[] = $view;
        }
        
        return json_encode($data);
    }
    
    public function scopeListingExists($query, $id)
    {
        return $query->where('listing_id', $id)->get();
    }
    
    public function scopeViewOnDay($query, $days)
    {
        $day = Carbon::createFromDate(null, null, $days)->toDateString();
        
        $check = $query->where(DB::raw('date(created_at)'), $day);
        
        if($check->count()){
            return (int) $query->selectRaw('date(created_at) as date, SUM(views) as totalView')
            ->where(DB::raw('date(created_at)'), $day)
            ->where(function($q){
                $q->where('user_id', auth()->id());
            })
            ->groupBy('date')
            ->first()->totalView;
        }
        
        return 0;
        
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
