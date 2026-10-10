@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Website Engineering</span>
                <h1 class="wsp-hero-title">
                    Website Development Services in Queens, NY | <span class="highlight">WordPress &amp; Custom Sites</span>
                </h1>
                <p class="wsp-hero-lead">
                    Web Support Plaza has been building websites for Queens small businesses since 2012. Every site we build is custom, mobile-first, and structured from day one to show up on Google and convert the visitors who land on it.
                </p>
                <p style="font-weight: 600; color: var(--dark); margin-bottom: 1.5rem;">
                    No templates. No hand-offs. One team managing the entire build.
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
                <img src="{{ asset('images/seo/website-development-custom-platforms-queens.png') }}" alt="Website Development Queens NY" class="wsp-hero-image" width="600" height="600">
            </div>
        </div>
    </div>
</section>

<!-- Split Section: Working For or Against You -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/why-choose-custom-web-design-queens.png') }}" alt="Website Development That Converts" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Conversion-Driven</span>
                <h2 class="wsp-section-title">Your Website Is Either Working <span class="highlight">for You or Against You</span></h2>
                <div class="content-styled">
                    <p>
                        When a customer in Queens searches for what you offer, the first thing they do after clicking your link is judge it. If the page loads slowly, the layout looks outdated, or they cannot immediately figure out what you do and how to reach you, they leave. They go back to Google and click the next result.
                    </p>
                    <p>
                        You do not get a second chance at that moment. Web Support Plaza builds websites that hold attention, communicate clearly, and drive visitors to call or book.
                    </p>
                </div>
                <div style="margin-top: 2rem;">
                    <a href="{{ route('website-packages') }}" class="wsp-btn wsp-btn-primary">
                        <span>View Website Packages</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Services Grid -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Core Capabilities</span>
            <h2 class="wsp-section-title">Custom Design, Built Around <span class="highlight">Your Business</span></h2>
            <p class="wsp-section-desc">We combine design artistry with robust technical engineering to ensure superior results.</p>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-design-ui-icon.png') }}" alt="Custom Design">
                </div>
                <h3 class="wsp-card-title">Custom Design, Built Around Your Business</h3>
                <p class="wsp-card-text">
                    Every website Web Support Plaza builds starts from scratch. We study your business, your customers, and the competitive landscape in your market. The design reflects your brand, speaks to your audience, and is structured to guide visitors toward taking action.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/local-seo-ranking-icon.png') }}" alt="Mobile-First">
                </div>
                <h3 class="wsp-card-title">Mobile-First Development</h3>
                <p class="wsp-card-text">
                    Over 70 percent of searches in Queens and across New York City happen on a phone. A website that looks great on a desktop but breaks on mobile is turning away more than half your potential customers. Every site we build renders correctly and loads quickly across all devices.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/creative-branding-idea-icon.png') }}" alt="Built for Google">
                </div>
                <h3 class="wsp-card-title">Built for Google from Day One</h3>
                <p class="wsp-card-text">
                    A good-looking website that no one can find is not a business asset. Web Support Plaza builds every site with on-page SEO architecture already in place: proper heading structure, metadata, schema markup, page speed optimization, and local keyword integration. Your website launches ready to compete in local search without requiring a separate SEO fix three months later.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/ppc-advertising-icon.png') }}" alt="Conversion Layout">
                </div>
                <h3 class="wsp-card-title">Conversion-Focused Layout</h3>
                <p class="wsp-card-text">
                    Getting visitors to your site is step one. Converting them into calls, form submissions, and booked appointments is the actual goal. We design every page with clear calls to action, logical navigation, and a content structure that guides visitors to contact you.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-development-code-icon.png') }}" alt="E-Commerce Development">
                </div>
                <h3 class="wsp-card-title">E-Commerce Development</h3>
                <p class="wsp-card-text">
                    For businesses selling products online, Web Support Plaza builds e-commerce websites with clean product pages, secure checkout, and the SEO foundation needed to compete in New York's crowded online retail market. If you are launching a new store or rebuilding an existing one, we can handle the full build.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/social-media-management-icon.png') }}" alt="Redesign and Migration">
                </div>
                <h3 class="wsp-card-title">Website Redesign and Migration</h3>
                <p class="wsp-card-text">
                    If your current site is outdated, slow, or simply not producing results, we rebuild it. WSP handles complete redesigns and platform migrations while preserving your SEO equity, updating your content, and delivers a site built around where your business is going.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Process: How a WSP Website Gets Built -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Our Process</span>
            <h2 class="wsp-section-title">How a WSP Website <span class="highlight">Gets Built</span></h2>
            <p class="wsp-section-desc">A straightforward, transparent three-step process from concept to deployment.</p>
        </div>

        <div class="wsp-process-grid">
            <div class="wsp-process-card">
                <div class="wsp-step-num">1</div>
                <h3 class="wsp-process-title">Strategy and Discovery</h3>
                <p class="wsp-process-desc">
                    We start with a conversation about your business, your goals, and your customers. We research your competitors and identify the search terms your target customers use in Queens and the surrounding areas. The site is planned around that intelligence before any design work begins.
                </p>
            </div>

            <div class="wsp-process-card">
                <div class="wsp-step-num">2</div>
                <h3 class="wsp-process-title">Design, Development, and Review</h3>
                <p class="wsp-process-desc">
                    We design your site, build it, and present it for your feedback, after which, we refine it. Every project includes revisions until the site accurately represents your business and meets the objectives we agreed on at the start.
                </p>
            </div>

            <div class="wsp-process-card">
                <div class="wsp-step-num">3</div>
                <h3 class="wsp-process-title">Launch and Handover</h3>
                <p class="wsp-process-desc">
                    Once the site is approved, we handle the launch. We configure your analytics, connect Google Search Console, verify your local listings, and make sure everything is tracked. You own the site completely. We provide a walkthrough so your team can manage content updates with confidence.
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

