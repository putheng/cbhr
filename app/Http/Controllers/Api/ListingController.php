<?php

namespace App\Http\Controllers\Api;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ListingsResource;

class ListingController extends Controller
{
    public function index(Listing $listing)
    {
        $data = [
            'id' => $listing->id,
            'title' => $listing->title,
            'description' => strip_tags($listing->description),
            'requirement' => strip_tags($listing->requirement),
            'slug' => $listing->identifier,
            'created_at' => $listing->created_at->diffForHumans(),
            
            'company' => $listing->company->name,
            'logo' => $listing->company->avatarPath(),
            'address' => $listing->company->address,
            'website' => $listing->company->website,
            'companySlug' => $listing->company->identifier,
            
            'term' => $listing->term->name,
            'category' => $listing->category->name,
            'level' => $listing->level->name,
            'experience' => $listing->experience->name,
            'salary' => $listing->salary->name,
            'education' => $listing->education->name,
            'area' => $listing->area->name,
            'gender' => $listing->gender->name,
            'age' => $listing->age->name,
            'user' => $listing->user->name,
            'phone' => $listing->company->phone,
            'email' => $listing->user->email,
        ];
        
        return $data;
    }
    
    public function listing()
    {
        return new ListingsResource(Listing::isLive()->latestFirst()->isNotExpired()->paginate(300));
    }
}