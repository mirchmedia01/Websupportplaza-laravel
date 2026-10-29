@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Queens NY Digital Agency Since 2012</span>
                <h1 class="wsp-hero-title">
                    Your Next Customer Is Already Searching <span class="highlight">Make Sure They Find You.</span>
                </h1>
                <p class="wsp-hero-lead">
                    Web Support Plaza is Queens’ most experienced digital marketing agency. We build websites that rank, generate leads, and grow with your business, all under one roof.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('how-it-works') }}" class="wsp-btn wsp-btn-primary">
                        <span>See How We Work</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>Get a Free Strategy Call</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <div class="wsp-floating-card" style="top: 12%; left: -5%;">
                    <span style="color: #f59e0b; font-size: 1.1rem;">★</span>
                    <span>4.9/5 Rating · 250+ Projects</span>
                </div>
                <img src="{{ asset('images/seo/web-design-digital-marketing-agency-queens.png') }}" alt="Web Design & Digital Marketing Agency in Queens, New York" class="wsp-hero-image" width="600" height="600">
                <div class="wsp-floating-card" style="bottom: 10%; right: -5%;">
                    <span style="color: #10b981; font-weight: 800;">↑ 500K+</span>
                    <span>Leads Generated</span>
                </div>
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

<!-- Section 2: Closing the Gap -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/seo-organic-marketing-lead-generation-queens.png') }}" alt="Creative Web Solutions Queens - SEO and Local Visibility" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Visibility &amp; Growth</span>
                <h2 class="wsp-section-title">
                    Your Business Does Good Work <span class="highlight">Google Doesn't Know It Yet.</span>
                </h2>
                <div class="content-styled">
                    <p>
                        A customer needs a contractor, a dentist, or a good accountant. They open Google, type a few words, and call whoever shows up first. They do not scroll past page one or ask around.
                    </p>
                    <p>
                        The business they call may not be better than yours. It just showed up, and yours did not. Customers in Queens, Brooklyn, and across the tri-state area are searching for exactly what you offer right now. If your website isn’t ranking, your Google Business Profile isn’t optimized, and your online presence isn’t consistent, those customers are finding someone else.
                    </p>
                    <p>
                        That’s the gap Web Support Plaza has been closing since 2012. Our team uses proven digital marketing strategies, advanced SEO techniques, and data-driven insights to help businesses increase online visibility, generate qualified leads, and attract more local customers.
                    </p>
                </div>
                <div style="margin-top: 2rem;">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get Started Now</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: In-House Team -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split reverse">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/about-web-support-plaza-queens-team.png') }}" alt="Web Support Plaza Team and Technology" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Proven Experience</span>
                <h2 class="wsp-section-title">
                    We Have Seen This Before <span class="highlight">We Know How to Fix It.</span>
                </h2>
                <div class="content-styled">
                    <p>
                        Since 2012, Web Support Plaza has worked with restaurants, contractors, doctors, lawyers, and real estate agents across Queens and New York City. We understand the frustration of paying for a website that doesn’t produce results, or watching a competitor rank higher despite doing inferior work.
                    </p>
                    <p>
                        We have delivered 250+ projects and generated over 500,000 leads for local businesses. Our team of 40+ digital professionals manages everything from custom web design to local SEO to social media, so you don’t have to piece it together yourself.
                    </p>
                </div>
                <div style="margin-top: 2rem;">
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-primary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>Book Free Call</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: 3 Steps Process -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Our Simple Process</span>
            <h2 class="wsp-section-title">Three Steps to Being <span class="highlight">Impossible to Ignore Online</span></h2>
            <p class="wsp-section-desc">We make the journey from invisible to local market leader straightforward and transparent.</p>
        </div>

        <div class="wsp-process-grid">
            <div class="wsp-process-card">
                <div class="wsp-step-num">01</div>
                <h3 class="wsp-process-title">Book a Free Strategy Call</h3>
                <p class="wsp-process-desc">
                    Tell us about your business, your goals, and where you feel stuck online. No commitment or jargon. Just a straight conversation about what it would take to grow.
                </p>
            </div>
            <div class="wsp-process-card">
                <div class="wsp-step-num">02</div>
                <h3 class="wsp-process-title">We Build Your Digital System</h3>
                <p class="wsp-process-desc">
                    We design your website, optimize your local listings, manage your Google Business Profile, and build an SEO strategy targeting the customers already searching for you in Queens and beyond.
                </p>
            </div>
            <div class="wsp-process-card">
                <div class="wsp-step-num">03</div>
                <h3 class="wsp-process-title">Your Business Grows Online</h3>
                <p class="wsp-process-desc">
                    Rankings improve. Calls increase. Your business shows up where your customers are looking on Google, on maps, on social media, everywhere that matters.
                </p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3.5rem;">
            <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span>Book Your Free Strategy Call</span>
            </a>
        </div>
    </div>
