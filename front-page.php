<?php
/**
 * Front page template — single-page brochure layout.
 *
 * @package MagicStar
 */

get_header();
?>

    <!-- Hero -->
    <section class="hero" id="home">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <span class="eyebrow">Premium Auto Care &amp; Luxury Car Specialists</span>
            <h1>Where Luxury Cars <span class="gold">Shine Brightest</span></h1>
            <p>From precision engine diagnostics to flawless paint finishes, Magic Star Garage is the trusted home for owners of Mercedes, Rolls Royce, BMW and every car that deserves the very best.</p>
            <div class="hero-actions">
                <a href="#services" class="btn btn-gold">Explore Services</a>
                <a href="#contact" class="btn btn-ghost">Get a Free Quote</a>
            </div>
            <div class="hero-stats">
                <div><strong>15+</strong><span>Years of Experience</span></div>
                <div><strong>5,000+</strong><span>Cars Serviced</span></div>
                <div><strong>100%</strong><span>Customer Satisfaction</span></div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="section about" id="about">
        <div class="container about-grid">
            <div class="about-image">
                <div class="about-img-main"></div>
                <div class="about-img-badge">
                    <strong>15+</strong>
                    <span>Years<br />of Excellence</span>
                </div>
            </div>
            <div class="about-text">
                <span class="eyebrow">About Magic Star Garage</span>
                <h2>Engineered for Performance. <br /><span class="gold">Crafted for Perfection.</span></h2>
                <p>Magic Star Garage is a full-service automotive workshop built around one promise: treat every vehicle like a masterpiece. Our team of certified mechanics, paint experts and detailing specialists combine decades of experience with the latest tools and original parts to deliver work you can feel the moment you step on the pedal.</p>
                <p>Whether you drive a daily commuter or a six-figure supercar, you get the same obsessive attention to detail, transparent pricing and on-time delivery.</p>
                <ul class="about-list">
                    <li>Certified, factory-trained technicians</li>
                    <li>Genuine OEM parts and premium materials</li>
                    <li>State-of-the-art diagnostic equipment</li>
                    <li>Climate-controlled paint and detailing bays</li>
                </ul>
                <a href="#contact" class="btn btn-dark">Schedule a Visit</a>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section services" id="services">
        <div class="container">
            <div class="section-head">
                <span class="eyebrow">What We Do</span>
                <h2>A Complete Range of <span class="gold">Premium Services</span></h2>
                <p>Everything your luxury car needs under one roof — mechanical and electrical work by factory-trained technicians, show-quality bodywork in climate-controlled bays, and concours-grade protection and detailing. Every job comes with a written estimate, OEM-grade parts and a workmanship warranty.</p>
            </div>

            <!-- Group 01: Mechanical & Performance -->
            <div class="service-group">
                <h3 class="service-group-title"><span>01</span> Mechanical &amp; Performance</h3>
                <div class="services-grid">
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 4a6 6 0 016 6h-2a4 4 0 00-4-4V6zm0 12a6 6 0 01-6-6h2a4 4 0 004 4v2z"/></svg>
                        </div>
                        <h4>Engine Repair &amp; Overhaul</h4>
                        <p>Master technicians rebuild and tune V6, V8, V10 and V12 engines to factory tolerances and beyond.</p>
                        <ul class="sub-list">
                            <li>Full engine rebuilds &amp; overhauls</li>
                            <li>Timing belt &amp; chain replacement</li>
                            <li>Cylinder head &amp; gasket repair</li>
                            <li>Turbo &amp; supercharger servicing</li>
                            <li>Performance tuning &amp; ECU remap</li>
                        </ul>
                    </article>
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M22 7h-2.07A8 8 0 004 9v6a8 8 0 0015.93 2H22V7zm-9 9a4 4 0 110-8 4 4 0 010 8z"/></svg>
                        </div>
                        <h4>Transmission &amp; Gearbox</h4>
                        <p>Specialists in modern dual-clutch and torque-converter automatics from every major luxury marque.</p>
                        <ul class="sub-list">
                            <li>Manual &amp; automatic gearbox rebuilds</li>
                            <li>DSG, PDK &amp; ZF 8HP servicing</li>
                            <li>Clutch &amp; flywheel replacement</li>
                            <li>Differential &amp; driveline repair</li>
                            <li>Mechatronic unit diagnostics</li>
                        </ul>
                    </article>
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L4 6v6c0 5 3.5 9.74 8 10 4.5-.26 8-5 8-10V6l-8-4zm0 10.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                        </div>
                        <h4>Brakes, Suspension &amp; Steering</h4>
                        <p>From OEM brake refits to airmatic and active-suspension overhauls on Mercedes, Range Rover and Bentley.</p>
                        <ul class="sub-list">
                            <li>Brake pads, discs &amp; calipers</li>
                            <li>Air suspension (Airmatic, EAS, Hydractive)</li>
                            <li>Coilovers &amp; performance dampers</li>
                            <li>Wheel alignment &amp; tracking</li>
                            <li>Power steering &amp; rack repair</li>
                        </ul>
                    </article>
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 12h4l3-9 4 18 3-9h4" stroke="currentColor" stroke-width="2" fill="none" stroke-linejoin="round"/></svg>
                        </div>
                        <h4>Electrical &amp; Diagnostics</h4>
                        <p>Dealer-level scan tools — XENTRY, ISTA, ODIS, IDS — to pinpoint faults across every control module.</p>
                        <ul class="sub-list">
                            <li>Computerised fault diagnostics</li>
                            <li>Battery testing &amp; replacement</li>
                            <li>Wiring repair &amp; module coding</li>
                            <li>ABS, parking &amp; lane-assist sensors</li>
                            <li>Hybrid &amp; EV system checks</li>
                        </ul>
                    </article>
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19.5 12c.83 0 1.5-.67 1.5-1.5S20.33 9 19.5 9c-.28 0-.55.08-.78.21l-3.06-3.06A4 4 0 0012 4a4 4 0 00-3.66 5.66L5.28 12.72A1.5 1.5 0 104.5 15c.28 0 .55-.08.78-.21L8.34 11.7A4 4 0 0012 13a4 4 0 003.66-5.66l3.06 3.06c-.13.23-.21.5-.21.78 0 .83.67 1.5 1.5 1.5z"/></svg>
                        </div>
                        <h4>Auto AC &amp; Climate</h4>
                        <p>Built for Dubai summers — full air-conditioning service including R134a, R1234yf and rear-zone systems.</p>
                        <ul class="sub-list">
                            <li>AC gas refill &amp; leak detection</li>
                            <li>Compressor &amp; condenser repair</li>
                            <li>Heater core &amp; blower replacement</li>
                            <li>Cabin filter &amp; UV sterilisation</li>
                            <li>Rear-zone &amp; multi-zone systems</li>
                        </ul>
                    </article>
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 17l6-6 4 4 8-8v4h2V3h-8v2h4l-6 6-4-4-8 8z"/></svg>
                        </div>
                        <h4>Oil &amp; Fluid Services</h4>
                        <p>Manufacturer-grade oils and OEM filters, with rapid turnaround to keep your service history pristine.</p>
                        <ul class="sub-list">
                            <li>Engine oil &amp; filter (full synthetic)</li>
                            <li>Transmission &amp; differential fluid</li>
                            <li>Brake &amp; power steering fluid</li>
                            <li>Coolant flush &amp; refill</li>
                            <li>Manufacturer service reset</li>
                        </ul>
                    </article>
                </div>
            </div>

            <!-- Group 02: Bodywork & Restoration -->
            <div class="service-group">
                <h3 class="service-group-title"><span>02</span> Bodywork &amp; Restoration</h3>
                <div class="services-grid">
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 21h18v-2H3v2zM12 3l-9 9h4v6h10v-6h4l-9-9z"/></svg>
                        </div>
                        <h4>Painting &amp; Refinishing</h4>
                        <p>Computerised colour matching in dust-free spray booths — finishes indistinguishable from factory.</p>
                        <ul class="sub-list">
                            <li>Full body respray</li>
                            <li>Spot &amp; panel painting</li>
                            <li>Bumper, hood &amp; door respray</li>
                            <li>Pearl, candy &amp; metallic finishes</li>
                            <li>Colour matching for OEM codes</li>
                        </ul>
                    </article>
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.06 9l.94.94L5.92 19H5v-.92L14.06 9zM17.66 3a1 1 0 00-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83a1 1 0 000-1.41l-2.34-2.34a1 1 0 00-.71-.29zM3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25z"/></svg>
                        </div>
                        <h4>Denting &amp; Collision Repair</h4>
                        <p>From a parking-lot ding to a major shunt — restored to factory geometry with insurance claim support.</p>
                        <ul class="sub-list">
                            <li>Paintless Dent Repair (PDR)</li>
                            <li>Major collision panel repair</li>
                            <li>Chassis &amp; frame straightening</li>
                            <li>Bumper &amp; fender replacement</li>
                            <li>Insurance claim assistance</li>
                        </ul>
                    </article>
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M21 16.5V7.5L12 2 3 7.5v9L12 22l9-5.5zM12 4.3L18.5 8 12 11.7 5.5 8 12 4.3z"/></svg>
                        </div>
                        <h4>Trim &amp; Glass Restoration</h4>
                        <p>Bring tired exterior trim and yellowed lights back to showroom condition.</p>
                        <ul class="sub-list">
                            <li>Headlight restoration &amp; polishing</li>
                            <li>Chrome &amp; alloy trim refinish</li>
                            <li>Window seal &amp; rubber replacement</li>
                            <li>Convertible roof care &amp; repair</li>
                            <li>Windshield &amp; glass replacement</li>
                        </ul>
                    </article>
                </div>
            </div>

            <!-- Group 03: Protection, Detailing & Style -->
            <div class="service-group">
                <h3 class="service-group-title"><span>03</span> Protection, Detailing &amp; Style</h3>
                <div class="services-grid">
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L4 6v6c0 5 3.5 9.74 8 10 4.5-.26 8-5 8-10V6l-8-4z"/></svg>
                        </div>
                        <h4>Paint Protection Film (PPF)</h4>
                        <p>Self-healing transparent armour that shields paint from stone chips, scratches and UV damage.</p>
                        <ul class="sub-list">
                            <li>Partial front PPF (high-impact zones)</li>
                            <li>Full front PPF (hood, fenders, mirrors)</li>
                            <li>Full body PPF</li>
                            <li>Self-healing top coat</li>
                            <li>Up to 10-year manufacturer warranty</li>
                        </ul>
                    </article>
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm1 17.93V18h-2v1.93A8 8 0 014.07 13H6v-2H4.07A8 8 0 0111 4.07V6h2V4.07A8 8 0 0119.93 11H18v2h1.93A8 8 0 0113 19.93z"/></svg>
                        </div>
                        <h4>Ceramic Coating</h4>
                        <p>Liquid glass that locks in a deep, hydrophobic shine and makes washing effortless.</p>
                        <ul class="sub-list">
                            <li>1-year entry coating</li>
                            <li>5-year professional coating</li>
                            <li>9-year flagship coating</li>
                            <li>Wheel, glass &amp; trim coatings</li>
                            <li>Interior leather &amp; fabric coating</li>
                        </ul>
                    </article>
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 17l6-6 4 4 8-8v4h2V3h-8v2h4l-6 6-4-4-8 8z"/></svg>
                        </div>
                        <h4>Vinyl Wrapping</h4>
                        <p>Change your car's look overnight without touching the original paint — fully reversible.</p>
                        <ul class="sub-list">
                            <li>Gloss, matte, satin &amp; chrome wraps</li>
                            <li>Full colour change wraps</li>
                            <li>Roof, hood &amp; accent wraps</li>
                            <li>Custom liveries &amp; branding</li>
                            <li>Premium 3M, Avery &amp; KPMF films</li>
                        </ul>
                    </article>
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M21 12c0 1.1-.9 2-2 2H5c-1.1 0-2-.9-2-2s.9-2 2-2h14c1.1 0 2 .9 2 2zm-2-7H5C3.9 5 3 5.9 3 7s.9 2 2 2h14c1.1 0 2-.9 2-2s-.9-2-2-2zm0 10H5c-1.1 0-2 .9-2 2s.9 2 2 2h14c1.1 0 2-.9 2-2s-.9-2-2-2z"/></svg>
                        </div>
                        <h4>Window Tinting</h4>
                        <p>UV and infrared rejection films that drop cabin temperatures and protect your interior.</p>
                        <ul class="sub-list">
                            <li>Premium ceramic films</li>
                            <li>Up to 99% UV &amp; IR rejection</li>
                            <li>RTA-compliant shade levels</li>
                            <li>Sunroof &amp; rear-windshield tinting</li>
                            <li>Lifetime film warranty</li>
                        </ul>
                    </article>
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 110-16 8 8 0 010 16zm0-13a5 5 0 100 10 5 5 0 000-10z"/></svg>
                        </div>
                        <h4>Detailing &amp; Polishing</h4>
                        <p>Multi-stage paint correction, deep interior care and engine-bay restoration to concours level.</p>
                        <ul class="sub-list">
                            <li>One-, two- &amp; three-stage correction</li>
                            <li>Engine bay &amp; underbody detail</li>
                            <li>Interior deep cleaning &amp; leather care</li>
                            <li>Fabric &amp; carpet shampoo</li>
                            <li>Alloy wheel restoration</li>
                        </ul>
                    </article>
                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93A7.99 7.99 0 014.07 13H7v3h2v-3h2v3.93zM13 16v-3h2v3h2.93A7.99 7.99 0 0113 4.07V7h-2V4.07A7.99 7.99 0 014.07 11H7V8h2v3h2V8h2v3h2V8h2v3h2.93A7.99 7.99 0 0113 19.93V16z"/></svg>
                        </div>
                        <h4>VIP Concierge &amp; Pre-Purchase</h4>
                        <p>White-glove service that fits around your schedule — and an honest second opinion before you buy.</p>
                        <ul class="sub-list">
                            <li>Pickup &amp; delivery anywhere in Dubai</li>
                            <li>Courtesy car on request</li>
                            <li>Pre-purchase inspections (180-point)</li>
                            <li>Service-history verification</li>
                            <li>Detailed photo &amp; video reports</li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Luxury Cars -->
    <section class="section luxury" id="luxury">
        <div class="container">
            <div class="section-head light">
                <span class="eyebrow">Trusted by Luxury Owners</span>
                <h2>Specialists in <span class="gold">High-End Vehicles</span></h2>
                <p>From hand-built British icons to German engineering legends — we have the tools, the parts and the expertise to service the world's most demanding cars.</p>
            </div>

            <div class="luxury-grid">
                <figure class="luxury-card car-1">
                    <figcaption>
                        <h4>Rolls Royce</h4>
                        <p>Concours-level care for Phantom, Ghost, Wraith and Cullinan.</p>
                    </figcaption>
                </figure>
                <figure class="luxury-card car-2">
                    <figcaption>
                        <h4>Mercedes-Benz</h4>
                        <p>Full dealership-grade service for AMG, S-Class, G-Wagon and EQ.</p>
                    </figcaption>
                </figure>
                <figure class="luxury-card car-3">
                    <figcaption>
                        <h4>BMW</h4>
                        <p>Performance tuning and OEM servicing for M-Series and 7-Series.</p>
                    </figcaption>
                </figure>
                <figure class="luxury-card car-4">
                    <figcaption>
                        <h4>Bentley</h4>
                        <p>Specialist craftsmanship for Continental, Flying Spur and Bentayga.</p>
                    </figcaption>
                </figure>
                <figure class="luxury-card car-5">
                    <figcaption>
                        <h4>Lamborghini</h4>
                        <p>Engine tuning, ceramic coatings and PPF for Huracán and Urus.</p>
                    </figcaption>
                </figure>
                <figure class="luxury-card car-6">
                    <figcaption>
                        <h4>Ferrari, Porsche &amp; More</h4>
                        <p>Audi, Range Rover, Maserati, Aston Martin — every marque, mastered.</p>
                    </figcaption>
                </figure>
            </div>

            <?php $brands_uri = get_template_directory_uri() . '/images/brands'; ?>
            <div class="brand-strip" aria-label="Brands we service">
                <img src="<?php echo esc_url( $brands_uri . '/mercedes.svg' ); ?>" alt="Mercedes-Benz" loading="lazy" width="56" height="56" />
                <img src="<?php echo esc_url( $brands_uri . '/rollsroyce.svg' ); ?>" alt="Rolls Royce" loading="lazy" width="56" height="56" />
                <img src="<?php echo esc_url( $brands_uri . '/bmw.svg' ); ?>" alt="BMW" loading="lazy" width="56" height="56" />
                <img src="<?php echo esc_url( $brands_uri . '/bentley.svg' ); ?>" alt="Bentley" loading="lazy" width="56" height="56" />
                <img src="<?php echo esc_url( $brands_uri . '/ferrari.svg' ); ?>" alt="Ferrari" loading="lazy" width="56" height="56" />
                <img src="<?php echo esc_url( $brands_uri . '/lamborghini.svg' ); ?>" alt="Lamborghini" loading="lazy" width="56" height="56" />
                <img src="<?php echo esc_url( $brands_uri . '/porsche.svg' ); ?>" alt="Porsche" loading="lazy" width="120" height="56" />
                <img src="<?php echo esc_url( $brands_uri . '/audi.svg' ); ?>" alt="Audi" loading="lazy" width="80" height="56" />
                <img src="<?php echo esc_url( $brands_uri . '/landrover.svg' ); ?>" alt="Land Rover / Range Rover" loading="lazy" width="120" height="56" />
                <img src="<?php echo esc_url( $brands_uri . '/maserati.svg' ); ?>" alt="Maserati" loading="lazy" width="56" height="56" />
                <img src="<?php echo esc_url( $brands_uri . '/astonmartin.svg' ); ?>" alt="Aston Martin" loading="lazy" width="80" height="56" />
            </div>
        </div>
    </section>

    <!-- Why Us -->
    <section class="section why" id="why">
        <div class="container">
            <div class="section-head">
                <span class="eyebrow">Why Choose Magic Star</span>
                <h2>The Difference Is in the <span class="gold">Details</span></h2>
            </div>

            <div class="why-grid">
                <div class="why-card">
                    <div class="why-num">01</div>
                    <h4>Master Technicians</h4>
                    <p>Factory-trained specialists with deep experience on European luxury and performance vehicles.</p>
                </div>
                <div class="why-card">
                    <div class="why-num">02</div>
                    <h4>Genuine Parts Only</h4>
                    <p>OEM and OE-equivalent parts sourced through trusted channels — no compromises, no surprises.</p>
                </div>
                <div class="why-card">
                    <div class="why-num">03</div>
                    <h4>Transparent Pricing</h4>
                    <p>Clear quotes, no hidden fees and a written estimate before any work begins on your vehicle.</p>
                </div>
                <div class="why-card">
                    <div class="why-num">04</div>
                    <h4>Service Warranty</h4>
                    <p>Every repair and finish is backed by our written workmanship warranty for total peace of mind.</p>
                </div>
                <div class="why-card">
                    <div class="why-num">05</div>
                    <h4>State-of-the-Art Facility</h4>
                    <p>Climate-controlled bays, dust-free paint booths and the latest diagnostic equipment under one roof.</p>
                </div>
                <div class="why-card">
                    <div class="why-num">06</div>
                    <h4>White-Glove Service</h4>
                    <p>Pickup and delivery, courtesy cars and detailed progress updates — we work around your schedule.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section faq" id="faq">
        <div class="container">
            <div class="section-head">
                <span class="eyebrow">Frequently Asked</span>
                <h2>Answers Before You <span class="gold">Drop By</span></h2>
                <p>Quick answers to the questions our customers ask most. Have something else on your mind? Send us a WhatsApp and we'll reply the same day.</p>
            </div>

            <div class="faq-list">
                <details class="faq-item" open>
                    <summary>Do you specialise in luxury and exotic cars?</summary>
                    <div class="faq-body">
                        <p>Yes. Our workshop is built around European luxury and performance vehicles — Mercedes-Benz, Rolls Royce, BMW, Bentley, Ferrari, Lamborghini, Porsche, Audi, Range Rover, Maserati and Aston Martin. We use dealer-level diagnostic tools (XENTRY, ISTA, ODIS, IDS) and stock OEM-grade parts so your car is treated exactly the way the manufacturer intended.</p>
                    </div>
                </details>
                <details class="faq-item">
                    <summary>Where are you located in Dubai and do you collect the car?</summary>
                    <div class="faq-body">
                        <p>We're on 2nd Street, Umm Ramool, Dubai — easy access from Sheikh Rashid Road, the airport and Business Bay. Free pickup and delivery anywhere in Dubai is available on request, and a courtesy car can be arranged for longer jobs.</p>
                    </div>
                </details>
                <details class="faq-item">
                    <summary>How long does a typical service take?</summary>
                    <div class="faq-body">
                        <p>Most routine services — oil change, AC service, brake refresh — are done the same day. Larger jobs like full body painting, PPF wraps or engine overhauls take 3 - 10 working days. You'll always get a written timeline up front and progress updates by WhatsApp.</p>
                    </div>
                </details>
                <details class="faq-item">
                    <summary>Do you offer a warranty on your work?</summary>
                    <div class="faq-body">
                        <p>Every repair is backed by our written workmanship warranty. Paint Protection Film carries up to a 10-year manufacturer warranty, ceramic coatings come with 1-, 5- or 9-year warranties, and window tinting includes a lifetime film warranty against bubbling and discolouration.</p>
                    </div>
                </details>
                <details class="faq-item">
                    <summary>Can I get a free quote before you start work?</summary>
                    <div class="faq-body">
                        <p>Always. Send us photos, the car's VIN or model details on WhatsApp at +971 50 430 2507, or fill in the request-a-quote form below, and we'll come back the same day with a no-obligation written estimate. No work is ever started without your written approval.</p>
                    </div>
                </details>
                <details class="faq-item">
                    <summary>Do you only use genuine OEM parts?</summary>
                    <div class="faq-body">
                        <p>By default, yes. We source genuine OEM and OE-equivalent parts through trusted Dubai channels. If you'd prefer aftermarket performance parts (for tuning, exhausts or coilovers) we'll source those too — and we'll always tell you exactly what's going in.</p>
                    </div>
                </details>
                <details class="faq-item">
                    <summary>What payment methods do you accept?</summary>
                    <div class="faq-body">
                        <p>Cash, all major debit and credit cards, and bank transfer. For larger jobs we can split payments across milestones (e.g. 50% deposit, 50% on delivery) and we accept insurance assignments for collision and accident repair work.</p>
                    </div>
                </details>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="container cta-inner">
            <div>
                <h2>Ready to give your car the <span class="gold">Magic Star</span> treatment?</h2>
                <p>Book a no-obligation inspection today. Our team will walk you through exactly what your car needs — and nothing it doesn't.</p>
            </div>
            <a href="#contact" class="btn btn-gold btn-lg">Book Your Appointment</a>
        </div>
    </section>

    <!-- Contact -->
    <section class="section contact" id="contact">
        <div class="container contact-grid">
            <div class="contact-info">
                <span class="eyebrow">Get In Touch</span>
                <h2>Visit the <span class="gold">Workshop</span></h2>
                <p>Drop by, call ahead, or send us a message — we'll get back to you the same day.</p>

                <ul class="contact-list">
                    <li>
                        <span class="contact-icon">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 2a8 8 0 00-8 8c0 5.4 7 11.5 7.3 11.7a1 1 0 001.4 0C13 21.5 20 15.4 20 10a8 8 0 00-8-8zm0 11a3 3 0 110-6 3 3 0 010 6z"/></svg>
                        </span>
                        <div><strong>Address</strong><span>2nd Street, Umm Ramool, Dubai, United Arab Emirates</span></div>
                    </li>
                    <li>
                        <span class="contact-icon">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.05-.24 11.36 11.36 0 003.58.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.58 1 1 0 01-.24 1.05z"/></svg>
                        </span>
                        <div><strong>Phone</strong><span><a href="tel:+971504302507">+971 50 430 2507</a></span></div>
                    </li>
                    <li>
                        <span class="contact-icon">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-8 5-8-5V6l8 5 8-5z"/></svg>
                        </span>
                        <div><strong>Email</strong><span><a href="mailto:Magicstarautorepairing@gmail.com">Magicstarautorepairing@gmail.com</a></span></div>
                    </li>
                    <li>
                        <span class="contact-icon">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm1 11h4v2h-6V7h2z"/></svg>
                        </span>
                        <div><strong>Working Hours</strong><span>Saturday - Thursday<br />8:00 AM - 1:00 PM<br />Lunch Break: 1:00 PM - 2:00 PM<br />2:00 PM - 7:00 PM<br />Friday: Closed</span></div>
                    </li>
                </ul>
            </div>

            <div class="contact-form">
                <h3>Request a Quote</h3>
                <?php magic_star_render_contact_form(); ?>
            </div>
        </div>
    </section>

<?php
get_footer();
