<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RejectedSlotMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $rejectedSlotdMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($rejectedSlotMail)
    {
        $this->rejectedSlotMail = $rejectedSlotMail;
    }

    public function build()
    {
        return $this->markdown('emails.rejectedSlot_mail')
        ->with([
            'name' => $this->rejectedSlotMail['name'],
            'body1' => $this->rejectedSlotMail['body1'],
            'body2' => $this->rejectedSlotMail['body2'],
            // 'reason' => $this->rejectedSlotMail['reason'],
            'url' => $this->rejectedSlotMail['url'],
            
        ]) -> subject($this->rejectedSlotMail['subject']);
    }
}
