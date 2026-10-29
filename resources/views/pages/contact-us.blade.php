@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="wsp-hero">
    <div class="wsp-container">
        <div class="wsp-hero-grid">
            <div class="wsp-hero-content">
                <span class="wsp-badge">Connect With Us</span>
                <h1 class="wsp-hero-title">
                    Let's Talk About <br><span class="highlight">Growing Your Business</span>
                </h1>
                <p class="wsp-hero-lead">
                    Call, email, or book a free 30-minute strategy session. No sales pressure — just a direct conversation about what it would take to make your business impossible to ignore online.
                </p>
                <div class="wsp-hero-actions">
                    <a href="#contact-form-section" class="wsp-btn wsp-btn-primary">
                        <span>Book a Free Strategy Session</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>(855) 506-4724</span>
                    </a>
                </div>
            </div>
            <div class="wsp-hero-image-wrapper">
                <img src="{{ asset('images/seo/about-web-support-plaza-queens-team.png') }}" alt="Contact Web Support Plaza" class="wsp-hero-image" width="600" height="600">
            </div>
        </div>
    </div>
</section>

<!-- 3 Ways to Reach Us -->
<section class="wsp-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Get In Touch</span>
            <h2 class="wsp-section-title">Three Ways to Reach Us — <span class="highlight">All Lead to Results</span></h2>
            <p class="wsp-section-desc">Pick the method that works best for you. Every inquiry gets a personal response — no automated chatbots, no offshore call center. You're talking directly to the Web Support Plaza team.</p>
        </div>

        <div class="wsp-cards-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
            <div class="wsp-card" style="text-align: center; align-items: center;">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                </div>
                <h3 class="wsp-card-title">Click to Call</h3>
                <span class="wsp-badge" style="margin-bottom: 0.5rem; background: #dcfce7; color: #15803d;">Fastest Response</span>
                <p class="wsp-card-text">Mon–Fri 9am–6pm EST · Speak directly with our team</p>
                <a href="tel:+(855)506-4724" class="wsp-btn wsp-btn-primary wsp-btn-sm">(855) 506-4724</a>
            </div>

            <div class="wsp-card" style="text-align: center; align-items: center;">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                </div>
                <h3 class="wsp-card-title">Email to Schedule</h3>
                <p class="wsp-card-text">We respond within 24 business hours</p>
                <a href="mailto:marketing@mirchmedia.com" class="wsp-btn wsp-btn-outline wsp-btn-sm">marketing@mirchmedia.com</a>
            </div>

            <div class="wsp-card" style="text-align: center; align-items: center;">
                <div class="wsp-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                </div>
                <h3 class="wsp-card-title">Book on Calendar</h3>
                <p class="wsp-card-text">Free 30-Minute Strategy Session · Pick a date and time that works for you</p>
                <a href="#contact-form-section" class="wsp-btn wsp-btn-outline wsp-btn-sm">Schedule Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Process Section -->
