<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Primary Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/how-it-works', [PageController::class, 'howItWorks'])->name('how-it-works');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');

// Service Pages - Web & Digital
Route::get('/custom-web-design', [PageController::class, 'customWebDesign'])->name('custom-web-design');
Route::get('/construction-web-design', [PageController::class, 'constructionWebDesign'])->name('construction-web-design');
Route::get('/real-estate-web-design', [PageController::class, 'realEstateWebDesign'])->name('real-estate-web-design');
Route::redirect('/restaurant-web-design', '/custom-web-design/', 301);
Route::get('/website-development', [PageController::class, 'websiteDevelopment'])->name('website-development');
Route::get('/web-portals', [PageController::class, 'webPortals'])->name('web-portals');
Route::get('/website-packages', [PageController::class, 'websitePackages'])->name('website-packages');

// Service Pages - Marketing & SEO
Route::get('/digital-marketing', [PageController::class, 'digitalMarketing'])->name('digital-marketing');
Route::get('/search-engine-optimization-organic-reach', [PageController::class, 'searchEngineOptimizationOrganicReach'])->name('search-engine-optimization-organic-reach');
Route::get('/local-seo', [PageController::class, 'localSeo'])->name('local-seo');
Route::get('/google-business-profile-management', [PageController::class, 'googleBusinessProfileManagement'])->name('google-business-profile-management');
Route::redirect('/gbp-management', '/google-business-profile-management/', 301);
Route::get('/pay-per-click-ads', [PageController::class, 'payPerClickAds'])->name('pay-per-click-ads');
Route::get('/seo-packages', [PageController::class, 'seoPackages'])->name('seo-packages');

// Service Pages - Social Media
Route::redirect('/social-media-marketing', '/social-media-marketing-services/', 301);
Route::get('/social-media-marketing-services', [PageController::class, 'socialMediaMarketingServices'])->name('social-media-marketing-services');
Route::get('/social-media-packages', [PageController::class, 'socialMediaPackages'])->name('social-media-packages');

// Service Pages - Design & Branding
Route::get('/branding', [PageController::class, 'branding'])->name('branding');
Route::get('/identity-design', [PageController::class, 'identityDesign'])->name('identity-design');
Route::get('/logo-design', [PageController::class, 'logoDesign'])->name('logo-design');
Route::get('/print-design', [PageController::class, 'printDesign'])->name('print-design');
Route::get('/banners', [PageController::class, 'banners'])->name('banners');
Route::get('/e-newsletter-design', [PageController::class, 'eNewsletterDesign'])->name('e-newsletter-design');

// Service Pages - Mobile
Route::redirect('/mobile-application', '/mobile-app-development/', 301);
Route::redirect('/mobile-marketing', '/digital-marketing/', 301);
Route::get('/mobile-app-development', [PageController::class, 'mobileAppDevelopment'])->name('mobile-app-development');

// Contact / Inquiry Submission
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

// Fallback & Legacy WordPress Redirects
Route::get('/index.php/{slug?}', function ($slug = null) {
    if (! $slug || $slug === 'home') {
        return redirect()->route('home', [], 301);
    }

    return redirect('/'.trim($slug, '/'), 301);
})->where('slug', '.*');
