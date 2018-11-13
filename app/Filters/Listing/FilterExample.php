<?php

namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class TypeFilter extends FilterAbstract
{
    /**
     * Mappings for database values.
     *
     * @return array
     */
    public function mappings()
    {
        return [
            'theory' => 'theory',
            'project' => 'project',
            'snippet' => 'snippet',
        ];
    }

    /**
     * Filter by course type.
     *
     * @param  string $type
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if ($value === null) {
            return $builder;
        }

        return $builder->where('type', $value);
    }
}
