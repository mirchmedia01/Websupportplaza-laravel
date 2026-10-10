@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Custom Web Design</span>
                <h1 class="wsp-hero-title">
                    Your Website Should Be Making You Money. <br><span class="highlight">Most Small Business Sites Just Sit There.</span>
                </h1>
                <p class="wsp-hero-lead">
                    Web Support Plaza has designed and built websites for Queens small businesses since 2012. Fast, clear, structured to rank on Google from day one.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get a Free Website Consultation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/why-choose-custom-web-design-queens.png') }}" alt="Custom Web Design Queens" class="wsp-hero-image" width="600" height="600">
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

<!-- Section: A Website That Just Exists Isn't the Same as One That Works -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/responsive-web-design-mobile-desktop.png') }}" alt="A Website That Works" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Conversion-Driven</span>
                <h2 class="wsp-section-title">A Website That Just Exists <span class="highlight">Isn't the Same as One That Works</span></h2>
                <div class="content-styled">
                    <p>
                        Most people decide whether to stay on your site or leave within a few seconds. That decision comes down to load speed, clarity, and whether the site looks up to date.
                    </p>
                    <p>
                        A dentist with twenty years of patients can still lose a new one to a newer practice down the street, simply because their site loads faster.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: We've Built Enough of These to Know Where They Break -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Our Experience</span>
            <h2 class="wsp-section-title">We've Built Enough of These to <span class="highlight">Know Where They Break</span></h2>
            <p class="wsp-section-desc">Since 2012, we’ve built 250+ websites for restaurants, contractors, medical practices, law firms, and real estate offices across Queens. Same pattern every time: solid business, undersold website.</p>
        </div>
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            <p style="font-size: 1.15rem; color: var(--text-dark); line-height: 1.8;">
                One in-house team designs, codes, and structures SEO into the build from the start. No outsourcing, no separate SEO fix bolted on three months later.
            </p>
        </div>
    </div>
</section>

