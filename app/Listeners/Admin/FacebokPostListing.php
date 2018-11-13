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
    public $facebook,

            $token = 'EAADZBk437GZCoBANIDuZAhae07tNR7amO5zZBOuHPA1C8q9iZAhUAmkiqoXOZBxR8jHi3JjxV0WPjuBdav4Fdn3ZAxYOEJvegQrHFyWJZCXfL2KBZCKP4HmmiNl8gwWowfIasaoZCZCt64eeKEIQUvbQ5RN8rOZBBfsKJSIHn1ia1kD23QZDZD',

            $id = '1545494539067929';
    
    public function __construct()
    {
        $this->facebook = new Facebook([
        	'app_id' => config('facebook.app_id'),
        	'app_secret' => config('facebook.app_secret'),
        	'default_graph_version' => 'v2.11',
        ]);
        
        $this->facebook->setDefaultAccessToken($this->token);
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
        
		$data['picture'] = route('company.cover.cover', $event->user->company);
		$data['link'] = route('listing.show', $listing) ."?fb=1";
		$data['message'] =  "ក្រុមហ៊ុន ".
		                    $listing->company->name .
		                    " កំពុងជ្រើសរើសបុគ្គលិកមុខតំណែងៈ ".
		                    $listing->title . "\n" .
		                    "ទីកន្លែងធ្វើការ " .
		                    $listing->area->name .', '. 
		                    optional($listing->area->parent)->name ."\n".
		                    "ប្រាក់ខែ" .
		                    $listing->salary->name . "\n".
		                    "ប្រសិនបើមានចំណាប់អារម្មណ៍ សូមប្រញាប់ដាក់ពាក្យ\n" .
		                    "សូមចុចលើរូបភាព ដើម្បីអានព័តមានបន្ថែម";
		
		$data['description'] = str_limit($listing->description, 150);
        
        try {
            $this->facebook->post('/'. $this->id .'/feed', $data, $this->token);

        } catch(Facebook\Exceptions\FacebookResponseException $e) {

        } catch(Facebook\Exceptions\FacebookSDKException $e) {

        }
        
    }
}