<section class="wsp-section bg-light" id="contact-form-section">
    <div class="wsp-container">
        <div class="wsp-split">
            <div class="wsp-split-content">
                <span class="wsp-badge">Send Us a Message</span>
                <h2 class="wsp-section-title">Fill out the form and we'll get back to you <span class="highlight">within 24 business hours.</span></h2>
                <p style="margin-bottom: 1.5rem; font-size: 1.05rem; line-height: 1.7;">
                    <strong>Office Location:</strong> Forest Hills, Queens, New York, NY 11375<br>
                    <strong>Email:</strong> <a href="mailto:marketing@mirchmedia.com" style="color: var(--primary);">marketing@mirchmedia.com</a><br>
                    <strong>Phone:</strong> <a href="tel:+(855)506-4724" style="color: var(--primary);">(855) 506-4724</a><br>
                    <strong>Business Hours:</strong> Mon – Fri: 9:00 AM – 6:00 PM EST (Sat – Sun: Closed)
                </p>

                <!-- What Happens Next Process Cards -->
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; color: var(--dark);">What Happens Next</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem; margin-bottom: 2rem;">
                    <div style="background: var(--bg-white); padding: 1.25rem; border-radius: var(--radius-md); border: 1px solid var(--border-color); box-shadow: var(--shadow-sm);">
                        <div style="font-weight: 700; color: var(--primary); margin-bottom: 0.25rem;">1. We respond within 24 hours</div>
                        <div style="font-size: 0.88rem; color: var(--text-muted);">Usually same day during business hours</div>
                    </div>
                    <div style="background: var(--bg-white); padding: 1.25rem; border-radius: var(--radius-md); border: 1px solid var(--border-color); box-shadow: var(--shadow-sm);">
                        <div style="font-weight: 700; color: var(--primary); margin-bottom: 0.25rem;">2. Free 30-minute session</div>
                        <div style="font-size: 0.88rem; color: var(--text-muted);">We learn about your business and goals</div>
                    </div>
                    <div style="background: var(--bg-white); padding: 1.25rem; border-radius: var(--radius-md); border: 1px solid var(--border-color); box-shadow: var(--shadow-sm);">
                        <div style="font-weight: 700; color: var(--primary); margin-bottom: 0.25rem;">3. Custom proposal delivered</div>
                        <div style="font-size: 0.88rem; color: var(--text-muted);">Clear scope, pricing, and timeline — no fluff</div>
                    </div>
                    <div style="background: var(--bg-white); padding: 1.25rem; border-radius: var(--radius-md); border: 1px solid var(--border-color); box-shadow: var(--shadow-sm);">
                        <div style="font-weight: 700; color: var(--primary); margin-bottom: 0.25rem;">4. You decide — zero pressure</div>
                        <div style="font-size: 0.88rem; color: var(--text-muted);">No pushy follow-ups. You're in control.</div>
                    </div>
                </div>

                <div>
                    <img src="{{ asset('images/seo/high-converting-digital-design-engagement.png') }}" alt="Queens Digital Agency" class="wsp-split-image">
                </div>
            </div>

            <!-- Contact Card Form -->
            <div class="wsp-form-card">
                <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem; color: var(--dark);">Book a Free Strategy Session</h3>
                <p style="font-size: 0.92rem; color: var(--text-muted); margin-bottom: 1.5rem;">Pick a 30-minute slot that works for you. We’ll discuss your business, your goals, and exactly what it would take to grow your online presence.</p>

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="form_anchor" value="contact-form-section">

                    @if ($errors->any() && old('form_anchor') === 'contact-form-section')
                        <div class="wsp-alert wsp-alert-error" role="alert">
                            <ul style="margin: 0; padding-left: 1.1rem;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="wsp-form-group">
                        <label for="contact-name" class="wsp-form-label">Full Name *</label>
                        <input type="text" id="contact-name" name="name" class="wsp-form-input" placeholder="Enter Your Name" required minlength="2" maxlength="255" value="{{ old('name') }}">
                    </div>

                    <div class="wsp-form-group">
                        <label for="contact-email" class="wsp-form-label">Email Address *</label>
                        <input type="email" id="contact-email" name="email" class="wsp-form-input" placeholder="Enter Your Email Address" required maxlength="255" value="{{ old('email') }}">
                    </div>

                    <div class="wsp-form-group">
                        <label for="contact-phone" class="wsp-form-label">Phone Number *</label>
                        <input type="tel" id="contact-phone" name="phone" class="wsp-form-input" placeholder="Enter Your Phone Number" required inputmode="tel" pattern="[0-9+() .-]{7,30}" minlength="7" maxlength="30" title="Enter a valid phone number using digits, spaces, +, -, parentheses, or periods." value="{{ old('phone') }}">
                    </div>

                    <div class="wsp-form-group">
                        <label for="contact-service" class="wsp-form-label">Services Needed</label>
                        <select id="contact-service" name="service" class="wsp-form-select">
                            <option value="Website Development" {{ old('service') == 'Website Development' ? 'selected' : '' }}>Website Development &amp; Custom Design</option>
                            <option value="Local SEO" {{ old('service') == 'Local SEO' ? 'selected' : '' }}>Local SEO &amp; Google Rankings</option>
                            <option value="Google Business Profile" {{ old('service') == 'Google Business Profile' ? 'selected' : '' }}>Google Business Profile Management</option>
                            <option value="Pay-Per-Click Ads" {{ old('service') == 'Pay-Per-Click Ads' ? 'selected' : '' }}>Pay-Per-Click Ads (Google &amp; Meta)</option>
                            <option value="Social Media Marketing" {{ old('service') == 'Social Media Marketing' ? 'selected' : '' }}>Social Media Marketing</option>
                            <option value="Mobile App Development" {{ old('service') == 'Mobile App Development' ? 'selected' : '' }}>Mobile App Development</option>
                            <option value="Branding &amp; Logo Design" {{ old('service') == 'Branding &amp; Logo Design' ? 'selected' : '' }}>Branding &amp; Logo Design</option>
                            <option value="General Inquiry" {{ old('service') == 'General Inquiry' ? 'selected' : '' }}>Other / General Strategy Consultation</option>
                        </select>
                    </div>

                    <div class="wsp-form-group">
                        <label for="contact-message" class="wsp-form-label">Message</label>
                        <textarea id="contact-message" name="message" class="wsp-form-textarea" placeholder="Tell us about your business, current website, or goals..." rows="4" maxlength="5000">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="wsp-btn wsp-btn-primary" style="width: 100%; justify-content: center;">
                        <span>Schedule Your Free Call</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                    <p style="text-align: center; font-size: 0.85rem; color: var(--text-muted); margin-top: 0.75rem;">30 minutes · Free · No commitment</p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Stats Bar: The Numbers Behind Our Reputation -->
