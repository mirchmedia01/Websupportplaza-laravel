<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Cloudflare terminates TLS and forwards requests over HTTP, so the
        // app would otherwise generate http:// canonical, sitemap, and
        // redirect URLs in production.
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
