<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactReturn extends Mailable
{
    use Queueable, SerializesModels;
    private $contact;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
       $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $contact = $this->contact;
        return $this->view('contact_return')->with(compact('contact'));
    }
}
