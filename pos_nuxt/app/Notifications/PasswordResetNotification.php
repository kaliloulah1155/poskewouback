<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordResetNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {

       
        return (new MailMessage)
                    ->subject("Mot de passe oublié (POS) .")
                    ->line("Veuillez réinitialiser votre mot de passe avec le code ci-dessous.")
                    ->line('Hello '.$notifiable->nom.' '.$notifiable->prenoms)
                    ->line('Votre code :'.$notifiable->resetPasswordToken)
                    ->action("Modifier le mot de passe ", url('/reset'))
                    ->line("Merci d'avoir utilisé notre application.");
    }

    public function from($notifiable)
    {
        return "POS-APP";
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
