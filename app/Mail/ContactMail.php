<?php

namespace App\Mail;
use Illuminate\Http\Request;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;


class ContactMail extends Mailable
{
 

    use Queueable, SerializesModels;
    public $data;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->data = $request->only(['name', 'email', 'telephone', 'subject', 'message']);

    }

  

    /**
     * Build the message.
     *
     * @return $this
     */
 

    public function build()
    {
        return $this->view('emails.contact')->subject('Nouveau message de contact');
    }

 
}
