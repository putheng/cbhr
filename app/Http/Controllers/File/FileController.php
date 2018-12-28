<?php

namespace App\Http\Controllers\File;

use Mail;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\DirectJobApply;
use App\Models\{Listing, Apply, File};

class FileController extends Controller
{
	public function apply(Request $request, Listing $listing)
	{
		$this->validate($request, [
			'name' => 'required|min:3|max:100',
			'phone' => 'required|numeric',
			'resume' => 'required',
		], [
			'resume.required' => 'Please upload your resume.',
		]);

		$apply = new Apply;
		$apply->username = $request->name;
		$apply->phone = $request->phone;
		$apply->listing()->associate($listing);

		$apply->save();

		foreach($request->resume as $resume){
			$file = File::find(decrypt($resume));
			$file->update(['apply_id' => $apply->id]);
		}

		Mail::to($listing->user)->send(new DirectJobApply($listing, $apply));

		return response()->json(['status' => 'ok']);
	}

    public function download(Request $request)
    {
    	$id = decrypt($request->hash);

    	$file = File::find($id);

	    $fileName = $file->name;
	    $fileLocation = $file->path;

	    if(Storage::disk('s3')->exists($fileLocation)){
	        return Storage::download($fileLocation, $fileName);
	    }
	    
	    return response('File doesn\'t exists!' , 200);
    }
}
