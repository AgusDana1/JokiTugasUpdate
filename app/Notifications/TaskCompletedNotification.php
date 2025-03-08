<?php

namespace App\Notifications;

use App\Models\Task;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TaskCompletedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $task;

    /**
     * Create a new notification instance.
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast', 'mail'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => 'Tugas anda dengan ID: ' . $this->task->id . '" telah selesai.',
            'url' => route('task.view-answer', $this->task->id),
            'status' => 'completed'
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'message' => 'Tugas anda telah selesai dikerjakan: ' . $this->task->title,
            'task_id' => $this->task->id
        ]);
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Tugas anda telah selesai')
                    ->line('Tugas anda telah selesai: ' . $this->task->title)
                    ->action('Lihat Jawaban', url('/task/view/answer' . $this->task->id))
                    ->line('Terimakasih telah menggunakan layanan kami!');
    }

    public function broadcastOn()
    {
        return ['user-' . $this->task->user_id];
    }

    public function broadcastAs()
    {
        return 'task-completed';
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
