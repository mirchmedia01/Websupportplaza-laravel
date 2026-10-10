<!-- Top Announcement Bar -->
<div class="wsp-topbar">
    <div class="wsp-container wsp-topbar-inner">
        <div class="wsp-topbar-contact">
            <span class="wsp-topbar-badge">
                <span class="status-dot"></span>
                <span>Queens NY Agency · Est. 2012</span>
            </span>
            <a href="tel:+(855)506-4724">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span>(855) 506-4724</span>
            </a>
            <a href="mailto:info@websupportplaza.com">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                <span>info@websupportplaza.com</span>
            </a>
        </div>
        <div class="wsp-topbar-socials">
            <a href="https://www.facebook.com/websupportplaza" target="_blank" rel="noopener" aria-label="Facebook">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
            </a>
            <a href="https://www.instagram.com/websupportplaza" target="_blank" rel="noopener" aria-label="Instagram">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
            </a>
            <a href="https://www.linkedin.com/company/11775324/" target="_blank" rel="noopener" aria-label="LinkedIn">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
            </a>
        </div>
    </div>
</div>

<!-- Main Sticky Navigation Header -->
<header class="wsp-header">
    <div class="wsp-container wsp-nav-wrapper">
        <a href="{{ route('home') }}/" class="wsp-logo" aria-label="Web Support Plaza Home">
            <img src="{{ asset('images/2025/05/web-support-plaza-logo-300x65.png') }}" alt="Web Support Plaza Logo" width="220" height="48">
        </a>

        <!-- Desktop Navigation -->
        <nav class="wsp-nav-menu" aria-label="Primary Navigation">
            <div class="wsp-nav-item">
                <a href="{{ route('home') }}/" class="wsp-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </div>
            <div class="wsp-nav-item">
                <a href="{{ route('about') }}/" class="wsp-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
            </div>
            
            <!-- Services Dropdown -->
            <div class="wsp-nav-item">
                <a href="{{ route('services') }}/" class="wsp-nav-link {{ request()->routeIs('services*') || request()->routeIs('website-*') || request()->routeIs('custom-web-*') || request()->routeIs('construction-*') || request()->routeIs('real-estate-*') || request()->routeIs('local-seo') || request()->routeIs('search-engine*') || request()->routeIs('google-business*') || request()->routeIs('gbp-*') || request()->routeIs('pay-per-click*') || request()->routeIs('social-media*') || request()->routeIs('mobile-app*') || request()->routeIs('branding*') || request()->routeIs('identity-design') || request()->routeIs('logo-design') || request()->routeIs('print-design') || request()->routeIs('banners') || request()->routeIs('e-newsletter*') || request()->routeIs('web-portals') ? 'active' : '' }}">
                    <span>Services</span>
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <div class="wsp-nav-dropdown">
                    <a href="{{ route('website-development') }}/" class="wsp-dropdown-item">Website Development</a>
                    <a href="{{ route('custom-web-design') }}/" class="wsp-dropdown-item">Custom Web Design</a>
                    <a href="{{ route('construction-web-design') }}/" class="wsp-dropdown-item">Construction Web Design</a>
                    <a href="{{ route('real-estate-web-design') }}/" class="wsp-dropdown-item">Real Estate Web Design</a>
                    <a href="{{ route('web-portals') }}/" class="wsp-dropdown-item">Web Portals</a>
                    <a href="{{ route('local-seo') }}/" class="wsp-dropdown-item">Local SEO</a>
                    <a href="{{ route('search-engine-optimization-organic-reach') }}/" class="wsp-dropdown-item">SEO Organic Reach</a>
                    <a href="{{ route('google-business-profile-management') }}/" class="wsp-dropdown-item">Google Business Profile</a>
                    <a href="{{ route('pay-per-click-ads') }}/" class="wsp-dropdown-item">Pay-Per-Click Ads</a>
                    <a href="{{ route('social-media-marketing') }}/" class="wsp-dropdown-item">Social Media Marketing</a>
                    <a href="{{ route('mobile-app-development') }}/" class="wsp-dropdown-item">Mobile App Development</a>
                    <a href="{{ route('branding') }}/" class="wsp-dropdown-item">Branding & Identity</a>
                </div>
            </div>

            <!-- Packages Dropdown -->
            <div class="wsp-nav-item">
                <a href="{{ route('website-packages') }}/" class="wsp-nav-link {{ request()->routeIs('*packages*') ? 'active' : '' }}">
                    <span>Packages</span>
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <div class="wsp-nav-dropdown">
                    <a href="{{ route('website-packages') }}/" class="wsp-dropdown-item">Website Packages</a>
                    <a href="{{ route('seo-packages') }}/" class="wsp-dropdown-item">SEO Packages</a>
                    <a href="{{ route('social-media-packages') }}/" class="wsp-dropdown-item">Social Media Packages</a>
                </div>
            </div>

            <div class="wsp-nav-item">
                <a href="{{ route('how-it-works') }}/" class="wsp-nav-link {{ request()->routeIs('how-it-works') ? 'active' : '' }}">How it Works</a>
            </div>

            <div class="wsp-nav-item">
                <a href="{{ route('contact') }}/" class="wsp-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
            </div>
        </nav>

        <!-- CTA Actions & Mobile Hamburger -->
        <div class="wsp-nav-actions">
            <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-primary wsp-btn-sm wsp-nav-phone-btn" aria-label="Call Web Support Plaza at (855) 506-4724">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span class="wsp-nav-phone-text">(855) 506-4724</span>
            </a>
            
            <button type="button" class="wsp-mobile-toggle" aria-label="Toggle navigation menu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Slide-Out Drawer -->
