<?php

namespace App\Mail;

use App\Models\Invoice;
use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InvoiceClientMail extends Mailable
{
    use Queueable, SerializesModels;

    public $invoice;
    public $settings;

    public function __construct(Invoice $invoice)
    {
        $this->invoice = $invoice;
        $this->settings = Setting::all()->keyBy('key')->map(fn($s) => $s->value);
    }

    public function envelope(): Envelope
    {
        $companyName = $this->settings['company_name'] ?? 'CV. Beranda Teknologi Digital';
        $statusText = $this->invoice->status === 'paid' ? 'LUNAS' : 'TAGIHAN';

        return new Envelope(
            subject: "[$statusText] Invoice #{$this->invoice->invoice_number} - {$companyName}",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.invoice_notification',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
