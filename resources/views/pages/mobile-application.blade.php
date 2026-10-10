@extends('layouts.app')

@section('title', 'Custom Mobile App Development for Queens Small Businesses | Web Support Plaza')
@section('meta_description', 'Custom mobile app development for Queens businesses. Web Support Plaza builds native iOS, Android, and cross-platform mobile apps.')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Mobile App Development</span>
                <h1 class="wsp-hero-title">
                    Custom Mobile App Development for Queens Small Businesses &mdash; <span class="highlight">iOS and Android Apps Built for Your Business Needs</span>
                </h1>
                <p class="wsp-hero-lead">
                    Not every business needs a mobile app. But for businesses that do, the right app creates a direct, branded channel to customers that a website alone cannot replicate. Web Support Plaza designs and develops custom mobile applications for small businesses across Queens and New York City, built for iOS, Android, or both.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Tell Us About Your App Idea</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/mobile-application-development-ios-android.png') }}" alt="Custom Mobile App Development for Queens Small Businesses" class="wsp-hero-image" width="600" height="600">
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
            <div class="wsp-split-content">
                <span class="wsp-badge">Purpose-Driven Apps</span>
                <h2 class="wsp-section-title">Most Small Business Apps Fail Because <span class="highlight">They Were Built Without a Clear Purpose</span></h2>
                <div class="content-styled">
                    <p>A restaurant that builds an app just to have one ends up with something customers download once and never open again. A contractor who launches a booking app without the right user flow ends up with an expensive tool nobody uses.</p>
                    <p>The apps that work for Queens small businesses are the ones built to reduce no-shows, build customer loyalty, streamline bookings, or give customers a faster way to reorder. Web Support Plaza starts every project by identifying the problem before writing a single line of code.</p>
                </div>
            </div>
            <div class="split-image-col">
                <img src="{{ asset('images/seo/custom-mobile-app-solutions-queens.png') }}" alt="Purpose-Driven Mobile Applications" class="wsp-split-image" width="600" height="450">
            </div>
        </div>
    </div>
</section>

<!-- App Types Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Custom Solutions</span>
            <h2 class="wsp-section-title">App Types Built for <span class="highlight">Queens Small Businesses</span></h2>
            <p class="wsp-section-desc">Every mobile application is specifically engineered around practical, revenue-generating business workflows.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                </div>
                <h3 class="wsp-card-title">Booking &amp; Appointment Apps</h3>
                <p class="wsp-card-text">For medical practices, salons, contractors, and service businesses that rely on scheduled appointments, a branded booking app reduces customer friction and reduces no-shows. Customers book, reschedule, and receive reminders directly in your app during business hours, without calling.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Loyalty &amp; Rewards</h3>
                <p class="wsp-card-text">Businesses in Queens use loyalty apps to keep customers coming back without relying on third-party platforms that take a percentage of every transaction. A branded loyalty app puts your business directly on your customer's phone.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <h3 class="wsp-card-title">Customer Portal Apps</h3>
                <p class="wsp-card-text">For businesses that manage ongoing client relationships, a customer portal app gives clients access to their account, project status, documents, or service history in one place. It reduces back-and-forth communication and improves the overall service experience.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                </div>
                <h3 class="wsp-card-title">E-Commerce &amp; Ordering Apps</h3>
                <p class="wsp-card-text">Food businesses and retailers need a direct ordering app that removes the commission fees charged by third-party delivery platforms. We build the app. Customers order directly from you. You keep the margin.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Custom Business Apps</h3>
                <p class="wsp-card-text">Some businesses have a specific operational or customer-facing need that does not fit a standard template. WSP assesses the requirement and builds accordingly, whether that is an internal operations tool, a field service app for crews working across Queens, or a customer-facing feature set unique to your industry.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                <span>Explore Our App Development Process</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- Platforms Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/responsive-web-design-mobile-desktop.png') }}" alt="iOS, Android, and Cross-Platform Apps" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Cross-Platform Engineering</span>
                <h2 class="wsp-section-title">iOS, Android, and <span class="highlight">Cross-Platform Development</span></h2>
                <div class="content-styled">
                    <p>Web Support Plaza builds native apps for iOS and Android, as well as cross-platform applications using frameworks like React Native and Flutter. The right approach depends on your audience, your budget, and how the app will be used.</p>
                    <p>Native iOS and Android apps deliver the best performance and the most seamless experience on each platform. Cross-platform development builds a single codebase that runs on both platforms, reducing development time and cost while still producing a high-quality product for most small-business use cases.</p>
                    <p>WSP recommends the right build approach during the strategy session, based on your specific goals rather than on what is easiest to build.</p>
                </div>
                <div style="margin-top: 2rem;">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Start With a Free Strategy Call</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Step-by-Step Delivery</span>
            <h2 class="wsp-section-title">From Concept to <span class="highlight">App Store</span></h2>
            <p class="wsp-section-desc">A proven roadmap taking your app idea from requirements through release and post-launch maintenance.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
                <h3 class="wsp-card-title">1. Discovery and Scoping</h3>
                <p class="wsp-card-text">We start by understanding what the app needs to do, who will use it, and what success looks like for your business. We map out core features, user flows, and technical requirements before any design or development begins.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">2. Design and Development</h3>
                <p class="wsp-card-text">WSP designs the user interface, builds the app, and runs it through testing across devices before launch. You review at each stage and provide feedback before we move forward.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                </div>
                <h3 class="wsp-card-title">3. Launch and Ongoing Support</h3>
                <p class="wsp-card-text">We manage submission to the Apple App Store and Google Play Store. After launch, WSP provides ongoing maintenance, updates, and support so the app continues to function correctly as operating systems and devices evolve.</p>
            </div>
        </div>
    </div>
