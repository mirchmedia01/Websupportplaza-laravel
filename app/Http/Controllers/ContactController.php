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

        $validated = validator([
            'email' => $email,
            'name' => $name,
            'phone' => $phone,
        ], [
            'email' => 'required|email|max:255',
            'name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
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
            Mail::to(config('services.contact.to_address'))->send(new ContactInquiryMail($inquiry));
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

        return back()->with('success', 'Thank you! Your message has been sent successfully. We will get in touch soon.');
    }
}
