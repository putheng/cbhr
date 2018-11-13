<?php

namespace App\Filters\Listing;

use App\Models\Category;
use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class CategoryFilter extends FilterAbstract
{
    /**
     * Filter by course access type (free, premium).
     *
     * @param  string $access
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function filter(Builder $builder,$value)
    {
        $category = Category::find($value);
        
        return $builder->whereIn('category_id', array_merge(
            [$category->id],
            $category->descendants->pluck('id')->toArray()
        ));
    }
}
