@extends('layouts.app')

@section('title', 'Custom Banners for Queens Businesses | Web Support Plaza')
@section('meta_description', 'Web Support Plaza designs and produces banners for small businesses across Queens, built for storefronts, events, and job sites.')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Custom Banner Design</span>
                <h1 class="wsp-hero-title">
                    Banners That Get Noticed, Built for Queens <span class="highlight">Storefronts, Events, and Job Sites</span>
                </h1>
                <p class="wsp-hero-lead">
                    A banner is often the first thing a customer sees before they ever walk through your door or land on your website. Web Support Plaza designs and produces banners for small businesses across Queens, built to actually get looked at instead of blending into the block.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get a Free Banner Design Consultation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/custom-trade-show-event-banner-design.png') }}" alt="Custom Banner Design for Queens Businesses" class="wsp-hero-image" width="600" height="600">
            </div>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<section class="wsp-stats-bar">
    <div class="wsp-container">
        <div class="wsp-stats-grid">
            <div class="wsp-stat-item">
                <div class="wsp-stat-number" data-target="14">14</div>
                <div class="wsp-stat-label">Years in Business</div>
            </div>
            <div class="wsp-stat-item">
                <div class="wsp-stat-number" data-target="250" data-suffix="+">250+</div>
                <div class="wsp-stat-label">Projects Delivered</div>
            </div>
            <div class="wsp-stat-item">
                <div class="wsp-stat-number" data-target="500000" data-suffix="+">500,000+</div>
                <div class="wsp-stat-label">Leads Generated</div>
            </div>
            <div class="wsp-stat-item">
                <div class="wsp-stat-number" data-target="40" data-suffix="+">40+</div>
                <div class="wsp-stat-label">Digital Professionals</div>
            </div>
            <div class="wsp-stat-item">
                <div class="wsp-stat-number">2012</div>
                <div class="wsp-stat-label">Queens-Rooted Since</div>
            </div>
        </div>
    </div>
</section>