<div class="wsp-mobile-menu">
    <div class="wsp-mobile-drawer">
        <div class="wsp-mobile-drawer-header">
            <a href="{{ route('home') }}/" class="wsp-mobile-drawer-logo" aria-label="Web Support Plaza Home">
                <img src="{{ asset('images/2025/05/web-support-plaza-logo-300x65.png') }}" alt="Web Support Plaza Logo" width="160" height="35" style="max-height: 35px; width: auto; object-fit: contain;">
            </a>
            <button type="button" class="wsp-mobile-close" aria-label="Close menu">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>

        <div class="wsp-mobile-nav">
            <a href="{{ route('home') }}/" class="wsp-mobile-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}/" class="wsp-mobile-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
            
            <div class="wsp-mobile-item-group">
                <div class="wsp-mobile-link-wrapper">
                    <a href="{{ route('services') }}/" class="wsp-mobile-link">Services</a>
                    <button type="button" class="wsp-mobile-subnav-toggle" aria-label="Toggle Services submenu">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                </div>
                <div class="wsp-mobile-subnav">
                    <a href="{{ route('website-development') }}/" class="wsp-mobile-sublink">Website Development</a>
                    <a href="{{ route('custom-web-design') }}/" class="wsp-mobile-sublink">Custom Web Design</a>
                    <a href="{{ route('construction-web-design') }}/" class="wsp-mobile-sublink">Construction Web Design</a>
                    <a href="{{ route('real-estate-web-design') }}/" class="wsp-mobile-sublink">Real Estate Web Design</a>
                    <a href="{{ route('web-portals') }}/" class="wsp-mobile-sublink">Web Portals</a>
                    <a href="{{ route('local-seo') }}/" class="wsp-mobile-sublink">Local SEO</a>
                    <a href="{{ route('search-engine-optimization-organic-reach') }}/" class="wsp-mobile-sublink">SEO Organic Reach</a>
                    <a href="{{ route('google-business-profile-management') }}/" class="wsp-mobile-sublink">Google Business Profile</a>
                    <a href="{{ route('pay-per-click-ads') }}/" class="wsp-mobile-sublink">Pay-Per-Click Ads</a>
                    <a href="{{ route('social-media-marketing') }}/" class="wsp-mobile-sublink">Social Media Marketing</a>
                    <a href="{{ route('mobile-app-development') }}/" class="wsp-mobile-sublink">Mobile App Development</a>
                    <a href="{{ route('branding') }}/" class="wsp-mobile-sublink">Branding &amp; Identity</a>
                </div>
            </div>

            <div class="wsp-mobile-item-group">
                <div class="wsp-mobile-link-wrapper">
                    <a href="{{ route('website-packages') }}/" class="wsp-mobile-link">Packages</a>
                    <button type="button" class="wsp-mobile-subnav-toggle" aria-label="Toggle Packages submenu">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                </div>
                <div class="wsp-mobile-subnav">
                    <a href="{{ route('website-packages') }}/" class="wsp-mobile-sublink">Website Packages</a>
                    <a href="{{ route('seo-packages') }}/" class="wsp-mobile-sublink">SEO Packages</a>
                    <a href="{{ route('social-media-packages') }}/" class="wsp-mobile-sublink">Social Media Packages</a>
                </div>
            </div>

            <a href="{{ route('how-it-works') }}/" class="wsp-mobile-link {{ request()->routeIs('how-it-works') ? 'active' : '' }}">How it Works</a>
            <a href="{{ route('contact') }}/" class="wsp-mobile-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
        </div>
        
        <div class="wsp-mobile-drawer-footer">
            <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-primary" style="width: 100%;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span>Call (855) 506-4724</span>
            </a>
            <a href="{{ route('contact') }}/" class="wsp-btn wsp-btn-secondary" style="width: 100%;">Get a Free Quote</a>
            <div class="wsp-mobile-drawer-info">
                <span>Forest Hills, NY · Queens, New York</span>
            </div>
        </div>
    </div>
</div>
