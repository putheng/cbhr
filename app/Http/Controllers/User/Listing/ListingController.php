<?php

namespace App\Http\Controllers\User\Listing;

use Carbon\Carbon;
use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Listing\StoreListingFormRequest;

class ListingController extends Controller
{
    public function show(Request $request)
    {
        $listings = $request->user()->listings()->with(['area'])->isNotExpired()->isLive()->latestFirst()->paginate(15);
        
        return view('users.employer.listing.published', compact('listings'));
    }
    
    public function edit(Listing $listing)
    {
        $this->authorize('edit', $listing);
        
        return view('users.employer.listing.edit', compact('listing'));
    }
    
    public function store(StoreListingFormRequest $request, Listing $listing)
    {
        $this->authorize('edit', $listing);
        
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
        
        $listing->save();
        
        if ($request->has('payment')) {
            return redirect()->route('employer.listing.payment', [$listing]);
        }
        
        return back()->withSuccess('Listing edited successfully.');
    }
    
    public function destroy(Listing $listing)
    {
        $this->authorize('destroy', $listing);

        $listing->delete();

        return back()->withSuccess('Listing was deleted.');
    }

}
