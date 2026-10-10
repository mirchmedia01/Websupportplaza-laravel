@extends('layouts.app')

@section('title', 'Social Media Management for Queens Small Businesses | Web Support Plaza')
@section('meta_description', 'Consistent, professional social media management for Queens businesses. Content creation, graphic design, posting, engagement, and paid campaigns.')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Social Media Management &amp; Growth</span>
                <h1 class="wsp-hero-title">
                    Social Media Management for Queens Small Businesses — <span class="highlight">Consistent, Professional, and Built to Grow Your Local Audience</span>
                </h1>
                <p class="wsp-hero-lead">
                    A Queens business with an inactive social media page looks like one that might not be around anymore. Web Support Plaza manages social media for small businesses across Queens and New York City. Content creation, graphic design, posting, engagement, and paid campaigns are handled by one team.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get a Free Social Media Consultation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/social-media-marketing-management-queens.png') }}" alt="Social Media Management for Queens Small Businesses" class="wsp-hero-image" width="600" height="600">
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
                <span class="wsp-badge">Brand Credibility</span>
                <h2 class="wsp-section-title">Inconsistency Is Doing More <span class="highlight">Damage Than No Presence at All</span></h2>
                <div class="content-styled">
                    <p>Customers check social media before they call. A restaurant with its last post from eight months ago, a contractor with three photos and no activity since 2022, a medical practice with a Facebook page that has never been updated, all of these send the same signal of unseriousness.</p>
                    <p>In a borough as dense and competitive as Queens, customers have multiple options for almost every service, and impression matters. Web Support Plaza manages your social media so your business always looks active, professional, and worth contacting.</p>
                </div>
            </div>
            <div class="split-image-col">
                <img src="{{ asset('images/seo/video-marketing-viral-content-creation.png') }}" alt="Social Media Presence Queens" class="wsp-split-image" width="600" height="450">
            </div>
        </div>
    </div>
</section>

