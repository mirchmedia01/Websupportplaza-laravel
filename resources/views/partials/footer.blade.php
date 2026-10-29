@if(!request()->routeIs('contact'))
<!-- Contact & Quote Section -->
<section class="wsp-section bg-light" id="quote-section">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="wsp-split-content">
                <span class="wsp-badge">Get In Touch</span>
                <h2 class="wsp-section-title">Ready to Grow Your Business? <span class="highlight">Let's Talk.</span></h2>
                <p class="wsp-section-desc">
                    Schedule a free 30-minute consultation or request a custom proposal. We'll review your current online presence, show you where your competitors are winning, and give you a clear roadmap to dominate your local market.
                </p>

                <div style="margin-top: 2.25rem; display: flex; flex-direction: column; gap: 1.35rem;">
                    <div style="display: flex; align-items: center; gap: 1.15rem;">
                        <div style="width: 48px; height: 48px; border-radius: var(--radius-md); background: var(--primary-light); border: 1px solid rgba(14, 165, 233, 0.25); color: var(--primary); display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 4px 12px rgba(14, 165, 233, 0.12);">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <div>
                            <div style="font-size: 0.84rem; color: var(--text-muted); font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;">Direct Phone Line</div>
                            <a href="tel:+(855)506-4724" style="font-size: 1.25rem; font-weight: 800; color: var(--dark);">(855) 506-4724</a>
                        </div>
                    </div>

                    <div style="display: flex; align-items: center; gap: 1.15rem;">
                        <div style="width: 48px; height: 48px; border-radius: var(--radius-md); background: var(--primary-light); border: 1px solid rgba(14, 165, 233, 0.25); color: var(--primary); display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 4px 12px rgba(14, 165, 233, 0.12);">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                        <div>
                            <div style="font-size: 0.84rem; color: var(--text-muted); font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;">Email Support</div>
                            <a href="mailto:marketing@mirchmedia.com" style="font-size: 1.2rem; font-weight: 800; color: var(--dark);">marketing@mirchmedia.com</a>
                        </div>
                    </div>

                    <div style="display: flex; align-items: center; gap: 1.15rem;">
                        <div style="width: 48px; height: 48px; border-radius: var(--radius-md); background: var(--primary-light); border: 1px solid rgba(14, 165, 233, 0.25); color: var(--primary); display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 4px 12px rgba(14, 165, 233, 0.12);">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div>
                            <div style="font-size: 0.84rem; color: var(--text-muted); font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;">Office Location</div>
                            <div style="font-size: 1.05rem; font-weight: 700; color: var(--dark);">Forest Hills, NY, United States, New York</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modern Card Form -->
            <div class="wsp-form-card">
                <div style="display: inline-block; padding: 0.35rem 0.95rem; border-radius: var(--radius-full); background: rgba(14, 165, 233, 0.08); color: var(--primary); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 0.85rem;">
                    Free Consultation
                </div>
                <h3 style="font-size: 1.7rem; margin-bottom: 0.5rem; font-weight: 800;">Get a Free Quote</h3>
                <p style="font-size: 0.95rem; color: var(--text-muted); margin-bottom: 1.75rem;">Fill out the form below and we will respond within 24 hours.</p>

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="form_anchor" value="quote-section">

                    @if ($errors->any() && old('form_anchor') === 'quote-section')
                        <div class="wsp-alert wsp-alert-error" role="alert">
                            <ul style="margin: 0; padding-left: 1.1rem;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="wsp-form-group">
                        <label for="footer-name" class="wsp-form-label">Full Name *</label>
                        <input type="text" id="footer-name" name="name" class="wsp-form-input" placeholder="e.g. John Doe" required minlength="2" maxlength="255" value="{{ old('name') }}">
                    </div>

                    <div class="wsp-form-group">
                        <label for="footer-email" class="wsp-form-label">Email Address *</label>
                        <input type="email" id="footer-email" name="email" class="wsp-form-input" placeholder="e.g. john@example.com" required maxlength="255" value="{{ old('email') }}">
                    </div>

                    <div class="wsp-form-group">
                        <label for="footer-phone" class="wsp-form-label">Phone Number *</label>
                        <input type="tel" id="footer-phone" name="phone" class="wsp-form-input" placeholder="e.g. (855) 506-4724" required inputmode="tel" pattern="[0-9+() .-]{7,30}" minlength="7" maxlength="30" title="Enter a valid phone number using digits, spaces, +, -, parentheses, or periods." value="{{ old('phone') }}">
                    </div>

                    <div class="wsp-form-group">
                        <label for="footer-service" class="wsp-form-label">Service Needed</label>
                        <select id="footer-service" name="service" class="wsp-form-select">
                            <option value="Website Development & Custom Design">Website Development & Custom Design</option>
                            <option value="Local SEO & Google Rankings">Local SEO & Google Rankings</option>
                            <option value="Google Business Profile Management">Google Business Profile Management</option>
                            <option value="Pay-Per-Click Ads (Google & Meta)">Pay-Per-Click Ads (Google & Meta)</option>
                            <option value="Social Media Marketing">Social Media Marketing</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="Branding & Identity Design">Branding & Identity Design</option>
                        </select>
                    </div>

                    <div class="wsp-form-group">
                        <label for="footer-message" class="wsp-form-label">How can we help you?</label>
                        <textarea id="footer-message" name="message" class="wsp-form-textarea" placeholder="Tell us about your project or goals..." maxlength="5000">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="wsp-btn wsp-btn-primary" style="width: 100%;">
                        <span>Get Started Now</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Footer -->
