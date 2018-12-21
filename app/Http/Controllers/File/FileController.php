<?php

namespace App\Http\Controllers\File;

use Storage;
use App\Models\{Listing, Apply, File};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

		return response()->json(['status' => 'ok']);
	}

    public function download()
    {
	    $fileName = 'Rath_Cover letter_Tour  Operator.pdf';
	    $fileLocation = 'uploads/'. $fileName;

	    if(Storage::disk('s3')->exists($fileLocation)){
	        return Storage::download($fileLocation, $fileName);
	    }
	    
	    return response('File doesn\'t exists!' , 200);
    }
}