<section class="wsp-stats-bar">
    <div class="wsp-container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 2rem;">
            <h2 style="font-size: 2rem; color: #fff; margin-bottom: 0.5rem;">The Numbers Behind Our Reputation</h2>
            <p style="color: rgba(255, 255, 255, 0.85); font-size: 1.1rem;">
                14 years. 250+ projects. 500,000+ leads. The team that’s built digital success for hundreds of Queens businesses is ready to do the same for yours.
            </p>
        </div>
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

<!-- Map & Location Section -->
<section class="wsp-section" id="map-section">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Our Location</span>
            <h2 class="wsp-section-title">Find Us in <span class="highlight">Forest Hills, Queens</span></h2>
            <p class="wsp-section-desc">
                We are proudly based in Forest Hills, Queens, New York, serving clients across Queens, Brooklyn, Manhattan, Long Island, and the entire NYC tri-state area.
            </p>
        </div>

        <div style="background: var(--bg-white); border-radius: var(--radius-lg); border: 1px solid var(--border-color); box-shadow: var(--shadow-lg); overflow: hidden;">
            <!-- Location Details Header Bar -->
            <div style="padding: 1.25rem 1.75rem; background: var(--bg-light); border-bottom: 1px solid var(--border-color); display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 1rem;">
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <div style="width: 44px; height: 44px; border-radius: var(--radius-md); background: var(--primary-light); border: 1px solid rgba(14, 165, 233, 0.25); color: var(--primary); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div>
                        <div style="font-size: 1.05rem; font-weight: 700; color: var(--dark);">Forest Hills, NY, United States, New York</div>
                        <div style="font-size: 0.85rem; color: var(--text-muted);">Queens, NY 11375 &bull; Mon - Fri: 9:00 AM - 6:00 PM EST &bull; Call: (855) 506-4724</div>
                    </div>
                </div>
                <div>
                    <a href="https://maps.google.com/?q=Forest+Hills,+Queens,+NY+11375" target="_blank" rel="noopener noreferrer" class="wsp-btn wsp-btn-primary wsp-btn-sm" style="display: inline-flex; align-items: center; gap: 0.5rem;">
                        <span>Get Directions</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>

            <!-- Responsive Google Map Embed -->
            <div style="position: relative; width: 100%; height: 450px; background: #e5e7eb;">
                <iframe
                    src="https://maps.google.com/maps?q=Forest+Hills,+Queens,+NY+11375&t=&z=14&ie=UTF8&iwloc=&output=embed"
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Web Support Plaza Office Location Map">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- FAQs Section -->
<section class="wsp-section bg-light">
    <div class="wsp-container">
        <div class="wsp-section-header">
            <span class="wsp-badge">Frequently Asked Questions</span>
            <h2 class="wsp-section-title">Questions About <span class="highlight">Working With Us</span></h2>
            <p class="wsp-section-desc">Everything you need to know about working with Web Support Plaza.</p>
        </div>

        <div class="wsp-faq-list" style="max-width: 820px; margin: 2rem auto 0;">
            <div class="wsp-faq-item active">
                <button type="button" class="wsp-faq-question">
                    <span>How do I contact Web Support Plaza?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    <p>Call us at (855) 506-4724, email marketing@mirchmedia.com, or book a free strategy session on our calendar. We’re based in Forest Hills, Queens, NY and serve clients throughout the tri-state area and nationally.</p>
                </div>
            </div>

            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Is the strategy session really free?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    <p>Yes, completely. The free 30-minute strategy session is a genuine conversation about your business and goals — no sales pitch, no pressure. Even if you decide not to work with us, you’ll leave with a clearer picture of your digital marketing situation and what options you have.</p>
                </div>
            </div>

            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>What should I prepare for the strategy session?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    <p>Nothing special is required. It helps to have your website URL handy (if you have one), a general sense of who your target customers are, and any specific goals or challenges you’d like to address. We take care of the research and analysis — you just need to show up and talk about your business.</p>
                </div>
            </div>

            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>How quickly do you respond to inquiries?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    <p>We respond to all email and form inquiries within 24 business hours — usually the same day during business hours (Mon–Fri 9am–6pm). For urgent matters, calling (855) 506-4724 is the fastest way to reach us.</p>
                </div>
            </div>

            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>Do I need to be in Queens to work with you?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    <p>Not at all. While we’re based in Queens, NY, we work with clients throughout the tri-state area and nationally. Most of our work is done remotely — we communicate by phone, email, and video conference, with in-person meetings available for local Queens-area clients who prefer them.</p>
                </div>
            </div>

            <div class="wsp-faq-item">
                <button type="button" class="wsp-faq-question">
                    <span>How much do your services cost?</span>
                    <span class="wsp-faq-toggle" aria-hidden="true">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                <div class="wsp-faq-answer">
                    <p>Pricing varies by service and scope. Website packages start at $5,000. SEO packages start at $800/month. Social media management starts at $2,500/month. Every engagement is custom-quoted after our strategy session — we’ll never send you a generic proposal without understanding your specific situation first.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
