<?php

namespace App\Http\Controllers;

use App\Models\{Company, Listing};
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $agent;
    
    public function __construct()
    {
        $this->agent = new Agent;
    }
    
    public function index()
    {
        if($this->agent->isMobile()){
            $listings = Listing::with(['area', 'company', 'term', 'salary', 'category'])
                    ->isLive()->isNotExpired()->latestFirst()->paginate(15);
            return view('home.listings.index', compact('listings'));
        }
        return view('home.home');
    }
    
    public function partners()
    {
        return view('home.partners');
    }
    
    public function employers()
    {
        $companies = Company::latestFirst()->paginate(15);
        
        return view('home.employers', compact('companies'));
    }
    
    public function policy()
    {
        return view('home.policy');
    }
    
    public function service()
    {
        return view('home.service.index');
    }
}
