<?php

namespace App\Listeners;

use App\Events\UserResetPasswordEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendResetPasswordEmail
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
     * @param  UserResetPasswordEvent  $event
     * @return void
     */
    public function handle(UserResetPasswordEvent $event)
    {
        //
    }
}
