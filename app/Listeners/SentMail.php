<?php

namespace App\Listeners;

use App\Events\ContactForm;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\ContactUs;
use Mail;


class SentMail implements ShouldQueue
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
     * @param  \App\Events\ContactForm  $event
     * @return void
     */
    public function handle(ContactForm $event)
    {
        //dd($event->name);
       //ContactUs::create($event->name, $event->email, $event->phone, $event->subject, $event->message);

        \Mail::send('email', array(
            'name' => $event->name,
            'email' => $event->email,
            'phone' => $event->phone,
            'subject' => $event->subject,
            'form_message' => $event->message,
        ), function($message) use ($event){
            $message->from($event->email);
            $message->to('sijanahosan@gmail.com', 'Hello Admin')->subject($event->subject);
    });
    }
}
