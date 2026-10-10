@extends('layouts.app')

@section('title', 'Digital Marketing Agency in Queens, NYC | Web Support Plaza')
@section('meta_description', 'Full-service digital marketing for Queens small businesses: SEO, PPC ads, social media management, and Google Business Profile optimization under one roof.')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Full-Service Digital Marketing</span>
                <h1 class="wsp-hero-title">
                    Digital Marketing for Queens Small Businesses <span class="highlight">That Actually Drives Calls, Not Just Traffic</span>
                </h1>
                <p class="wsp-hero-lead">
                    Web Support Plaza manages digital marketing end-to-end for small businesses across Queens: SEO, paid ads, social media, and your Google listing, all under one roof, all pointed at the same goal.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get a Free Digital Marketing Strategy Call</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/web-design-digital-marketing-agency-queens.png') }}" alt="Digital Marketing Agency in Queens NYC" class="wsp-hero-image" width="600" height="600">
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
                <img src="{{ asset('images/seo/seo-organic-marketing-lead-generation-queens.png') }}" alt="SEO and Organic Marketing Queens" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Unified Strategy</span>
                <h2 class="wsp-section-title">Piecing Together Marketing From <span class="highlight">Different Vendors Rarely Works</span></h2>
                <div class="content-styled">
                    <p>A restaurant hires one company for SEO and a different freelancer for social media, and the two never coordinate. The SEO company optimizes for keywords the social content never mentions. The Instagram page has a completely different tone than the website. Nobody's looking at the whole picture, so nothing reinforces anything else.</p>
                    <p>Meanwhile your competitor down the block has one team handling everything, and it shows. Their website, their Google listing, and their social media all say the same thing and point toward the same call to action.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solution Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-split reverse">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/high-converting-digital-design-engagement.png') }}" alt="Cohesive Digital Marketing Execution" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Cohesive Execution</span>
                <h2 class="wsp-section-title">We Manage It as One System, <span class="highlight">Not Separate Pieces</span></h2>
                <div class="content-styled">
                    <p>Since 2012, Web Support Plaza has managed digital marketing for restaurants, contractors, medical practices, law firms, and real estate agencies across Queens. Every channel we run, your website, your SEO, your Google Business Profile, your social media, your ads, is handled by the same in-house team.</p>
                    <p>That matters because your channels influence each other. A well-optimized website makes your ads perform better. Consistent social media supports your local SEO. When one team manages all of it, everything reinforces everything else instead of working against it.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Complete Scope</span>
            <h2 class="wsp-section-title">What Digital Marketing With <span class="highlight">WSP Actually Covers</span></h2>
            <p class="wsp-section-desc">Every pillar of your business's online presence, completely synchronized.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
                <h3 class="wsp-card-title">Local SEO and Google Rankings</h3>
                <p class="wsp-card-text">Getting your business to show up when customers in Queens search for what you offer, through on-page SEO, citation building, and a Google Business Profile that's actually managed, not just set up and abandoned.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                </div>
                <h3 class="wsp-card-title">Pay-Per-Click Advertising</h3>
                <p class="wsp-card-text">Targeted Google and Meta ad campaigns for businesses that need leads faster than SEO alone can deliver, with conversion tracking so you know exactly what your ad spend is producing.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                </div>
                <h3 class="wsp-card-title">Social Media Management</h3>
                <p class="wsp-card-text">Content creation, graphic design, posting, and engagement across Instagram, Facebook, and other platforms, so your business looks active and professional to customers checking you out before they call.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                </div>
                <h3 class="wsp-card-title">Google Business Profile Management</h3>
                <p class="wsp-card-text">Full optimization and ongoing management of your listing: photos, posts, reviews, and Q&amp;A, so you show up in the map pack when customers are ready to act.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                </div>
                <h3 class="wsp-card-title">Website Design and SEO Foundation</h3>
                <p class="wsp-card-text">A site built to rank and convert from day one, since a marketing campaign sending traffic to a slow or outdated website is spending money to lose customers at the last step.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Reporting That Ties Back to Results</h3>
                <p class="wsp-card-text">Monthly reporting across every channel we manage, showing what's working and what isn't, in plain language tied to calls and leads, not vanity metrics.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                <span>Explore What We'd Build for You</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">How We Work</span>
            <h2 class="wsp-section-title">How WSP Builds Your <span class="highlight">Digital Marketing Strategy</span></h2>
            <p class="wsp-section-desc">A systematic framework proven across hundreds of local businesses.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">1. Audit and Strategy</h3>
                <p class="wsp-card-text">We assess where your business currently stands online: your website, your rankings, your Google listing, your social presence. That audit tells us where the fastest gains are and what to prioritize first.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">2. Build and Launch</h3>
                <p class="wsp-card-text">We execute the plan across whichever channels make sense for your business and your budget, coordinated so every piece supports the others instead of running independently.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">3. Ongoing Management &amp; Reporting</h3>
                <p class="wsp-card-text">Digital marketing isn't a one-time project. WSP manages your presence month over month, adjusting based on what the data shows, with regular reporting so you always know what's happening and why.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                <span>Book Your Free Strategy Call</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- Trust Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="wsp-split-content">
                <span class="wsp-badge">Dedicated Local Agency</span>
                <h2 class="wsp-section-title">Fourteen Years Managing Digital Marketing for <span class="highlight">Queens Businesses</span></h2>
                <div class="content-styled">
                    <p>Web Support Plaza has operated in Queens since 2012, completing 250+ projects and generating over 500,000 leads for local businesses. Every channel is managed in-house by a team of 40+ professionals, not handed off to freelancers or outsourced overseas.</p>
                    <p>We also serve English- and Spanish-speaking business owners, reflecting the communities we've worked in for over a decade.</p>
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
                        <span>Book a Free Consultation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
            <div class="split-image-col">
                <img src="{{ asset('images/seo/queens-business-growth-strategy-consultation.png') }}" alt="Fourteen Years Managing Digital Marketing in Queens" class="wsp-split-image" width="600" height="450">
            </div>
        </div>
    </div>
