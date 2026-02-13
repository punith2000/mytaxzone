<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use App\Models\Faq;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    // protected $faq;
    /**
     * Create a new message instance.
     */
    public function __construct(public $faq)
    {
        $this->faq = $faq;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('no-reply@mytaxzone.com', 'MyTaxZone'),
            replyTo: [new Address($this->faq->email, $this->faq->name)],
            subject: 'New FAQ Submission'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.faq',
            with: [
                'faq' => $this->faq,
                'mailMessage' => "Thank you for submitting your question. Our team will get back to you soon!"
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}