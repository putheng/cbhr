<?php

namespace App\Filters\Listing;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class LevelFilter extends FilterAbstract
{

    public function filter(Builder $builder, $value)
    {
        return $builder->where('level_id', $value);
    }
}
