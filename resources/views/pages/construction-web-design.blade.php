@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Construction Web Design</span>
                <h1 class="wsp-hero-title">
                    Construction Web Design <br><span class="highlight">Built to Win Bids &amp; Contracts</span>
                </h1>
                <p class="wsp-hero-lead">
                    Boost your construction and contracting business today with Web Support Plaza's high-impact digital marketing strategies and custom website development. Modern, responsive contractor websites designed to showcase your craftsmanship and turn project estimates into signed contracts.
                </p>
                <div class="wsp-hero-actions">
                    <a href="{{ route('contact') }}/" class="wsp-btn wsp-btn-primary">
                        <span>Get a Free Construction Consultation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/custom-cms-website-design-development.png') }}" alt="Construction Web Design Services Queens NY" class="wsp-hero-image" width="600" height="600">
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

<!-- Split Section: Construction Websites That Convert -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="split-image-col">
                <img src="{{ asset('images/seo/responsive-web-design-mobile-desktop.png') }}" alt="Construction Websites That Convert" class="wsp-split-image" width="600" height="600">
            </div>
            <div class="wsp-split-content">
                <span class="wsp-badge">Contractor Solutions</span>
                <h2 class="wsp-section-title">Construction Websites <span class="highlight">That Actually Convert</span></h2>
                <div class="content-styled">
                    <p>
                        Building high-quality, professional websites with pristine presentations is one of our primary areas of expertise. In construction and general contracting, your website is your digital job site trailer and your most important sales tool.
                    </p>
                    <ul class="wsp-checklist" style="list-style: none; padding: 0; margin: 1.5rem 0;">
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; font-size: 1.05rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>Highly Customized Web Design</strong> tailored to your contracting niche</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; font-size: 1.05rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>Fully Responsive Design</strong> for instant review on mobile job sites</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; font-size: 1.05rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>Lead Capture &amp; Bid Requests</strong> to route inquiries straight to your phone</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; font-size: 1.05rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>Search Engine-Friendly</strong> pages targeting local commercial and residential jobs</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; font-size: 1.05rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span><strong>Indexable Project Portfolios</strong> with before-and-after photo galleries</span>
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
            <span class="wsp-badge">Features Built For Builders</span>
            <h2 class="wsp-section-title">Website Features That Give Your <span class="highlight">Construction Firm an Edge</span></h2>
            <p class="wsp-section-desc">Every element of our construction website builds is designed to build trust, showcase project quality, and generate qualified bid requests.</p>
        </div>

        <div class="wsp-cards-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Construction Project Listings</h3>
                <p class="wsp-card-text">Make an organized list of all your construction and remodeling projects, complete with scope of work, square footage, materials used, and client testimonials.</p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
                <h3 class="wsp-card-title">Advanced Search &amp; Filter</h3>
                <p class="wsp-card-text">The advanced search option makes it simple for prospective residential and commercial clients to filter your builds by sector, location, and project size.</p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                </div>
                <h3 class="wsp-card-title">MLS &amp; Spec Integration</h3>
                <p class="wsp-card-text">Compatible with real estate listings, architectural blueprints, and spec sheets when building spec homes or master developments.</p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Custom Contractor Branding</h3>
                <p class="wsp-card-text">With custom construction website design, you obtain a prestigious brand presence that positions your firm above cut-rate competitors.</p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                </div>
                <h3 class="wsp-card-title">Mobile-First Responsiveness</h3>
                <p class="wsp-card-text">The websites we build in the construction industry are 100% responsive, loading swiftly on smartphones, tablets, and desktop workstations.</p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                </div>
                <h3 class="wsp-card-title">Contractor Local SEO</h3>
                <p class="wsp-card-text">Suited for instant indexing by Google, thanks to schema markup, optimized speed, and localized contractor keywords across Queens and NYC.</p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">High-Converting Lead Capture</h3>
                <p class="wsp-card-text">Bring in new construction prospects, schedule job walks, and manage project inquiries directly with integrated notification alerts.</p>
            </div>

            <div class="wsp-card">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                </div>
                <h3 class="wsp-card-title">Secure Hosting &amp; Backups</h3>
                <p class="wsp-card-text">Enterprise-level cloud hosting, SSL encryption, daily automated backups, and 99.9% uptime ensure your site is always available for clients and inspectors.</p>
            </div>
        </div>
    </div>
</section>

<!-- 4-Step Process Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Our Development Process</span>
            <h2 class="wsp-section-title">How We Build Your <span class="highlight">Construction Website</span></h2>
            <p class="wsp-section-desc">From initial blueprint to site launch, our streamlined process gets your construction business online without disrupting your daily job site operations.</p>
        </div>

        <div class="wsp-cards-grid" style="grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));">
            <div class="wsp-card">
                <div class="wsp-card-icon" style="background: var(--primary); color: #fff;">1</div>
                <h3 class="wsp-card-title">Analysis &amp; Prototype</h3>
                <p class="wsp-card-text">We study your target project types, commercial sectors, and competitors to plan an architecture that highlights your key capabilities.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon" style="background: var(--primary); color: #fff;">2</div>
                <h3 class="wsp-card-title">Design &amp; Develop</h3>
                <p class="wsp-card-text">Our designers craft bespoke layouts showcasing your real photography and credentials, followed by clean, mobile-first code.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon" style="background: var(--primary); color: #fff;">3</div>
                <h3 class="wsp-card-title">Usability &amp; Testing</h3>
                <p class="wsp-card-text">We test quote forms, loading performance, mobile responsiveness, and browser compatibility across every modern screen size.</p>
            </div>
            <div class="wsp-card">
                <div class="wsp-card-icon" style="background: var(--primary); color: #fff;">4</div>
                <h3 class="wsp-card-title">Launch &amp; Grow</h3>
                <p class="wsp-card-text">We launch your website, set up Google Search Console, submit your sitemap, and initiate local SEO to start generating bids.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="wsp-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; text-align: center;">
    <div class="wsp-container">
        <div style="max-width: 800px; margin: 0 auto;">
            <span class="wsp-badge" style="background: rgba(14, 165, 233, 0.2); color: #38bdf8; border: 1px solid rgba(56, 189, 248, 0.4); margin-bottom: 1.25rem;">Ready to Build?</span>
            <h2 style="font-size: clamp(2rem, 3.5vw, 2.75rem); color: #ffffff; margin-bottom: 1rem; font-weight: 800;">
                Let's Build a Website That Reflects Your Craftsmanship
            </h2>
            <p style="font-size: 1.15rem; color: #94a3b8; line-height: 1.7; margin-bottom: 2rem;">
                Call Web Support Plaza at (855) 506-4724 or book a strategy session to see how a professional contractor website can transform your pipeline.
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
