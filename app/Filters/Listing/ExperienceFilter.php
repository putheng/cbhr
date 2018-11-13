<?php

namespace App\Filters\Listing;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class ExperienceFilter extends FilterAbstract
{

    public function filter(Builder $builder, $value)
    {
        return $builder->where('experience_id', $value);
    }
}
