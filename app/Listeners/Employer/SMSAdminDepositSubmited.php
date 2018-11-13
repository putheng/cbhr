<?php

namespace App\Listeners\Employer;

use App\Events\Employer\DepositSubmited;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Nexmo\Client;
use Nexmo\Client\Credentials\Basic;

class SMSAdminDepositSubmited
{
    
    public $nexmo;
    
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $nexmo_basic = new Basic(config('sms.nexmo_key'), config('sms.nexmo_secret'));
        
        $this->nexmo = new Client($nexmo_basic);
    }

    /**
     * Handle the event.
     *
     * @param  DepositSubmited  $event
     * @return void
     */
    public function handle(DepositSubmited $event)
    {
        //dd($event->deposit);
        
        $message = $event->deposit->user->company->id ."\n".$event->deposit->user->company->name ."\n" .$event->deposit->processor->name . "=".$event->deposit->amount."$;\nCode=". $event->deposit->transaction.";\n". $event->deposit->created_at->format('l jS F Y h:i:s A');
        
        $send = $this->nexmo->message()->send([
            'to' => config('sms.nexmo_admin'),
            'from' => 'HR Deposit',
            'text' => $message,
        ]);
        
    }
}
