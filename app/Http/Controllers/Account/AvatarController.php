<?php

namespace App\Http\Controllers\Account;

use Storage;
use App\Models\Image;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\StoreAvatarFormRequest;

class AvatarController extends Controller
{
    protected $imageManager;

    public function __construct(ImageManager $imageManager)
    {
        $this->imageManager = $imageManager;
    }

    public function store(StoreAvatarFormRequest $request)
    {
        
        $path = '/' . uniqid(true) . '.png';
        
        $processedImage = $this->imageManager->make($request->file('image')->getPathName())
            ->resize(150, 150, function ($c) {
                $c->aspectRatio();
            })
            ->encode('png')->stream();
        
        $imageFile = $processedImage->__toString();
        
        Storage::disk('s3')->put('images'. $path, $imageFile);
        
        $image = new Image;
        $image->path = $path;
        $image->user()->associate($request->user());
        $image->save();
        
        return response([
            'data' => [
                'id' => $image->id,
                'path' => $image->path(),
            ]
        ], 200);
        
    }
}