<!-- Strategy Grid -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">High-Impact Delivery</span>
            <h2 class="wsp-section-title">What Goes Into Social Media Management <span class="highlight">That Actually Works</span></h2>
            <p class="wsp-section-desc">Every post, graphic, and response is curated to build authentic local customer trust.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Content Strategy and Planning</h3>
                <p class="wsp-card-text">Before any posts go out, WSP develops a content strategy tailored to your business, services, target customers, competitive position in Queens, and the platforms where your audience spends time. Every month's content is planned against that strategy, not assembled from whatever seems easy to post that week.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="m4.93 4.93 4.24 4.24"></path><path d="m14.83 9.17 4.24-4.24"></path><path d="m14.83 14.83 4.24 4.24"></path><path d="m9.17 14.83-4.24 4.24"></path><circle cx="12" cy="12" r="4"></circle></svg>
                </div>
                <h3 class="wsp-card-title">Content Creation &amp; Graphic Design</h3>
                <p class="wsp-card-text">WSP produces the content your social media requires: written posts, branded graphics, and short-form video where relevant. Everything is created to match your brand's visual identity and speak to your specific audience.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                </div>
                <h3 class="wsp-card-title">Posting and Scheduling</h3>
                <p class="wsp-card-text">Consistency is what separates a managed social media presence from a neglected one. WSP handles scheduling across your platforms on a regular cadence, so your business is showing up in your customers' feeds without you having to think about it each week.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                </div>
                <h3 class="wsp-card-title">Community Management</h3>
                <p class="wsp-card-text">Comments, direct messages, and review responses left sitting unanswered signal to both customers and platform algorithms that nobody is home. We monitor your accounts, respond to incoming engagement, and keep the conversation active on your behalf.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 11 18-5v12L3 14v-3z"></path><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path></svg>
                </div>
                <h3 class="wsp-card-title">Paid Social Advertising</h3>
                <p class="wsp-card-text">Organic reach on Facebook and Instagram has limits. For businesses looking to extend their reach to new audiences in specific Queens neighborhoods or demographic segments, WSP runs targeted paid social campaigns on Facebook and Instagram, tailored to your budget, offer, and customers.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                </div>
                <h3 class="wsp-card-title">Monthly Reporting</h3>
                <p class="wsp-card-text">WSP provides monthly reporting on your social media performance: reach, engagement, follower growth, and paid campaign performance. The numbers are presented plainly and tied to what they mean for your business, not dressed up in vanity metrics.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                <span>See How We Grow Brands on Social</span>
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
                <img src="{{ asset('images/seo/high-converting-digital-design-engagement.png') }}" alt="Social Media Platforms Queens" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Targeted Channels</span>
                <h2 class="wsp-section-title">Where Your Queens <span class="highlight">Customers Are</span></h2>
                <div class="content-styled" style="margin-bottom: 1.5rem;">
                    <p>Different platforms serve different purposes, and not every business needs to be on all of them. Web Support Plaza assesses where your audience is most active and focuses effort accordingly.</p>
                </div>
                <div style="display: flex; flex-direction: column; gap: 1rem;">
                    <div class="wsp-card" style="padding: 1.25rem 1.5rem;">
                        <h3 class="wsp-card-title" style="font-size: 1.15rem; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.6rem;">
                            <span style="color: var(--primary);">Instagram</span>
                        </h3>
                        <p class="wsp-card-text" style="font-size: 0.95rem;">Visual content that builds brand recognition and drives direct engagement. Particularly effective for restaurants, retail, and service businesses with a strong visual component.</p>
                    </div>
                    <div class="wsp-card" style="padding: 1.25rem 1.5rem;">
                        <h3 class="wsp-card-title" style="font-size: 1.15rem; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.6rem;">
                            <span style="color: var(--primary);">Facebook</span>
                        </h3>
                        <p class="wsp-card-text" style="font-size: 0.95rem;">Local discovery, community engagement, and event marketing. Still one of the highest-reach platforms for Queens small businesses targeting the 30-and-above demographic.</p>
                    </div>
                    <div class="wsp-card" style="padding: 1.25rem 1.5rem;">
                        <h3 class="wsp-card-title" style="font-size: 1.15rem; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.6rem;">
                            <span style="color: var(--primary);">LinkedIn</span>
                        </h3>
                        <p class="wsp-card-text" style="font-size: 0.95rem;">Professional credibility, B2B outreach, and thought leadership content. Most relevant for law firms, financial services, and professional service providers.</p>
                    </div>
                    <div class="wsp-card" style="padding: 1.25rem 1.5rem;">
                        <h3 class="wsp-card-title" style="font-size: 1.15rem; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.6rem;">
                            <span style="color: var(--primary);">TikTok</span>
                        </h3>
                        <p class="wsp-card-text" style="font-size: 0.95rem;">Short-form video content for businesses looking to reach a younger Queens audience or tap into high-organic-reach formats that Instagram and Facebook no longer provide at scale.</p>
                    </div>
                    <div class="wsp-card" style="padding: 1.25rem 1.5rem;">
                        <h3 class="wsp-card-title" style="font-size: 1.15rem; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.6rem;">
                            <span style="color: var(--primary);">Google Business Profile Posts</span>
                        </h3>
                        <p class="wsp-card-text" style="font-size: 0.95rem;">Activity on your Google listing is also a social signal. WSP integrates GBP post management with your broader social media strategy for a consistent presence across every platform that matters.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Seamless Onboarding</span>
            <h2 class="wsp-section-title">How WSP Takes Over <span class="highlight">Your Social Media</span></h2>
            <p class="wsp-section-desc">A simple 3-stage handover so you never have to worry about posting again.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
                <h3 class="wsp-card-title">1. Audit and Strategy Session</h3>
                <p class="wsp-card-text">We start by reviewing your existing social media accounts, assessing what is working, and identifying the gaps. We align on which platforms to prioritize, what content themes fit your business, and what growth goals are realistic in your market.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">2. Setup and Content Build</h3>
                <p class="wsp-card-text">We update your profiles, build your first month's content calendar, create the graphics and copy, and schedule everything for review before it goes live. You approve before anything is published.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">3. Ongoing Management &amp; Reporting</h3>
                <p class="wsp-card-text">After the first month, management runs on a consistent cycle. Content goes out on schedule, engagement is monitored daily, and you receive a monthly report showing performance across every platform we manage for you.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                <span>Start With a Free Strategy Call</span>
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
                <span class="wsp-badge">Rooted in Queens</span>
                <h2 class="wsp-section-title">Social Media Management From a Team That Knows This Market</h2>
                <div class="content-styled">
                    <p>Web Support Plaza has been managing digital presence for Queens small businesses since 2012. Our social media work is not handled by a remote freelancer with no context about your neighborhood or your customers. It is managed in-house by the same team that handles your website SEO and Google Business Profile, so your messaging stays consistent across all channels.</p>
                    <p>We also serve English- and Spanish-speaking business owners across Queens and the tri-state area, reflecting both our team composition and the communities we have worked in for over a decade.</p>
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
                <img src="{{ asset('images/seo/about-web-support-plaza-queens-team.png') }}" alt="Boost Your Brand" class="wsp-split-image" width="600" height="450">
            </div>
        </div>
    </div>
</section>

