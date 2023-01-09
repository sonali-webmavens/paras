<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class SendEmailNotification extends Notification
{
    use Queueable;
    public $company;
    //public $company;
    // public $connection = 'redis';
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($company)
    {
        $this -> company = $company;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return  ['mail']; 
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     * 
     */
    public function toMail($notifiable)
    {    
        return (new MailMessage)
                    ->greeting('COMAPNY IS REGISTER')
                    ->line    ($this -> company -> cnm)
                    ->line    ($this -> company -> email)
                    ->line    ($this -> company['logo'])
                    ->line    ($this -> company -> website)
                    ->action  ($this -> company -> website,
                                url('website'));
                    
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
            //
         ];
    }
}
