<?php

namespace App\Providers\App\Listeners;

use App\Providers\App\Events\NewUserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\UserCredentialMail;
use Illuminate\Support\Facades\Mail;

class SendUserCredentialEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewUserRegistered  $event
     * @return void
     */
    public function handle(NewUserRegistered $event)
    {
        Mail::to($event->user->email)->send(new UserCredentialMail($event->user->email, $event->password));
    }
}
