@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Page 1 Rankings</span>
                <h1 class="wsp-hero-title">
                    SEO Packages That Get Your <br><span class="highlight">Business to Page One on Google</span>
                </h1>
                <p class="wsp-hero-lead">
                    Transparent monthly SEO plans built for small and medium-sized businesses in Queens, NY and the tri-state area. Local rankings, organic growth, and real results — starting at $800/month.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Book a Free Website Consultation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                    <a href="mailto:info@websupportplaza.com" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span>Email Us</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/seo-organic-marketing-lead-generation-queens.png') }}" alt="Queens SEO Packages" class="wsp-hero-image" width="600" height="600">
            </div>
        </div>
    </div>
</section>

<!-- SEO Packages Grid -->
<section class="wsp-section bg-light" id="seo-packages-grid">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Monthly Growth Plans</span>
            <h2 class="wsp-section-title">SEO Packages for <span class="highlight">Queens &amp; NYC Businesses</span></h2>
            <p class="wsp-section-desc">All plans include keyword research, on-page optimization, local listing management, ranking reports, and 24/7 support. No contracts — cancel anytime.</p>
        </div>

        <div class="wsp-pricing-grid">
            <!-- Local Booster -->
            <div class="wsp-price-card">
                <div class="wsp-price-header">
                    <span class="wsp-price-tier">Entry</span>
                    <h3 class="wsp-price-title">Local Booster</h3>
                    <p class="wsp-price-desc">Best for local small businesses getting started with SEO</p>
                    <div class="wsp-stat-number" style="margin-top: 1rem;">$800<span style="font-size: 1rem; color: var(--text-muted); font-weight: 500;">/mo</span></div>
                    <div style="font-size: 0.85rem; color: var(--text-muted);">Month-to-month • Cancel anytime</div>
                </div>

                <div class="wsp-price-features">
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Up to 5 pages optimized monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>15–25 target keywords</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Full technical SEO installation</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Competitive analysis &amp; research</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>10 location optimizations</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Sitemap creation &amp; submission</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Google Business Profile management</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Search engine registration</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Social media profile setup</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>8–12 Instagram posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>8–12 Facebook posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Monthly ranking report</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Full content ownership</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>24/7 eTech support</span>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-outline" style="width: 100%;">Book a Free Consultation</a>
            </div>

            <!-- Traffic Booster (Featured) -->
            <div class="wsp-price-card featured">
                <span class="wsp-popular-tag">Most Popular</span>
                <div class="wsp-price-header">
                    <span class="wsp-price-tier">Growth</span>
                    <h3 class="wsp-price-title">Traffic Booster</h3>
                    <p class="wsp-price-desc">Best for competitive local businesses wanting faster growth</p>
                    <div class="wsp-stat-number" style="margin-top: 1rem;">$1,600<span style="font-size: 1rem; color: var(--text-muted); font-weight: 500;">/mo</span></div>
                    <div style="font-size: 0.85rem; color: var(--text-muted);">Month-to-month • Cancel anytime</div>
                </div>

                <div class="wsp-price-features">
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <strong>Everything in Local Booster, plus:</strong>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Up to 10 pages optimized monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>25–45 target keywords</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>20 location optimizations</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Preparation &amp; ranking reports</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>12–20 Instagram posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>12–20 Facebook posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>15–30 X / Twitter posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>4 video shorts monthly (YouTube Shorts, Reels, TikTok)</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Social media profile expansion</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--primary); font-weight: 600;">⭐ Includes video content creation</span>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary" style="width: 100%;">Book a Free Consultation</a>
            </div>

            <!-- Target Booster -->
            <div class="wsp-price-card">
                <div class="wsp-price-header">
                    <span class="wsp-price-tier">Premium</span>
                    <h3 class="wsp-price-title">Target Booster</h3>
                    <p class="wsp-price-desc">Best for established businesses competing for top positions</p>
                    <div class="wsp-stat-number" style="margin-top: 1rem;">$2,500<span style="font-size: 1rem; color: var(--text-muted); font-weight: 500;">/mo</span></div>
                    <div style="font-size: 0.85rem; color: var(--text-muted);">Month-to-month • Cancel anytime</div>
                </div>

                <div class="wsp-price-features">
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <strong>Everything in Traffic Booster, plus:</strong>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Up to 15 pages optimized monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>55–65 target keywords</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Paid press release (1 monthly)</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>10 video shorts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>15–30 Instagram posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>15–30 Facebook posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>15–60 X / Twitter posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>SEO Booster add-on available</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Traffic Booster reporting included</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Priority support</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--primary); font-weight: 600;">⭐ Includes press release distribution</span>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-secondary" style="width: 100%;">Book a Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- What Makes Our SEO Different -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Our Advantage</span>
            <h2 class="wsp-section-title">What Makes Our <span class="highlight">SEO Different</span></h2>
            <p class="wsp-section-desc">Consistent, accountable search engine optimization tailored to the tri-state competitive landscape.</p>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/local-seo-ranking-icon.png') }}" alt="Local SEO Expertise">
                </div>
                <h3 class="wsp-card-title">Local SEO Expertise</h3>
                <p class="wsp-card-text">
                    We’ve been ranking Queens and tri-state businesses on Google for 14 years. We know the neighborhoods, the search intent, and the competition better than any out-of-town agency.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/ppc-advertising-icon.png') }}" alt="Transparent Monthly Reports">
                </div>
                <h3 class="wsp-card-title">Transparent Monthly Reports</h3>
                <p class="wsp-card-text">
                    Every month you receive a clear ranking report showing where your keywords moved, traffic changes, and the work completed. No jargon, no smoke and mirrors.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-design-ui-icon.png') }}" alt="Google Business Profile Included">
                </div>
                <h3 class="wsp-card-title">Google Business Profile Included</h3>
                <p class="wsp-card-text">
                    GBP management is included in all plans — because Google Maps rankings are where most local customers find and choose a business.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/social-media-management-icon.png') }}" alt="Social Media Posts Included">
                </div>
                <h3 class="wsp-card-title">Social Media Posts Included</h3>
                <p class="wsp-card-text">
                    Social signals support SEO. All plans include Instagram and Facebook posts monthly — so your social presence and search presence grow together.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-development-code-icon.png') }}" alt="Competitive Analysis Every Month">
                </div>
                <h3 class="wsp-card-title">Competitive Analysis Every Month</h3>
                <p class="wsp-card-text">
                    We monitor what your competitors are doing in search and adjust your strategy accordingly — so you’re always moving forward, not standing still.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/creative-branding-idea-icon.png') }}" alt="No Long-Term Contracts">
                </div>
                <h3 class="wsp-card-title">No Long-Term Contracts</h3>
                <p class="wsp-card-text">
                    We earn your business month-to-month with results. No 12-month lock-in. No cancellation fees. Just consistent SEO work that builds over time.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-cta-banner">
            <h2>Ready to Rank Higher and Get More Calls?</h2>
            <p>Book a free SEO audit. We’ll review your current Google rankings, analyze your top competitors, and show you exactly what it would take to get to page one.</p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Book a Free SEO Audit</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
                <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-outline-white wsp-btn-lg">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span>(855) 506-4724</span>
                </a>
                <a href="mailto:info@websupportplaza.com" class="wsp-btn wsp-btn-outline-white wsp-btn-lg">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <span>Email Us</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQs Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">SEO FAQ</span>
            <h2 class="wsp-section-title">SEO Package <span class="highlight">Questions</span></h2>
            <p class="wsp-section-desc">Common questions about our search engine optimization plans and deliverables.</p>
        </div>

        <div class="wsp-accordion">
            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>How much does SEO cost in Queens, NY?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Our SEO packages start at $800/month for the Local Booster plan — ideal for small local businesses getting started with organic search. Our Traffic Booster plan is $1,600/month and the Target Booster is $2,500/month for businesses targeting more competitive keywords.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Do your SEO packages include Google Business Profile?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes. Google Business Profile management and optimization is included in all SEO packages. GBP is the foundation of all local SEO work — it directly affects your Google Maps rankings and local pack visibility.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>What keywords will you target for my business?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>We begin every SEO engagement with a comprehensive keyword research session — identifying the terms your customers actually use, the volume of those searches, and the competition level. We then build a strategy targeting the best opportunities for your specific business and market.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>How long before I see SEO results?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Local SEO improvements — particularly Google Business Profile and citation work — can produce visible results within 4–8 weeks. Broader keyword ranking improvements typically develop over 3–6 months. SEO compounds: the longer and more consistently you invest, the stronger your results become.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Are there long-term contracts?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>No. We work month-to-month — because we believe in earning your business through results, not locking you in. SEO does take time to produce compounding results, so we recommend committing to at least 6 months to see the full picture.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Can you help with national SEO as well as local?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes. While local SEO is our core strength for Queens and tri-state businesses, we also run national SEO campaigns for businesses with service areas or customer bases beyond the immediate region. Our Target Booster plan is well-suited for national targeting.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
