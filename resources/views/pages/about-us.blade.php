@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">About Web Support Plaza</span>
                <h1 class="wsp-hero-title">
                    We've Been Helping Queens Businesses <span class="highlight">Get Found Online Since 2012</span>
                </h1>
                <p class="wsp-hero-lead">
                    Web Support Plaza started in Queens with a simple observation: good businesses were losing customers to worse ones, purely because their websites and Google listings weren’t doing the job. Fourteen years later, we’ve built or rebuilt the online presence for over 250 businesses across Queens and the tri-state area, and that same gap is still what we spend every day closing.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Book a Strategy Call</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>Call (855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/about-web-support-plaza-queens-team.png') }}" alt="About Web Support Plaza Queens NY" class="wsp-hero-image" width="600" height="600">
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

<!-- Story Section: Origin -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/why-choose-custom-web-design-queens.png') }}" alt="Web Support Plaza Origin Story" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Our Origin</span>
                <h2 class="wsp-section-title">
                    A Contractor With Great Reviews and <span class="highlight">No Calls Is Where This Began</span>
                </h2>
                <div class="content-styled">
                    <p>
                        Web Support Plaza opened its doors in Queens in 2012 at a time when a lot of local businesses had a website because they felt they needed one, not because it was actually generating customers. A contractor with fifteen years of referrals and a five-star reputation could still lose new business to a competitor who simply showed up first on Google.
                    </p>
                    <p>
                        That pattern is what the agency was built around. Not designing pretty websites for their own sake, but making sure the businesses doing genuinely good work were the ones customers actually found.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section: One In-House Team -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split reverse">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/creative-outdoor-banner-design-solutions.png') }}" alt="Web Support Plaza In-House Team" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Our Structure</span>
                <h2 class="wsp-section-title">
                    One In-House Team, <span class="highlight">Not a Rotating Cast of Freelancers</span>
                </h2>
                <div class="content-styled">
                    <p>
                        Today, Web Support Plaza is a team of 40+ digital professionals based in Forest Hills, Queens, managing everything from website design to SEO to social media under one roof. We don’t outsource your project to a freelancer overseas or hand it between departments that never talk to each other.
                    </p>
                    <p>
                        The same team that builds your website manages your Google Business Profile. The same team running your SEO writes your content and manages your social media. That structure exists because we’ve seen what happens when a business’s marketing gets split across five vendors with five different priorities: nothing reinforces anything else, and results stall.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What Sets WSP Apart -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Why Choose Us</span>
            <h2 class="wsp-section-title">What Actually Sets <span class="highlight">WSP Apart</span></h2>
            <p class="wsp-section-desc">We combine local Queens insight with comprehensive full-stack digital execution.</p>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/creative-branding-idea-icon.png') }}" alt="Local Not Remote">
                </div>
                <h3 class="wsp-card-title">Local, Not Remote</h3>
                <p class="wsp-card-text">
                    We operate out of Forest Hills, Queens, and have since 2012. We know these neighborhoods, these customers, and what it actually takes to compete for search traffic here, not in a generic national market.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-design-ui-icon.png') }}" alt="One Team Every Channel">
                </div>
                <h3 class="wsp-card-title">One Team, Every Channel</h3>
                <p class="wsp-card-text">
                    Website design, SEO, Google Business Profile management, social media, and paid advertising are all managed in-house, coordinated toward the same goal instead of operating as separate, disconnected services.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/social-media-management-icon.png') }}" alt="Bilingual Service">
                </div>
                <h3 class="wsp-card-title">Bilingual Service</h3>
                <p class="wsp-card-text">
                    We work with English- and Spanish-speaking business owners, reflecting the communities we’ve served across Queens for over a decade.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-development-code-icon.png') }}" alt="Results You Can Actually See">
                </div>
                <h3 class="wsp-card-title">Results You Can Actually See</h3>
                <p class="wsp-card-text">
                    Over 500,000 leads generated for local businesses since 2012, tracked and reported in plain language tied to calls and bookings, not vague metrics that don’t mean anything to your bottom line.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/ppc-advertising-icon.png') }}" alt="Straight Talk">
                </div>
                <h3 class="wsp-card-title">Straight Talk, No Contracts Built on Confusion</h3>
                <p class="wsp-card-text">
                    We tell clients plainly what we’d do and why before any money changes hands. If something isn’t working, we say so and adjust, instead of hiding behind a report full of numbers.
                </p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('services') }}" class="wsp-btn wsp-btn-primary">
                <span>See What We'd Build for Your Business</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- What Working With WSP Looks Like -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Our Engagement Model</span>
            <h2 class="wsp-section-title">What Working With WSP <span class="highlight">Actually Looks Like</span></h2>
            <p class="wsp-section-desc">A transparent, partnership-driven journey built around your business goals.</p>
        </div>

        <div class="wsp-process-grid">
            <div class="wsp-process-card">
                <div class="wsp-step-num">01</div>
                <h3 class="wsp-process-title">A Real Conversation</h3>
                <p class="wsp-process-desc">
                    We start with a free strategy call about your business, your goals, and where you feel stuck online. No jargon, no pressure to sign anything on the spot.
                </p>
            </div>
            <div class="wsp-process-card">
                <div class="wsp-step-num">02</div>
                <h3 class="wsp-process-title">A Plan Built Around Your Business</h3>
                <p class="wsp-process-desc">
                    We design a strategy around your specific market and competitors in Queens, not a generic package applied to every client regardless of industry.
                </p>
            </div>
            <div class="wsp-process-card">
                <div class="wsp-step-num">03</div>
                <h3 class="wsp-process-title">Ongoing Management and Honest Reporting</h3>
                <p class="wsp-process-desc">
                    We manage what we build, month over month, and report back in language that actually tells you what's working and what we're adjusting next.
                </p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3.5rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                <span>Book Your Free Strategy Call</span>
            </a>
        </div>
    </div>
