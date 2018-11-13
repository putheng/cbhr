<?php

namespace App\Filters\Listing;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class EducationFilter extends FilterAbstract
{

    public function filter(Builder $builder, $value)
    {
        return $builder->where('education_id', $value);
    }
}
