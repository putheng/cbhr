<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    public function index()
    {
    	return view('jobseekers.message.index');
    }

    public function reply()
    {
    	return view('jobseekers.message.reply');
    }
}
