<?php

namespace App\Http\Controllers\User\Listing;

use App\Models\{
    Listing,Area,Category,Company,CompanyType,Education,EmployeeType,
    Experience,Industry,Level,Salary,Term
};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Listing\StoreListingFormRequest;

class CreateListingController extends Controller
{
    public function show()
    {
        return view('users.employer.listing.create');
    }
    
    public function store(StoreListingFormRequest $request)
    {
        $listing = new Listing;
        $listing->title     = $request->title;
        
        $listing->term_id   = $request->term;
        $listing->category_id = $request->category;
        $listing->level_id  = $request->level;
        $listing->experience_id = $request->experience;
        $listing->salary_id     = $request->salary;
        $listing->education_id     = $request->education;
        $listing->gender_id     = $request->gender;
        $listing->age_id     = $request->experience;
        $listing->area_id     = $request->location;
        $listing->description     = $request->description;
        $listing->requirement     = $request->requirement;
        $listing->publish     = $request->start .'/'. $request->closing;
        
        $listing->user()->associate($request->user());
        $listing->company()->associate($request->user()->company()->first());
        
        $listing->save();
        
        $listing->update([
            'identifier' => str_limit(str_slug($listing->title .'-'. $listing->company->name), 150).'-'. $listing->id .'.html'
        ]);
        
        return redirect()->route('employer.listing.edit', $listing);
        
    }
}
