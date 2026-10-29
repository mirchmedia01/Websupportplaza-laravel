<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Indexable page routes, excluding the home route.
     *
     * @var list<string>
     */
    private const PAGES = [
        'about',
        'services',
        'how-it-works',
        'contact',
        'custom-web-design',
        'construction-web-design',
        'real-estate-web-design',
        'website-development',
        'web-portals',
        'website-packages',
        'digital-marketing',
        'search-engine-optimization-organic-reach',
        'local-seo',
        'google-business-profile-management',
        'pay-per-click-ads',
        'seo-packages',
        'social-media-marketing-services',
        'social-media-packages',
        'branding',
        'identity-design',
        'logo-design',
        'print-design',
        'banners',
        'e-newsletter-design',
        'mobile-app-development',
    ];

    public function __invoke(): Response
    {
        $urls = collect(self::PAGES)
            ->map(fn (string $name): string => route($name).'/')
            ->prepend(route('home').'/');

        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n"
            .view('sitemap', ['urls' => $urls])->render();

        return response($xml, 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
    }
}
