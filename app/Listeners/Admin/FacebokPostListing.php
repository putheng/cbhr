<?php

namespace App\Listeners\Admin;

use App\Events\Admin\CompleteListing;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Facebook\Facebook;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Exceptions\FacebookResponseException;

class FacebookPostListing
{
    protected $facebook;
    
    public function __construct()
    {
        $this->facebook = new Facebook([
        	'app_id' => config('facebook.app_id'),
        	'app_secret' => config('facebook.app_secret'),
        	'default_graph_version' => 'v2.11',
        ]);
        
        $this->facebook->setDefaultAccessToken(config('facebook.page_token'));
    }
    /**
     * Handle the event.
     *
     * @param  UserCompletedListingPayment  $event
     * @return void
     */
    public function handle(CompleteListing $event)
    {
        $listing = $event->listing;
        
		$data['picture'] = $event->user->company->coverPath();
		$data['link'] = route('listing.show', $listing) ."?fb=1";
		$data['message'] =  "ក្រុមហ៊ុន ".
		                    $listing->company->name .
		                    " កំពុងជ្រើសរើសបុគ្គលិកមុខតំណែងៈ ".
		                    $listing->title . "\n" .
		                    "ទីកន្លែងធ្វើការ " .
		                    $listing->area->name .', '. 
		                    "ប្រាក់ខែ" .
		                    $listing->salary->name . "\n".
		                    "ប្រសិនបើមានចំណាប់អារម្មណ៍ សូមប្រញាប់ដាក់ពាក្យ\n" .
		                    "សូមចុចលើរូបភាព ដើម្បីអានព័តមានបន្ថែម";
		
		$data['description'] = str_limit($listing->description, 150);

        try {
            $this->facebook->post('/'. config('facebook.page_id') .'/feed', $data, config('facebook.page_token'));
        } catch(Facebook\Exceptions\FacebookResponseException $e) {

        } catch(Facebook\Exceptions\FacebookSDKException $e) {

        }
        
    }
}
