<?php

namespace App\Providers;

use App\Events\PasswordReset;
use App\Events\UserRegistered;
use App\Listeners\SendResetPasswordLink;
use App\Listeners\SendUserRegisterMail;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(
            PasswordReset::class,
            SendResetPasswordLink::class,
        );
    }
}
