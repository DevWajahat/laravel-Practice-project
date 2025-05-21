<?php

namespace App\Listeners;

use App\Events\PasswordReset;
use App\Mail\PasswordReset as MailPasswordReset;
use App\Mail\PasswordResetMailSend;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendResetPasswordLink
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        // dd($event->record->email);
        Mail::to($event->record->email)->send(new PasswordResetMailSend($event->record));

    }
}