<!-- What You're Getting Cards -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Deliverables</span>
            <h2 class="wsp-section-title">What You're <span class="highlight">Getting</span></h2>
            <p class="wsp-section-desc">Everything necessary to compete online, built directly into every engagement.</p>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-design-ui-icon.png') }}" alt="Custom Build">
                </div>
                <h3 class="wsp-card-title">A Custom Build, Not a Skin Change</h3>
                <p class="wsp-card-text">
                    Every site starts from a blank page, built around your business and your competitors, not a theme with your logo swapped in.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/local-seo-ranking-icon.png') }}" alt="Mobile First">
                </div>
                <h3 class="wsp-card-title">Mobile-First</h3>
                <p class="wsp-card-text">
                    Most of your traffic comes from phones. We design for that screen first, then scale up. A site that breaks on mobile turns away over half your visitors.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/creative-branding-idea-icon.png') }}" alt="SEO Built In">
                </div>
                <h3 class="wsp-card-title">SEO Built In, Not Bolted On</h3>
                <p class="wsp-card-text">
                    Heading structure, metadata, schema, page speed, local keywords, all in the build. Not an afterthought.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/ppc-advertising-icon.png') }}" alt="Built to Get a Response">
                </div>
                <h3 class="wsp-card-title">Built to Get a Response</h3>
                <p class="wsp-card-text">
                    Every page points toward one clear next step: a call, a form, a booking. No hunting for your contact info.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-development-code-icon.png') }}" alt="E-Commerce">
                </div>
                <h3 class="wsp-card-title">E-Commerce</h3>
                <p class="wsp-card-text">
                    Product pages, secure checkout, and the SEO structure to compete in a crowded New York retail market.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/social-media-management-icon.png') }}" alt="Redesigns and Migrations">
                </div>
                <h3 class="wsp-card-title">Redesigns and Migrations</h3>
                <p class="wsp-card-text">
                    If your current site isn't producing calls, we rebuild it and carry over any SEO rankings you've already earned.
                </p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 2.5rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                <span>Tell Us About Your Website Project</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- How This Gets Built Process -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Our Process</span>
            <h2 class="wsp-section-title">How This <span class="highlight">Gets Built</span></h2>
            <p class="wsp-section-desc">Clear milestones, direct communication, and no guesswork.</p>
        </div>

        <div class="wsp-process-grid">
            <div class="wsp-process-card">
                <div class="wsp-step-num">1</div>
                <h3 class="wsp-process-title">Strategy and Discovery</h3>
                <p class="wsp-process-desc">
                    We map out your business, your customers, and the exact search terms people use to find you. The site gets planned around that before design starts.
                </p>
            </div>

            <div class="wsp-process-card">
                <div class="wsp-step-num">2</div>
                <h3 class="wsp-process-title">Design, Development, Review</h3>
                <p class="wsp-process-desc">
                    We design it, build it, and refine it with your feedback until it's right.
                </p>
            </div>

            <div class="wsp-process-card">
                <div class="wsp-step-num">3</div>
                <h3 class="wsp-process-title">Launch and Handover</h3>
                <p class="wsp-process-desc">
                    Analytics connected, Search Console verified, listings checked. Full ownership goes to you, with a walkthrough so your team can handle basic updates.
                </p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 2.5rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                <span>Start With a Free Strategy Call</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- Fourteen Years in This Market -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="wsp-split-content">
                <span class="wsp-badge">Queens-Rooted Since 2012</span>
                <h2 class="wsp-section-title">Fourteen Years in <span class="highlight">This Market</span></h2>
                <div class="content-styled">
                    <p>
                        Since 2012, one in-house team has handled design, SEO, Google Business Profile, and social media for Queens small businesses. Nothing gets handed off between departments. We work in English and Spanish.
                    </p>
                </div>
                <div class="wsp-hero-actions" style="margin-top: 1.5rem;">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Book a Free Consultation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="{{ route('services') }}" class="wsp-btn wsp-btn-secondary">
                        <span>See Our Work</span>
                    </a>
                </div>
            </div>
            <div class="split-image-col">
                <div class="wsp-stats-grid" style="grid-template-columns: repeat(2, 1fr); gap: 1.5rem; background: var(--bg-white); padding: 2rem; border-radius: 1rem; border: 1px solid var(--border-color); box-shadow: var(--shadow-sm);">
                    <div class="wsp-stat-item" style="text-align: left;">
                        <div class="wsp-stat-number" style="color: var(--primary);" data-target="14">14</div>
                        <div class="wsp-stat-label" style="color: var(--dark); font-weight: 600;">Years in Business</div>
                    </div>
                    <div class="wsp-stat-item" style="text-align: left;">
                        <div class="wsp-stat-number" style="color: var(--primary);" data-target="250" data-suffix="+">250+</div>
                        <div class="wsp-stat-label" style="color: var(--dark); font-weight: 600;">Projects Delivered</div>
                    </div>
                    <div class="wsp-stat-item" style="text-align: left;">
                        <div class="wsp-stat-number" style="color: var(--primary);" data-target="500000" data-suffix="+">500,000+</div>
                        <div class="wsp-stat-label" style="color: var(--dark); font-weight: 600;">Leads Generated</div>
                    </div>
                    <div class="wsp-stat-item" style="text-align: left;">
                        <div class="wsp-stat-number" style="color: var(--primary);">2012</div>
                        <div class="wsp-stat-label" style="color: var(--dark); font-weight: 600;">Queens-Rooted Since</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Built for the Businesses Running This City -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Industries</span>
            <h2 class="wsp-section-title">Built for the Businesses <span class="highlight">Running This City</span></h2>
            <p class="wsp-section-desc">Tailored design systems built for the local sectors driving Queens and New York.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1rem; max-width: 1000px; margin: 0 auto;">
            <div style="background: var(--bg-light); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Restaurants and food businesses</span>
            </div>
            <div style="background: var(--bg-light); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Medical and dental practices</span>
            </div>
            <div style="background: var(--bg-light); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Law firms and legal services</span>
            </div>
            <div style="background: var(--bg-light); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Contractors and skilled tradespeople</span>
            </div>
            <div style="background: var(--bg-light); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Real estate agencies and brokers</span>
            </div>
            <div style="background: var(--bg-light); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Retail and e-commerce businesses</span>
            </div>
            <div style="background: var(--bg-light); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Educational institutions</span>
            </div>
            <div style="background: var(--bg-light); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Non-profits and community organizations</span>
            </div>
        </div>
    </div>