</section>

<!-- Industries Served -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-split reverse">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/social-media-marketing-management-queens.png') }}" alt="Built for Businesses Ready to Compete Online" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Targeted Industries</span>
                <h2 class="wsp-section-title">Built for Businesses Ready to Compete Online, <span class="highlight">Not Just Exist There</span></h2>
                <div style="display: flex; flex-direction: column; gap: 0.85rem; margin-top: 1.5rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Restaurants and food businesses across Queens, Brooklyn, and Manhattan</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Contractors, plumbers, electricians, and skilled tradespeople</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Doctors, dentists, and healthcare practices</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Law firms and legal professionals</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Real estate agents and brokers</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Retail businesses and e-commerce stores</span>
                    </div>
                </div>
                <p style="margin-top: 1.75rem; font-weight: 600; color: var(--navy-900); font-size: 1.05rem;">If your customers are searching for what you offer and not finding you, this is what fixes that.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Testimonials</span>
            <h2 class="wsp-section-title">What Queens Business <span class="highlight">Owners Say</span></h2>
            <p class="wsp-section-desc">Proven outcomes from partners across New York City.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“We had three different vendors handling our marketing and none of them talked to each other. WSP took over everything and for the first time our website, ads, and social media are actually saying the same thing. Our leads improved within a couple months.”</p>
                <div class="wsp-quote-author">
                    <strong>Contractor</strong>
                    <span>— Queens, NY</span>
                </div>
            </div>
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“Having one team handle our SEO, our Google listing, and our social media made an obvious difference. Things stopped falling through the cracks.”</p>
                <div class="wsp-quote-author">
                    <strong>Medical Practice</strong>
                    <span>— Forest Hills, NY</span>
                </div>
            </div>
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">“WSP gave us an honest audit before we signed anything and told us exactly where to spend first. That built trust immediately.”</p>
                <div class="wsp-quote-author">
                    <strong>Restaurant Owner</strong>
                    <span>— Astoria, NY</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-cta-banner">
            <h2>Let's Find Out What Your <span style="background: linear-gradient(135deg, #38bdf8 0%, #0ea5e9 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Digital Marketing Actually Needs</span></h2>
            <p>A free 30-minute strategy call is where we start. We'll look at where your business currently stands online and tell you plainly what we'd prioritize first.</p>
            <p style="font-size: 0.95rem; opacity: 0.85; margin-bottom: 2rem;"><strong>Location:</strong> Forest Hills, Queens, New York &bull; Serving Queens, Brooklyn, Manhattan, Nassau, Suffolk, New Jersey, and Connecticut</p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Book Your Free Strategy Call</span>
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
            <h2 class="wsp-section-title">Common Questions About <span class="highlight">Digital Marketing With WSP</span></h2>
            <p class="wsp-section-desc">Straight talk about getting the most out of your digital marketing investments.</p>
        </div>
        <div class="wsp-faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="wsp-faq-item active">
                <button type="button" class="wsp-faq-question">
                    <span>Do I need all these services, or can I start with just one?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    You can start with whatever your business needs most. Many clients begin with one service, like SEO or website design, and add others once they see results.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>How long before I see results?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    It depends on the channel. Paid ads can generate leads within days. SEO and Google Business Profile improvements typically show measurable movement within 60 to 90 days, with results compounding over time.
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
                    Yes. Web Support Plaza serves clients across Brooklyn, Manhattan, the Bronx, Staten Island, Nassau, Suffolk, New Jersey, and Connecticut.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>What makes WSP different from hiring separate vendors for each service?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    One in-house team manages everything, which means your website, SEO, ads, and social media are all working from the same strategy instead of operating independently.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Can you take over marketing another agency or freelancer started?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes. We audit what's already in place, keep what's working, and rebuild what isn't.
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
                    Yes. Web Support Plaza serves English- and Spanish-speaking business owners across the New York area.
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
@endsection
