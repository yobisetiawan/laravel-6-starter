<?php

namespace App\Listeners;

use App\Events\AuthUserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AuthUserRegisteredListerner
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
     * @param  AuthUserRegistered  $event
     * @return void
     */
    public function handle(AuthUserRegistered $event)
    {
        //$event->user
    }
}
