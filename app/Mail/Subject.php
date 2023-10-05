<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

class Subject extends Mailable
{
    use Queueable, SerializesModels;

    public $message;

public function __construct($message)
{
    $this->message = $message;
}

/**
 * Construire le message.
 *
 * @return $this
 */
public function build()
{
    return $this->view('emails.subject')
                ->subject('Sujet de l\'e-mail');
}

}