</section>

<!-- Industry Experience -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/custom-print-design-marketing-collateral.png') }}" alt="Queens Industry Experience" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Local Experience</span>
                <h2 class="wsp-section-title">
                    Fourteen Years of Queens Businesses, <span class="highlight">Across Every Industry</span>
                </h2>
                <div class="content-styled">
                    <ul style="list-style: disc; padding-left: 1.5rem; margin-bottom: 1.5rem; color: var(--text-main); font-size: 1.05rem; line-height: 1.9;">
                        <li>Restaurants and food businesses</li>
                        <li>Contractors and skilled tradespeople</li>
                        <li>Medical and dental practices</li>
                        <li>Law firms and legal services</li>
                        <li>Real estate agencies and brokers</li>
                        <li>Retail and e-commerce businesses</li>
                    </ul>
                    <p>
                        We’ve built for businesses that had never had a real website before, and rebuilt for businesses whose old one was actively costing them customers. Either way, the standard is the same: it needs to actually produce results.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Client Testimonials</span>
            <h2 class="wsp-section-title">What Queens Business Owners <span class="highlight">Say About Working With Us</span></h2>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">
                    “Fourteen years of doing this in the same neighborhood means something. WSP knew exactly what would work for our market before we even finished explaining the problem.”
                </p>
                <div class="wsp-quote-author">
                    <span>— Restaurant Owner, Forest Hills, NY</span>
                </div>
            </div>

            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">
                    “They didn’t oversell anything. Told us straight what would take time and what wouldn’t, and delivered on both.”
                </p>
                <div class="wsp-quote-author">
                    <span>— Contractor, Queens, NY</span>
                </div>
            </div>

            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">
                    “Having one team handle everything, instead of juggling three different companies, made an immediate difference in how organized our marketing felt.”
                </p>
                <div class="wsp-quote-author">
                    <span>— Medical Practice, Astoria, NY</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Bar: Fourteen Years In -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-cta-banner" style="background: linear-gradient(135deg, #0b1120 0%, #1e293b 100%); border: 1px solid rgba(255, 255, 255, 0.1); text-align: center; padding: 3.5rem 2rem;">
            <h2 style="color: #ffffff; font-size: 2.25rem; font-weight: 800; margin-bottom: 1rem;">
                Fourteen Years In, We're Still Doing This <span class="highlight">the Same Way</span>
            </h2>
            <p style="color: #cbd5e1; max-width: 680px; margin: 0 auto 1rem; font-size: 1.05rem; line-height: 1.7;">
                A free 30-minute strategy call is where every relationship with WSP starts. We’ll look at where your business currently stands online and tell you honestly what we’d do to grow it.
            </p>
            <p style="color: #38bdf8; font-weight: 700; margin-bottom: 2.25rem;">
                Location: Forest Hills, Queens, New York · Serving Queens, Brooklyn, Manhattan, Nassau, Suffolk, New Jersey, and Connecticut
            </p>
            <div class="wsp-hero-actions" style="justify-content: center; flex-wrap: wrap; gap: 1rem;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span>Book Your Free Strategy Call</span>
                </a>
                <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-outline-white wsp-btn-lg">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span>(855) 506-4724</span>
                </a>
                <div class="wsp-btn wsp-btn-outline-white wsp-btn-lg" style="cursor: default;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    <span>Forest Hills, Queens, New York</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQs Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Got Questions?</span>
            <h2 class="wsp-section-title">Common Questions About <span class="highlight">Web Support Plaza</span></h2>
        </div>

        <div class="wsp-faq-list" style="max-width: 820px; margin: 2rem auto 0;">
            <div class="wsp-faq-item active">
                <button type="button" class="wsp-faq-question">
                    <span>How long has Web Support Plaza been operating?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Since 2012, operating continuously out of Forest Hills, Queens.
                </div>
            </div>

            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Do you only work with Queens businesses?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Queens is home, but we serve clients across Brooklyn, Manhattan, the Bronx, Staten Island, Nassau, Suffolk, New Jersey, and Connecticut.
                </div>
            </div>

            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Is my project handled in-house or outsourced?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    In-house. Our team of 40+ digital professionals handles design, development, SEO, and marketing directly, without outsourcing to freelancers.
                </div>
            </div>

            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Do you offer services in Spanish?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes. We serve English- and Spanish-speaking business owners across the New York area.
                </div>
            </div>

            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>What industries do you typically work with?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Restaurants, contractors, medical and dental practices, law firms, real estate agencies, and retail businesses, among others.
                </div>
            </div>

            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>How do I get started?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Book a free 30-minute strategy call. We’ll review where your business stands online and tell you what we’d recommend, with no obligation attached.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final Banner -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-cta-banner">
            <h2>We don't just build websites.<br><span style="background: linear-gradient(135deg, #38bdf8 0%, #0ea5e9 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">We build businesses.</span></h2>
            <p>Queens, New York. Serving the tri-state area since 2012. Schedule a free 30-minute strategy session with our team today.</p>
            <div class="wsp-hero-actions" style="justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span>Book Your Free Strategy Call</span>
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