</section>

<!-- Section 5: Services -->
<section class="wsp-section bg-light" id="services">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Complete Digital Solutions</span>
            <h2 class="wsp-section-title">
                End-to-End Digital Marketing for Small <span class="highlight">Businesses in Queens, New York City.</span>
            </h2>
            <p class="wsp-section-desc">Everything your business needs to attract qualified leads and scale consistently.</p>
        </div>

        <div class="wsp-cards-grid">
            <!-- Service 1 -->
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/creative-branding-idea-icon.png') }}" alt="Website Design and Development">
                </div>
                <h3 class="wsp-card-title">Website Design &amp; Development</h3>
                <p class="wsp-card-text">
                    Your website is your most hardworking salesperson. We build custom sites that load fast, look professional, and convert visitors into customers.
                </p>
                <a href="{{ route('website-development') }}" class="wsp-card-link">
                    <span>Learn More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>

            <!-- Service 2 -->
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-design-ui-icon.png') }}" alt="Local SEO and Google Rankings">
                </div>
                <h3 class="wsp-card-title">Local SEO &amp; Google Rankings</h3>
                <p class="wsp-card-text">
                    Ranking on page one for Queens-based searches requires a well-planned, strategic approach. We optimize on-page content, build citations, and get you to the top.
                </p>
                <a href="{{ route('local-seo') }}" class="wsp-card-link">
                    <span>Learn More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>

            <!-- Service 3 -->
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/social-media-management-icon.png') }}" alt="Social Media Management">
                </div>
                <h3 class="wsp-card-title">Social Media Management</h3>
                <p class="wsp-card-text">
                    Your customers are on Instagram, Facebook, and TikTok. We create content that builds trust, drives engagement, and keeps your business visible in your neighborhood.
                </p>
                <a href="{{ route('social-media-marketing-services') }}" class="wsp-card-link">
                    <span>Learn More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>

            <!-- Service 4 -->
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-development-code-icon.png') }}" alt="Google Business Profile Management">
                </div>
                <h3 class="wsp-card-title">Google Business Profile Management</h3>
                <p class="wsp-card-text">
                    Your Google listing is prime digital real estate. We optimize, update, and manage it so you show up in local searches and Google Maps when buyers are ready to act.
                </p>
                <a href="{{ route('google-business-profile-management') }}" class="wsp-card-link">
                    <span>Learn More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>

            <!-- Service 5 -->
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/ppc-advertising-icon.png') }}" alt="Pay-Per-Click Advertising">
                </div>
                <h3 class="wsp-card-title">Pay-Per-Click Advertising</h3>
                <p class="wsp-card-text">
                    When you need results faster than SEO alone can deliver, targeted paid ads put your business in front of the right audience at exactly the right moment.
                </p>
                <a href="{{ route('pay-per-click-ads') }}" class="wsp-card-link">
                    <span>Learn More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>

            <!-- Service 6 -->
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/local-seo-ranking-icon.png') }}" alt="Mobile App Development">
                </div>
                <h3 class="wsp-card-title">Mobile App Development</h3>
                <p class="wsp-card-text">
                    For businesses ready to build a direct channel to their customers, we design and develop mobile applications for iOS and Android that extend your brand.
                </p>
                <a href="{{ route('mobile-app-development') }}" class="wsp-card-link">
                    <span>Learn More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3.5rem;">
            <a href="{{ route('services') }}" class="wsp-btn wsp-btn-secondary wsp-btn-lg">
                <span>Explore All Services</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- Section 6: Real Results & Testimonials -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Queens Case Studies</span>
            <h2 class="wsp-section-title">Real Results. Real Businesses. <span class="highlight">Right Here in Queens.</span></h2>
            <p class="wsp-section-desc">250+ businesses across Queens, Brooklyn, Manhattan, and the tri-state area have trusted Web Support Plaza.</p>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">
                    “Web Support Plaza redesigned our website and handled our local SEO. Within 90 days, we were ranking on the first page for our main service keywords in Queens. The calls doubled.”
                </p>
                <div class="wsp-quote-author">
                    <span>— Restaurant Owner, Forest Hills, NY</span>
                </div>
            </div>

            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">
                    “We had a website. It just wasn’t doing anything. WSP changed that. Our Google listing now shows up first and we get inquiries every week we never had before.”
                </p>
                <div class="wsp-quote-author">
                    <span>— Contractor, Queens, NY</span>
                </div>
            </div>

            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">
                    “They took over our social media and digital presence completely. I stopped worrying about it and started focusing on the business. That’s exactly what I needed.”
                </p>
                <div class="wsp-quote-author">
                    <span>— Medical Practice, Queens, NY</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 7: Competitor Gains Ground -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/custom-mobile-app-solutions-queens.png') }}" alt="Web Support Plaza Competitive Advantage" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Local Market Advantage</span>
                <h2 class="wsp-section-title">
                    Every Day You're Invisible Online Is <span class="highlight">a Day Your Competitor Gains Ground</span>
                </h2>
                <div class="content-styled">
                    <p>
                        Businesses that invest in local SEO, a strong website, and consistent Google Business Profile management always get found, close calls and get booked faster.
                    </p>
                    <p>
                        Web Support Plaza was founded to make sure you are on the right side of that equation. We have been doing it in Queens since 2012. We know the market, these neighborhoods, and what it takes to compete here.
                    </p>
                    <p>
                        When your customers search for what you offer, your name should come up first. We make that happen.
                    </p>
                </div>
                <div style="margin-top: 2rem;">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get Started Now</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 8: Searching Right Now CTA Bar -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-cta-banner" style="background: linear-gradient(135deg, #0b1120 0%, #1e293b 100%); border: 1px solid rgba(255, 255, 255, 0.1); text-align: center; padding: 3.5rem 2rem;">
            <h2 style="color: #ffffff; font-size: 2.25rem; font-weight: 800; margin-bottom: 1rem;">
                Your Next Customer Is <br><span class="highlight">Searching Right Now.</span>
            </h2>
            <p style="color: #94a3b8; max-width: 680px; margin: 0 auto 1rem; font-size: 1.1rem; font-weight: 600;">
                Let us make sure they find you.
            </p>
            <p style="color: #cbd5e1; max-width: 680px; margin: 0 auto 2.25rem; font-size: 1rem; line-height: 1.7;">
                Schedule a free 30-minute strategy session with the Web Support Plaza team. No sales pressure. No obligation. We will look at where your business stands online and tell you exactly what we would do to grow it.
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

<!-- Section 9: FAQs Accordion -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="wsp-split-content">
                <span class="wsp-badge">Got Questions?</span>
                <h2 class="wsp-section-title">Questions Queens <span class="highlight">Business Owners Ask Us</span></h2>
                <div class="wsp-faq-list" style="margin-top: 2rem;">
                    <div class="wsp-faq-item active">
                        <button type="button" class="wsp-faq-question">
                            <span>How long before I see results from SEO?</span>
                            <span class="wsp-faq-toggle" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </button>
                        <div class="wsp-faq-answer">
                            Local SEO improvements typically show within 60 to 90 days. Significant ranking gains and lead growth usually happen between months three and six, with compounding results over time.
                        </div>
                    </div>

                    <div class="wsp-faq-item">
                        <button type="button" class="wsp-faq-question">
                            <span>Do you work with businesses outside Queens?</span>
                            <span class="wsp-faq-toggle" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </button>
                        <div class="wsp-faq-answer">
                            Yes. Web Support Plaza serves clients across Brooklyn, Manhattan, the Bronx, Staten Island, Nassau, Suffolk, New Jersey, and Connecticut. Queens is home — the tri-state area is our market.
                        </div>
                    </div>

                    <div class="wsp-faq-item">
                        <button type="button" class="wsp-faq-question">
                            <span>What makes WSP different from other digital marketing agencies?</span>
                            <span class="wsp-faq-toggle" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </button>
                        <div class="wsp-faq-answer">
                            Fourteen years of consistent local operation, 250+ completed projects, and a team that handles everything end-to-end. We are not a hand-off shop. When you work with WSP, one team manages your website, your SEO, your listings, and your social media — all aligned to the same goal.
                        </div>
                    </div>

                    <div class="wsp-faq-item">
                        <button type="button" class="wsp-faq-question">
                            <span>Do you offer bilingual services?</span>
                            <span class="wsp-faq-toggle" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </span>
                        </button>
                        <div class="wsp-faq-answer">
                            Yes. Web Support Plaza serves English and Spanish-speaking business owners across the New York area.
                        </div>
                    </div>
                </div>
            </div>

            <div class="split-image-col">
                <img src="{{ asset('images/seo/responsive-web-design-mobile-desktop.png') }}" alt="Web Support Plaza Cross-Platform Responsive Services" class="wsp-split-image" width="600" height="450">
            </div>
        </div>
    </div>
</section>

<!-- Section 10: Final CTA Banner -->
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
                <a href="mailto:marketing@mirchmedia.com" class="wsp-btn wsp-btn-outline-white wsp-btn-lg">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <span>Email Now</span>
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
