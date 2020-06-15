<?php

namespace App\Listeners;

use App\Events\OrderCreate;
use App\Mail\MailToUserAfterOrderCreate;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class MailToUserAfterOrderCreated
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
     * @param  OrderCreate  $event
     * @return void
     */
    public function handle(OrderCreate $event)
    {
        $order = $event->order;
        $user = User::find($order->_get("user_id"));
        try {
            Mail::to($user->_get("email"))
                ->send(new MailToUserAfterOrderCreate($user));
        }catch (\Exception $exception){}

    }
}
