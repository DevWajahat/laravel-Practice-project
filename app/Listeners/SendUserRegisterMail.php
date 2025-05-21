<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Mail\UserRegistrationMailSend;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendUserRegisterMail
{

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {
        $user = $event->user;
        Mail::to($user->email)->send(new UserRegistrationMailSend($user));
    }
}
