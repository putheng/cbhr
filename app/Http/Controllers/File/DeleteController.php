<?php

namespace App\Http\Controllers\File;

use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    function destroy(Request $request)
    {
    	$id = decrypt($request->hash);
    	$file = File::find($id);

    	if(Storage::disk('s3')->exists($file->path)){
    		
			Storage::disk('s3')->delete($file->path);
    		$file->delete();
    		return response($request->hash, 200);

    	}

    	return response('error', 500);
    }
}
