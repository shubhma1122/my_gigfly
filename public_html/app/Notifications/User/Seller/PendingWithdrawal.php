<?php

namespace App\Notifications\User\Seller;

use Illuminate\Bus\Queueable;
use Illuminate\Support\HtmlString;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PendingWithdrawal extends Notification implements ShouldQueue
{
    use Queueable;

    public $withdrawal;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($withdrawal)
    {
        $this->withdrawal = $withdrawal;
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
        // Set subject
        $subject = __('messages.t_subject_seller_pending_withdrawal');

        return (new MailMessage)
                    ->subject($subject)
                    ->greeting(__('messages.t_hello_username', ['username' => $notifiable->username]))
                    ->line(new HtmlString(__('messages.t_notification_seller_line_1_pending_withdrawal')))
                    ->action(__('messages.t_withdrawals_history'), url('seller/withdrawals'));
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
