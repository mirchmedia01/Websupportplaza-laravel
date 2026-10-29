<?php

namespace App\Http\Controllers;

use App\Mail\ContactInquiryMail;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Support both direct fields and Elementor nested form_fields array
        $formFields = $request->input('form_fields', []);

        $name = $request->input('name')
            ?? ($formFields['name'] ?? null);

        $email = $request->input('email')
            ?? ($formFields['email'] ?? null);

        $phone = $request->input('phone')
            ?? ($formFields['field_40f554f'] ?? ($formFields['phone'] ?? null));

        $service = $request->input('service')
            ?? ($formFields['message'] ?? ($formFields['service'] ?? null));

        $message = $request->input('message')
            ?? ($formFields['custom_message'] ?? null);

        $pageSource = $request->input('referer_title')
            ?? ($request->header('referer') ?? 'Website Form');

        $name = is_string($name) ? trim($name) : $name;
        $email = is_string($email) ? trim($email) : $email;
        $phone = is_string($phone) ? trim($phone) : $phone;
        $service = is_string($service) ? trim($service) : $service;
        $message = is_string($message) ? trim($message) : $message;

        validator([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'service' => $service,
            'message' => $message,
        ], [
            'name' => ['required', 'string', 'min:2', 'max:255', 'regex:/^[\pL\pM\s\'.-]+$/u'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => [
                'required',
                'string',
                'max:30',
                function (string $attribute, mixed $value, \Closure $fail): void {
                    if (! preg_match('/^[0-9+()\s.\-]+$/', (string) $value)) {
                        $fail('Please enter a valid phone number (digits, spaces, +, -, parentheses, and periods only).');
                    } elseif (strlen(preg_replace('/\D/', '', (string) $value)) < 7) {
                        $fail('Please enter a phone number with at least 7 digits.');
                    }
                },
            ],
            'service' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string', 'max:5000'],
        ], [
            'name.required' => 'Please enter your name.',
            'name.regex' => 'Please use letters, spaces, apostrophes, hyphens, or periods in your name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Please enter your phone number.',
        ])->validate();

        $inquiry = Inquiry::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'service' => $service,
            'message' => $message,
            'page_source' => $pageSource,
            'ip_address' => $request->ip(),
        ]);

        try {
            Mail::to(config('services.contact.to_addresses'))->send(new ContactInquiryMail($inquiry));
        } catch (\Throwable $e) {
            // The database is ephemeral, so log the full submission to make
            // sure a failed delivery does not lose the lead.
            Log::error('Contact inquiry email failed', [
                'inquiry_id' => $inquiry->id,
                'name' => $inquiry->name,
                'email' => $inquiry->email,
                'phone' => $inquiry->phone,
                'service' => $inquiry->service,
                'message' => $inquiry->message,
                'page_source' => $inquiry->page_source,
                'ip_address' => $inquiry->ip_address,
                'error' => $e->getMessage(),
            ]);
        }

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been sent successfully.',
            ]);
        }

        $previous = url()->previous();
        $redirect = parse_url($previous, PHP_URL_HOST) === $request->getHost() ? $previous : url('/');
        $anchor = $request->input('form_anchor');

        if (is_string($anchor) && preg_match('/^[a-z0-9-]+$/', $anchor)) {
            $redirect .= '#'.$anchor;
        }

        return redirect()->to($redirect)->with(
            'success',
            'Thank you! Your message has been sent successfully. We will get back to you within 24 business hours.',
        );
    }
}
