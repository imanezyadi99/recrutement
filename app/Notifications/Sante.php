<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Sante extends Notification
{
    use Queueable;
    public $santes_coordonnees_id;
    public $civilite;
    public $name;
    public $prenom;
    public $ville;
    public $codepostale;
    public $email;
    public $telephone;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($santes_coordonnees_id, $civilite,$name,$prenom,$ville,$codepostale,$email,$telephone)
    {
        $this->santes_coordonnees_id=$santes_coordonnees_id;
        $this->civilite=$civilite;
        $this->name=$name;
        $this->prenom=$prenom;
        $this->ville=$ville;
        $this->codepostale=$codepostale;
        $this->email=$email;
        $this->telephone=$telephone;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'santes_coordonnees_id'=>$this->santes_coordonnees_id,
            'civilite'=>$this->civilite,
            'name'=>$this->name,
            'prenom'=>$this->prenom,
            'ville'=>$this->ville,
            'codepostale'=>$this->codepostale,
            'email'=>$this->email,
            'telephone'=>$this->telephone,
        ];
    }
}
