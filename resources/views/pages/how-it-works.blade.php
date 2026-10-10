@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Our Transparent Process</span>
                <h1 class="wsp-hero-title">
                    How Web Support Plaza <br><span class="highlight">Builds Your Digital Success</span>
                </h1>
                <p class="wsp-hero-lead">
                    We’ve refined our process across 250+ projects over 14 years. From your first call to ongoing growth — here’s exactly how we work, why it works, and what you can expect every step of the way.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Start Your Free Strategy Session</span>
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
                <img src="{{ asset('images/seo/brand-identity-design-process-guide.png') }}" alt="How It Works Web Support Plaza" class="wsp-hero-image" width="600" height="600">
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

<!-- Proven 3-Step Growth Process -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Methodology</span>
            <h2 class="wsp-section-title">Our Proven 3-Step <span class="highlight">Growth Process</span></h2>
            <p class="wsp-section-desc">A structured, accountable system designed to deliver measurable business returns.</p>
        </div>

        <div class="wsp-process-grid">
            <!-- Step 1 -->
            <div class="wsp-process-card">
                <div class="wsp-step-num">1</div>
                <span class="wsp-badge" style="margin-bottom: 0.75rem;">DISCOVERY</span>
                <h3 class="wsp-process-title">Discovery &amp; Analysis</h3>
                <p class="wsp-process-desc">
                    Every successful digital strategy starts with understanding your business, competitors, target audience, and the opportunities available in your market.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="wsp-process-card">
                <div class="wsp-step-num">2</div>
                <span class="wsp-badge" style="margin-bottom: 0.75rem;">EXECUTION</span>
                <h3 class="wsp-process-title">Strategy &amp; Execution</h3>
                <p class="wsp-process-desc">
                    We create and execute a custom strategy covering planning, prototyping, design, development, testing, and launch to ensure measurable results.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="wsp-process-card">
                <div class="wsp-step-num">3</div>
                <span class="wsp-badge" style="margin-bottom: 0.75rem;">GROWTH</span>
                <h3 class="wsp-process-title">Growth &amp; Ongoing Optimization</h3>
                <p class="wsp-process-desc">
                    After launch, we continuously optimize your digital presence through SEO, content improvements, performance monitoring, and ongoing growth strategies.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Ready to Start Step 1? CTA Bar -->
<section class="wsp-section bg-light" style="padding: 3rem 0;">
    <div class="wsp-container">
        <div class="wsp-cta-banner" style="background: linear-gradient(135deg, #1e3a8a, #0284c7); text-align: center; border-radius: 1rem; padding: 2.5rem 2rem; color: #fff;">
            <h2 style="color: #fff; margin-bottom: 0.75rem; font-size: 2rem;">Ready to Start Step 1?</h2>
            <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.125rem; max-width: 650px; margin: 0 auto 1.75rem;">
                Book a free 30-minute strategy session — no pressure, just a direct conversation about your business and goals.
            </p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Start Your Free Strategy Session</span>
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