<footer class="wsp-footer">
    <div class="wsp-container">
        <!-- Modern Footer Top Strip -->
        <div class="wsp-footer-topbar">
            <div class="wsp-footer-topbar-content">
                <div class="wsp-footer-topbar-badge">
                    <span class="wsp-footer-badge-dot"></span>
                    <span>Queens &amp; NYC's Premier Digital Growth Agency</span>
                </div>
                <h3 class="wsp-footer-topbar-title">Ready to Dominate Local Search &amp; Get More Customers?</h3>
                <p class="wsp-footer-topbar-desc">
                    Schedule a free 30-minute discovery call with our in-house strategists in Forest Hills, Queens. Actionable roadmaps, zero sales fluff.
                </p>
            </div>
            <div class="wsp-footer-topbar-actions">
                <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary wsp-btn-lg">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span>(855) 506-4724</span>
                </a>
                <a href="{{ route('contact') }}" class="wsp-btn wsp-btn-primary wsp-btn-lg">
                    <span>Get Free Proposal</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
        </div>

        <!-- Trust Indicators Bar -->
        <div class="wsp-footer-trust-strip">
            <div class="wsp-footer-trust-card">
                <div class="wsp-footer-trust-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <div class="wsp-footer-trust-text">
                    <strong>Forest Hills, Queens HQ</strong>
                    <span>Local NYC Agency · Est. 2012</span>
                </div>
            </div>

            <div class="wsp-footer-trust-card">
                <div class="wsp-footer-trust-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <div class="wsp-footer-trust-text">
                    <strong>100% In-House Team</strong>
                    <span>Zero Overseas Outsourcing</span>
                </div>
            </div>

            <div class="wsp-footer-trust-card">
                <div class="wsp-footer-trust-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                </div>
                <div class="wsp-footer-trust-text">
                    <strong>Bilingual Support</strong>
                    <span>English &amp; Spanish Fluent</span>
                </div>
            </div>

            <div class="wsp-footer-trust-card">
                <div class="wsp-footer-trust-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                </div>
                <div class="wsp-footer-trust-text">
                    <strong>100% Secure &amp; Verified</strong>
                    <span>SSL Encrypted Transactions</span>
                </div>
            </div>
        </div>

        <!-- Footer Navigation Grid -->
        <div class="wsp-footer-grid">
            <!-- Brand & About Column -->
            <div class="wsp-footer-col wsp-footer-brand-col">
                <a href="{{ route('home') }}" class="wsp-footer-logo-card" aria-label="Web Support Plaza Home">
                    <img src="{{ asset('images/2025/05/web-support-plaza-logo-300x65.png') }}" alt="Web Support Plaza Logo" width="200" height="44">
                </a>
                <p class="wsp-footer-brand-desc">
                    Web Support Plaza is a full-service web development, local SEO, and digital marketing agency based in Forest Hills, Queens. We help NYC businesses attract high-value leads and dominate local search results.
                </p>
                <div class="wsp-footer-rating">
                    <span class="wsp-stars">★★★★★</span>
                    <span>5.0 Star Rated Local Agency</span>
                </div>
                <div class="wsp-footer-social-wrapper">
                    <span class="wsp-footer-social-heading">Verified Social Channels</span>
                    <div class="wsp-footer-socials">
                        <a href="https://www.facebook.com/websupportplaza" target="_blank" rel="noopener" class="wsp-footer-social-btn facebook" aria-label="Facebook">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/websupportplaza" target="_blank" rel="noopener" class="wsp-footer-social-btn instagram" aria-label="Instagram">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </a>
                        <a href="https://www.linkedin.com/company/11775324/" target="_blank" rel="noopener" class="wsp-footer-social-btn linkedin" aria-label="LinkedIn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Web & Design Column -->
            <div class="wsp-footer-col">
                <h4>Web &amp; Design</h4>
                <div class="wsp-footer-links">
                    <a href="{{ route('website-development') }}/">Website Development</a>
                    <a href="{{ route('custom-web-design') }}/">Custom Web Design</a>
                    <a href="{{ route('construction-web-design') }}/">Construction Web Design</a>
                    <a href="{{ route('real-estate-web-design') }}/">Real Estate Web Design</a>
                    <a href="{{ route('mobile-app-development') }}/">Mobile App Development</a>
                    <a href="{{ route('web-portals') }}/">Custom Web Portals</a>
                    <a href="{{ route('logo-design') }}/">Logo Design</a>
                    <a href="{{ route('branding') }}/">Branding &amp; Identity</a>
                    <a href="{{ route('print-design') }}/">Print Design</a>
                    <a href="{{ route('banners') }}/">Banners &amp; Creatives</a>
                </div>
            </div>

            <!-- Marketing & Local SEO Column -->
            <div class="wsp-footer-col">
                <h4>Marketing &amp; SEO</h4>
                <div class="wsp-footer-links">
                    <a href="{{ route('local-seo') }}/">Local SEO (Queens/NYC)</a>
                    <a href="{{ route('google-business-profile-management') }}/">Google Business Profile</a>
                    <a href="{{ route('search-engine-optimization-organic-reach') }}/">SEO Organic Reach</a>
                    <a href="{{ route('pay-per-click-ads') }}/">Pay-Per-Click Ads (PPC)</a>
                    <a href="{{ route('social-media-marketing-services') }}/">Social Media Marketing</a>
                    <a href="{{ route('digital-marketing') }}/">Digital Marketing</a>
                    <a href="{{ route('e-newsletter-design') }}/">E-Newsletter Design</a>
                </div>
            </div>

            <!-- Packages & Company Column -->
            <div class="wsp-footer-col">
                <h4>Packages &amp; Agency</h4>
                <div class="wsp-footer-links">
                    <a href="{{ route('website-packages') }}/">Website Packages</a>
                    <a href="{{ route('seo-packages') }}/">SEO Packages</a>
                    <a href="{{ route('social-media-packages') }}/">Social Media Packages</a>
                    <a href="{{ route('about') }}/">About Web Support Plaza</a>
                    <a href="{{ route('how-it-works') }}/">How It Works</a>
                    <a href="{{ route('services') }}/">All Services Overview</a>
                    <a href="{{ route('contact') }}/">Contact &amp; Free Quote</a>
                </div>
            </div>

            <!-- NYC Headquarters & Contact Column -->
            <div class="wsp-footer-col wsp-footer-contact-col">
                <h4>NYC Headquarters</h4>
                <div class="wsp-footer-contact-list">
                    <div class="wsp-footer-contact-card">
                        <div class="wsp-footer-contact-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <div class="wsp-footer-contact-info">
                            <span class="wsp-footer-contact-label">Direct Phone Line</span>
                            <a href="tel:+(855)506-4724" class="wsp-footer-contact-value">(855) 506-4724</a>
                            <span class="wsp-footer-contact-sub">Toll-Free Direct Support</span>
                        </div>
                    </div>

                    <div class="wsp-footer-contact-card">
                        <div class="wsp-footer-contact-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                        <div class="wsp-footer-contact-info">
                            <span class="wsp-footer-contact-label">Email Support</span>
                            <a href="mailto:marketing@mirchmedia.com" class="wsp-footer-contact-value">marketing@mirchmedia.com</a>
                            <span class="wsp-footer-contact-sub">Guaranteed 24h Response</span>
                        </div>
                    </div>

                    <div class="wsp-footer-contact-card">
                        <div class="wsp-footer-contact-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div class="wsp-footer-contact-info">
                            <span class="wsp-footer-contact-label">Office Location</span>
                            <span class="wsp-footer-contact-value">Forest Hills, Queens, NY</span>
                            <span class="wsp-footer-contact-sub">Serving NYC Tri-State Area</span>
                        </div>
                    </div>

                    <div class="wsp-footer-hours-pill">
                        <span class="wsp-clock-dot"></span>
                        <span>Mon - Fri: 9:00 AM – 6:00 PM EST</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Row -->
        <div class="wsp-footer-bottom-divider"></div>

        <div class="wsp-footer-bottom-row">
            <div class="wsp-footer-bottom-nav">
                <a href="{{ route('home') }}/">Home</a>
                <a href="{{ route('about') }}/">About Us</a>
                <a href="{{ route('services') }}/">Services</a>
                <a href="{{ route('how-it-works') }}/">How It Works</a>
                <a href="{{ route('website-packages') }}/">Packages</a>
                <a href="{{ route('contact') }}/">Contact Us</a>
            </div>

            <div class="wsp-footer-payments-wrap">
                <span class="wsp-footer-payments-label">Guaranteed Secure Payments</span>
                <div class="wsp-footer-payments-card">
                    <img src="{{ asset('images/2025/05/footer-payments-logos5-small.png') }}" alt="Accepted Payment Methods (Visa, MasterCard, Amex, Discover, PayPal, SSL)" class="wsp-footer-payments-img" width="280" height="24">
                </div>
            </div>

            <button type="button" class="wsp-back-to-top" id="wsp-back-to-top" aria-label="Scroll back to top">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="18 15 12 9 6 15"></polyline></svg>
                <span>Back to Top</span>
            </button>
        </div>

        <div class="wsp-footer-copyright-row">
            <p>&copy; 2026 Web Support Plaza. All Rights Reserved. Forest Hills, Queens, NY.</p>
            <p>Premier Web Development &amp; Local SEO Marketing Agency for NYC Businesses.</p>
        </div>
    </div>
</footer>
