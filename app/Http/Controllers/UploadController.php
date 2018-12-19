<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function index()
    {
    	return view('upload.index');
    }

    public function store(Request $request)
    {
    	$file = $request->file('file');

    	$fileName = $file->getClientOriginalName();

    	Storage::disk('local')->putFileAs(
    		'files/'. date('Y-m-d'),
    		$file,
    		$fileName
    	);

    	return response()->json([
    		'name' => $fileName
    	]);
    }

}
