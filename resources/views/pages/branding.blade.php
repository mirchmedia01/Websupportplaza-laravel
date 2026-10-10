@extends('layouts.app')

@section('title', 'Branding and Graphic Design for Queens Small Businesses | Web Support Plaza')
@section('meta_description', 'Web Support Plaza designs logos, brand systems, and marketing collateral for small businesses across Queens and New York City, built to communicate credibility.')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Branding &amp; Graphic Design</span>
                <h1 class="wsp-hero-title">
                    Branding and Graphic Design for Queens Small Businesses — <span class="highlight">Brand Assets to Make the Right Impression</span>
                </h1>
                <p class="wsp-hero-lead">
                    Web Support Plaza designs logos, brand systems, and marketing collateral for small businesses across Queens and New York City, built to communicate credibility at every customer touchpoint.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get a Free Brand Consultation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/corporate-brand-identity-design-system.png') }}" alt="Branding and Graphic Design for Queens Businesses" class="wsp-hero-image" width="600" height="600">
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
                <img src="{{ asset('images/seo/custom-logo-design-brand-identity.webp') }}" alt="Brand Identity Queens" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">First Impressions Matter</span>
                <h2 class="wsp-section-title">Inconsistent Branding Costs <span class="highlight">You Customers You Never See</span></h2>
                <div class="content-styled">
                    <p>A restaurant with three different logo versions across its sign, menu, and Instagram page looks like a business that is not paying attention. A contractor whose business card and website use different fonts and colors sends the same signal.</p>
                    <p>Customers make these judgments quickly and without thinking. WSP builds brand identities that stay consistent across every surface so the impression your business makes is always the right one.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What Goes Into a Brand Identity Grid -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Complete Brand Systems</span>
            <h2 class="wsp-section-title">What Goes Into a <span class="highlight">Brand Identity That Works</span></h2>
            <p class="wsp-section-desc">Every element is designed to build trust and brand recognition across all channels.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
                </div>
                <h3 class="wsp-card-title">Logo Design</h3>
                <p class="wsp-card-text">WSP designs logos built for real-world use. Scalable for a truck decal, clear on a business card, and sharp on a website header. Every logo is delivered in multiple formats for print and digital use, with usage guidelines so it stays consistent wherever it appears.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                </div>
                <h3 class="wsp-card-title">Brand Identity System</h3>
                <p class="wsp-card-text">A logo alone is not a brand. WSP develops the full visual system: color palette, typography, graphic elements, and usage rules that ensure everything your business produces looks as if it came from the same place.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line></svg>
                </div>
                <h3 class="wsp-card-title">Business Cards &amp; Print Collateral</h3>
                <p class="wsp-card-text">Brochures, flyers, menus, signage, and business cards designed to match your brand identity. For Queens businesses that operate as much in person as online, print materials remain a meaningful customer touchpoint.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                </div>
                <h3 class="wsp-card-title">Social Media Graphics</h3>
                <p class="wsp-card-text">Profile images, post templates, story formats, and ad creatives built to your brand standards. Consistent social media visuals make your business look professional to customers checking your Instagram or Facebook before they call.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Marketing Materials</h3>
                <p class="wsp-card-text">Proposals, presentation decks, and promotional materials designed to reflect the quality of your business. For professional service firms and contractors in Queens, polished materials directly influence how clients perceive you before a meeting starts.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                </div>
                <h3 class="wsp-card-title">Brand Refresh</h3>
                <p class="wsp-card-text">For businesses with a visual identity that has grown outdated or inconsistent, WSP handles refresh projects that modernize your brand without losing the equity you have built.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3.5rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                <span>Tell Us What Your Business Needs</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Design Methodology</span>
            <h2 class="wsp-section-title">How WSP Builds <span class="highlight">Your Brand</span></h2>
            <p class="wsp-section-desc">A collaborative 3-phase process that turns your business vision into iconic visuals.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <span style="font-weight: 800; font-size: 1.25rem;">01</span>
                </div>
                <h3 class="wsp-card-title">1. Discovery</h3>
                <p class="wsp-card-text">We learn your business, your customers, and the impression you want to make. We look at your current visual identity and your competitors in Queens and the surrounding market.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <span style="font-weight: 800; font-size: 1.25rem;">02</span>
                </div>
                <h3 class="wsp-card-title">2. Design and Refinement</h3>
                <p class="wsp-card-text">WSP presents initial concepts, collects your feedback, and refines until the identity accurately reflects your business.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <span style="font-weight: 800; font-size: 1.25rem;">03</span>
                </div>
                <h3 class="wsp-card-title">3. Delivery and Guidelines</h3>
                <p class="wsp-card-text">We deliver all final files in print and digital formats, along with a brand guidelines document covering logo usage, colors, typography, and application rules.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3.5rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-secondary wsp-btn-lg">
                <span>Start With a Free Strategy Call</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- Trust Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="wsp-split-content">
                <span class="wsp-badge">Integrated Agency</span>
                <h2 class="wsp-section-title">Branding From a Team That Also <span class="highlight">Manages Your Digital Presence</span></h2>
                <div class="content-styled">
                    <p>Web Support Plaza has been working with Queens small businesses since 2012. Brand and graphic design is handled in-house by the same team managing your website, SEO, and social media, so your visual identity is built to work across every channel from the start.</p>
                    <p>We serve English and Spanish-speaking business owners across Queens and the tri-state area.</p>
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
                        <span>Book a Free Brand Consultation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
            <div class="split-image-col">
                <img src="{{ asset('images/seo/brand-identity-design-process-guide.png') }}" alt="Queens Business Branding Strategy" class="wsp-split-image" width="600" height="450">
            </div>
        </div>
    </div>
