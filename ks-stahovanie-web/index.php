<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>

<!-- Hero Slider -->
<section class="hero-slider" id="heroSlider">
    <div class="slider-wrapper">
        <!-- Slide 1 -->
        <div class="slide active">
            <img src="assets/images/slider/slide1.jpg" alt="Sťahovanie Humenné - Profesionálne sťahovacie služby" loading="eager">
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <div class="container">
                    <h1 class="slide-title">Sťahovanie Humenné, Snina, Michalovce, Medzilaborce</h1>
                    <p class="slide-subtitle">Rýchlo a spoľahlivo po celom Slovensku</p>
                    <div class="slide-cta">
                        <a href="tel:<?php echo $company_phone_link; ?>" class="btn btn-primary btn-lg">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <?php echo $company_phone; ?>
                        </a>
                        <a href="sluzby.php" class="btn btn-secondary btn-lg">Naše služby</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide">
            <img src="assets/images/slider/slide2.jpg" alt="Autodoprava Humenné - Preprava nábytku a zariadenia" loading="lazy">
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <div class="container">
                    <h2 class="slide-title">Autodoprava a preprava po celom Slovensku</h2>
                    <p class="slide-subtitle">Moderný vozový park • Skúsení pracovníci • Bezpečná preprava</p>
                    <div class="slide-cta">
                        <a href="tel:<?php echo $company_phone_link; ?>" class="btn btn-primary btn-lg">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            Zavolať teraz
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide">
            <img src="assets/images/slider/slide3.jpg" alt="Sťahovanie Snina a Michalovce - Komplexné sťahovacie služby" loading="lazy">
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <div class="container">
                    <h2 class="slide-title">Komplexné služby sťahovania</h2>
                    <p class="slide-subtitle">Snina • Michalovce • Medzilaborce • Celé východné Slovensko</p>
                    <div class="slide-cta">
                        <a href="kontakt.php" class="btn btn-primary btn-lg">Kontaktujte nás</a>
                        <a href="prace.php" class="btn btn-secondary btn-lg">Naše práce</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="slide">
            <img src="assets/images/slider/slide4.jpg" alt="Firemné sťahovanie Humenné - Presťahovanie kancelárií a firiem" loading="lazy">
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <div class="container">
                    <h2 class="slide-title">Firemné sťahovanie a presťahovanie kancelárií</h2>
                    <p class="slide-subtitle">Rýchlo, profesionálne a bez prerušenia prevádzky</p>
                    <div class="slide-cta">
                        <a href="tel:<?php echo $company_phone_link; ?>" class="btn btn-primary btn-lg">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <?php echo $company_phone; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Controls -->
    <button class="slider-control prev" id="sliderPrev" aria-label="Predchádzajúca snímka">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
    </button>
    <button class="slider-control next" id="sliderNext" aria-label="Nasledujúca snímka">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
    </button>

    <!-- Slider Indicators -->
    <div class="slider-indicators" id="sliderIndicators"></div>
</section>

<!-- Intro Section -->
<section class="section intro-section">
    <div class="container">
        <div class="intro-content">
            <h2 class="section-title">Profesionálne sťahovanie z Humenného po celom Slovensku</h2>
            <p class="intro-text">
                <strong>K&Š sťahovanie autodoprava s.r.o.</strong> je váš spoľahlivý partner pre sťahovanie
                v regiónoch <strong>Humenné, Snina, Michalovce a Medzilaborce</strong>. Ponúkame komplexné
                služby sťahovania bytov, domov, kancelárií a firiem s celoslovenskou pôsobnosťou.
                S nami si sťahovanie užijete - presťahujeme vás <strong>profesionálne, rýchlo a lacno</strong>.
            </p>
        </div>
    </div>
</section>

<!-- Trust Indicators -->
<section class="trust-section">
    <div class="container">
        <div class="trust-grid">
            <div class="trust-item">
                <div class="trust-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"/>
                        <path d="m9 11 2 2 4-4"/>
                    </svg>
                </div>
                <h3 class="trust-title">Overení profesionáli</h3>
                <p class="trust-text">Skúsení pracovníci s dlhoročnými skúsenosťami</p>
            </div>
            <div class="trust-item">
                <div class="trust-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="1" y="3" width="15" height="13"></rect>
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                        <circle cx="5.5" cy="18.5" r="2.5"></circle>
                        <circle cx="18.5" cy="18.5" r="2.5"></circle>
                    </svg>
                </div>
                <h3 class="trust-title">Moderný vozový park</h3>
                <p class="trust-text">Dodávky a nákladné vozidlá pre každú veľkosť sťahovania</p>
            </div>
            <div class="trust-item">
                <div class="trust-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </div>
                <h3 class="trust-title">Rýchle nacenenie</h3>
                <p class="trust-text">Nezáväzná cenová ponuka po telefóne</p>
            </div>
            <div class="trust-item">
                <div class="trust-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                </div>
                <h3 class="trust-title">Spokojní zákazníci</h3>
                <p class="trust-text">Desiatky pozitívnych recenzií</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Highlight -->
