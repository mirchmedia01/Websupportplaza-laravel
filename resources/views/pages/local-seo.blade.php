@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Queens Local SEO</span>
                <h1 class="wsp-hero-title">
                    Local SEO for Queens Small Businesses — <span class="highlight">Get Found on Google, Grow Organically, Get More Customers</span>
                </h1>
                <p class="wsp-hero-lead">
                    Your next customer is already searching. Will Google show them your business or your competitor’s? Web Support Plaza has been helping small businesses across Queens, Brooklyn, and the tri-state area rank on Google and win local searches since 2012. We manage your Google Business Profile, build your local authority, and put your business in front of people searching for exactly what you do in your neighborhood.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get a Free Local SEO Audit</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/seo-organic-marketing-lead-generation-queens.png') }}" alt="Queens Local SEO Agency" class="wsp-hero-image" width="600" height="600">
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

<!-- Split Section 1: Customer Searching Reality -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="wsp-split-content">
                <span class="wsp-badge">Local Search Reality</span>
                <h2 class="wsp-section-title">Your Customers Are Searching <span class="highlight">Your Business Is Not Showing Up.</span></h2>
                <div class="content-styled">
                    <p>
                        Most Queens business owners do excellent work. Referrals come in, and regulars keep returning. But when someone new opens Google and types “contractor in Astoria” or “dentist near Forest Hills,” they find a competitor. It is not because the competitor is better, but because Google knows they exist and does not know you do.
                    </p>
                    <p>
                        That search happens hundreds of times a day in your service area. Every one of those clicks is a customer you lose.
                    </p>
                </div>
                <div style="margin-top: 1.75rem;">
                    <a href="{{ route('seo-packages') }}" class="wsp-btn wsp-btn-primary">
                        <span>View SEO Packages</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
            <div class="split-image-col">
                <img src="{{ asset('images/seo/local-seo-google-maps-citation-listings.png') }}" alt="Local SEO Search Queens" class="wsp-split-image" width="600" height="600">
            </div>
        </div>
    </div>
</section>