<!-- 14 Years Building Websites for New York Small Businesses -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="wsp-split-content">
                <span class="wsp-badge">Local Expertise</span>
                <h2 class="wsp-section-title">14 Years Building Websites for <span class="highlight">New York Small Businesses</span></h2>
                <div class="content-styled">
                    <p>
                        Web Support Plaza has been operating in Queens since 2012, completing 250+ web projects across restaurants, medical practices, law firms, contractors, and real estate agencies throughout the tri-state area.
                    </p>
                    <p>
                        Every site is managed in-house. The team handling your design is the same team that builds your SEO and manages your digital presence, so everything points toward the same goal. We also serve English and Spanish-speaking business owners, which reflects the communities we have worked in for over a decade.
                    </p>
                </div>
            </div>
            <div class="split-image-col">
                <div class="wsp-stats-grid" style="grid-template-columns: repeat(2, 1fr); gap: 1.5rem; background: var(--bg-light); padding: 2rem; border-radius: 1rem; border: 1px solid var(--border-color);">
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

<!-- Industries We Serve -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Industry Experience</span>
            <h2 class="wsp-section-title">We Know What Your Industry <span class="highlight">Needs From a Website</span></h2>
            <p class="wsp-section-desc">Web Support Plaza has built websites across these industries and more. We bring industry-specific knowledge to every build, not a generic layout applied to whatever comes through the door.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1rem; max-width: 1000px; margin: 0 auto 2.5rem;">
            <div style="background: var(--bg-white); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Restaurants and food businesses</span>
            </div>
            <div style="background: var(--bg-white); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Medical and dental practices</span>
            </div>
            <div style="background: var(--bg-white); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Law firms and legal services</span>
            </div>
            <div style="background: var(--bg-white); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Contractors and skilled tradespeople</span>
            </div>
            <div style="background: var(--bg-white); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Real estate agencies and brokers</span>
            </div>
            <div style="background: var(--bg-white); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Retail and e-commerce businesses</span>
            </div>
            <div style="background: var(--bg-white); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Educational institutions</span>
            </div>
            <div style="background: var(--bg-white); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Non-profits and community organizations</span>
            </div>
        </div>

        <div style="text-align: center;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                <span>Book a Free Consultation</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Client Feedback</span>
            <h2 class="wsp-section-title">What Queens <span class="highlight">Business Owners Say</span></h2>
            <p class="wsp-section-desc">Real stories from local entrepreneurs who partnered with Web Support Plaza.</p>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                <p class="wsp-card-text" style="font-size: 1.05rem; font-style: italic; color: var(--dark); line-height: 1.7; margin-bottom: 1.5rem;">
                    “We had a website that was years old and never ranked for anything. WSP rebuilt it from scratch. Within three months we were showing up for our main service keywords in Queens. The calls picked up noticeably.”
                </p>
                <div style="border-top: 1px solid var(--border-color); padding-top: 1rem; font-weight: 700; color: var(--primary);">
                    — Contractor, Queens, NY
                </div>
            </div>

            <div class="wsp-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                <p class="wsp-card-text" style="font-size: 1.05rem; font-style: italic; color: var(--dark); line-height: 1.7; margin-bottom: 1.5rem;">
                    “The process was clear from the beginning. They explained what they were doing and why. The site launched on schedule and looks more professional than anything we had before.”
                </p>
                <div style="border-top: 1px solid var(--border-color); padding-top: 1rem; font-weight: 700; color: var(--primary);">
                    — Medical Practice, Forest Hills, NY
                </div>
            </div>

            <div class="wsp-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                <p class="wsp-card-text" style="font-size: 1.05rem; font-style: italic; color: var(--dark); line-height: 1.7; margin-bottom: 1.5rem;">
                    “We tried to manage our website ourselves for years. WSP took it over, redesigned it, and now it actually brings in inquiries. It was one of the better business decisions we made.”
                </p>
                <div style="border-top: 1px solid var(--border-color); padding-top: 1rem; font-weight: 700; color: var(--primary);">
                    — Restaurant Owner, Astoria, NY
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-cta-banner">
            <h2>Ready to Have a Website That Actually Works?</h2>
            <p>
                A free 30-minute consultation is the starting point. We look at your current site, your market, and your goals, then give you an honest assessment of what needs to change and what we would build.
            </p>
            <p style="font-size: 0.95rem; opacity: 0.9; margin-bottom: 1.5rem;">
                <strong>Location:</strong> Forest Hills, Queens, New York · Serving Queens, Brooklyn, Manhattan, Nassau, Suffolk, New Jersey, and Connecticut
            </p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Book Your Consultation</span>
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
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">FAQ</span>
            <h2 class="wsp-section-title">Questions About <span class="highlight">Website Development</span></h2>
            <p class="wsp-section-desc">Straight answers to common questions about our website design and development services.</p>
        </div>

        <div class="wsp-accordion">
            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>How long does it take to build a website?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>A standard business website typically takes three to six weeks from the initial strategy session to launch. Timelines vary based on the number of pages, custom functionality, and how quickly we receive content and approvals from your side.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Do you build on WordPress?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes. Web Support Plaza builds on WordPress and other platforms depending on what fits your business needs. Every build prioritizes fast load times, clean code, and SEO-ready structure regardless of platform.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Will my website rank on Google?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Every site WSP builds includes on-page SEO architecture from day one — heading structure, metadata, schema markup, local keyword integration, and page speed optimization. This gives your site a strong foundation to rank. For businesses that want ongoing SEO management after launch, we offer that as a continued service.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Can you redesign an existing website?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes. We handle full redesigns and platform migrations. If your current site has existing SEO rankings worth preserving, we account for that in the migration process.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>What if I need updates after the site launches?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>WSP provides post-launch support. We also walk you through managing your own content updates during handover so you are never fully dependent on us for routine changes.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Do you build e-commerce websites?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes. WSP builds e-commerce sites for product-based businesses across Queens and the tri-state area, with secure checkout, inventory management, and the SEO structure needed to compete online.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
