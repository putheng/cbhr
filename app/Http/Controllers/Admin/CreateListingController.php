<?php

namespace App\Http\Controllers\Admin;

use Storage;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Admin\CompleteListing;
use App\Models\{
    Company, Listing, Image, CompanyType,
    EmployeeType, Category, Area
};
use App\Http\Requests\Listing\ListingFormRequest;
use Intervention\Image\ImageManagerStatic;

class CreateListingController extends Controller
{
    public function show(Request $request)
    {
        $id = $request->id ? $request->id : 1;
        $content = file_get_contents('https://api.cambodiahr.com/admin/api/'. $id);
        
        $json = json_decode($content, JSON_UNESCAPED_SLASHES);
        
        $listing = $json['listing'];
        $company = $json['company'];
        
        $address = $listing['location'];

        $string = trim(preg_replace('/\s\s+/', ' ', $address));
        $string = before(';', $string);

        $location = Area::where('name', $string)->first() ?? Area::find(197);

        return view('users.admin.listings.create', 
            compact(['listing', 'company', 'id', 'location', 'description']));
    }
    
    public function store(Request $request)
    {
        
        if(!empty($request->phone)
        && !empty($request->address) && !empty($request->description)
        && !empty($request->requirement)
        ){
            $user = User::where('email', $request->email)->first();
            
            if(!$user){
                $user = new User;
                
                $user->name = $request->person;
                $user->email = $request->email;
                $user->active = 1;
                $user->usd = 20;
                
                $user->save();
                
                
                $company = new Company;
                
                $company->name = $request->company;
                $company->industry_id = $request->industry;
                $company->type_id = $request->type;
                $company->employee_id = !empty($request->employee) ? EmployeeType::firstOrCreate(['name' => $request->employee])->id : 2;
                $company->address = $request->address;
                $company->website = $request->website;
                $company->phone = $request->phone;
                $company->description = $request->companyDescription ? $request->companyDescription : $request->address;
                $company->identifier = str_slug($request->company) .'-'. $user->id;
                
                $company->user()->associate($user);
                
                $company->save();
                

                if(empty($request->logoimg)){
                    $user->company()->update([
                        'logo_id' => 9,
                    ]);
                }else{
                    $path = '/' . $user->company->identifier . '.png';
                    
                    $img = str_replace('data:image/jpg;base64,', '', $request->logoimg);
                	$img = str_replace(' ', '+', $img);
                	$data = base64_decode($img);
                    
                    Storage::disk('public_dir')->put('avatar'. $path, $data);
                    
                    $cover_path = public_path('images/cover.png');
                    $cover = ImageManagerStatic::make($cover_path)
                        ->insert($data, 'center')
                        ->encode('jpeg')->stream();

                    $cover_file = $cover->__toString();

                    Storage::disk('public_dir')->put('cover'. $path, $cover_file);

                    $image = new Image;
                    $image->path = $path;
                    $image->user()->associate($company);
                    $image->save();
                    
                    $user->company()->update([
                        'logo_id' => $image->id,
                    ]);
                }
                
                $user->giveRoleTo('employer');
            }
        
            $listing = new Listing;
            $listing->title     = $request->title;
            
            $listing->term_id   = $request->term;
            $listing->category_id = $request->category;
            $listing->level_id  = $request->level;
            $listing->experience_id = $request->experience;
            $listing->salary_id     = $request->salary;
            $listing->education_id     = $request->education;
            $listing->gender_id     = $request->gender;
            $listing->age_id     = $request->experience;
            $listing->area_id     = $request->location;
            $listing->description     = $request->description;
            $listing->requirement     = $request->requirement;
            $listing->publish     = $request->start .'/'. $request->closing;
            
            $listing->created_at = Carbon::now();
            $listing->expires_at = new Carbon('+30 day');
            
            $listing->live = true;
            
            $listing->user()->associate($user);
            $listing->company()->associate($user->company()->first());
            
            $listing->save();
            
            $listing->update([
                'identifier' => str_limit(str_slug($listing->title .'-'. $listing->company->name), 150).'-'. $listing->id .'.html'
            ]);
            
            event(new CompleteListing($user, $listing));
            
            $ids = ($request->lastid + 1);
            
            return redirect()->route('admin.listing.create', ['id' => $ids])->withSuccess($listing->title);
            
        }
        $ids = ($request->lastid + 1);
        
        return redirect()->route('admin.listing.create', ['id' => $ids])->withError('Not create');
    }

}
