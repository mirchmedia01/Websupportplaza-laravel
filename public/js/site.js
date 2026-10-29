/**
 * Web Support Plaza - Modern Vanilla JavaScript
 * Zero jQuery, zero Elementor dependencies
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Sticky Header Shadow on Scroll
    const header = document.querySelector('.wsp-header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // 2. Mobile Menu Toggle
    const mobileToggle = document.querySelector('.wsp-mobile-toggle');
    const mobileMenu = document.querySelector('.wsp-mobile-menu');
    const mobileClose = document.querySelector('.wsp-mobile-close');

    if (mobileToggle && mobileMenu) {
        const openMobileMenu = () => {
            mobileMenu.classList.add('open');
            document.body.style.overflow = 'hidden';
        };

        const closeMobileMenu = () => {
            mobileMenu.classList.remove('open');
            document.body.style.overflow = '';
        };

        mobileToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            if (mobileMenu.classList.contains('open')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });

        if (mobileClose) {
            mobileClose.addEventListener('click', (e) => {
                e.stopPropagation();
                closeMobileMenu();
            });
        }

        // Close on backdrop overlay click
        mobileMenu.addEventListener('click', (e) => {
            if (e.target === mobileMenu) {
                closeMobileMenu();
            }
        });

        // Close on Escape key press
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
                closeMobileMenu();
            }
        });

        // Close when any navigation link inside drawer is clicked
        const mobileDrawerLinks = mobileMenu.querySelectorAll('.wsp-mobile-nav a, .wsp-mobile-drawer-footer a');
        mobileDrawerLinks.forEach(link => {
            link.addEventListener('click', () => {
                closeMobileMenu();
            });
        });

        // Auto-close on resize to desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth > 991 && mobileMenu.classList.contains('open')) {
                closeMobileMenu();
            }
        });

        // Mobile Subnav Accordion Toggle
        const subnavToggles = document.querySelectorAll('.wsp-mobile-subnav-toggle');
        subnavToggles.forEach(toggle => {
            toggle.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const group = toggle.closest('.wsp-mobile-item-group');
                if (group) {
                    group.classList.toggle('open');
                }
            });
        });
    }

    // 3. FAQ Accordion Toggle
    const faqQuestions = document.querySelectorAll('.wsp-faq-question, .faq-question, .wsp-accordion-header, .accordion-header');
    faqQuestions.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const item = btn.closest('.wsp-faq-item') || btn.closest('.faq-item') || btn.closest('.wsp-accordion-item') || btn.closest('.accordion-item');
            if (!item) return;
            const isActive = item.classList.contains('active');
            
            // Close other items in the same container
            const container = item.closest('.wsp-faq-list') || item.closest('.faq-accordion') || item.closest('.wsp-accordion') || item.parentElement;
            if (container) {
                container.querySelectorAll('.wsp-faq-item, .faq-item, .wsp-accordion-item, .accordion-item').forEach(other => {
                    if (other !== item) {
                        other.classList.remove('active');
                    }
                });
            }

            if (isActive) {
                item.classList.remove('active');
            } else {
                item.classList.add('active');
            }
        });
    });

    // 4. Number Counter Animation
    const counters = document.querySelectorAll('.wsp-stat-number[data-target], .stat-number[data-target]');
    if (counters.length > 0 && 'IntersectionObserver' in window) {
        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.getAttribute('data-target'), 10);
                    const suffix = counter.getAttribute('data-suffix') || '';
                    const duration = 1800; // ms
                    const startTime = performance.now();

                    const updateCount = (currentTime) => {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        // Easing: easeOutQuad
                        const current = Math.floor(progress * (2 - progress) * target);
                        counter.textContent = current.toLocaleString() + suffix;

                        if (progress < 1) {
                            requestAnimationFrame(updateCount);
                        } else {
                            counter.textContent = target.toLocaleString() + suffix;
                        }
                    };

                    requestAnimationFrame(updateCount);
                    observer.unobserve(counter);
                }
            });
        }, { threshold: 0.2 });

        counters.forEach(counter => counterObserver.observe(counter));
    }

    // 5. Back to Top Button
    const backToTopBtn = document.getElementById('wsp-back-to-top');
    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // 6. Flash Toast Dismissal
    document.querySelectorAll('.wsp-flash').forEach((flash) => {
        const hide = () => {
            flash.classList.add('is-hiding');
            window.setTimeout(() => flash.remove(), 220);
        };

        const close = flash.querySelector('.wsp-flash-close');
        if (close) {
            close.addEventListener('click', hide);
        }

        window.setTimeout(hide, 8000);
    });

    // 7. Phone Fields: Digits and Common Separators Only
    document.querySelectorAll('input[type="tel"]').forEach((input) => {
        input.addEventListener('input', () => {
            const cleaned = input.value.replace(/[^0-9+() .-]/g, '');
            if (cleaned !== input.value) {
                input.value = cleaned;
            }
        });
    });
});
