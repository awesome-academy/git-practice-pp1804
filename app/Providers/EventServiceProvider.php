<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
<<<<<<< HEAD
=======
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
>>>>>>> 9d388240b5e547064f3fc98a63603daba00790f8
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
<<<<<<< HEAD
        'App\Events\Event' => [
            'App\Listeners\EventListener',
=======
        Registered::class => [
            SendEmailVerificationNotification::class,
>>>>>>> 9d388240b5e547064f3fc98a63603daba00790f8
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
