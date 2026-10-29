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

    public function test_contact_submission_rejects_letters_in_phone(): void
    {
        Mail::fake();

        $response = $this->postJson(route('contact.submit'), [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => 'call me maybe',
            'message' => 'Please contact me.',
        ]);

        $response->assertStatus(422)->assertJsonValidationErrors('phone');

        Mail::assertNothingSent();
        $this->assertDatabaseCount('inquiries', 0);
    }

    public function test_contact_submission_rejects_an_invalid_name(): void
    {
        Mail::fake();

        $response = $this->postJson(route('contact.submit'), [
            'name' => 'Jane 123',
            'email' => 'jane@example.com',
            'phone' => '(855) 506-4724',
            'message' => 'Please contact me.',
        ]);

        $response->assertStatus(422)->assertJsonValidationErrors('name');

        Mail::assertNothingSent();
        $this->assertDatabaseCount('inquiries', 0);
    }
}
