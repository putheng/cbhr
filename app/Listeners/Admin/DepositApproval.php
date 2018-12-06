<?php

namespace App\Listeners\Admin;

use App\Events\Admin\DepositApprovedEvent;
use App\Models\Admin\DepositAction;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DepositApproval
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(DepositApprovedEvent $event)
    {
        $action = new DepositAction;

        $action->status = $event->deposit->status;
        $action->comment = $event->comment;
        $action->user()->associate(auth()->user());
        $action->deposit()->associate($event->deposit);
        $action->save();
        
    }
}
