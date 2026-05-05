(function () {
    'use strict';

    // Mobile menu toggle
    var hamburger = document.getElementById('hamburger');
    var nav = document.getElementById('nav');
    if (hamburger && nav) {
        hamburger.addEventListener('click', function () {
            var isOpen = nav.classList.toggle('open');
            hamburger.classList.toggle('active', isOpen);
            hamburger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });

        nav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                nav.classList.remove('open');
                hamburger.classList.remove('active');
                hamburger.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // Header shadow on scroll & back-to-top button
    var header = document.getElementById('header');
    var backToTop = document.getElementById('backToTop');
    function onScroll() {
        var y = window.scrollY || window.pageYOffset;
        if (header) header.classList.toggle('scrolled', y > 10);
        if (backToTop) backToTop.classList.toggle('show', y > 400);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    // Reveal-on-scroll animations
    var revealEls = document.querySelectorAll(
        '.section-head, .service-card, .why-card, .luxury-card, .about-image, .about-text, .contact-info, .contact-form, .hero-content > *'
    );
    revealEls.forEach(function (el) { el.classList.add('reveal'); });

    if ('IntersectionObserver' in window) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

        revealEls.forEach(function (el) { io.observe(el); });
    } else {
        revealEls.forEach(function (el) { el.classList.add('in'); });
    }

    // Contact form (front-end only)
    var form = document.getElementById('contactForm');
    var note = document.getElementById('formNote');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }
            if (note) {
                note.hidden = false;
                note.textContent = "Thanks! We've received your request and will be in touch shortly.";
            }
            form.reset();
            setTimeout(function () { if (note) note.hidden = true; }, 6000);
        });
    }

    // Footer year
    var yearEl = document.getElementById('year');
    if (yearEl) yearEl.textContent = new Date().getFullYear();
})();
