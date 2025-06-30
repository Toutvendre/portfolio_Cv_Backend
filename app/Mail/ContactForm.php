<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct(array $formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        return $this->subject('📨 Nouveau message de contact')
            ->view('email.contact')
            ->with('formData', $this->formData);
    }
}
