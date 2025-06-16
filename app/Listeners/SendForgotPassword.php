<?php

namespace App\Listeners;

use App\Events\ForgotPassword;
use App\Mail\SendForgotPasswordMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class SendForgotPassword
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
    public function handle(ForgotPassword $event): void
    {

        $forgotpassword = $event->token;

        Mail::to($event->email)->send(new SendForgotPasswordMail($forgotpassword));
    }
}
