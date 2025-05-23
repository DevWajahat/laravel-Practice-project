<?php

namespace App\Listeners;

use App\Events\OrderShipped;
use App\Mail\SendOrderDetailsMail;
use App\Notifications\OrderPlacedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendOrderShipmentDetails
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
    public function handle(OrderShipped $event): void
    {
        $order = $event->order;
        auth()->user()->notify(new OrderPlacedNotification($event->order));
        Mail::to(auth()->user()->email)->send(new SendOrderDetailsMail($order));
    }
}
