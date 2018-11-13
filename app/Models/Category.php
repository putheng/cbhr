<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Listings;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use NodeTrait;
    
    public $timestamps = false;
    
    protected $fillable = ['name'];
    
    public function listings()
    {
        return $this->HasMany(Listing::class);
    }
    
    public function InCategory(Category $category)
    {
        return Listing::isLive()->inCategory($category);
    }
}
