<?php 

namespace App\Http\ViewComposers;

use App\Models\Processor;
use Illuminate\View\View;

class ProcessorsComposer
{
    public function compose(View $view)
    {
        $processors = Processor::isLive()->get();
                    
        $view->with(compact('processors'));
    }
}