<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ComplaintNotificationValide extends Mailable
{
    use Queueable, SerializesModels;

    public $complaint;
    public $datetime;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($complaint, $datetime)
    {
        $this->complaint = $complaint;
        $this->datetime = $datetime;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Complaint Notification')
                    ->view('emails.complaint_notification')
                    ->with([
                        'objectComplaints' => $this->complaint->objectComplaints,
                        'datetime' => $this->datetime,
                    ]);
    }
}
