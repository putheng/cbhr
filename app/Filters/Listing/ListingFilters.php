<?php

namespace App\Filters\Listing;

use App\Filters\FiltersAbstract;
use App\Filters\Listing\{
    TitleFilter,
    CategoryFilter,
    AreaFilter,
    SalaryFilter,
    TypeFilter,
    LevelFilter,
    EducationFilter,
    ExperienceFilter
};

class ListingFilters extends FiltersAbstract
{
    /**
     * Default course filters.
     *
     * @var array
     */
    protected $filters = [
        'title' => TitleFilter::class,
        'category' => CategoryFilter::class,
        'area' => AreaFilter::class,
        'salary' => SalaryFilter::class,
        'term' => TypeFilter::class,
        'level' => LevelFilter::class,
        'education' => EducationFilter::class,
        'experience' => ExperienceFilter::class,
    ];
    
}