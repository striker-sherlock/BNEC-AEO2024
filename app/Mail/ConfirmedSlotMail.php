<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Mail\ConfirmedSlotMail;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmedSlotMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $confirmedSlotdMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($confirmedSlotMail)
    {
        $this->confirmedSlotMail = $confirmedSlotMail;
    }
    public function build()
    {
        return $this->markdown('emails.confirmedSlot_mail')
                    ->with([
                        'name'=>$this->confirmedSlotMail['name'],
                        'body1' => $this->confirmedSlotMail['body1'],
                        'body2' => $this->confirmedSlotMail['body2'],
                        'url'=>$this->confirmedSlotMail['url'],

                    ])
                    ->subject($this->confirmedSlotMail['subject']);
    }
}