<section class="section services-highlight">
    <div class="container">
        <h2 class="section-title">Naše služby</h2>
        <p class="section-subtitle">Komplexné riešenia pre vaše sťahovanie</p>

        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                </div>
                <h3 class="service-title">Sťahovanie bytov a domov</h3>
                <p class="service-description">
                    Kompletné sťahovanie bytov a rodinných domov v Humennom, Snine,
                    Michalovciach a Medzilaborciach.
                </p>
                <a href="sluzby.php#stahovanie-bytov" class="service-link">Viac informácií →</a>
            </div>

            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                    </svg>
                </div>
                <h3 class="service-title">Firemné sťahovanie</h3>
                <p class="service-description">
                    Presťahovanie kancelárií, firiem a archívov bez prerušenia prevádzky.
                </p>
                <a href="sluzby.php#firemne" class="service-link">Viac informácií →</a>
            </div>

            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="1" y="3" width="15" height="13"></rect>
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                        <circle cx="5.5" cy="18.5" r="2.5"></circle>
                        <circle cx="18.5" cy="18.5" r="2.5"></circle>
                    </svg>
                </div>
                <h3 class="service-title">Autodoprava a preprava</h3>
                <p class="service-description">
                    Vnútroštátna a medzinárodná preprava nábytku a zariadenia.
                </p>
                <a href="sluzby.php#autodoprava" class="service-link">Viac informácií →</a>
            </div>

            <!-- Service 4 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    </svg>
                </div>
                <h3 class="service-title">Vypratávanie bytov</h3>
                <p class="service-description">
                    Vypratávanie bytov, domov, pivníc a garáží s likvidáciou odpadu.
                </p>
                <a href="sluzby.php#vypratavanie" class="service-link">Viac informácií →</a>
            </div>

            <!-- Service 5 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                    </svg>
                </div>
                <h3 class="service-title">Montáž nábytku</h3>
                <p class="service-description">
                    Profesionálna montáž a demontáž nábytku pri sťahovaní.
                </p>
                <a href="sluzby.php#montaz" class="service-link">Viac informácií →</a>
            </div>

            <!-- Service 6 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 16v-4"></path>
                        <path d="M12 8h.01"></path>
                    </svg>
                </div>
                <h3 class="service-title">Upratovanie a tepovanie</h3>
                <p class="service-description">
                    Upratovacie služby a tepovanie po sťahovaní profesionálnou technikou.
                </p>
                <a href="sluzby.php#upratovanie" class="service-link">Viac informácií →</a>
            </div>
        </div>

        <div class="section-cta">
            <a href="sluzby.php" class="btn btn-primary btn-lg">Všetky služby</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Potrebujete pomoc so sťahovaním?</h2>
            <p class="cta-text">
                Zavolajte nám pre nezáväznú cenovú kalkuláciu. Sme tu pre vás 7 dní v týždni.
            </p>
            <div class="cta-buttons">
                <a href="tel:<?php echo $company_phone_link; ?>" class="btn btn-primary btn-xl">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <?php echo $company_phone; ?>
                </a>
                <a href="kontakt.php" class="btn btn-secondary btn-xl">Kontaktný formulár</a>
            </div>
        </div>
    </div>
</section>

<!-- Map Preview -->
<section class="map-preview-section">
    <div class="container">
        <h2 class="section-title">Naša poloha</h2>
        <p class="section-subtitle">Hlavné pôsobisko: Humenné • Obsluha celého Slovenska</p>
        <div class="map-preview">
            <!-- Simple iframe embed - can be replaced with Maps API when key is provided -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41689.38396450534!2d21.88!3d48.93!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ee4b8c1b5d8a9%3A0x400f7d1c6978d60!2sHumenn%C3%A9!5e0!3m2!1ssk!2ssk!4v1234567890"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Mapa - K&Š Sťahovanie Humenné">
            </iframe>
        </div>
        <div class="map-cta">
            <a href="kontakt.php" class="btn btn-primary">Zobraziť úplné kontaktné informácie</a>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
