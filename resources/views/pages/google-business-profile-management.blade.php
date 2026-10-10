@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Map Pack Visibility</span>
                <h1 class="wsp-hero-title">
                    Google Business Profile Management in Queens, NY | <span class="highlight">Get in the Local Pack</span>
                </h1>
                <p class="wsp-hero-lead">
                    Web Support Plaza manages Google Business Profiles for Queens small businesses to get them into that coveted 3-pack and keep them there.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get Your Profile Optimized</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/seo-organic-marketing-lead-generation-queens.png') }}" alt="Google Business Profile Management" class="wsp-hero-image" width="600" height="600">
            </div>
        </div>
    </div>
</section>

<!-- Split Section: Cost of Inactivity -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/local-seo-google-maps-citation-listings.png') }}" alt="Optimized Google Listing" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">The Cost of Inactivity</span>
                <h2 class="wsp-section-title">An Incomplete Profile Is Costing <span class="highlight">You Customers You Never See</span></h2>
                <div class="content-styled">
                    <p>
                        Google uses your Business Profile to decide whether your business is relevant, trustworthy, and active enough to show to local searchers. A profile with outdated hours, no recent photos, unanswered reviews, and thin service descriptions signals to Google that your business is a low priority.
                    </p>
                    <p>
                        The customers searching for what you offer in Queens and the surrounding areas never find you. They call someone else, and you never know those leads existed. Web Support Plaza handles every element of your profile so that does not happen.
                    </p>
                </div>
                <div style="margin-top: 1.75rem;">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get Started Today</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What WSP Handles for Your Profile Grid -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Full Management</span>
            <h2 class="wsp-section-title">What WSP Handles for <span class="highlight">Your Profile</span></h2>
            <p class="wsp-section-desc">Our team actively manages your Google presence week after week for sustained map pack rankings.</p>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/creative-branding-idea-icon.png') }}" alt="Profile Setup">
                </div>
                <h3 class="wsp-card-title">Profile Setup, Verification, and Optimization</h3>
                <p class="wsp-card-text">
                    A Google Business Profile has over 20 fields that influence your ranking. We complete every field, select exact primary/secondary categories, and structure your services section to capture high-intent buyer searches.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/social-media-management-icon.png') }}" alt="Review Management">
                </div>
                <h3 class="wsp-card-title">Review Monitoring and Response</h3>
                <p class="wsp-card-text">
                    Professional, keyword-optimized responses to customer reviews build authority with both prospective buyers and Google's ranking algorithms.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-development-code-icon.png') }}" alt="Google Posts">
                </div>
                <h3 class="wsp-card-title">Google Posts and Profile Activity</h3>
                <p class="wsp-card-text">
                    Google rewards active profiles. Regular posts covering offers, service updates, events, and business news signal to Google that your listing is current and engaged. WSP creates and publishes posts on a consistent schedule, written around your business and the search terms your Queens customers use.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-design-ui-icon.png') }}" alt="Q&A Management">
                </div>
                <h3 class="wsp-card-title">Q&amp;A Management</h3>
                <p class="wsp-card-text">
                    The Q&amp;A section of your Google Business Profile is publicly visible and directly influences customer decisions. Left unmanaged, it can contain inaccurate information posted by anyone. WSP monitors your Q&amp;A section, answers incoming questions accurately, and seeds it with the questions your customers commonly ask before contacting you.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/local-seo-ranking-icon.png') }}" alt="NAP Consistency">
                </div>
                <h3 class="wsp-card-title">NAP Consistency and Citation Management</h3>
                <p class="wsp-card-text">
                    Your business name, address, and phone number need to appear identically across every directory where your business is listed, including Google, Yelp, Apple Maps, Bing, and dozens of others. Inconsistencies confuse Google and suppress your local rankings. WSP audits your citations, corrects inconsistencies, and maintains accuracy across the directories that matter most for Queens local search.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/ppc-advertising-icon.png') }}" alt="Performance Reporting">
                </div>
                <h3 class="wsp-card-title">Performance Reporting</h3>
                <p class="wsp-card-text">
                    WSP provides monthly reporting on your Google Business Profile performance: how many people found your profile, what search terms they used, how many clicked for directions or called directly, and how your ranking is moving over time. The data is straightforward and tied to business outcomes, not marketing metrics that do not translate to revenue.
                </p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 2.5rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                <span>Explore GBP Management</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- The Local Pack Is Where Customers Decide -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split reverse">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/why-choose-custom-web-design-queens.png') }}" alt="The Local Pack" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Map Dominance</span>
                <h2 class="wsp-section-title">The Local Pack Is Where <span class="highlight">Customers Decide</span></h2>
                <div class="content-styled">
                    <p>
                        When Google detects local intent in a search, it displays a map section at the top of the results page showing three businesses with their ratings, hours, and contact details. Most clicks go to those three listings. The organic website results below the map are largely ignored.
                    </p>
                    <p>
                        Getting into that pack comes down to three factors Google measures: <strong>relevance</strong>, <strong>distance</strong>, and <strong>prominence</strong>. WSP’s management work directly improves all three, which matters in a market as competitive as Queens, where multiple businesses in every category are competing for the same three spots.
                    </p>
                </div>
                <div style="margin-top: 1.75rem;">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Find Out Where Your Profile Currently Stands</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process: How Web Support Plaza Gets Your Profile Working -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Our Process</span>
            <h2 class="wsp-section-title">How Web Support Plaza Gets <span class="highlight">Your Profile Working</span></h2>
            <p class="wsp-section-desc">A structured methodology that drives lasting local rankings.</p>
        </div>

        <div class="wsp-process-grid">
            <div class="wsp-process-card">
                <div class="wsp-step-num">1</div>
                <h3 class="wsp-process-title">Strategy and Audit</h3>
                <p class="wsp-process-desc">
                    We start by pulling a full audit of your existing Google Business Profile, identifying gaps, errors, and optimization opportunities. We research the search terms your customers use for your category in Queens and structure the entire optimization around that intelligence.
                </p>
            </div>

            <div class="wsp-process-card">
                <div class="wsp-step-num">2</div>
                <h3 class="wsp-process-title">Full Optimization and Setup</h3>
                <p class="wsp-process-desc">
                    We optimize every field on your profile, update your photo library, build out your services section, write your business description, and correct any citation inconsistencies across major directories. For businesses without an existing profile, we handle setup and verification from scratch.
                </p>
            </div>

            <div class="wsp-process-card">
                <div class="wsp-step-num">3</div>
                <h3 class="wsp-process-title">Ongoing Management and Reporting</h3>
                <p class="wsp-process-desc">
                    After the initial optimization, we manage your profile on a monthly basis: publishing posts, responding to reviews, updating information as your business changes, and monitoring performance. You receive a monthly report showing what moved and why.
                </p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 2.5rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                <span>Book Your Free Strategy Call</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- 14 Years Managing Local Presence for Queens Businesses -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="wsp-split-content">
                <span class="wsp-badge">Queens-Rooted Since 2012</span>
                <h2 class="wsp-section-title">14 Years Managing Local Presence for <span class="highlight">Queens Businesses</span></h2>
                <div class="content-styled">
                    <p>
                        Web Support Plaza has been working with Queens small businesses since 2012, managing their digital presence across web, search, and local listings. Over that time, we have developed a precise understanding of how local search works in this market and what it takes to rank in the Queens local pack across competitive categories.
                    </p>
                    <p>
                        Every profile we manage is handled in-house. The team managing your Google Business Profile is the same team managing your website SEO and social media, so every signal pointing at your business is consistent and aligned.
                    </p>
                    <p>
                        We also serve English and Spanish-speaking business owners, which reflects the communities we have been embedded in across Queens for over a decade.
                    </p>
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

