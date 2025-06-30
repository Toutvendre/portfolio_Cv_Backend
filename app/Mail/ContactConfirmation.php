<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Confirmation de réception de votre message',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'email.contact_confirmation',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
