<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendTestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;


    /**
     * Create a new message instance.
     * Receives local variable $name and initialise it's content value
     * @return void
     */
    public function __construct()
    {
        $this->name = "Sagnik Mandal, Your Order is Dispatched.";
    }

    /**
     * Build the message.
     *
     * @return EmailView parsed content
     */
    public function build()
    {
        return $this->view('EmailView');
    }
}
