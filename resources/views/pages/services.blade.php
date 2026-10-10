@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Our Services</span>
                <h1 class="wsp-hero-title">
                    Full-Service Digital Marketing for Queens Small Businesses <span class="highlight">Built to Get You Found, Chosen, and Growing</span>
                </h1>
                <p class="wsp-hero-lead">
                    Web Support Plaza handles digital marketing end-to-end for small businesses in Queens and across the New York tri-state area. Website, SEO, Google listings, social media, paid ads. One team manages all of it.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get a Free Strategy Session</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/website-development-custom-platforms-queens.png') }}" alt="Digital Marketing Services Queens" class="wsp-hero-image" width="600" height="600">
            </div>
        </div>
    </div>
</section>

<!-- The Problem We Solve -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/seo-organic-marketing-lead-generation-queens.png') }}" alt="Local Search and SEO Rankings Queens" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">The Opportunity</span>
                <h2 class="wsp-section-title">The Problem <span class="highlight">We Solve</span></h2>
                <div class="content-styled">
                    <p>
                        When a homeowner in Queens needs an electrician, painter, roofer, or any other company, they open Google, click the first credible-looking result, and call. The search takes about 45 seconds. They are not comparison shopping or asking around. Whoever shows up first and looks legitimate gets the job.
                    </p>
                    <p>
                        Web Support Plaza makes sure the business that shows up is yours. Established and founded in Queens in 2012, our team has delivered over 250 projects and generated 500,000+ leads for local businesses.
                    </p>
                    <p>
                        If your business is not showing up where your customers are searching, let’s fix that.
                    </p>
                </div>
                <div style="margin-top: 2rem;">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get Started Today</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Services Grid: What We Do and What It Does for Your Business -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Our Capabilities</span>
            <h2 class="wsp-section-title">What We Do and What <span class="highlight">It Does for Your Business</span></h2>
            <p class="wsp-section-desc">Explore our full suite of digital marketing, web engineering, and local visibility services.</p>
        </div>

        <div class="wsp-cards-grid">
            <!-- Website Design and Development -->
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-development-code-icon.png') }}" alt="Website Design and Development">
                </div>
                <h3 class="wsp-card-title">Website Design and Development</h3>
                <p class="wsp-card-text">
                    Your website is the first thing a potential customer judges you by. If it loads slowly, looks outdated, or does not work properly on a phone, they leave. Web Support Plaza builds custom websites designed to load quickly, rank well on Google, and convert visitors into paying customers. Every site is built specifically for your business, not pulled from a template.
                </p>
                <a href="{{ route('website-development') }}" class="wsp-card-link">
                    <span>Learn More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>

            <!-- Local SEO and Google Rankings -->
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/local-seo-ranking-icon.png') }}" alt="Local SEO & Google Rankings">
                </div>
                <h3 class="wsp-card-title">Local SEO and Google Rankings</h3>
                <p class="wsp-card-text">
                    Showing up on page one of Google for searches in Queens and the surrounding areas does not happen by accident. It takes the right content, a properly structured site, and consistent local citation management. Web Support Plaza has run local SEO campaigns for New York small businesses for over a decade, targeting search terms that actually drive calls and leads.
                </p>
                <a href="{{ route('local-seo') }}" class="wsp-card-link">
                    <span>Learn More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>

            <!-- Google Business Profile Management -->
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/creative-branding-idea-icon.png') }}" alt="Google Business Profile">
                </div>
                <h3 class="wsp-card-title">Google Business Profile Management</h3>
                <p class="wsp-card-text">
                    Google shows a map of three local businesses before anything else in local searches. If your listing is incomplete, inactive, or unoptimized, you are not on that map. We manage your Google Business Profile fully throughout categories, photos, reviews, posts, and Q&A so that your business shows up when customers in Queens are ready to act.
                </p>
                <a href="{{ route('google-business-profile-management') }}" class="wsp-card-link">
                    <span>Learn More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>

            <!-- Social Media Management -->
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/social-media-management-icon.png') }}" alt="Social Media Management">
                </div>
                <h3 class="wsp-card-title">Social Media Management</h3>
                <p class="wsp-card-text">
                    An inactive social media page raises questions about whether your business is still operating. Web Support Plaza handles content creation, graphic design, scheduling, and performance tracking across your social platforms to keep your business visible and professional for customers who look you up before they call.
                </p>
                <a href="{{ route('social-media-marketing') }}" class="wsp-card-link">
                    <span>Learn More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>

            <!-- Pay-Per-Click Advertising -->
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/ppc-advertising-icon.png') }}" alt="Pay-Per-Click Advertising">
                </div>
                <h3 class="wsp-card-title">Pay-Per-Click Advertising</h3>
                <p class="wsp-card-text">
                    Organic SEO takes time to build. When your business needs leads now, paid advertising on Google and Meta puts you in front of customers who are actively searching. We build and manage paid campaigns focused on one thing: making sure every dollar you spend produces a measurable return.
                </p>
                <a href="{{ route('pay-per-click-ads') }}" class="wsp-card-link">
                    <span>Learn More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>

            <!-- Mobile App Development -->
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <img src="{{ asset('images/seo/icons/web-design-ui-icon.png') }}" alt="Mobile App Development">
                </div>
                <h3 class="wsp-card-title">Mobile App Development</h3>
                <p class="wsp-card-text">
                    For businesses looking to build a direct channel to their customers, Web Support Plaza designs and develops mobile applications for iOS and Android. If the goal is to streamline bookings, build customer loyalty, or expand beyond a browser-based experience, we build apps that meet your business’s needs.
                </p>
                <a href="{{ route('mobile-app-development') }}" class="wsp-card-link">
                    <span>Learn More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why Queens Businesses Come Back to WSP -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/about-web-support-plaza-queens-team.png') }}" alt="Why Queens Businesses Choose Web Support Plaza" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">The WSP Difference</span>
                <h2 class="wsp-section-title">
                    Why Queens Businesses <span class="highlight">Come Back to WSP</span>
                </h2>
                <div class="content-styled">
                    <p>
                        Web Support Plaza has been operating in this market since 2012. In that time, we have completed 250+ projects, generated over 500,000 leads for clients, and built a team of 40+ digital professionals who manage every service in-house.
                    </p>
                    <p>
                        We are not a hand-off shop. When a Queens restaurant owner calls us about their Google ranking, the same team managing their SEO is the team managing their website performance and their social media content. Everything is connected and pointing toward the same outcome.
                    </p>
                    <p>
                        <strong>That is what end-to-end actually means.</strong>
                    </p>
                    <p>
                        We also serve a bilingual client base. Many of the small business owners we work with in Queens and across the New York area prefer to communicate in Spanish, and we accommodate that without a second thought.
                    </p>
                </div>
                <div style="margin-top: 2rem;">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Book a Free 30-Minute Strategy Call</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Built for the Businesses That Run This City -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-split reverse">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/custom-print-design-marketing-collateral.png') }}" alt="Businesses Running New York" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Queens & NYC Operators</span>
                <h2 class="wsp-section-title">
                    Built for the Businesses <span class="highlight">That Run This City</span>
                </h2>
                <div class="content-styled">
                    <p>
                        Our clients are operators who run the city and keep it going. The doctor who spent 20 years building a practice and still does not show up when someone searches for their specialty in their neighborhood. The contractor with 15 years of referrals, who has never had a website that ranked. The restaurant that does great work six nights a week and has 11 Google reviews dating back to 2021.
                    </p>
                    <p><strong>Web Support Plaza works with:</strong></p>
                    <ul style="list-style: disc; padding-left: 1.5rem; margin-bottom: 1.5rem; color: var(--text-main); font-size: 1.05rem; line-height: 1.9;">
                        <li>Restaurants and food businesses across Queens, Brooklyn, and Manhattan</li>
                        <li>Contractors, plumbers, electricians, and skilled tradespeople</li>
                        <li>Doctors, dentists, and healthcare practices</li>
                        <li>Law firms and legal professionals</li>
                        <li>Real estate agents and brokers</li>
                        <li>Retail businesses and e-commerce stores</li>
                    </ul>
                    <p>
                        If your customers look you up online before they call, your digital presence matters. Web Support Plaza makes it work.
                    </p>
                </div>
                <div style="margin-top: 2rem;">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Book a Free Consultation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies / Testimonials: 14 Years. 250+ Projects. 500,000+ Leads. -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Client Proof</span>
            <h2 class="wsp-section-title">14 Years. 250+ Projects. <span class="highlight">500,000+ Leads.</span></h2>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">
                    “Before WSP, our website looked like it was built in 2009 — because it was. We rebranded completely, rebuilt the site, and within four months we were ranking for our main service keywords in Queens. The volume of incoming calls changed noticeably.”
                </p>
                <div class="wsp-quote-author">
                    <span>— General Contractor, Queens, NY</span>
                </div>
            </div>

            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">
                    “We had tried two other agencies. Both promised results and delivered reports. WSP actually moved our Google rankings and we can trace real bookings back to the work they did.”
                </p>
                <div class="wsp-quote-author">
                    <span>— Medical Practice, Forest Hills, NY</span>
                </div>
            </div>

            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">
                    “The consistency is what we did not have before. Every week, the posts go out. Every month, our Google listing is current. I stopped thinking about it, which is exactly what I needed.”
                </p>
                <div class="wsp-quote-author">
                    <span>— Restaurant Owner, Astoria, NY</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner: Let's Find Out What Your Business Needs -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-cta-banner" style="background: linear-gradient(135deg, #0b1120 0%, #1e293b 100%); border: 1px solid rgba(255, 255, 255, 0.1); text-align: center; padding: 3.5rem 2rem;">
            <h2 style="color: #ffffff; font-size: 2.25rem; font-weight: 800; margin-bottom: 1rem;">
                Let's Find Out What Your <span class="highlight">Business Needs</span>
            </h2>
            <p style="color: #cbd5e1; max-width: 680px; margin: 0 auto 1rem; font-size: 1.05rem; line-height: 1.7;">
                Every business we work with starts with a free 30-minute strategy call. We look at where your business currently stands online, identify the gaps, and tell you exactly what we would prioritize first.
            </p>
            <p style="color: #38bdf8; font-weight: 700; margin-bottom: 2.25rem;">
                Location: Forest Hills, Queens, New York — Serving Queens, Brooklyn, Manhattan, Nassau, Suffolk, New Jersey, and Connecticut
            </p>
            <div class="wsp-hero-actions" style="justify-content: center; flex-wrap: wrap; gap: 1rem;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span>Book Your Free Website Consultation</span>
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
            <span class="wsp-badge">Got Questions?</span>
            <h2 class="wsp-section-title">Common Questions About Our <span class="highlight">Digital Marketing Services</span></h2>
        </div>

        <div class="wsp-faq-list" style="max-width: 820px; margin: 2rem auto 0;">
            <div class="wsp-faq-item active">
                <button type="button" class="wsp-faq-question">
                    <span>What is the difference between local SEO and regular SEO?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Local SEO targets searches tied to a specific location, like “electrician Queens NY” or “dentist Forest Hills.” It involves your Google Business Profile, local citations, and location-specific keywords. For small businesses in Queens and the surrounding boroughs, this is where the most direct results come from.
                </div>
            </div>

            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>How long until we see results?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Google Business Profile improvements can show measurable changes within 30 to 60 days. Organic SEO rankings typically shift between months three and six. Paid ads can generate leads immediately but need ongoing management to stay efficient.
                </div>
            </div>

            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Do you work with businesses outside of Queens?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes. Web Support Plaza serves businesses across Brooklyn, Manhattan, the Bronx, Staten Island, Nassau, Suffolk, New Jersey, and Connecticut.
                </div>
            </div>

            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Can you take over work a previous agency started?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes. We assess what exists, keep what works, and build from there.
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
                    Yes. We serve English and Spanish-speaking business owners across the New York area.
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
