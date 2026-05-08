<?php
/**
 * Site header: <head>, top bar and main navigation.
 *
 * @package MagicStar
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#0a0a0c" />
    <meta name="robots" content="index,follow,max-image-preview:large" />

    <title>Luxury Car Garage in Dubai | Mercedes, Rolls Royce, BMW &amp; More | Magic Star Auto Repairing</title>
    <meta name="description" content="Magic Star Auto Repairing in Umm Ramool, Dubai - the trusted luxury car garage for Mercedes-Benz, Rolls Royce, BMW, Bentley, Ferrari, Lamborghini, Porsche, Audi and Range Rover. Engine repair, AC, paint, denting, wrapping, tinting, PPF, ceramic coating and detailing. Free quotes - +971 50 430 2507." />
    <meta name="keywords" content="luxury car garage Dubai, Mercedes service Dubai, Rolls Royce service Dubai, BMW workshop Dubai, Bentley service Dubai, Ferrari service Dubai, Lamborghini service Dubai, Porsche service Dubai, car painting Dubai, car denting Dubai, paint protection film Dubai, PPF Dubai, ceramic coating Dubai, car wrapping Dubai, window tinting Dubai, car detailing Dubai, auto AC repair Dubai, engine repair Umm Ramool, Magic Star Garage" />
    <meta name="author" content="Magic Star Auto Repairing" />
    <link rel="canonical" href="<?php echo esc_url( home_url( '/' ) ); ?>" />

    <!-- Geo / local SEO -->
    <meta name="geo.region" content="AE-DU" />
    <meta name="geo.placename" content="Umm Ramool, Dubai" />
    <meta name="geo.position" content="25.2403;55.3790" />
    <meta name="ICBM" content="25.2403, 55.3790" />

    <!-- Open Graph -->
    <meta property="og:type" content="business.business" />
    <meta property="og:site_name" content="Magic Star Auto Repairing" />
    <meta property="og:title" content="Magic Star Auto Repairing - Luxury Car Garage in Dubai" />
    <meta property="og:description" content="Premium auto care for Mercedes, Rolls Royce, BMW, Bentley, Ferrari, Lamborghini, Porsche, Audi and Range Rover. Engine, paint, PPF, ceramic, wrap, tint and detailing. Umm Ramool, Dubai." />
    <meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />
    <meta property="og:locale" content="en_AE" />
    <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() . '/images/hero-workshop.jpeg' ); ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="business:contact_data:street_address" content="2nd Street, Umm Ramool" />
    <meta property="business:contact_data:locality" content="Dubai" />
    <meta property="business:contact_data:country_name" content="United Arab Emirates" />
    <meta property="business:contact_data:phone_number" content="+971504302507" />
    <meta property="business:contact_data:email" content="Magicstarautorepairing@gmail.com" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Magic Star Auto Repairing - Luxury Car Garage in Dubai" />
    <meta name="twitter:description" content="Premium auto care for Mercedes, Rolls Royce, BMW, Bentley, Ferrari, Lamborghini, Porsche, Audi and Range Rover in Umm Ramool, Dubai." />
    <meta name="twitter:image" content="<?php echo esc_url( get_template_directory_uri() . '/images/hero-workshop.jpeg' ); ?>" />

    <!-- Structured data: AutoRepair business -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "AutoRepair",
        "name": "Magic Star Auto Repairing",
        "image": "<?php echo esc_url( get_template_directory_uri() . '/images/brands/mercedes.svg' ); ?>",
        "url": "<?php echo esc_url( home_url( '/' ) ); ?>",
        "telephone": "+971504302507",
        "email": "Magicstarautorepairing@gmail.com",
        "priceRange": "$$",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "2nd Street, Umm Ramool",
            "addressLocality": "Dubai",
            "addressRegion": "Dubai",
            "addressCountry": "AE"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.2403,
            "longitude": 55.3790
        },
        "areaServed": [
            { "@type": "City", "name": "Dubai" },
            { "@type": "City", "name": "Sharjah" },
            { "@type": "City", "name": "Abu Dhabi" }
        ],
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Saturday","Sunday","Monday","Tuesday","Wednesday","Thursday"],
                "opens": "08:00",
                "closes": "13:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Saturday","Sunday","Monday","Tuesday","Wednesday","Thursday"],
                "opens": "14:00",
                "closes": "19:00"
            }
        ],
        "sameAs": [
            "https://wa.me/971504302507"
        ],
        "makesOffer": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Engine Repair & Diagnostics" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Transmission & Gearbox Rebuilds" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Auto AC Service" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Car Painting & Denting" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Paint Protection Film (PPF)" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Ceramic Coating" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Vinyl Wrapping" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Window Tinting" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Detailing & Polishing" } }
        ],
        "brand": [
            "Mercedes-Benz","Rolls Royce","BMW","Bentley","Ferrari","Lamborghini","Porsche","Audi","Range Rover","Maserati","Aston Martin"
        ]
    }
    </script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Top Bar -->
    <div class="topbar">
        <div class="container topbar-inner">
            <div class="topbar-left">
                <span class="topbar-item">
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.05-.24 11.36 11.36 0 003.58.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.58 1 1 0 01-.24 1.05z"/></svg>
                    <a href="tel:+971504302507">+971 50 430 2507</a>
                </span>
                <span class="topbar-item">
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-8 5-8-5V6l8 5 8-5z"/></svg>
                    <a href="mailto:Magicstarautorepairing@gmail.com">Magicstarautorepairing@gmail.com</a>
                </span>
            </div>
            <div class="topbar-right">
                <span class="topbar-item">Sat - Thu: 8:00 AM - 7:00 PM (Break 1 - 2 PM)</span>
                <a class="topbar-item topbar-wa" href="https://wa.me/971504302507" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M20.52 3.48A11.86 11.86 0 0012 .04C5.42.04.04 5.42.04 12c0 2.11.55 4.18 1.6 6L0 24l6.18-1.62A11.95 11.95 0 0012 23.96c6.58 0 11.96-5.38 11.96-11.96 0-3.19-1.24-6.19-3.44-8.52zM12 21.94c-1.86 0-3.69-.5-5.29-1.45l-.38-.22-3.66.96.98-3.57-.25-.39A9.93 9.93 0 012.06 12C2.06 6.53 6.53 2.06 12 2.06c2.66 0 5.16 1.04 7.04 2.92A9.91 9.91 0 0121.94 12c0 5.47-4.47 9.94-9.94 9.94zm5.45-7.46c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.27-.47-2.42-1.5-.9-.8-1.5-1.79-1.67-2.09-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51l-.57-.01c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.49 0 1.47 1.07 2.89 1.22 3.09.15.2 2.1 3.21 5.09 4.5.71.31 1.27.5 1.7.64.71.23 1.36.2 1.87.12.57-.08 1.77-.72 2.02-1.42.25-.7.25-1.29.17-1.42-.07-.13-.27-.2-.57-.35z"/></svg>
                    WhatsApp
                </a>
            </div>
        </div>
    </div>

    <!-- Header / Nav -->
    <header class="header" id="header">
        <div class="container header-inner">
            <a href="<?php echo esc_url( home_url( '/#home' ) ); ?>" class="logo">
                <span class="logo-mark">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M12 2l2.39 7.36H22l-6.18 4.49L18.18 21 12 16.51 5.82 21l2.36-7.15L2 9.36h7.61z"/></svg>
                </span>
                <span class="logo-text">
                    <strong>Magic Star</strong>
                    <small>Garage</small>
                </span>
            </a>

            <nav class="nav" id="nav">
                <a href="<?php echo esc_url( home_url( '/#home' ) ); ?>">Home</a>
                <a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About</a>
                <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Services</a>
                <a href="<?php echo esc_url( home_url( '/#luxury' ) ); ?>">Brands</a>
                <a href="<?php echo esc_url( home_url( '/#why' ) ); ?>">Why Us</a>
                <a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>">FAQ</a>
                <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Contact</a>
                <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-gold nav-cta">Book Now</a>
            </nav>

            <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>
