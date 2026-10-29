<?php

namespace Tests\Feature;

use App\Mail\ContactInquiryMail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactSubmissionTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_submission_notifies_team_inboxes(): void
    {
        Mail::fake();

        $this->postJson(route('contact.submit'), [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => '5550100',
            'service' => 'SEO',
            'message' => 'Please contact me.',
        ])->assertOk();

        $this->assertDatabaseHas('inquiries', [
            'email' => 'jane@example.com',
        ]);

        Mail::assertSent(ContactInquiryMail::class, function (ContactInquiryMail $mail): bool {
            return $mail->hasTo('marketing@mirchmedia.com')
                && $mail->hasTo('vivek@mirchmedia.com')
                && $mail->hasTo('hello@mirchmedia.com')
                && $mail->inquiry->email === 'jane@example.com';
        });
    }
}
