<?php

namespace App\Listeners;

use App\Events\AuthUserFogotPasword;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AuthUserFogotPaswordListerner
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
     * @param  AuthUserFogotPasword  $event
     * @return void
     */
    public function handle(AuthUserFogotPasword $event)
    {
        //$event->user
    }
}