</section>

<!-- Target Audience -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Who It Is For</span>
            <h2 class="wsp-section-title">Built for Queens Businesses <span class="highlight">That Need to Look the Part</span></h2>
            <p class="wsp-section-desc">WSP handles branding and graphic design for diverse local business sectors:</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-card" style="padding: 1.75rem;">
                <div style="display: flex; align-items: center; gap: 0.85rem;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span style="font-weight: 600; color: var(--dark);">Restaurants and food businesses building a visual identity for signage, menus, and social media</span>
                </div>
            </div>
            <div class="wsp-card" style="padding: 1.75rem;">
                <div style="display: flex; align-items: center; gap: 0.85rem;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span style="font-weight: 600; color: var(--dark);">Contractors and tradespeople who need consistent branding across trucks, uniforms, and business cards</span>
                </div>
            </div>
            <div class="wsp-card" style="padding: 1.75rem;">
                <div style="display: flex; align-items: center; gap: 0.85rem;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span style="font-weight: 600; color: var(--dark);">Medical and dental practices requiring a professional identity across print and digital</span>
                </div>
            </div>
            <div class="wsp-card" style="padding: 1.75rem;">
                <div style="display: flex; align-items: center; gap: 0.85rem;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span style="font-weight: 600; color: var(--dark);">Law firms and professional service providers whose clients judge credibility visually</span>
                </div>
            </div>
            <div class="wsp-card" style="padding: 1.75rem;">
                <div style="display: flex; align-items: center; gap: 0.85rem;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span style="font-weight: 600; color: var(--dark);">Retail businesses building a recognizable brand in a competitive Queens market</span>
                </div>
            </div>
            <div class="wsp-card" style="padding: 1.75rem;">
                <div style="display: flex; align-items: center; gap: 0.85rem;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span style="font-weight: 600; color: var(--dark);">Any small business whose current visual identity no longer reflects where the business actually is</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Client Testimonials</span>
            <h2 class="wsp-section-title">What Queens Business <span class="highlight">Owners Say</span></h2>
            <p class="wsp-section-desc">Hear from local businesses whose perception and reach were transformed by our branding.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“We had used the same logo for 11 years and it showed. WSP redesigned our brand identity completely and delivered everything we needed for print and digital. The new look changed how customers perceived us immediately.”</p>
                <div class="wsp-quote-author">
                    <strong>Restaurant Owner</strong>
                    <span>— Astoria, NY</span>
                </div>
            </div>
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“Our proposals looked like they were thrown together. WSP designed a proposal template and matching collateral that made our business look as professional as the work we actually do.”</p>
                <div class="wsp-quote-author">
                    <strong>Contractor</strong>
                    <span>— Queens, NY</span>
                </div>
            </div>
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“WSP designed our logo, business cards, and social media graphics as a package. Everything matched, and it made a significant difference in how new patients responded to us.”</p>
                <div class="wsp-quote-author">
                    <strong>Medical Practice</strong>
                    <span>— Forest Hills, NY</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">FAQ</span>
            <h2 class="wsp-section-title">Questions About Branding <span class="highlight">and Graphic Design</span></h2>
            <p class="wsp-section-desc">Clear answers to help you make informed decisions for your brand.</p>
        </div>
        <div class="wsp-faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="wsp-faq-item active">
                <button type="button" class="wsp-faq-question">
                    <span>What is the difference between a logo and a brand identity?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    A logo is a single mark. A brand identity is the full visual system around it: colors, typography, and usage rules. Without the system, a logo gets applied inconsistently, which undermines the credibility it was meant to create.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Can you update an existing logo rather than replace it entirely?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes. Brand refresh projects are common for Queens businesses that want to modernize without starting from scratch. WSP assesses what is worth keeping and builds from there.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Do you handle print production?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    WSP handles design and delivers print-ready files. For physical production, we recommend vendors or coordinate depending on the project scope.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>How long does a branding project take?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    A logo and brand identity project typically takes three to five weeks from discovery to final delivery. Larger scopes take longer. WSP provides a clear timeline during the initial consultation.
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
                    Yes. Full ownership of all design files is delivered to the client upon project completion, in all formats needed for print and digital use.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Do you design social media graphics as part of branding?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes. Social media graphic templates are available as part of the brand identity package or as a standalone project.
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
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-cta-banner">
            <h2>Your Business Should Look as <span style="background: linear-gradient(135deg, #38bdf8 0%, #0ea5e9 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Good as the Work You Do</span></h2>
            <p>A free brand consultation is where we start. We look at your current visual identity, understand what you are trying to communicate, and tell you what we would build. No obligation.</p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Book Your Free Brand Consultation</span>
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
@endsection