<!-- Audience Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-split reverse">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/queens-business-growth-strategy-consultation.png') }}" alt="Digital Strategy for Queens Businesses" class="wsp-split-image" width="600" height="450">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Focus on Your Work</span>
                <h2 class="wsp-section-title">Built for Queens Businesses That Do Not Have <span class="highlight">Time to Manage Social Media Themselves</span></h2>
                <div class="content-styled" style="margin-bottom: 1.5rem;">
                    <p>Social media management from WSP works best for businesses where the owner or manager is too busy running daily operations to post consistently — which describes most of the Queens small businesses we work with.</p>
                    <p>WSP manages social media for:</p>
                </div>
                <div style="display: flex; flex-direction: column; gap: 0.85rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Restaurants and food businesses across Queens and the boroughs</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Medical and dental practices</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Contractors, plumbers, electricians, and skilled tradespeople</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Law firms and professional service providers</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Real estate agencies and independent brokers</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--text-muted); font-size: 1.05rem;">Retail businesses with a local Queens customer base</span>
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
            <span class="wsp-badge">Testimonials</span>
            <h2 class="wsp-section-title">What Queens Business <span class="highlight">Owners Say</span></h2>
            <p class="wsp-section-desc">Real stories of social media turning into booked jobs and customers.</p>
        </div>
        <div class="wsp-cards-grid">
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">&ldquo;We had not posted on Instagram in almost a year. WSP took over, built out a content calendar, and within 60 days our follower count had grown and we were getting messages from new customers who found us through Instagram. That had never happened before.&rdquo;</p>
                <div class="wsp-quote-author">
                    <strong>Restaurant Owner</strong>
                    <span>— Astoria, NY</span>
                </div>
            </div>
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">&ldquo;I used to spend Sunday nights trying to come up with something to post and usually gave up. WSP handles everything now. The content looks professional and it goes out without me thinking about it.&rdquo;</p>
                <div class="wsp-quote-author">
                    <strong>Contractor</strong>
                    <span>— Woodside, NY</span>
                </div>
            </div>
            <div class="wsp-quote-card">
                <div class="wsp-quote-stars">★★★★★</div>
                <p class="wsp-quote-text">&ldquo;Our Facebook page had outdated information and old photos. WSP cleaned it up, started posting regularly, and ran a targeted campaign for our practice area. We got three new client inquiries from Facebook in the first month, which had never happened before.&rdquo;</p>
                <div class="wsp-quote-author">
                    <strong>Law Firm</strong>
                    <span>— Jamaica, NY</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-cta-banner">
            <h2>Your Business Should Be Showing Up <span style="background: linear-gradient(135deg, #38bdf8 0%, #0ea5e9 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Every Week. Let Us Make Sure It Does.</span></h2>
            <p>A free strategy call is where we start. We look at your current social media, identify what needs to change, and tell you exactly what we would do differently. No obligation.</p>
            <p style="font-size: 0.95rem; opacity: 0.85; margin-bottom: 2rem;"><strong>Forest Hills, Queens, New York</strong> &bull; Serving Queens, Brooklyn, Manhattan, Nassau, Suffolk, New Jersey, and Connecticut</p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Book Your Free Social Media Consultation</span>
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
            <h2 class="wsp-section-title">Questions About Social Media Management <span class="highlight">for Queens Businesses</span></h2>
            <p class="wsp-section-desc">Common questions answered clearly and straightforwardly.</p>
        </div>
        <div class="wsp-faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="wsp-faq-item active">
                <button type="button" class="wsp-faq-question">
                    <span>How many posts per week do you publish?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Posting frequency depends on the platform and the strategy we agree on for your business. For most small businesses, we recommend three to five posts per week on primary platforms. We adjust based on your goals, your industry, and what the data shows is producing results.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Do I need to provide content or ideas?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    No. WSP handles content creation end-to-end — strategy, writing, graphic design, and scheduling. If you want to share photos from your business or flag upcoming events, we incorporate that. But you are never required to supply content for the process to work.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>What is the difference between organic social media and paid social ads?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Organic social media refers to regular posts on your profiles that reach your existing followers and their networks. Paid social advertising uses budget to reach a targeted audience beyond your current followers by location, age, interest, or behavior. WSP manages both, and for most Queens small businesses, a combination of the two produces the best results.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Can you manage social media for a business that has never posted before?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Yes. WSP handles profile setup, optimization, and full content management from scratch. Starting with no existing presence is more common than most business owners realize.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>How do you measure whether social media is working?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    We track reach, engagement rate, follower growth, website traffic from social channels, and for paid campaigns, cost per click and conversion data. Monthly reports show all of this clearly, with commentary on what the numbers mean and what we are adjusting.
                </div>
            </div>
            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Do you run paid ads as part of social media management?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    Paid social advertising is available as part of WSP's social media management service. We discuss your goals and budget during the strategy call and build campaigns tailored to your business.
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
