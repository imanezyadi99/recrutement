<?php

namespace App\Notifications;

use App\Mail\TestNotificationMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRegisteredNotification extends Notification
{
    use Queueable;
    public $donnees_personnels_id;
    public $civilitee;
    public $name;
    public $prenom;
    public $adresse;
    public $villee;
    public $email;
    public $tel;
    public $cv;


    /*public $create_post; */

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($donnees_personnels_id,$civilitee,$name,$prenom,$adresse,$villee,$email,$tel,$cv)
    {
        $this->donnees_personnels_id=$donnees_personnels_id;
        $this->civilitee=$civilitee;
        $this->name=$name;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
        $this->villee=$villee;
        $this->email=$email;
        $this->tel=$tel;
        $this->cv=$cv;


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
                ->line('One of your invoices has been paid!')
                ->action('View Invoice', url('/'))
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
            'donnees_personnels_id'=>$this->donnees_personnels_id,
            'civilitee'=>$this->civilitee,
            'name'=>$this->name,
            'prenom'=>$this->prenom,
            'adresse'=>$this->adresse,
            'villee'=>$this->villee,
            'email'=>$this->email,
            'tel'=>$this->tel,
            'cv'=>$this->cv,


        ];
    }
}
