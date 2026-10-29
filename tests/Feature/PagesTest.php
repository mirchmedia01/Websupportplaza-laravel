<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    #[DataProvider('pageRouteProvider')]
    public function test_all_pages_render_successfully_with_trailing_slash(string $routeName, string $expectedText): void
    {
        $url = $routeName === 'home' ? route('home') : route($routeName).'/';
        $response = $this->get($url);

        $response->assertStatus(200);
        $response->assertSee($expectedText, false);
    }

    #[DataProvider('pageRouteProvider')]
    public function test_pages_without_trailing_slash_redirect_permanently(string $routeName, string $expectedText): void
    {
        if ($routeName === 'home') {
            $this->get('/')->assertStatus(200);

            return;
        }

        $response = $this->get(route($routeName));
        $response->assertStatus(301);
        $response->assertRedirect(route($routeName).'/');
    }

    public function test_canonical_tag_contains_trailing_slash(): void
    {
        $response = $this->get('/about-us/');
        $response->assertStatus(200);
        $response->assertSee('<link rel="canonical" href="'.url('/about-us').'/">', false);
    }

    public static function pageRouteProvider(): array
    {
        return [
            ['home', 'Web Support Plaza'],
            ['about', 'About Us'],
            ['services', 'Services'],
            ['how-it-works', 'How It Works'],
            ['contact', 'Contact'],
            ['custom-web-design', 'Custom Web Design'],
            ['construction-web-design', 'Construction Web Design'],
            ['real-estate-web-design', 'Real Estate Web Design'],
            ['website-development', 'Website Development'],
            ['web-portals', 'Web Portal'],
            ['website-packages', 'Website Packages'],
            ['digital-marketing', 'Digital Marketing'],
            ['search-engine-optimization-organic-reach', 'SEO'],
            ['local-seo', 'Local'],
            ['google-business-profile-management', 'Google Business Profile'],
            ['pay-per-click-ads', 'Pay-Per-Click'],
            ['seo-packages', 'SEO Packages'],
            ['social-media-marketing-services', 'Social Media'],
            ['social-media-packages', 'Social Media Packages'],
            ['branding', 'Branding'],
            ['identity-design', 'Identity Design'],
            ['logo-design', 'Logo Design'],
            ['print-design', 'Print Design'],
            ['banners', 'Banner'],
            ['e-newsletter-design', 'E-Newsletter'],
            ['mobile-app-development', 'Mobile App'],
        ];
    }

    #[DataProvider('legacyRedirectProvider')]
    public function test_legacy_urls_redirect_permanently(string $from, string $to): void
    {
        $this->get($from.'/')->assertStatus(301)->assertRedirect($to);
    }

    public static function legacyRedirectProvider(): array
    {
        return [
            ['/mobile-marketing', '/digital-marketing/'],
            ['/restaurant-web-design', '/custom-web-design/'],
            ['/social-media-marketing', '/social-media-marketing-services/'],
            ['/mobile-application', '/mobile-app-development/'],
            ['/gbp-management', '/google-business-profile-management/'],
        ];
    }

    public function test_contact_form_submission_via_json(): void
    {
        $response = $this->postJson(route('contact.submit'), [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'service' => 'Website Development',
            'message' => 'Hello, I want to build a website.',
        ]);

        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
            ]);

        $this->assertDatabaseHas('inquiries', [
            'email' => 'john@example.com',
            'name' => 'John Doe',
        ]);
    }

    public function test_contact_page_has_single_form_and_map(): void
    {
        $response = $this->get(route('contact').'/');

        $response->assertStatus(200);
        $this->assertSame(1, substr_count($response->getContent(), '<form'));
        $response->assertSee('id="contact-form-section"', false);
        $response->assertDontSee('id="quote-section"', false);
        $response->assertSee('id="map-section"', false);
        $response->assertSee('maps.google.com/maps', false);
        $response->assertSee('Forest Hills, NY, United States, New York');
    }

    public function test_home_page_retains_quote_form(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $this->assertSame(1, substr_count($response->getContent(), '<form'));
        $response->assertSee('id="quote-section"', false);
    }
}
