<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;

class SendWelcomeMail
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
    public function handle(UserRegistered $event)
    {
        // return $event;
        Mail::to('mfaisalqasimtesting123@gmail.com')->send(new Welcome());

    }
}
