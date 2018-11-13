<?php

namespace App\Filters\Listing;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class TypeFilter extends FilterAbstract
{

    public function filter(Builder $builder, $value)
    {
        return $builder->where('term_id', $value);
    }
}