<?php

namespace App\Http\Controllers\User;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class ImageController extends Controller
{
    public function __construct()
    {
        //Image::configure(array('driver' => 'imagick'));
    }
    
    public function cover(Company $company)
    {
        $cover = public_path('images/cover.png');
        
        $logo = public_path($company->avatarPath());
        
        $img = Image::make($cover)->insert($logo, 'center');
        
        return $img->response('jpg');
    }
    
    public function image(Company $company)
    {
        $logo = $company->avatarPath();
        
        $img = Image::make($logo);
        
        return $img->response('png');
    }
}
