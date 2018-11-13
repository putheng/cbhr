<?php

namespace App\Filters\Listing;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class SalaryFilter extends FilterAbstract
{
    /**
     * Filter by course access type (free, premium).
     *
     * @param  string $access
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function filter(Builder $builder, $value)
    {
        return $builder->where('salary_id', $value);
    }
}
