<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function privacy()
    {
    	return response('privacy page', 200);
    }

    public function terms()
    {
    	return response('terms page', 200);
    }
}