<!-- Problem Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/creative-outdoor-banner-design-solutions.png') }}" alt="High Visibility Custom Banner Design" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">High Visibility</span>
                <h2 class="wsp-section-title">Most Banners Get Made <span class="highlight">in a Rush, and It Shows</span></h2>
                <div class="content-styled">
                    <p>A banner only works if someone can read it in the two or three seconds they have while walking or driving by. Get the size, contrast, or layout wrong, and it becomes expensive wallpaper instead of a lead source.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solution Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-split reverse">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/custom-print-design-marketing-collateral.png') }}" alt="Outdoor Banners Built to Be Read" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Readability First</span>
                <h2 class="wsp-section-title">We Design Banners That Are <span class="highlight">Built to Actually Be Read</span></h2>
                <div class="content-styled">
                    <p>Since 2012, Web Support Plaza has designed signage and print materials for restaurants, contractors, retailers, and event organizers across Queens. We know what reads clearly from a moving car and what disappears the moment it's printed at full size.</p>
                    <p>Every banner we design starts with where it's going to hang and how far away people will be standing when they see it. That decides the font size, the layout, and how much information actually belongs on it.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What You're Getting Grid -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Banner Types</span>
            <h2 class="wsp-section-title">What You're <span class="highlight">Getting</span></h2>
            <p class="wsp-section-desc">Purpose-built designs crafted for impact, durability, and exact environmental fit.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Storefront &amp; Business Banners</h3>
                <p class="wsp-card-text">For grand openings, promotions, or permanent signage above your entrance. Designed to match your existing branding so it looks like part of your business, not a temporary add-on.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                </div>
                <h3 class="wsp-card-title">Event &amp; Trade Show Banners</h3>
                <p class="wsp-card-text">Pull-up banners, backdrop banners, and table displays built for booths and events. Clear messaging that works whether someone's standing three feet away or scanning the room from across a hall.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                </div>
                <h3 class="wsp-card-title">Construction &amp; Job Site Banners</h3>
                <p class="wsp-card-text">Durable, weather-ready banners with your business name, services, and contact info sized to actually be read by someone driving past at 30 miles an hour.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Vinyl &amp; Outdoor Banners</h3>
                <p class="wsp-card-text">Built for outdoor conditions with materials that hold color and don't tear or fade after a few weeks in the sun.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg>
                </div>
                <h3 class="wsp-card-title">Retractable &amp; Indoor Banners</h3>
                <p class="wsp-card-text">For lobbies, checkout counters, and waiting rooms. Compact, reusable, and easy to move between locations or events.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                </div>
                <h3 class="wsp-card-title">Custom Sizing &amp; Layout</h3>
                <p class="wsp-card-text">Every banner is sized to its actual location, not forced into a standard template that leaves half the space empty or crams everything into a corner.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3.5rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                <span>Tell Us What You Need Designed</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Process</span>
            <h2 class="wsp-section-title">How This <span class="highlight">Gets Built</span></h2>
            <p class="wsp-section-desc">From site measurement to print delivery in three clear steps.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <span style="font-weight: 800; font-size: 1.25rem;">01</span>
                </div>
                <h3 class="wsp-card-title">1. Discovery</h3>
                <p class="wsp-card-text">We find out where the banner is going, who's going to see it, and from how far away. That decides everything about the design before we open a design file.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <span style="font-weight: 800; font-size: 1.25rem;">02</span>
                </div>
                <h3 class="wsp-card-title">2. Design and Review</h3>
                <p class="wsp-card-text">We build the layout using your existing branding, present it for your feedback, and refine it until the sizing and message are right.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <span style="font-weight: 800; font-size: 1.25rem;">03</span>
                </div>
                <h3 class="wsp-card-title">3. Delivery</h3>
                <p class="wsp-card-text">Print-ready files delivered directly to you, or we coordinate production and printing through our vendor network if you'd rather not handle that part yourself.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3.5rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-secondary wsp-btn-lg">
                <span>Start With a Free Consultation</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- Trust Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="wsp-split-content">
                <span class="wsp-badge">Queens Heritage</span>
                <h2 class="wsp-section-title">Fourteen Years Designing for <span class="highlight">Queens Businesses</span></h2>
                <div class="content-styled">
                    <p>Banner design at WSP comes from the same in-house team handling your logo, website, and print materials, so everything your customers see, in person or online, looks like it belongs to the same business. We work in English and Spanish.</p>
                </div>
                <div style="margin-top: 2rem; display: flex; flex-direction: column; gap: 0.85rem;">
                    <div style="display: flex; align-items: center; gap: 0.75rem; font-weight: 600; color: var(--dark);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>14 Years in Business</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.75rem; font-weight: 600; color: var(--dark);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>250+ Projects Delivered</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.75rem; font-weight: 600; color: var(--dark);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>500,000+ Leads Generated</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.75rem; font-weight: 600; color: var(--dark);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Queens-Rooted Since 2012</span>
                    </div>
                </div>
                <div style="margin-top: 2.25rem;">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Book a Free Consultation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
            <div class="split-image-col">
                <img src="{{ asset('images/seo/about-web-support-plaza-queens-team.png') }}" alt="Queens In-House Design Agency" class="wsp-split-image" width="600" height="450">
            </div>
        </div>
    </div>
</section>

