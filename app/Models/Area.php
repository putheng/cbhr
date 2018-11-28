<?php

namespace App\Models;

use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use NodeTrait;
    
    public $timestamps = false;
    
    protected $fillable = ['name'];

    public $childrens;

    public $parents;
    
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }

    public function scopeGetLocation($query, $string)
    {
    	$area = $query->get();
	    $parent_filter = $area->filter(function($area, $key){
	        return $area->parent_id == null;
	    })->pluck('name')->toArray();

	    $filter_split = filter_split($parent_filter, $string, 3);
	    $parent = array_keys($filter_split)[0];

	    $id = $area->filter(function($area, $key) use ($parent){
	        return $area->name == $parent;
	    })->first()->id;

	    $child = $area->where('parent_id', $id)
	            ->pluck('name')
	            ->toArray();
	    $filter_split_child = filter_split_child($child, $string, 3);
	    $children = array_keys($filter_split_child)[0];

	    $this->childrens = $area->where('name', $children)->first();
	    $this->parents = $area->where('name', $parent)->first();

	    return $this;
    }

    public function getChildren()
    {
    	return $this->childrens;
    }

    public function getParent()
    {
    	return $this->parents;
    }


}
