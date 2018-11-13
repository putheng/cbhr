<?php

namespace App\Http\Controllers\Listings;

use App\Models\Listing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingViewController extends Controller
{
    public function view()
    {
        $listing = Listing::selectRaw('views, count(views) as sum')
        ->groupBy('views')->orderBy('sum', 'desc')->get();
        
        $data = [];
        
        foreach($listing as $view){
            $data[] = [
                'views' => $view->views,
                'count' => $view->sum,
            ];
        }
        
        $total = Listing::selectRaw('SUM(views) as total')->first();
        
        $set = [
            'total' => $total->total,
            'listis' => $data
        ];
        
        return $set;
    }
    
    public function index()
    {
        $listings = Listing::select(['id', 'title', 'views'])
                ->OrderBy('id', 'desc')
                ->paginate(20);
        
        $data = [];
        foreach($listings as $listing){
            $data[] = [
                'id' => $listing->id,
                'title' => $listing->title,
                'views' => $listing->views,
            ];
        }
        
        return $data;
    }
}