<!-- Built for Businesses That Rely on Local Customers -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Local Focus</span>
            <h2 class="wsp-section-title">Built for Businesses That Rely on <span class="highlight">Local Customers</span></h2>
            <p class="wsp-section-desc">
                Google Business Profile management is most valuable for businesses where customers make decisions based on proximity, reputation, and availability. If your customers are searching locally before they call, your profile is one of the first things they judge you by. WSP manages profiles for:
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1rem; max-width: 1000px; margin: 0 auto 2.5rem;">
            <div style="background: var(--bg-light); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Restaurants and food businesses across Queens and the boroughs</span>
            </div>
            <div style="background: var(--bg-light); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Medical and dental practices competing in neighborhood-level search</span>
            </div>
            <div style="background: var(--bg-light); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Contractors, plumbers, electricians, and skilled tradespeople</span>
            </div>
            <div style="background: var(--bg-light); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Law firms and professional service providers</span>
            </div>
            <div style="background: var(--bg-light); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Real estate agencies and independent brokers</span>
            </div>
            <div style="background: var(--bg-light); padding: 1.25rem 1.5rem; border-radius: 0.75rem; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.75rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span style="font-weight: 600; color: var(--dark);">Retail businesses with a physical Queens location</span>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Client Proof</span>
            <h2 class="wsp-section-title">What Queens <span class="highlight">Business Owners Say</span></h2>
            <p class="wsp-section-desc">Real stories from local entrepreneurs who partner with Web Support Plaza.</p>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                <p class="wsp-card-text" style="font-size: 1.05rem; font-style: italic; color: var(--dark); line-height: 1.7; margin-bottom: 1.5rem;">
                    “We had a Google listing but never touched it. WSP cleaned it up, started posting regularly, and got us responding to reviews properly. Within two months we started showing up in the map results for our main service area in Queens. The calls picked up.”
                </p>
                <div style="border-top: 1px solid var(--border-color); padding-top: 1rem; font-weight: 700; color: var(--primary);">
                    — Contractor, Queens, NY
                </div>
            </div>

            <div class="wsp-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                <p class="wsp-card-text" style="font-size: 1.05rem; font-style: italic; color: var(--dark); line-height: 1.7; margin-bottom: 1.5rem;">
                    “Our reviews were sitting there unanswered for months. WSP took over, responded to everything, and put a system in place for getting new reviews. Our rating went from 3.8 to 4.6 in about four months.”
                </p>
                <div style="border-top: 1px solid var(--border-color); padding-top: 1rem; font-weight: 700; color: var(--primary);">
                    — Restaurant Owner, Flushing, NY
                </div>
            </div>

            <div class="wsp-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                <p class="wsp-card-text" style="font-size: 1.05rem; font-style: italic; color: var(--dark); line-height: 1.7; margin-bottom: 1.5rem;">
                    “I did not know what my Google listing was doing or not doing. WSP audited it, fixed what was wrong, and now I get a report every month showing exactly what is happening. It is one less thing I have to think about.”
                </p>
                <div style="border-top: 1px solid var(--border-color); padding-top: 1rem; font-weight: 700; color: var(--primary);">
                    — Medical Practice, Forest Hills, NY
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-cta-banner">
            <h2>Ready to Take Over Google Maps in Your Area?</h2>
            <p>
                A free audit takes 30 minutes. We review your current profile, identify what is suppressing your local pack ranking, and tell you exactly what needs to change. No obligation, no pitch deck.
            </p>
            <p style="font-size: 0.95rem; opacity: 0.9; margin-bottom: 1.5rem;">
                <strong>Location:</strong> Forest Hills, Queens, New York · Serving Queens, Brooklyn, Manhattan, Nassau, Suffolk, New Jersey, and Connecticut
            </p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Book Your Free Profile Audit</span>
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
            <h2 class="wsp-section-title">Questions About <span class="highlight">Google Business Profile Management</span></h2>
            <p class="wsp-section-desc">Clear answers about how we optimize and maintain your local Google presence.</p>
        </div>

        <div class="wsp-accordion">
            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>What is the Google local pack and why does it matter?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>The local pack is the map section that appears at the top of Google search results when someone searches for a local business or service. It shows three businesses with their ratings, hours, and contact details. Ranking in the local pack puts your business in front of customers before any organic website links appear.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>How long does it take to rank in the local pack?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Significant profile improvements can show measurable ranking movement within 30 to 60 days. Getting into the local pack for competitive search terms in Queens typically takes three to six months of consistent management, depending on your category and current profile state.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Do you manage profiles for businesses with multiple locations?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes. WSP manages multi-location profiles with separate optimization strategies for each location based on the neighborhood and competitive landscape around each address.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>My profile already exists. Can you take it over?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes. We audit what exists, identify what is working and what is not, and take over ongoing management from there. You retain full ownership of the profile throughout.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>What is NAP consistency and why does it matter?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>NAP stands for name, address, and phone number. Google cross-references your business information across directories and citations to verify that your business is legitimate and accurately represented. Inconsistencies across listings create conflicting signals that suppress your local rankings. WSP corrects and maintains NAP consistency across all major directories.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Is Google Business Profile management different from SEO?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>They work together but are distinct. Your Google Business Profile influences your local pack and Google Maps rankings. Your website SEO influences your rankings in the organic results below the map. WSP manages both, and the two strategies reinforce each other when aligned correctly.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
