<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Newsletter;

class NewsletterFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $newsletter;

    /**
     * Create a new message instance.
     */
    public function __construct(Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Un usuario se suscribió al informativo!')
            ->from(config('mail.from.address'), config('mail.from.name'))
            ->view('emails.contact-form');
    }
}
