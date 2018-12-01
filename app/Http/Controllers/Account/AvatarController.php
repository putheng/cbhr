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

    public function avatar(StoreAvatarFormRequest $request)
    {
        $path = '/' . uniqid(true).time() . '.png';

        $processedImage = $this->imageManager->make($request->file('image')->getPathName())
            ->resize(150, 150, function ($c) {
                $c->aspectRatio();
            })
            ->encode('png')->stream();
        
        $imageFile = $processedImage->__toString();
        
        Storage::disk('public_dir')->put('avatar'. $path, $imageFile);

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

    public function store(StoreAvatarFormRequest $request)
    {
        $isEmployer = auth()->user()->hasRole('employer');

        $unique = $isEmployer
            ? auth()->user()->company->identifier.time()
            : uniqid(true).time();

        $path = '/' . $unique . '.png';
        $covername = '/' . $unique . '.jpg';
        
        $processedImage = $this->imageManager->make($request->file('image')->getPathName())
            ->resize(150, 150, function ($c) {
                $c->aspectRatio();
            })
            ->encode('png')->stream();
        
        $imageFile = $processedImage->__toString();
        
        Storage::disk('public_dir')->put('avatar'. $path, $imageFile);
        
        if($isEmployer){
            $cover_path = public_path('images/cover.png');
            $cover = $this->imageManager
                ->make($cover_path)
                ->insert($imageFile, 'center')
                ->encode('jpeg')->stream();

            $cover_file = $cover->__toString();

            Storage::disk('public_dir')->put('cover'. $covername, $cover_file);
        }

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
