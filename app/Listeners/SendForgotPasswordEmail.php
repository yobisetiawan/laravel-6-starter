<?php

namespace App\Listeners;

use App\Events\UserForgotPasswordEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendForgotPasswordEmail
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
     * @param  UserForgotPasswordEvent  $event
     * @return void
     */
    public function handle(UserForgotPasswordEvent $event)
    {
        //
    }
}
