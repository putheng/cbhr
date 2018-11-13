<?php

namespace App\Filters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

abstract class FiltersAbstract
{
    protected $filters = [];

    /**
     * The request.
     *
     * @var Illuminate\Http\Request
     */
    protected $request;

    /**
     * Construct filter with request.
     *
     * @param Illuminate\Http\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Add filters.
     *
     * @param array $filters
     */
    public function add(array $filters)
    {
        $this->filters = array_merge($this->filters, $filters);

        return $this;
    }

    /**
     * Apply filters.
     *
     * @param  Illuminate\Database\Eloquent\Builder $builder
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function filter(Builder $builder)
    {
        foreach ($this->getFilters() as $filter => $value) {
            $this->resolveFilter($filter)->filter($builder, $value);
        }

        return $builder;
    }

    /**
     * Instantiate a filter.
     *
     * @param  string $filter
     * @return mixed
     */
    protected function resolveFilter($filter)
    {
        return new $this->filters[$filter];
    }

    /**
     * Get filters to be used.
     *
     * @return array
     */
    protected function getFilters()
    {
        return $this->filterFilters($this->filters);
    }

    /**
     * Filter filters that are only in the request.
     *
     * @param  array $filters
     * @return array
     */
    protected function filterFilters($filters)
    {
        return array_filter($this->request->only(array_keys($this->filters)));
    }
}
