<?php

namespace App\Filters\Listing;

use App\Models\Area;
use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class AreaFilter extends FilterAbstract
{
    /**
     * Filter by course access type (free, premium).
     *
     * @param  string $access
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function filter(Builder $builder,$value)
    {
        $area = Area::find($value);
        
        return $builder->whereIn('area_id', array_merge(
            [$area->id],
            $area->descendants->pluck('id')->toArray()
        ));
    }
}
