<?php

namespace App\Http\Controllers\User\Listing;

use Carbon\Carbon;
use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Listing\UserCompletedListingPayment;

class ListingPaymentController extends Controller
{
    public function show(Listing $listing)
    {
        return view('users.employer.listing.payment', compact('listing'));
    }
    
    public function store(Request $request, Listing $listing)
    {
        $this->authorize('update', $listing);
        
        $this->validate($request, [
            'term' => 'required',
            'disclaimer' => 'required'
        ]);
        
        if(!$request->user()->cost()){
            return back()->withError('Your balance is not enough to process payment.');
        }
        
        if($request->user()->payListing()){
            
            $listing->live = true;
            $listing->created_at = Carbon::now();
            $listing->expires_at = new Carbon('+30 day');

            if(request('submitValue') > 0){
                $listing->premium = 1;
            }
            
            $listing->save();

            
            event(new UserCompletedListingPayment($request->user(), $listing));
            
            return redirect()->route('employer.listing.published')->withSuccess('Congratulations! Payment accepted and your listing is live.');
        }
        
        return back()->withError('Something went wrong while processing your payment.');
    }
}
