<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'title' => 'Web Design & Digital Marketing Agency | Queens NY',
            'metaDescription' => 'Web Support Plaza is a Queens NY digital marketing agency offering web design, SEO & local marketing. 250+ projects. Call (855) 506-4724.',
        ]);
    }

    public function about()
    {
        return view('pages.about-us', [
            'title' => 'Web Support Plaza Queens NY Digital Marketing Agency Since 2012 - Web Support Plaza',
            'metaDescription' => "Web Support Plaza team. 26+ years of digital marketing expertise, 14 years in business, 250+ projects delivered. Queens, NY's trusted agency.",
        ]);
    }

    public function services()
    {
        return view('pages.services', [
            'title' => 'Web Design, SEO & Digital Marketing Services | Web Support Plaza Queens NY - Web Support Plaza',
            'metaDescription' => 'Web Support Plaza offers web design, SEO, digital marketing, mobile app development, and social media services for businesses in Queens, NYC, and beyond. Explore our full service menu.',
        ]);
    }

    public function howItWorks()
    {
        return view('pages.how-it-works', [
            'title' => 'How It Works | Our Process | Web Support Plaza Queens NY - Web Support Plaza',
            'metaDescription' => 'Learn how Web Support Plaza works with clients in Queens, NY. Our 5-step process: discovery, strategy, design, development, and growth. 14 years, 250+ projects. Call (855) 506-4724.',
        ]);
    }

    public function contact()
    {
        return view('pages.contact-us', [
            'title' => 'Contact Web Support Plaza | Queens NY Digital Marketing Agency - Web Support Plaza',
            'metaDescription' => 'Contact Web Support Plaza in Queens, NY. Call (855) 506-4724, email info@websupportplaza.com, or book a free 30-minute strategy session. Forest Hills, Queens, NY.',
        ]);
    }

    public function customWebDesign()
    {
        return view('pages.custom-web-design', [
            'title' => 'Custom Web Design Services in Queens NY | Web Support Plaza',
            'metaDescription' => 'Professional custom web design services in Queens, NY. Responsive and SEO-friendly websites built to grow your business online.',
        ]);
    }

    public function constructionWebDesign()
    {
        return view('pages.construction-web-design', [
            'title' => 'Construction Web Design Services Queens NY | WSP',
            'metaDescription' => 'Professional construction web design services in Queens, NY. Custom contractor websites built to grow your construction business online.',
        ]);
    }

    public function realEstateWebDesign()
    {
        return view('pages.real-estate-web-design', [
            'title' => 'Real Estate Web Design in Queens NY |Web Support Plaza',
            'metaDescription' => 'Professional real estate web design services in Queens, NY. Custom property websites designed to attract buyers and grow your business.',
        ]);
    }

    public function websiteDevelopment()
    {
        return view('pages.website-development', [
            'title' => 'Website Development Services in Queens, NY | WordPress & Custom Sites | Web Support Plaza - Web Support Plaza',
            'metaDescription' => 'Web Support Plaza builds responsive, custom websites for businesses in Queens and NYC. WordPress, e-commerce, CMS, and landing pages. Affordable pricing, dedicated support. Get a free quote today.',
        ]);
    }

    public function webPortals()
    {
        return view('pages.web-portals', [
            'title' => 'Web Portal Development Services Queens NY Web Support Plaza',
            'metaDescription' => 'Professional web portal development services in Queens, NY. Custom business portals designed for secure access and better user management.',
        ]);
    }

    public function websitePackages()
    {
        return view('pages.website-packages', [
            'title' => 'Website Design Packages & Pricing | Queens NY | Web Support Plaza',
            'metaDescription' => "Explore Web Support Plaza's website design packages starting at $5,000. Starter, Basic, and Classic plans for personal sites, startups, and small businesses. Forest Hills, Queens, NY. Get a quote.",
        ]);
    }

    public function digitalMarketing()
    {
        return view('pages.digital-marketing', [
            'title' => 'Digital Marketing Agency Queens NY | Web Support Plaza',
            'metaDescription' => "Drive more leads with Web Support Plaza's digital marketing services. PPC ads, social media marketing, SEO, and video campaigns for Queens, NYC, and national businesses. Free strategy session.",
        ]);
    }

    public function searchEngineOptimizationOrganicReach()
    {
        return view('pages.search-engine-optimization-organic-reach', [
            'title' => 'SEO Services in Queens & NYC | Local & National SEO | Web Support Plaza - Web Support Plaza',
            'metaDescription' => 'Web Support Plaza delivers SEO services for Queens, NYC, and nationwide businesses. Local SEO, national campaigns, e-commerce SEO, and real-time tracking. Transparent monthly reports. Free consultation.',
        ]);
    }

    public function localSeo()
    {
        return view('pages.local-seo', [
            'title' => 'Local Marketing Agency Queens NY | Google Maps SEO | Web Support Plaza',
            'metaDescription' => 'Dominate local search in Queens, NY. Google Maps optimization, Google Business Profile management, local citations & review building. Get found by local customers. Call (855) 506-4724.',
        ]);
    }

    public function googleBusinessProfileManagement()
    {
        return view('pages.google-business-profile-management', [
            'title' => 'Google Business Profile Management - Web Support Plaza',
            'metaDescription' => 'Google Business Profile Management for Queens Small Businesses — Get Into the Local Map Pack and Stay There. Web Support Plaza manages Google Business Profiles for Queens small businesses to get them into that map pack and keep them there.',
        ]);
    }

    public function gbpManagement()
    {
        return view('pages.google-business-profile-management', [
            'title' => 'GBP Management - Web Support Plaza',
            'metaDescription' => 'Google Business Profile Management for Queens Small Businesses — Get Into the Local Map Pack and Stay There. Web Support Plaza manages Google Business Profiles for Queens small businesses to get them into that map pack and keep them there.',
        ]);
    }

    public function payPerClickAds()
    {
        return view('pages.pay-per-click-ads', [
            'title' => 'Pay Per Click Ads Services Queens NY | Web Support Plaza',
            'metaDescription' => 'Professional PPC advertising services in Queens, NY. Drive traffic, leads, and sales with targeted pay per click ad campaigns.',
        ]);
    }

    public function seoPackages()
    {
        return view('pages.seo-packages', [
            'title' => 'SEO Packages - Web Support Plaza',
            'metaDescription' => 'SEO Packages That Get Your Business to Page One on Google. Transparent monthly SEO plans built for small and medium-sized businesses in Queens, NY and the tri-state area. Local rankings, organic growth, and real results — starting at $800/month.',
        ]);
    }

    public function socialMediaMarketing()
    {
        return view('pages.social-media-marketing', [
            'title' => 'Social Media Marketing Services Queens NY | Web Support Plaza',
            'metaDescription' => 'Professional social media marketing services in Queens, NY. Grow your brand, engagement, and customers with targeted social campaigns.',
        ]);
    }

    public function socialMediaMarketingServices()
    {
        return view('pages.social-media-marketing-services', [
            'title' => 'Social Media Marketing Services Queens NY | Web Support Plaza',
            'metaDescription' => 'Professional social media marketing services in Queens, NY. Grow your brand, engagement, and customers with targeted social campaigns.',
        ]);
    }

    public function socialMediaPackages()
    {
        return view('pages.social-media-packages', [
            'title' => 'Social Media Management Packages Queens NY | Web Support Plaza - Web Support Plaza',
            'metaDescription' => 'Social media management packages from $2,500/month for Queens NY businesses. Facebook, Instagram, LinkedIn, TikTok, YouTube. Content creation, posting, ads & reporting. Call (855) 506-4724.',
        ]);
    }

    public function branding()
    {
        return view('pages.branding', [
            'title' => 'Branding Services in Queens NY | Web Support Plaza',
            'metaDescription' => 'Professional branding services in Queens, NY. Build a strong business identity with custom branding and creative marketing solutions.',
        ]);
    }

    public function identityDesign()
    {
        return view('pages.identity-design', [
            'title' => 'Identity Design Services in Queens NY | Branding & Logo Design - Web Support Plaza',
            'metaDescription' => 'Custom identity design and branding services including logo design, print materials, and business branding in Queens, NY.',
        ]);
    }

    public function logoDesign()
    {
        return view('pages.logo-design', [
            'title' => 'Logo Design Services in Queens NY | Web Support Plaza',
            'metaDescription' => 'Professional logo design services in Queens, NY. Custom business logos designed to build a strong and memorable brand identity.',
        ]);
    }

    public function printDesign()
    {
        return view('pages.print-design', [
            'title' => 'Print Design Services in Queens NY | Web Support Plaza',
            'metaDescription' => 'Professional print design services in Queens, NY. Custom brochures, flyers, business cards, and marketing materials for businesses.',
        ]);
    }

    public function banners()
    {
        return view('pages.banners', [
            'title' => 'Banner Design Services in Queens NY | Web Support Plaza',
            'metaDescription' => 'Professional banner design services in Queens, NY. Custom banners created for branding, promotions, events, and business marketing.',
        ]);
    }

    public function eNewsletterDesign()
    {
        return view('pages.e-newsletter-design', [
            'title' => 'E-Newsletter Design Services in Queens NY | Web Support Plaza',
            'metaDescription' => 'Professional e-newsletter design services for businesses in Queens, NY. Custom email newsletter designs to boost branding and engagement.',
        ]);
    }

    public function mobileApplication()
    {
        return view('pages.mobile-application', [
            'title' => 'Custom Mobile App Development for Queens Small Businesses',
            'metaDescription' => 'Not every business needs a mobile app. But for businesses that do, the right app creates a direct, branded channel to customers that a website alone cannot replicate. Web Support Plaza',
        ]);
    }

    public function mobileAppDevelopment()
    {
        return view('pages.mobile-app-development', [
            'title' => 'Custom Mobile App Development for Queens Small Businesses',
            'metaDescription' => 'Not every business needs a mobile app. But for businesses that do, the right app creates a direct, branded channel to customers that a website alone cannot replicate. Web Support Plaza',
        ]);
    }
}