<!-- Target Audience -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Industries</span>
            <h2 class="wsp-section-title">Built for Businesses <span class="highlight">That Need to Be Seen</span></h2>
            <p class="wsp-section-desc">We design high-impact banners across a wide variety of local industries.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-card" style="padding: 1.75rem;">
                <div style="display: flex; align-items: center; gap: 0.85rem;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span style="font-weight: 600; color: var(--dark);">Restaurants and food businesses running promotions or grand openings</span>
                </div>
            </div>
            <div class="wsp-card" style="padding: 1.75rem;">
                <div style="display: flex; align-items: center; gap: 0.85rem;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span style="font-weight: 600; color: var(--dark);">Contractors and tradespeople needing job site or truck signage</span>
                </div>
            </div>
            <div class="wsp-card" style="padding: 1.75rem;">
                <div style="display: flex; align-items: center; gap: 0.85rem;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span style="font-weight: 600; color: var(--dark);">Retail businesses with storefront and seasonal banners</span>
                </div>
            </div>
            <div class="wsp-card" style="padding: 1.75rem;">
                <div style="display: flex; align-items: center; gap: 0.85rem;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span style="font-weight: 600; color: var(--dark);">Real estate agents and brokers with open house or listing banners</span>
                </div>
            </div>
            <div class="wsp-card" style="padding: 1.75rem;">
                <div style="display: flex; align-items: center; gap: 0.85rem;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span style="font-weight: 600; color: var(--dark);">Event organizers and businesses attending trade shows</span>
                </div>
            </div>
            <div class="wsp-card" style="padding: 1.75rem;">
                <div style="display: flex; align-items: center; gap: 0.85rem;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span style="font-weight: 600; color: var(--dark);">Medical and dental practices announcing openings or new services</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Testimonials</span>
            <h2 class="wsp-section-title">What Queens Business <span class="highlight">Owners Say</span></h2>
            <p class="wsp-section-desc">Street-level impact for local brands across Queens.</p>
        </div>
        <div class="wsp-cards-grid" style="grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));">
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“Our old banner had a blurry logo you couldn't even read from the street. WSP redesigned it and sized it properly for our storefront. People actually mention it now.”</p>
                <div class="wsp-quote-author">
                    <strong>Restaurant Owner</strong>
                    <span>— Astoria, NY</span>
                </div>
            </div>
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“We needed something for a home show booth in about a week. WSP got it designed, printed, and delivered in time, and it looked better than half the booths around us.”</p>
                <div class="wsp-quote-author">
                    <strong>Contractor</strong>
                    <span>— Queens, NY</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">FAQ</span>
            <h2 class="wsp-section-title">Common Questions About <span class="highlight">Banner Design With WSP</span></h2>
            <p class="wsp-section-desc">Answers to common questions regarding banner specs, outdoor durability, and printing.</p>
        </div>
        <div class="wsp-faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="wsp-faq-item active">
                <button type="button" class="wsp-faq-question">
                    <span>How long does a banner design project take?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Most banners are designed within a few days to a week, depending on complexity and how quickly we get feedback from you.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Do you handle printing and production?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    We deliver print-ready files, and we can also coordinate printing through our vendor network if you'd rather not manage that separately.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>What sizes do you design for?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Any size, from small retractable indoor banners to large outdoor vinyl banners. We size everything to the actual location it's going.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Can you match a banner to branding I already have?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes. We work from your existing logo and brand colors, or build new branding alongside the banner if you need both.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Do you design for events and trade shows specifically?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes, including pull-up banners, backdrops, and table displays sized for booth spaces.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Will the banner hold up outdoors?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    We design for outdoor-rated materials that resist fading and weather damage, and we can recommend the right material based on where it's going.
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span>More Questions? Call Us: (855) 506-4724</span>
            </a>
        </div>
    </div>
</section>

<!-- Final CTA Banner -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-cta-banner">
            <h2>Your Banner Should Work as <span style="background: linear-gradient(135deg, #38bdf8 0%, #0ea5e9 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Hard as Your Storefront Does</span></h2>
            <p>A free consultation is the starting point. Tell us where it's going and what it needs to say, and we'll tell you exactly what we'd design.</p>
            <p style="font-size: 0.95rem; opacity: 0.88; margin-bottom: 2rem;"><strong>Location:</strong> Forest Hills, Queens, New York · Serving Queens, Brooklyn, Manhattan, Nassau, Suffolk, New Jersey, and Connecticut</p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Book Your Free Banner Design Consultation</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
                <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-outline-white wsp-btn-lg">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span>(855) 506-4724</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Bottom Value Statement -->
<section class="wsp-section" style="padding: 3rem 0; text-align: center;">
    <div class="wsp-container">
        <h2 style="font-size: 2.25rem; font-weight: 800; color: var(--dark);">
            We don't just build websites. <span class="highlight">We build businesses.</span>
        </h2>
        <p style="color: var(--text-muted); font-size: 1.1rem; margin-top: 0.5rem;">
            Queens, New York. Serving the tri-state area since 2012.
        </p>
    </div>
</section>
@endsection