<!-- Split Section 2: Map Pack Dominance -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-split reverse">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/high-converting-digital-design-engagement.png') }}" alt="Google Map Pack Dominance" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Map Pack Dominance</span>
                <h2 class="wsp-section-title">The Three Places Google <span class="highlight">Decides Your Visibility</span></h2>
                <div class="content-styled">
                    <p>
                        When someone searches “Queens plumber” or “restaurant in Jamaica, NY,” Google returns three results before anything else: the local map pack, consisting of three business listings with ratings, phone numbers, and directions to your business.
                    </p>
                    <p>
                        Getting into the map pack requires an active, fully optimized Google Business Profile, consistent business information across the web, and other additional steps. Below the map pack, organic search results add a second layer of visibility. Businesses that appear in both own the search page for their keywords. That is what we build toward at WSP.
                    </p>
                </div>
                <div style="margin-top: 1.75rem;">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-secondary">
                        <span>Claim Your Map Pack Audit</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Local SEO Services Cards -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Full Service Scope</span>
            <h2 class="wsp-section-title">Comprehensive <span class="highlight">Local SEO Services</span></h2>
            <p class="wsp-section-desc">Every element needed to dominate local search across Queens and the NYC metro area.</p>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/local-seo-ranking-icon.png') }}" alt="Google Business Profile Management">
                </div>
                <h3 class="wsp-card-title">Google Business Profile Management</h3>
                <p class="wsp-card-text">
                    Your GBP is your most important local SEO asset. Web Support Plaza optimizes your categories, service listings, photos, attributes, and Q&amp;A and manages it actively with regular posts and updates. Google rewards profiles that stay current and we treat it as a live marketing channel.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-development-code-icon.png') }}" alt="Citation Building">
                </div>
                <h3 class="wsp-card-title">Citation Building and NAP Consistency</h3>
                <p class="wsp-card-text">
                    Google cross-references your business name, address, and phone number across hundreds of online directories. Inconsistencies suppress your rankings. Web Support Plaza audits your existing citations, corrects errors, and builds new listings across directories that carry real authority in the New York market.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/ppc-advertising-icon.png') }}" alt="Monthly Reporting">
                </div>
                <h3 class="wsp-card-title">Monthly Reporting</h3>
                <p class="wsp-card-text">
                    Every month you receive a clear report: keyword rankings, Google Business Profile performance, local search traffic, and lead volume. These numbers tell you whether the work is producing results.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/creative-branding-idea-icon.png') }}" alt="Review Generation">
                </div>
                <h3 class="wsp-card-title">Review Generation and Reputation Management</h3>
                <p class="wsp-card-text">
                    Reviews influence both your local rankings and your conversion rate. A business with 12 reviews competing against one with 200 is not a fair fight. We build a systematic, fully compliant review process that makes it easy for satisfied customers to leave feedback and gives you a clear protocol for responding in a way that builds trust.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-design-ui-icon.png') }}" alt="Local Link Building">
                </div>
                <h3 class="wsp-card-title">Local Link Building</h3>
                <p class="wsp-card-text">
                    Links from credible local sources like Queens business associations and local press signal to Google that your business has real standing in the community. We identify and pursue local link opportunities specific to your market and industry.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/social-media-management-icon.png') }}" alt="Location Pages">
                </div>
                <h3 class="wsp-card-title">Location and Service Area Pages</h3>
                <p class="wsp-card-text">
                    One page cannot rank for every neighborhood you serve. Web Support Plaza builds dedicated, optimized pages for each area like Forest Hills, Astoria, Jamaica, Flushing, Brooklyn, Nassau County so your business competes in local searches across your full service area.
                </p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 2.5rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                <span>Find Out How We Help You Rank</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- Process: How WSP Builds Your Local Presence -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Our Process</span>
            <h2 class="wsp-section-title">How WSP Builds Your <span class="highlight">Local Presence</span></h2>
            <p class="wsp-section-desc">A systematic, ongoing methodology that produces lasting ranking growth.</p>
        </div>

        <div class="wsp-process-grid">
            <div class="wsp-process-card">
                <div class="wsp-step-num">1</div>
                <h3 class="wsp-process-title">Audit and Baseline</h3>
                <p class="wsp-process-desc">
                    We assess your current Google Business Profile, local keyword rankings, citation consistency, review profile, and on-page SEO. This tells us exactly where you stand and where the fastest gains are.
                </p>
            </div>

            <div class="wsp-process-card">
                <div class="wsp-step-num">2</div>
                <h3 class="wsp-process-title">Strategy and Execution</h3>
                <p class="wsp-process-desc">
                    We build a local SEO plan tailored to your business, market, and competition, and then execute it entirely in-house. GBP optimization, citation cleanup, on-page updates, and launch of the review process.
                </p>
            </div>

            <div class="wsp-process-card">
                <div class="wsp-step-num">3</div>
                <h3 class="wsp-process-title">Ongoing Management</h3>
                <p class="wsp-process-desc">
                    Google's local algorithm rewards businesses that stay active. WSP manages your local presence month over month with fresh content, consistent posting, new reviews, and updated listings so that your rankings hold and compound over time.
                </p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 2.5rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                <span>Get Started With a Free Audit</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- Ranking in Queens Takes More Than a Basic Setup -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="wsp-split-content">
                <span class="wsp-badge">NYC Competitive Advantage</span>
                <h2 class="wsp-section-title">Ranking in Queens Takes More Than a <span class="highlight">Basic SEO Setup</span></h2>
                <div class="content-styled">
                    <p>
                        New York City is one of the most competitive local search environments in the country. A restaurant in Astoria is competing with every optimized listing within a two-mile radius, including businesses with hundreds of reviews and agencies that have managed their GBP profiles for years.
                    </p>
                    <p>
                        A halfway approach produces nothing here. Ranking in Queens, Brooklyn, or Manhattan requires the complete picture: an active GBP, clean citations, consistent review velocity, optimized location content, and local authority signals that hold up against established competitors.
                    </p>
                    <p>
                        Web Support Plaza has operated specifically in this market since 2012. We know which local directories carry weight in New York, which neighborhoods have search volume worth targeting, and what separates a Queens business on page three from one in the map pack.
                    </p>
                    <p style="font-size: 0.95rem; color: var(--text-muted);">
                        WSP has run local SEO campaigns across restaurants and food service, medical and dental practices, law firms, contractors and skilled trades, real estate agencies, retail and e-commerce with physical locations, auto service shops, and personal care businesses. Each industry has its own search behavior and competitive dynamics. We bring that context to every campaign.
                    </p>
                </div>
            </div>
            <div class="split-image-col">
                <div style="background: var(--bg-white); border: 1px solid var(--border-color); border-radius: 1rem; padding: 2rem; box-shadow: var(--shadow-sm);">
                    <h3 style="font-size: 1.3rem; margin-bottom: 1rem; color: var(--dark); font-weight: 700;">Proven Local Leadership</h3>
                    <p style="font-size: 0.95rem; color: var(--text-muted); margin-bottom: 1.5rem;">
                        Web Support Plaza is a Queens-based agency with over 40 professionals who have delivered 250+ projects and generated over 500,000 leads for small businesses across Queens, Brooklyn, Manhattan, the Bronx, Staten Island, Nassau, Suffolk, New Jersey, and Connecticut.
                    </p>
                    <p style="font-size: 0.95rem; color: var(--text-muted); margin-bottom: 1.5rem;">
                        We serve English- and Spanish-speaking business owners, reflecting the communities we have worked alongside for over a decade.
                    </p>
                    <div style="font-weight: 700; color: var(--primary); font-size: 1.1rem; margin-bottom: 1.5rem;">
                        We don’t just build websites. We build businesses.
                    </div>
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary" style="width: 100%;">Book a Free Consultation</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Client Proof</span>
            <h2 class="wsp-section-title">What Queens <span class="highlight">Business Owners Say</span></h2>
            <p class="wsp-section-desc">Real ranking transformations from Queens and NYC small business clients.</p>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                <p class="wsp-card-text" style="font-size: 1.05rem; font-style: italic; color: var(--dark); line-height: 1.7; margin-bottom: 1.5rem;">
                    “We were invisible on Google when we came to WSP. Six months later we were ranking on the first page for our main keywords and getting calls we had never gotten before.”
                </p>
                <div style="border-top: 1px solid var(--border-color); padding-top: 1rem; font-weight: 700; color: var(--primary);">
                    — Contractor, Jackson Heights, NY
                </div>
            </div>

            <div class="wsp-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                <p class="wsp-card-text" style="font-size: 1.05rem; font-style: italic; color: var(--dark); line-height: 1.7; margin-bottom: 1.5rem;">
                    “WSP rebuilt our entire local presence. Reviews started coming in consistently, our map pack ranking improved, and we began seeing inquiries from people who found us on Google — not just word of mouth.”
                </p>
                <div style="border-top: 1px solid var(--border-color); padding-top: 1rem; font-weight: 700; color: var(--primary);">
                    — Medical Practice, Forest Hills, NY
                </div>
            </div>

            <div class="wsp-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                <p class="wsp-card-text" style="font-size: 1.05rem; font-style: italic; color: var(--dark); line-height: 1.7; margin-bottom: 1.5rem;">
                    “Another agency told me SEO takes a year to see anything. WSP showed ranking movement within a few months and kept me informed at every stage. They know this market.”
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
            <h2>Claim Your Local Dominance in Queens</h2>
            <p>
                A free 30-minute strategy call is where it starts. We review your current Google presence, local rankings, and competitors. After that, we give you an honest picture of what it would take to get your business visible in the searches that matter.
            </p>
            <p style="font-size: 0.95rem; opacity: 0.9; margin-bottom: 1.5rem;">
                <strong>Location:</strong> Forest Hills, Queens, New York · Serving Queens, Brooklyn, Manhattan, the Bronx, Staten Island, Nassau, Suffolk, New Jersey, and Connecticut
            </p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Book Your Free Local SEO Consultation</span>
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
            <h2 class="wsp-section-title">Common Questions About <span class="highlight">Local SEO in Queens</span></h2>
            <p class="wsp-section-desc">Clear answers to your questions about local search, Google Business Profiles, and ranking timelines.</p>
        </div>

        <div class="wsp-accordion">
            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>How long does local SEO take?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Most businesses see meaningful ranking movement within three to six months. Google Business Profile improvements — particularly map pack visibility — can appear faster when a profile was incomplete or unmanaged. Results compound the longer the strategy runs.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>What is the difference between local SEO and regular SEO?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Regular SEO targets broad keyword rankings across any geography. Local SEO targets searches with geographic intent — “plumber Queens,” “dentist near me,” “contractor Forest Hills NY” — and optimizes for both Google’s organic results and the map pack. For most small businesses, local SEO produces higher-quality leads because the searcher is already nearby and ready to act.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Do I need a Google Business Profile?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes. Without a complete, verified, and actively managed GBP, you will not appear in the map pack regardless of how strong your website is. WSP handles full setup, optimization, and ongoing management.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>What if my business serves multiple areas?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>We build dedicated location pages for each neighborhood or borough you serve, so your business competes in local searches across your full service area — not just the address on your GBP.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Can you help if I have lost rankings?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes. We conduct a full audit to identify the cause — algorithm changes, citation errors, review issues, technical problems — and build a recovery plan from there.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>How is WSP different from other agencies?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>We are a Queens-based team that has worked specifically in the New York market since 2012. Every campaign is managed in-house. No hand-offs. No outsourced strategy. The team accountable for your results is the same team that does the work.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
