<?php
/**
 * Site footer: footer columns, floating WhatsApp, back-to-top, FAQ JSON-LD.
 *
 * @package MagicStar
 */
?>

    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-grid">
            <div class="footer-col">
                <a href="<?php echo esc_url( home_url( '/#home' ) ); ?>" class="logo logo-light">
                    <span class="logo-mark">
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M12 2l2.39 7.36H22l-6.18 4.49L18.18 21 12 16.51 5.82 21l2.36-7.15L2 9.36h7.61z"/></svg>
                    </span>
                    <span class="logo-text">
                        <strong>Magic Star</strong>
                        <small>Garage</small>
                    </span>
                </a>
                <p>Premium auto care and luxury car specialists. Engineered for performance, crafted for perfection.</p>
            </div>
            <div class="footer-col">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Services</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#luxury' ) ); ?>">Luxury Cars</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#why' ) ); ?>">Why Choose Us</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Our Services</h5>
                <ul>
                    <li>Engine Repair &amp; Diagnostics</li>
                    <li>General Maintenance</li>
                    <li>Auto AC Repairing</li>
                    <li>Painting &amp; Denting</li>
                    <li>Wrapping &amp; Tinting</li>
                    <li>PPF, Detailing &amp; Polishing</li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Contact</h5>
                <ul>
                    <li>2nd Street, Umm Ramool, Dubai, UAE</li>
                    <li><a href="tel:+971504302507">+971 50 430 2507</a></li>
                    <li><a href="mailto:Magicstarautorepairing@gmail.com">Magicstarautorepairing@gmail.com</a></li>
                    <li>Sat - Thu: 8 AM - 7 PM (Break 1 - 2 PM)</li>
                    <li>Friday: Closed</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; <span id="year"></span> Magic Star Garage. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/971504302507?text=Hi%20Magic%20Star%2C%20I%27d%20like%20a%20quote%20for%20my%20car." class="whatsapp-fab" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp">
        <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor" aria-hidden="true"><path d="M20.52 3.48A11.86 11.86 0 0012 .04C5.42.04.04 5.42.04 12c0 2.11.55 4.18 1.6 6L0 24l6.18-1.62A11.95 11.95 0 0012 23.96c6.58 0 11.96-5.38 11.96-11.96 0-3.19-1.24-6.19-3.44-8.52zM12 21.94c-1.86 0-3.69-.5-5.29-1.45l-.38-.22-3.66.96.98-3.57-.25-.39A9.93 9.93 0 012.06 12C2.06 6.53 6.53 2.06 12 2.06c2.66 0 5.16 1.04 7.04 2.92A9.91 9.91 0 0121.94 12c0 5.47-4.47 9.94-9.94 9.94zm5.45-7.46c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.27-.47-2.42-1.5-.9-.8-1.5-1.79-1.67-2.09-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51l-.57-.01c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.49 0 1.47 1.07 2.89 1.22 3.09.15.2 2.1 3.21 5.09 4.5.71.31 1.27.5 1.7.64.71.23 1.36.2 1.87.12.57-.08 1.77-.72 2.02-1.42.25-.7.25-1.29.17-1.42-.07-.13-.27-.2-.57-.35z"/></svg>
        <span class="whatsapp-fab-label">Chat on WhatsApp</span>
    </a>

    <a href="#home" class="back-to-top" id="backToTop" aria-label="Back to top">
        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 4l-8 8h5v8h6v-8h5z"/></svg>
    </a>

    <!-- FAQ structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            { "@type": "Question", "name": "Do you specialise in luxury and exotic cars?", "acceptedAnswer": { "@type": "Answer", "text": "Yes. Our workshop is built around European luxury and performance vehicles — Mercedes-Benz, Rolls Royce, BMW, Bentley, Ferrari, Lamborghini, Porsche, Audi, Range Rover, Maserati and Aston Martin. We use dealer-level diagnostic tools (XENTRY, ISTA, ODIS, IDS) and stock OEM-grade parts." } },
            { "@type": "Question", "name": "Where are you located in Dubai and do you collect the car?", "acceptedAnswer": { "@type": "Answer", "text": "We're on 2nd Street, Umm Ramool, Dubai. Free pickup and delivery anywhere in Dubai is available on request, and a courtesy car can be arranged for longer jobs." } },
            { "@type": "Question", "name": "How long does a typical service take?", "acceptedAnswer": { "@type": "Answer", "text": "Most routine services are done the same day. Larger jobs like full body painting, PPF wraps or engine overhauls take 3 - 10 working days, with progress updates by WhatsApp." } },
            { "@type": "Question", "name": "Do you offer a warranty on your work?", "acceptedAnswer": { "@type": "Answer", "text": "Yes. Every repair is backed by our written workmanship warranty. PPF carries up to a 10-year manufacturer warranty, ceramic coatings 1, 5 or 9 years, and window tinting a lifetime film warranty." } },
            { "@type": "Question", "name": "Can I get a free quote before you start work?", "acceptedAnswer": { "@type": "Answer", "text": "Always. Message us on WhatsApp at +971 50 430 2507 or fill in the form on this site, and we'll reply the same day with a no-obligation written estimate." } },
            { "@type": "Question", "name": "Do you only use genuine OEM parts?", "acceptedAnswer": { "@type": "Answer", "text": "By default, yes. We source genuine OEM and OE-equivalent parts through trusted Dubai channels. Aftermarket performance parts can be sourced on request." } },
            { "@type": "Question", "name": "What payment methods do you accept?", "acceptedAnswer": { "@type": "Answer", "text": "Cash, all major debit and credit cards, and bank transfer. We also support split payments and accept insurance assignments for accident repair." } }
        ]
    }
    </script>

    <?php wp_footer(); ?>
</body>
</html>
