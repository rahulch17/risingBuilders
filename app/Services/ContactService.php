<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

/**
 * ContactService
 *
 * Handles contact form submissions:
 * - Stores enquiry in the database (Inquiry model)
 * - Sends notification email to the office
 * - Sends confirmation email to the prospect
 */
class ContactService
{
    /**
     * Process a validated contact form submission.
     */
    public function submitInquiry(array $data): void
    {
        // 1. Persist to database
        // Inquiry::create($data);   ← uncomment when Inquiry model is set up

        // 2. Send internal notification
        // Mail::to(config('mail.office_address'))->send(new InquiryReceived($data));

        // 3. Send confirmation to prospect
        // Mail::to($data['email'])->send(new InquiryConfirmation($data));

        // Log for now (remove once mail is wired up)
        Log::info('New contact form submission', [
            'name'    => $data['name'],
            'email'   => $data['email'],
            'service' => $data['service'] ?? 'Not specified',
        ]);
    }

    /**
     * Static contact details rendered on the contact page.
     */
    public function getContactInfo(): array
    {
        return [
            'address' => config('company.address', '100 Architecture Drive, New York, NY 10001'),
            'phone'   => config('company.phone', '+1 (212) 555-0100'),
            'email'   => config('company.email', 'hello@risingbuilders.com'),
            'hours'   => 'Monday – Friday, 8:00 AM – 6:00 PM',
        ];
    }
}
