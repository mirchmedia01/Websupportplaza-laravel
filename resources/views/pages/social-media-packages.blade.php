@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Social Media Growth</span>
                <h1 class="wsp-hero-title">
                    Social Media Packages That Build <br><span class="highlight">Real Brand Presence</span>
                </h1>
                <p class="wsp-hero-lead">
                    Consistent, high-quality social media management for Queens and NYC businesses. Strategy, content creation, community engagement, and paid ads — from $2,500/month.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary">
                        <span>Get a Free Social Media Audit</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                    <a href="mailto:marketing@mirchmedia.com" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span>Email Us</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/social-media-marketing-management-queens.png') }}" alt="Queens Social Media Packages" class="wsp-hero-image" width="600" height="600">
            </div>
        </div>
    </div>
</section>

<!-- Pricing Grid -->
<section class="wsp-section bg-light" id="social-packages-grid">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Monthly Social Management</span>
            <h2 class="wsp-section-title">Social Media <span class="highlight">Management Packages</span></h2>
            <p class="wsp-section-desc">All plans include content creation, scheduling, community management, and monthly performance reporting. Ad budgets are included and managed by our team.</p>
        </div>

        <div class="wsp-pricing-grid">
            <!-- Basic Plan -->
            <div class="wsp-price-card">
                <div class="wsp-price-header">
                    <span class="wsp-price-tier">Starter</span>
                    <h3 class="wsp-price-title">Basic Plan</h3>
                    <p class="wsp-price-desc">Best for local businesses establishing a social presence</p>
                    <div class="wsp-stat-number" style="margin-top: 1rem;">$2,500<span style="font-size: 1rem; color: var(--text-muted); font-weight: 500;">/mo</span></div>
                    <div style="font-size: 0.85rem; color: var(--text-muted);">Includes $200 ad budget</div>
                </div>

                <div class="wsp-price-features">
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Social media profile setup &amp; optimization</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>8–12 Instagram posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>8–12 Facebook posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>10 X / Twitter posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>5 branded image posts (Discord/Telegram/Chat)</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Comment &amp; engagement responses</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Monthly performance report</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Ad budget management: $200/month</span>
                    </div>
                </div>

                <div style="font-size: 0.85rem; font-weight: 600; color: var(--primary); margin-bottom: 1rem; text-align: center;">
                    ⭐ Timeline: 3–4 weeks to launch
                </div>

                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-outline" style="width: 100%;">Book a Free Consultation</a>
            </div>

            <!-- Standard Plan (Featured) -->
            <div class="wsp-price-card featured">
                <span class="wsp-popular-tag">Most Popular</span>
                <div class="wsp-price-header">
                    <span class="wsp-price-tier">Full Management</span>
                    <h3 class="wsp-price-title">Standard Plan</h3>
                    <p class="wsp-price-desc">Best for businesses ready to grow following &amp; engagement</p>
                    <div class="wsp-stat-number" style="margin-top: 1rem;">$5,000<span style="font-size: 1rem; color: var(--text-muted); font-weight: 500;">/mo</span></div>
                    <div style="font-size: 0.85rem; color: var(--text-muted);">Includes $400 ad budget</div>
                </div>

                <div class="wsp-price-features">
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <strong>Everything in Basic Plan, plus:</strong>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>12–20 Instagram posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>12–20 Facebook posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>15–30 X / Twitter posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>4 video shorts (YouTube Shorts, Reels, TikTok)</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>8 branded image posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>2 Medium articles monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Email marketing support</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Website chat support</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Content calendar review</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Ad budget management: $400/month</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--primary); font-weight: 600;">⭐ Includes TikTok, YouTube Shorts &amp; Reels</span>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary" style="width: 100%;">Book a Free Consultation</a>
            </div>

            <!-- Premium Plan -->
            <div class="wsp-price-card">
                <div class="wsp-price-header">
                    <span class="wsp-price-tier">Enterprise</span>
                    <h3 class="wsp-price-title">Premium Plan</h3>
                    <p class="wsp-price-desc">Best for full-scale social dominance &amp; influencer reach</p>
                    <div class="wsp-stat-number" style="margin-top: 1rem;">$10,000<span style="font-size: 1rem; color: var(--text-muted); font-weight: 500;">/mo</span></div>
                    <div style="font-size: 0.85rem; color: var(--text-muted);">Includes $800 ad budget</div>
                </div>

                <div class="wsp-price-features">
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <strong>Everything in Standard Plan, plus:</strong>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>15–30 Instagram posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>15–30 Facebook posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>15–60 X / Twitter posts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>10 video shorts monthly</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Video marketing &amp; editing</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Influencer management</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Paid press release (1 monthly)</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Paid ads management (up to $40K monthly)</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>3–5 ad channel management</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Monthly video strategy conference</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Dedicated phone support</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>Ad budget management: $800/month</span>
                    </div>
                    <div class="wsp-feature-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span style="color: var(--primary); font-weight: 600;">⭐ Includes influencer &amp; paid ads management</span>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-secondary" style="width: 100%;">Book a Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- Every Platform Where Your Customers Are -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Multi-Channel Coverage</span>
            <h2 class="wsp-section-title">Every Platform Where <span class="highlight">Your Customers Are</span></h2>
            <p class="wsp-section-desc">We manage your presence across all major social platforms — with content tailored to each platform’s format, audience, and algorithm.</p>
        </div>

        <div class="wsp-cards-grid">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                </div>
                <h3 class="wsp-card-title">Facebook</h3>
                <p class="wsp-card-text">
                    Business page management, posts, community engagement, events, and targeted local ad campaigns for Queens and tri-state audiences.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                </div>
                <h3 class="wsp-card-title">Instagram</h3>
                <p class="wsp-card-text">
                    Feed posts, Stories, Reels — branded visual content that builds followers and showcases your business at its best.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                </div>
                <h3 class="wsp-card-title">LinkedIn</h3>
                <p class="wsp-card-text">
                    B2B content, thought leadership posts, and company page management for professional services and B2B businesses.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path></svg>
                </div>
                <h3 class="wsp-card-title">TikTok</h3>
                <p class="wsp-card-text">
                    Short-form video content strategy and production — the fastest-growing platform for local business discovery.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                </div>
                <h3 class="wsp-card-title">YouTube</h3>
                <p class="wsp-card-text">
                    Long-form videos, YouTube Shorts, and channel management — video content builds trust and ranks in Google search.
                </p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                </div>
                <h3 class="wsp-card-title">Pinterest &amp; X</h3>
                <p class="wsp-card-text">
                    Platform-specific content for visual discovery (Pinterest) and real-time brand presence and thought leadership (X/Twitter).
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-cta-banner">
            <h2>Ready to Build a Social Presence That Drives Real Business?</h2>
            <p>Book a free social media audit. We’ll review your current profiles, identify the biggest opportunities, and show you exactly what a managed strategy would look like for your business.</p>
            <div class="wsp-hero-actions" style="justify-content: center;">
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Book a Free Social Media Audit</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
                <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-outline-white wsp-btn-lg">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span>(855) 506-4724</span>
                </a>
                <a href="mailto:marketing@mirchmedia.com" class="wsp-btn wsp-btn-outline-white wsp-btn-lg">
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
            <span class="wsp-badge">Social FAQ</span>
            <h2 class="wsp-section-title">Social Media Package <span class="highlight">Questions</span></h2>
            <p class="wsp-section-desc">Everything you need to know about working with Web Support Plaza.</p>
        </div>

        <div class="wsp-accordion">
            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>How much does social media management cost in Queens, NY?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Our social media management packages start at $2,500/month for the Basic Plan, $5,000/month for the Standard Plan, and $10,000/month for the Premium Plan. All plans include content creation, posting, community management, ad budget management, and monthly reporting.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Which social media platforms do you manage?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>We manage Facebook, Instagram, LinkedIn, TikTok, YouTube, Pinterest, X (Twitter), and Medium. The platforms included in each plan depend on the tier — and we always recommend the platforms where your specific customers are most active.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>How often will you post on my social media accounts?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Posting frequency varies by plan. The Basic Plan includes 8–12 posts per platform monthly. The Standard Plan includes 12–20 posts. The Premium Plan includes 15–30 posts per platform plus 10 video shorts. We build and share a content calendar each month for your review.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>What is included in the $5,000 Launch Package?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes — all plans include branded content creation. We write the captions, design the graphics, and for Standard and Premium tiers, produce video shorts for TikTok, Instagram Reels, and YouTube Shorts. You don’t need to create any content yourself.The Launch Package includes a fully responsive CMS website (up to 15 pages) on WordPress, Wix, or Shopify, mobile-first design, Level 1 SEO setup, Google Analytics, contact forms, social media integration, testimonials section, optimized images, and SSL security setup.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Is the ad budget included in the monthly price?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Ad budget management is included in all plans ($200/month for Basic, $400/month for Standard, $800/month for Premium). The ad spend itself goes directly to the platforms — it is not marked up by Web Support Plaza. Our fee covers the strategy, creative, and management of those campaigns.</p>
                </div>
            </div>

            <div class="wsp-accordion-item">
                <button class="wsp-accordion-header" type="button">
                    <span>Can I see and approve content before it's posted?</span>
                    <svg class="wsp-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="wsp-accordion-content">
                    <p>Yes. We provide a monthly content calendar and post approval process. You review everything before it goes live — so your brand voice, messaging, and visuals are always exactly right.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