</section>

<!-- What Queens Business Owners Say -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Client Proof</span>
            <h2 class="wsp-section-title">What Queens <span class="highlight">Business Owners Say</span></h2>
            <p class="wsp-section-desc">Real stories from local entrepreneurs who partnered with Web Support Plaza.</p>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                <p class="wsp-card-text" style="font-size: 1.05rem; font-style: italic; color: var(--dark); line-height: 1.7; margin-bottom: 1.5rem;">
                    “Our site looked like it was built in 2009. It was. WSP rebuilt it and four months later we were ranking for our main terms in Forest Hills. Calls picked up.”
                </p>
                <div style="border-top: 1px solid var(--border-color); padding-top: 1rem; font-weight: 700; color: var(--primary);">
                    — Contractor, Queens, NY
                </div>
            </div>

            <div class="wsp-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                <p class="wsp-card-text" style="font-size: 1.05rem; font-style: italic; color: var(--dark); line-height: 1.7; margin-bottom: 1.5rem;">
                    “They explained every step before doing it. Launched on time, looks like a real business now.”
                </p>
                <div style="border-top: 1px solid var(--border-color); padding-top: 1rem; font-weight: 700; color: var(--primary);">
                    — Medical Practice, Forest Hills, NY
                </div>
            </div>

            <div class="wsp-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                <p class="wsp-card-text" style="font-size: 1.05rem; font-style: italic; color: var(--dark); line-height: 1.7; margin-bottom: 1.5rem;">
                    “We managed the site ourselves for years. Got us nowhere. WSP took it over and it’s bringing in calls now.”
                </p>
                <div style="border-top: 1px solid var(--border-color); padding-top: 1rem; font-weight: 700; color: var(--primary);">
                    — Restaurant Owner, Astoria, NY
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-cta-banner">
            <h2>Let's Look at What Your Site Is Actually Doing Right Now</h2>
            <p>
                A free 30-minute consultation. We review your current site and competitors, then tell you plainly what we’d change.
            </p>
            <p style="font-size: 0.95rem; opacity: 0.9; margin-bottom: 1.5rem;">
                <strong>Location:</strong> Forest Hills, Queens, New York · Serving Queens, Brooklyn, Manhattan, Nassau, Suffolk, New Jersey, and Connecticut
            </p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Book Your Free Website Consultation</span>
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

<!-- FAQs Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">FAQ</span>
            <h2 class="wsp-section-title">Common Questions About <span class="highlight">Custom Web Design</span></h2>
            <p class="wsp-section-desc">Straightforward answers about our custom web design and development services.</p>
        </div>

        <div class="wsp-accordion">
            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>How long does a website take to build?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Three to six weeks from strategy call to launch, depending on scope and how fast we get content from you.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Do you build on WordPress?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes, and other platforms depending on fit. Every build prioritizes speed and SEO structure.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Will my site rank on Google?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Every site launches with on-page SEO in place. Ongoing SEO management is available separately for continued growth.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Can you redesign a site I already have?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes, with existing rankings protected during migration.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>What happens after launch?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Post-launch support, plus a walkthrough so you can handle basic updates yourself.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Do you build online stores?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes, with secure checkout, inventory management, and SEO built for New York retail competition.</p>
                </div>
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
