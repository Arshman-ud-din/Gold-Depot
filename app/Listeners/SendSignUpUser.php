<?php

namespace App\Listeners;

use App\Events\SignUp;
use App\Mail\SignUpUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class SendSignUpUser
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
    public function handle(SignUp $event): void
    {
        $user = $event->user;

        // dd($user);


        Mail::to($user->email)->send(new SignUpUser($user));
    }
}
