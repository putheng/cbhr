<?php

namespace App\Http\Controllers\Api;

use App\Models\{Listing, Category, Area};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ListingsResource;

class ListingController extends Controller
{
    public function index()
    {
        return new ListingsResource(Listing::latestFirst()->paginate(20));
    }
}
