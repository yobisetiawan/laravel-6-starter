<?php

namespace App\Listeners;

use App\Events\AuthUserSuccessResetPasword;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AuthUserSuccessResetPaswordListerner
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
     * @param  AuthUserSuccessResetPasword  $event
     * @return void
     */
    public function handle(AuthUserSuccessResetPasword $event)
    {
        //$event->user
    }
}
