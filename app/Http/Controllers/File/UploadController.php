<?php

namespace App\Http\Controllers\File;

use Storage;
use App\Models\{Apply, File};
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

    	$fileUpload = $this->storeFileUpload($file);

    	return response()->json([
    		'name' => $file->getClientOriginalName(),
    		'id' => $fileUpload->id,
    	]);
    }

    public function buildFilePath(UploadedFile $file)
    {
    	$name = $file->getClientOriginalName();

    	return $this->buildDirPath() . str_slug(uniqid(true) .'-'. $name).'.'. $file->extension();
    }

    public function buildDirPath()
    {
    	return 'uploads/'. date('Y') .'/'. date('m') .'/';
    }

    public function getFileContent(UploadedFile $file)
    {
    	return file_get_contents($file->getRealPath());
    }

    public function storeFileUpload(UploadedFile $uploadFile)
    {
    	$fileName = $uploadFile->getClientOriginalName();

    	Storage::put(
    		$this->buildFilePath($uploadFile),
    		$this->getFileContent($uploadFile)
    	);

    	$file = new File;

    	$file->name = $fileName;
    	$file->path = $this->buildFilePath($uploadFile);

    	$file->save();

    	return $file;
    }

}
