<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ], 
        'App\Events\UserRegisterEvent' => [
            'App\Listeners\SendVerifyEmail',
        ],
        'App\Events\UserForgotPasswordEvent' => [
            'App\Listeners\SendForgotPasswordEmail',
        ],
        'App\Events\UserResetPasswordEvent' => [
            'App\Listeners\SendResetPasswordEmail',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
