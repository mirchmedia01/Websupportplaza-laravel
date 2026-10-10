@extends('layouts.app')

@section('title', 'Print Design for Queens Small Businesses | Web Support Plaza')
@section('meta_description', 'Web Support Plaza designs business cards, flyers, menus, signage, and presentation materials that hold up in person for Queens small businesses.')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Print &amp; Marketing Collateral</span>
                <h1 class="wsp-hero-title">
                    Print Materials That Make Your Business Look <span class="highlight">as Good as the Work You Do</span>
                </h1>
                <p class="wsp-hero-lead">
                    A worn-out business card or a flyer that looks thrown together undercuts everything else you've built. Web Support Plaza designs print materials for Queens small businesses that hold up in person, not just online.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get a Free Print Design Consultation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/custom-print-design-marketing-collateral.png') }}" alt="Print Design for Queens Businesses" class="wsp-hero-image" width="600" height="600">
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
                <img src="{{ asset('images/seo/creative-outdoor-banner-design-solutions.png') }}" alt="Print Design Impact" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Tangible Touchpoints</span>
                <h2 class="wsp-section-title">Customers Judge <span class="highlight">You in Person Too</span></h2>
                <div class="content-styled">
                    <p>A contractor handing over a faded business card. A restaurant with a menu that doesn't match its sign. A flyer with three fonts and no clear offer. None of it matches the quality of the actual work, and customers notice before they say a word.</p>
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
                <img src="{{ asset('images/seo/custom-trade-show-event-banner-design.png') }}" alt="Professional Print Collateral" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Brand Integration</span>
                <h2 class="wsp-section-title">We Design Print Materials That Match <span class="highlight">Your Brand, Not Just Fill Space</span></h2>
                <div class="content-styled">
                    <p>Since 2012, Web Support Plaza has designed print materials for restaurants, contractors, medical practices, and retail businesses across Queens. Everything is built to match your existing brand identity, not designed in isolation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What You're Getting Grid -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Offerings</span>
            <h2 class="wsp-section-title">What You're <span class="highlight">Getting</span></h2>
            <p class="wsp-section-desc">Every print piece is meticulously created to present your business at its absolute best.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line></svg>
                </div>
                <h3 class="wsp-card-title">Business Cards</h3>
                <p class="wsp-card-text">We look at your existing brand and figure out what materials you actually need to leave an unforgettable impression.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                </div>
                <h3 class="wsp-card-title">Brochures and Flyers</h3>
                <p class="wsp-card-text">Clear layout, clear offer, built to actually get read instead of tossed into the recycle bin.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                </div>
                <h3 class="wsp-card-title">Menus</h3>
                <p class="wsp-card-text">For restaurants, a menu that matches your signage and Instagram, not a mismatched paper insert.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Signage</h3>
                <p class="wsp-card-text">Storefront signs, banners, and window decals designed for maximum street visibility and aesthetic consistency.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                </div>
                <h3 class="wsp-card-title">Presentation Materials</h3>
                <p class="wsp-card-text">Proposals and pitch decks for contractors and professional services, built to look as sharp as your actual work.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
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
            <p class="wsp-section-desc">A proven three-step workflow from discovery to press-ready deliverables.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
                <h3 class="wsp-card-title">1. Discovery</h3>
                <p class="wsp-card-text">We learn your business, your customers, and what your competitors in Queens already look like.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">2. Design and Refinement</h3>
                <p class="wsp-card-text">We present a design, take your feedback, and refine it until it's right.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                </div>
                <h3 class="wsp-card-title">3. Delivery</h3>
                <p class="wsp-card-text">Print-ready files, plus vendor recommendations if you need production handled.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
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
                    <p>Print design is handled by the same in-house team that builds your logo, your website, and your social media, so everything you hand a customer looks like it came from the same business. We work in English and Spanish.</p>
                </div>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; margin-top: 1.5rem;">
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-weight: 600; color: var(--navy-900);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>14 Years in Business</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-weight: 600; color: var(--navy-900);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>250+ Projects Delivered</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-weight: 600; color: var(--navy-900);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>500,000+ Leads Generated</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-weight: 600; color: var(--navy-900);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Queens-Rooted Since 2012</span>
                    </div>
                </div>
                <div style="margin-top: 2rem;">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Book a Free Consultation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
            <div class="split-image-col">
                <img src="{{ asset('images/seo/about-web-support-plaza-queens-team.png') }}" alt="Fourteen Years Designing for Queens Businesses" class="wsp-split-image" width="600" height="450">
            </div>
        </div>
    </div>
</section>

<!-- Target Audience -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-split reverse">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/high-converting-digital-design-engagement.png') }}" alt="Print Solutions" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Industries</span>
                <h2 class="wsp-section-title">Built for Businesses <span class="highlight">That Show Up in Person</span></h2>
                <div style="display: flex; flex-direction: column; gap: 0.85rem; margin-top: 1.5rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Restaurants and food businesses</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Contractors and skilled tradespeople</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Medical and dental practices</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Law firms and professional services</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Retail businesses</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Real estate agencies</span>
                    </div>
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
            <p class="wsp-section-desc">Real experiences from local small business leaders.</p>
        </div>
        <div class="wsp-cards-grid" style="grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));">
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“New menu, new signage, same brand. Customers noticed immediately.”</p>
                <div class="wsp-quote-author">
                    <strong>Restaurant Owner</strong>
                    <span>— Astoria, NY</span>
                </div>
            </div>
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“Our proposals looked thrown together. WSP designed a template that actually matches the quality of our work.”</p>
                <div class="wsp-quote-author">
                    <strong>Contractor</strong>
                    <span>— Queens, NY</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-cta-banner">
            <h2>Your Print Materials Should Look <span style="background: linear-gradient(135deg, #38bdf8 0%, #0ea5e9 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Like Your Business Actually Does</span></h2>
            <p>A free consultation is the starting point. We'll look at what you have now and tell you what's worth redesigning.</p>
            <p style="font-size: 0.95rem; opacity: 0.85; margin-bottom: 2rem;"><strong>Location:</strong> Forest Hills, Queens, New York Serving Queens, Brooklyn, Manhattan, Nassau, Suffolk, New Jersey, and Connecticut</p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Book Your Free Print Design Consultation</span>
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

<!-- FAQ Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">FAQ</span>
            <h2 class="wsp-section-title">Common Questions About <span class="highlight">Print Design With WSP</span></h2>
            <p class="wsp-section-desc">Answers to common questions regarding paper, prepress, and turnaround times.</p>
        </div>
        <div class="wsp-faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="wsp-faq-item active">
                <button type="button" class="wsp-faq-question">
                    <span>What print materials do you design?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Business cards, brochures, flyers, menus, signage, and presentation materials.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Do you handle the actual printing?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    We deliver print-ready files and can recommend vendors, or coordinate production depending on the project.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>How long does a print design project take?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    One to three weeks depending on how many pieces you need.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Can you match materials to a brand I already have?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes. We work from your existing logo and identity, or build a new one alongside your print materials.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Will I own the final files?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes, full ownership, all formats.
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
