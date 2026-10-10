@extends('layouts.app')

@section('title', 'Custom Logo Design for Queens Small Businesses | Web Support Plaza')
@section('meta_description', 'Web Support Plaza designs logos for Queens small businesses built to work everywhere: your sign, truck, Instagram, and website.')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Custom Logo Design</span>
                <h1 class="wsp-hero-title">
                    Your Logo Is the First Thing People <span class="highlight">Judge You On. Make It Count.</span>
                </h1>
                <p class="wsp-hero-lead">
                    A weak logo makes a strong business look unfinished. Web Support Plaza designs logos for Queens' small businesses built to work everywhere: your sign, your truck, your Instagram, your invoice.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get a Free Logo Consultation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/custom-logo-design-brand-identity.webp') }}" alt="Custom Logo Design Queens" class="wsp-hero-image" width="600" height="600">
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
                <img src="{{ asset('images/seo/corporate-brand-identity-design-system.png') }}" alt="Logo Design Queens" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Instant Judgment</span>
                <h2 class="wsp-section-title">A Bad Logo Costs You Trust <span class="highlight">Before You Say a Word</span></h2>
                <div class="content-styled">
                    <p>Customers form an impression in seconds, before they read anything. A pixelated logo on your storefront, a different version on your Facebook page, a font that doesn't match your website. All of it signals the same thing: not paying attention.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Credibility Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-split reverse">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/brand-identity-design-process-guide.png') }}" alt="Custom Logo Deliverables" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Proven Track Record</span>
                <h2 class="wsp-section-title">We've Designed Logos for Businesses <span class="highlight">Just Like Yours</span></h2>
                <div class="content-styled">
                    <p>Since 2012, Web Support Plaza has built brand identities for restaurants, contractors, medical practices, and law firms across Queens. We know what needs to hold up on a truck decal and what falls apart the moment it's scaled down to a favicon.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What You're Getting Grid -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Features</span>
            <h2 class="wsp-section-title">What You're <span class="highlight">Getting</span></h2>
            <p class="wsp-section-desc">Practical, professional logo design built for daily commercial use.</p>
        </div>
        <div class="wsp-cards-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
                </div>
                <h3 class="wsp-card-title">A Logo Built for Real-World Use</h3>
                <p class="wsp-card-text">Scalable for a sign, clear on a business card, sharp on a phone screen. Delivered in every format you'll actually need, print and digital.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">A Few Concepts, Not One Guess</h3>
                <p class="wsp-card-text">We present real options based on your business and your market, not a single design and a take-it-or-leave-it pitch.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                </div>
                <h3 class="wsp-card-title">Usage Guidelines Included</h3>
                <p class="wsp-card-text">Colors, spacing, sizing rules. So the logo stays consistent no matter who's using it or where.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Full Ownership, No Fine Print</h3>
                <p class="wsp-card-text">The final files are yours. No licensing fees, no restrictions.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                <span>Tell Us About Your Logo Project</span>
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
            <p class="wsp-section-desc">From initial brief to final delivery in three straightforward steps.</p>
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
                <p class="wsp-card-text">We present concepts, take your feedback, and refine until it's right.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                </div>
                <h3 class="wsp-card-title">3. Delivery</h3>
                <p class="wsp-card-text">All final files, print and digital, plus a short guide on how to use them.</p>
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
                    <p>Logo design at WSP is handled by the same in-house team that builds your website and manages your marketing, so your brand looks consistent everywhere it shows up. We work in English and Spanish.</p>
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
                <img src="{{ asset('images/seo/high-converting-digital-design-engagement.png') }}" alt="Businesses We Build Logos For" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Industries</span>
                <h2 class="wsp-section-title">Built for Businesses <span class="highlight">That Need to Look the Part</span></h2>
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
                        <span style="color: var(--text-muted); font-size: 1.05rem;">New businesses launching for the first time</span>
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
            <p class="wsp-section-desc">Local owners who refreshed their identity and leveled up customer perception.</p>
        </div>
        <div class="wsp-cards-grid" style="grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));">
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“We'd used the same logo for eleven years and it showed. WSP redesigned it completely and handed us everything we needed, print and digital.”</p>
                <div class="wsp-quote-author">
                    <strong>Restaurant Owner</strong>
                    <span>— Astoria, NY</span>
                </div>
            </div>
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“Simple process. They asked the right questions and the final logo actually looks like us.”</p>
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
            <h2>Your Logo Should Look as <span style="background: linear-gradient(135deg, #38bdf8 0%, #0ea5e9 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Good as the Work You Do</span></h2>
            <p>A free consultation is the starting point. We'll look at what you have now and tell you what we'd build.</p>
            <p style="font-size: 0.95rem; opacity: 0.85; margin-bottom: 2rem;"><strong>Location:</strong> Forest Hills, Queens, New York Serving Queens, Brooklyn, Manhattan, Nassau, Suffolk, New Jersey, and Connecticut</p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Book Your Free Logo Consultation</span>
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
            <h2 class="wsp-section-title">Common Questions About <span class="highlight">Logo Design With WSP</span></h2>
            <p class="wsp-section-desc">Clear, direct answers to common questions about our logo design process.</p>
        </div>
        <div class="wsp-faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="wsp-faq-item active">
                <button type="button" class="wsp-faq-question">
                    <span>How long does a logo project take?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    One to two weeks from discovery to final delivery.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Do you offer multiple concepts?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes. You'll see real options, not one design with no alternative.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Can you update an existing logo instead of starting over?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes. We assess what's worth keeping and refresh from there.
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
                    Yes, full ownership, all formats, no restrictions.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Do you also design business cards and social graphics?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes, as part of a full brand package or as standalone projects.
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