</section>

<!-- Trust Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="wsp-split-content">
                <span class="wsp-badge">Integrated Agency</span>
                <h2 class="wsp-section-title">App Development From a Team That Also <span class="highlight">Manages Your Digital Presence</span></h2>
                <div class="content-styled">
                    <p>Web Support Plaza has been building digital products for Queens small businesses since 2012. App development at WSP is handled in-house by the same team managing your website, SEO, and marketing.</p>
                    <p>That matters because an app does not exist in isolation. How it is found, how it connects to your website, and how it fits into your broader customer experience all affect whether it produces results. WSP manages that alignment.</p>
                    <p>We serve English and Spanish-speaking business owners across Queens and the tri-state area.</p>
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
                        <span>Book a Free App Development Consultation</span>
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

<!-- Target Audience Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-split reverse">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/high-converting-digital-design-engagement.png') }}" alt="Go Beyond the Browser" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Who This Is For</span>
                <h2 class="wsp-section-title">Built for Queens Businesses Ready to <span class="highlight">Go Beyond the Browser</span></h2>
                <div class="content-styled" style="margin-bottom: 1.5rem;">
                    <p>WSP builds mobile apps for:</p>
                </div>
                <div style="display: flex; flex-direction: column; gap: 0.85rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Restaurants and food businesses looking to launch direct ordering or loyalty programs</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Medical and dental practices that need branded booking and appointment management</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Contractors and field service businesses managing crew scheduling or client communication</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Retail businesses building a direct customer channel</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Professional service firms offering client portals and document access</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Any Queens small business with a specific customer-facing or operational need a standard website cannot solve</span>
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
            <span class="wsp-badge">Client Feedback</span>
            <h2 class="wsp-section-title">What Queens Business <span class="highlight">Owners Say</span></h2>
            <p class="wsp-section-desc">Real feedback from local owners who transformed their customer experience with mobile apps.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“We were paying a significant percentage of every order to a third-party delivery app. WSP built us a direct ordering app and within four months a meaningful portion of our orders were coming through it. The savings compounded quickly.”</p>
                <div class="wsp-quote-author">
                    <strong>Restaurant Owner</strong>
                    <span>— Flushing, NY</span>
                </div>
            </div>
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“We needed a way for clients to check project status and access documents without emailing us constantly. WSP built a client portal app that solved it. Our team spends less time on back-and-forth communication and clients feel more informed.”</p>
                <div class="wsp-quote-author">
                    <strong>Contractor</strong>
                    <span>— Queens, NY</span>
                </div>
            </div>
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“The booking app WSP built reduced our no-show rate noticeably within the first two months. Patients receive automated reminders and can reschedule without calling the front desk.”</p>
                <div class="wsp-quote-author">
                    <strong>Medical Practice</strong>
                    <span>— Forest Hills, NY</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-cta-banner">
            <h2>Have an App Idea? <span style="background: linear-gradient(135deg, #38bdf8 0%, #0ea5e9 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Let's Talk Through It.</span></h2>
            <p>A free strategy call is where every WSP app project starts. We look at what you want the app to do, who will use it, and whether the investment makes sense for your business at this stage. No obligation.</p>
            <p style="font-size: 0.95rem; opacity: 0.85; margin-bottom: 2rem;"><strong>Location:</strong> Forest Hills, Queens, New York Serving Queens, Brooklyn, Manhattan, Nassau, Suffolk, New Jersey, and Connecticut</p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Book Your App Development Consultation</span>
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
            <h2 class="wsp-section-title">Questions About Mobile App Development <span class="highlight">for Queens Businesses</span></h2>
            <p class="wsp-section-desc">Clear answers to common questions about timelines, technology, investments, and ownership.</p>
        </div>
        <div class="wsp-faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="wsp-faq-item active">
                <button type="button" class="wsp-faq-question">
                    <span>How much does it cost to build a mobile app?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    App development costs vary significantly based on complexity, number of features, and whether you need iOS, Android, or both. A straightforward booking or loyalty app for a small business is a very different project from a multi-feature customer portal. WSP scopes the project during the strategy session and provides a clear estimate before any commitment is made.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>How long does development take?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    A basic small business app typically takes eight to sixteen weeks from the start of development to App Store launch. More complex builds take longer. WSP provides a realistic timeline during scoping based on your specific feature requirements.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Do I need separate apps for iOS and Android?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Not necessarily. Cross-platform development using frameworks like React Native or Flutter produces a single codebase that runs on both iOS and Android. For most small business use cases, this approach delivers a high-quality product at a lower cost than building two separate native apps. WSP recommends the right approach based on your audience and goals.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>What happens after the app launches?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    WSP handles ongoing maintenance, iOS and Android operating system updates, bug fixes, and feature additions after launch. Apps require regular updates to remain compatible with new device releases and App Store requirements.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Can you integrate the app with my existing systems?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes. WSP builds integrations with point-of-sale systems, booking platforms, CRM tools, payment processors, and other existing business software where relevant to your app's functionality.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Who owns the app after it is built?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    You do. WSP delivers full ownership of the app, the codebase, and the App Store listings to the client upon project completion.
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span>More questions? Call us: (855) 506-4724</span>
            </a>
        </div>
    </div>
</section>
@endsection
