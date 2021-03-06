<?php

namespace App\Notifications;

use App\Models\Dailytransaction;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ShareClosingPrice extends Notification
{
    use Queueable;
    public $transaction;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Dailytransaction $dailytransaction)
    {
        $this->transaction = $dailytransaction;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
            ->line('The Closing  Price of '.$this->transaction->company.' is '.$this->transaction->cl_price)
            ->action('Notification Action', url('http://laravel.com'))
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
            //
        ];
    }
}
