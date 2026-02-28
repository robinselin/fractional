<?php

namespace App\Mail;

use App\Models\QualifierSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QualifierSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public QualifierSubmission $submission) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Qualifier: '.$this->submission->role.' — '.$this->submission->stage.' — '.$this->submission->timing_driver,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.qualifier-submitted',
        );
    }

    /**
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
