<?php

namespace App\Notifications;

use Faker\Provider\HtmlLorem;
use Faker\Provider\Lorem;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;

class PaymentReceived extends Notification
{
    use Queueable;

    protected $amount;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
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
            ->subject('Payment to Gibraltar Rock')
            ->greeting('Whats Up?')
            ->line('The introduction to the notification.')
            ->line('New line this is')
            ->action('Sign Up', url('/'))
            ->line('Thank you for using our application!');
    }

    // // NEXMO CHANGED TO VONAGE SO THIS DOESNT WORK ANYMORE
    // public function toNexmo($notifiable)
    // {
    //     return (new NexmoMessage())
    //         ->content('Your Gib Rock order has been received');
    // }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'amount' => $this->amount
        ];
    }
}
