<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTrailingSlash
{
    /**
     * Handle an incoming request to enforce SEO trailing slash.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! in_array($request->method(), ['GET', 'HEAD'], true)) {
            return $next($request);
        }

        $rawUri = $request->getRequestUri();
        $path = explode('?', $rawUri)[0];

        // Normalize legacy WordPress front-controller URLs (/index.php/...).
        // The web server strips index.php from the routed path, so handle it
        // before the trailing-slash redirect builds a URL from the raw URI.
        if ($path === '/index.php' || str_starts_with($path, '/index.php/')) {
            $slug = trim(substr($path, strlen('/index.php')), '/');
            $targetPath = $slug === '' || $slug === 'home' ? '/' : '/'.$slug.'/';
            $queryString = $request->getQueryString();
            $scheme = app()->environment('production') ? 'https' : $request->getScheme();

            return redirect()->to(
                $scheme.'://'.$request->getHttpHost().$targetPath.($queryString ? '?'.$queryString : ''),
                301,
            );
        }

        // Skip root URL
        if ($path === '/' || $path === '') {
            return $next($request);
        }

        // If path already ends with slash, proceed
        if (str_ends_with($path, '/')) {
            return $next($request);
        }

        // Skip assets and files with extensions
        if (preg_match('/\.[a-zA-Z0-9]+$/', $path)) {
            return $next($request);
        }

        // Skip internal/API routes
        if ($request->is('api/*') || $request->is('_*') || $request->is('up')) {
            return $next($request);
        }

        $queryString = $request->getQueryString();
        $target = rtrim(url('/'), '/').$path.'/'.($queryString ? '?'.$queryString : '');

        return redirect()->to($target, 301);
    }
}