<!-- What Makes Web Support Plaza Different -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Our Advantage</span>
            <h2 class="wsp-section-title">What Makes <span class="highlight">Web Support Plaza Different</span></h2>
            <p class="wsp-section-desc">Our process is built on 26 years of experience and refined across 250+ projects. These are the principles that make the difference between results and disappointment.</p>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-development-code-icon.png') }}" alt="End-to-End Ownership">
                </div>
                <h3 class="wsp-card-title">End-to-End Ownership</h3>
                <p class="wsp-card-text">
                    We don't hand off to a junior team after the sale. The same team that sells you the strategy builds it, launches it, and manages your ongoing growth. Accountability is built into every engagement.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-design-ui-icon.png') }}" alt="Prototype Before We Build">
                </div>
                <h3 class="wsp-card-title">Prototype Before We Build</h3>
                <p class="wsp-card-text">
                    Every website project includes a visual prototype before development begins. You see exactly what you're getting before a single line of code is written — eliminating surprises and wasted revisions.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/local-seo-ranking-icon.png') }}" alt="Local Market Intelligence">
                </div>
                <h3 class="wsp-card-title">Local Market Intelligence</h3>
                <p class="wsp-card-text">
                    We've been working in Queens and the tri-state area for 14 years. We know the neighborhoods, the search behaviors, and the competitive dynamics that out-of-town agencies simply can't replicate.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/creative-branding-idea-icon.png') }}" alt="AI-Powered, Always Current">
                </div>
                <h3 class="wsp-card-title">AI-Powered, Always Current</h3>
                <p class="wsp-card-text">
                    We continuously invest in modern CRM, CMS, and AI marketing tools so your strategy stays ahead of the curve — not playing catch-up while competitors move forward.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/ppc-advertising-icon.png') }}" alt="Transparent Reporting">
                </div>
                <h3 class="wsp-card-title">Transparent Reporting</h3>
                <p class="wsp-card-text">
                    Every month you receive a clear report showing rankings, traffic, leads, and the specific work completed — written in plain language, not agency jargon.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/social-media-management-icon.png') }}" alt="Built on Referrals">
                </div>
                <h3 class="wsp-card-title">Built on Referrals</h3>
                <p class="wsp-card-text">
                    Most of our business comes from referrals — consultants, accountants, and business brokers who trust Web Support Plaza with their own clients. That trust is earned through consistent, accountable delivery.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Ready to Start? It Begins With One Conversation CTA -->
<section class="wsp-section bg-light" style="padding: 3rem 0;">
    <div class="wsp-container">
        <div class="wsp-cta-banner">
            <h2>Ready to Start? It Begins With One Conversation.</h2>
            <p>Book a free 30-minute strategy session — tell us about your business and where you want to be. We’ll tell you exactly how to get there.</p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Book a Free Strategy Call</span>
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
            <span class="wsp-badge">Frequently Asked Questions</span>
            <h2 class="wsp-section-title">Questions About <span class="highlight">How We Work</span></h2>
            <p class="wsp-section-desc">Straight answers to common questions about our engagement process, timelines, and commitments.</p>
        </div>

        <div class="wsp-accordion">
            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>How do I get started with Web Support Plaza?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>The best first step is a free 30-minute strategy session. Call us at (855) 506-4724, email info@websupportplaza.com, or book directly on our calendar. In that session, we learn about your business, your goals, and your current digital situation — and tell you exactly what we’d recommend and why.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Do I need to provide content for my website?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>We work with whatever you have. Some clients provide detailed content — others hand us a rough outline and we write everything. Our Growth and Scale packages include copywriting. We also have a professional photography and videography option for clients who need visual content produced.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>What happens after launch?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>We stay actively involved. After launch, most clients continue with our monthly SEO, social media management, or digital marketing packages. We provide monthly reports, ongoing optimization, and are available for strategic reviews whenever you need them. We’re a long-term partner — not a one-time vendor.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>How long does the process take from start to launch?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Timeline depends on scope. A Launch Package website takes 3–4 weeks. A Growth Package takes 5–7 weeks. A Scale or custom platform takes 8–12 weeks. SEO and digital marketing campaigns can be live within 1–2 weeks of engagement. We provide a clear project timeline at the start of every engagement.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>How involved do I need to be during the process?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>We handle the heavy lifting. We typically need you for the initial discovery session, content review and approval, prototype review, and final launch approval. Most clients spend 3–5 hours total on their project outside of our team’s work — we do the rest.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Do you work with businesses outside Queens, NY?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes. While we’re rooted in Queens, we serve businesses throughout Brooklyn, Manhattan, the Bronx, Staten Island, Nassau County, Suffolk County, New Jersey, Connecticut, and nationally. Most of our work is done remotely with periodic in-person meetings for local clients who prefer them.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
