<?php

namespace App\Http\Controllers\File;

use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
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
