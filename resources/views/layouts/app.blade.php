<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#0ea5e9">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2KVN5343CW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-2KVN5343CW');
    </script>

    <!-- SEO Meta Tags -->
    <title>{{ $title ?? 'Web Support Plaza | Web Design & Digital Marketing Agency | Queens NY' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Web Support Plaza is a Queens NY digital marketing agency offering web design, SEO & local marketing.' }}">
    <meta name="robots" content="index, follow, max-image-preview:large">
    @php
        $currentUrl = url()->current();
        $canonicalWithSlash = $currentUrl === url('/') ? url('/') . '/' : rtrim($currentUrl, '/') . '/';
    @endphp
    <link rel="canonical" href="{{ $canonicalUrl ?? $canonicalWithSlash }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? 'Web Support Plaza' }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Web Support Plaza is a Queens NY digital marketing agency offering web design, SEO & local marketing.' }}">
    <meta property="og:url" content="{{ $canonicalUrl ?? $canonicalWithSlash }}">
    <meta property="og:site_name" content="Web Support Plaza">
    <meta property="og:image" content="{{ asset('images/seo/web-design-digital-marketing-agency-queens.png') }}">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/2025/05/cropped-favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('images/2025/05/cropped-favicon-192x192.png') }}" sizes="192x192">
    <link rel="apple-touch-icon" href="{{ asset('images/2025/05/cropped-favicon-180x180.png') }}">
    <meta name="msapplication-TileImage" content="{{ asset('images/2025/05/cropped-favicon-270x270.png') }}">

    <!-- Google Fonts - Unified Modern Agency Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">

    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    @yield('page_css')
</head>
<body class="@yield('body_class', 'wsp-body')">

    <!-- Header Navigation -->
    @include('partials.header')

    <!-- Flash Notifications -->
    @if(session('success'))
        <div class="wsp-container" style="margin-top: 1.5rem;">
            <div class="wsp-alert wsp-alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif
    @if(session('error'))
        <div class="wsp-container" style="margin-top: 1.5rem;">
            <div class="wsp-alert wsp-alert-error">
                {{ session('error') }}
            </div>
        </div>
    @endif

    <!-- Main Page Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Footer Partial -->
    @include('partials.footer')

    <!-- Site Vanilla Scripts -->
    <script src="{{ asset('js/site.js') }}"></script>
    @yield('page_scripts')
</body>
</html>
