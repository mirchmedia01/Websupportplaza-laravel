@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Real Estate Web Design</span>
                <h1 class="wsp-hero-title">
                    Real Estate Web Design <br><span class="highlight">That Attracts Buyers &amp; Sellers</span>
                </h1>
                <p class="wsp-hero-lead">
                    Boost your real estate agency today with Web Support Plaza's effective digital marketing strategies and custom IDX/MLS website development. Clean, modern, responsive property portals built to capture local Queens, Long Island, and NYC real estate leads.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}/" class="wsp-btn wsp-btn-primary">
                        <span>Get Started Now</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/website-development-custom-platforms-queens.png') }}" alt="Real Estate Web Design in Queens NY" class="wsp-hero-image" width="600" height="600">
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

<!-- Split Section: Real Estate Websites That Convert -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/custom-web-portal-development-benefits.png') }}" alt="Real Estate Websites That Convert" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Broker &amp; Agent Solutions</span>
                <h2 class="wsp-section-title">Real Estate Websites <span class="highlight">That Actually Convert</span></h2>
                <div class="content-styled">
                    <p>
                        Our clients obtain comprehensive real estate websites and high-converting landing pages driven by calls-to-action that capture prospective buyers, sellers, and landlords before they look elsewhere.
                    </p>
                    <ul class="wsp-checklist" style="list-style: none; padding: 0; margin: 1.5rem 0;">
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; font-size: 1.05rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>MLS / IDX Live Integration</strong> for seamless property updates</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; font-size: 1.05rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>Highly Customized Web Design</strong> reflecting your agency's prestige</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; font-size: 1.05rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>Fully Responsive Design</strong> for high-converting on-the-go browsing</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; font-size: 1.05rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>Lead Capture &amp; Valuation Requests</strong> delivered directly to agents</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; font-size: 1.05rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>Indexable Listings &amp; Neighborhood SEO</strong> for top Google ranks</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Grid Section -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Built for Brokers &amp; Agents</span>
            <h2 class="wsp-section-title">Features Engineered to Win in <span class="highlight">Competitive Markets</span></h2>
            <p class="wsp-section-desc">Everything real estate brokerages and agents need to list properties, engage buyers, and generate qualified seller leads.</p>
        </div>

        <div class="wsp-cards-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Property Listing Features</h3>
                <p class="wsp-card-text">Smartly list all of your residential and commercial properties with high-res galleries, virtual tour embeds, interactive floorplans, and property specifications.</p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
                <h3 class="wsp-card-title">Advanced Property Search</h3>
                <p class="wsp-card-text">Intuitive search filters allow home hunters to easily identify properties by price, bedrooms, bathrooms, school district, and neighborhood amenities.</p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                </div>
                <h3 class="wsp-card-title">MLS / IDX Compatibility</h3>
                <p class="wsp-card-text">Automatic, real-time MLS and IDX data synchronization ensures your property listings are always up-to-date without tedious manual entry.</p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Custom Brokerage Branding</h3>
                <p class="wsp-card-text">Custom real estate web design elevates your team's reputation, building brand authority and establishing credibility with high-net-worth clients.</p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                </div>
                <h3 class="wsp-card-title">Mobile Property Browsing</h3>
                <p class="wsp-card-text">Over 70% of real estate searches happen on mobile devices. Our responsive designs ensure fluid, fast property browsing on every phone and tablet.</p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                </div>
                <h3 class="wsp-card-title">Neighborhood SEO Pages</h3>
                <p class="wsp-card-text">Targeted hyper-local landing pages optimized for Queens, Brooklyn, and NYC neighborhood keywords to drive organic search traffic from active buyers.</p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Lead Generation &amp; Valuations</h3>
                <p class="wsp-card-text">Instant home valuation forms, open-house registration, and private viewing schedulers capture leads directly to your CRM.</p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                </div>
                <h3 class="wsp-card-title">Ultra-Fast Hosting &amp; Security</h3>
                <p class="wsp-card-text">High-performance hosting infrastructure optimized for rich media, gallery assets, and virtual tours with guaranteed uptime.</p>
            </div>
        </div>
    </div>
</section>

<!-- 4-Step Process Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Our Process</span>
            <h2 class="wsp-section-title">How We Build Your <span class="highlight">Real Estate Website</span></h2>
            <p class="wsp-section-desc">A proven methodology designed to launch your real estate agency with maximum speed and zero friction.</p>
        </div>

        <div class="wsp-cards-grid" style="grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));">
            <div class="wsp-card">
                <div class="wsp-card-icon" style="background: var(--primary); color: #fff;">1</div>
                <h3 class="wsp-card-title">Analysis &amp; Prototype</h3>
                <p class="wsp-card-text">We determine your MLS feed requirements, target territories, and create intuitive UX wireframes for buyers and sellers.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon" style="background: var(--primary); color: #fff;">2</div>
                <h3 class="wsp-card-title">Design &amp; Develop</h3>
                <p class="wsp-card-text">We design bespoke visual identities, code IDX/MLS connections, and structure property detail templates.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon" style="background: var(--primary); color: #fff;">3</div>
                <h3 class="wsp-card-title">Usability &amp; Testing</h3>
                <p class="wsp-card-text">We verify search filtering, lead capture notifications, mobile viewports, and page loading speed.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon" style="background: var(--primary); color: #fff;">4</div>
                <h3 class="wsp-card-title">Launch &amp; Grow</h3>
                <p class="wsp-card-text">Your site goes live with Google indexing, local XML sitemaps, and ongoing local search optimization.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="wsp-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; text-align: center;">
    <div class="wsp-container">
        <div style="max-width: 800px; margin: 0 auto;">
            <span class="wsp-badge" style="background: rgba(14, 165, 233, 0.2); color: #38bdf8; border: 1px solid rgba(56, 189, 248, 0.4); margin-bottom: 1.25rem;">Scale Your Real Estate Pipeline</span>
            <h2 style="font-size: clamp(2rem, 3.5vw, 2.75rem); color: #ffffff; margin-bottom: 1rem; font-weight: 800;">
                Ready to Upgrade Your Agency's Online Presence?
            </h2>
            <p style="font-size: 1.15rem; color: #94a3b8; line-height: 1.7; margin-bottom: 2rem;">
                Speak directly with Web Support Plaza in Forest Hills, Queens. Call (855) 506-4724 or book your consultation today.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('contact') }}/" class="wsp-btn wsp-btn-primary">
                    <span>Schedule Free Strategy Call</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
                <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span>(855) 506-4724</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
