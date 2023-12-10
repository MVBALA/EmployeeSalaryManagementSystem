<?php

namespace App\Listeners;

use App\Events\PayslipEvent;
use App\Jobs\PayslipJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class PayslipListener
{
    /**
     * Create the event listener.
     */

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PayslipEvent $event): void
    {
        // Log::info($event->employee->name);
        PayslipJob::dispatch($event->employee,$event->salary);
    }
}
