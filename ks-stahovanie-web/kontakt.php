<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Kontakt</h1>
        <p class="page-subtitle">Zavolajte nám alebo napíšte. Sme tu pre vás 7 dní v týždni.</p>
    </div>
</section>

<!-- Contact Hero -->
<section class="section contact-hero">
    <div class="container">
        <div class="contact-hero-content">
            <div class="contact-hero-main">
                <h2 class="contact-hero-title">Potrebujete pomoc so sťahovaním?</h2>
                <p class="contact-hero-text">
                    Kontaktujte nás telefonicky pre nezáväznú cenovú kalkuláciu.
                    Radi zodpovieme všetky vaše otázky.
                </p>

                <!-- Primary Phone CTA -->
                <div class="contact-primary-cta">
                    <a href="tel:<?php echo $company_phone_link; ?>" class="btn-phone-large">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <div class="phone-large-content">
                            <span class="phone-large-label">Zavolajte nám</span>
                            <span class="phone-large-number"><?php echo $company_phone; ?></span>
                        </div>
                    </a>
                </div>

                <p class="contact-availability">
                    Dosažiteľní denne od 7:00 do 20:00 • Víkendy a sviatky po dohode
                </p>
            </div>

            <div class="contact-hero-info">
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div class="contact-info-content">
                        <h3 class="contact-info-label">Email</h3>
                        <a href="mailto:<?php echo $company_email; ?>" class="contact-info-value">
                            <?php echo $company_email; ?>
                        </a>
                        <p class="contact-info-note">Odpoveď do 24 hodín</p>
                    </div>
                </div>

                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div class="contact-info-content">
                        <h3 class="contact-info-label">Adresa</h3>
                        <p class="contact-info-value"><?php echo $company_address; ?></p>
                        <p class="contact-info-note">Hlavné pôsobisko</p>
                    </div>
                </div>

                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div class="contact-info-content">
                        <h3 class="contact-info-label">Pracovné hodiny</h3>
                        <p class="contact-info-value">Po-Pia: 07:00 - 18:00</p>
                        <p class="contact-info-value">So: 08:00 - 14:00</p>
                        <p class="contact-info-note">Nedeľa: Po dohode</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Areas -->
<section class="section service-areas">
    <div class="container">
        <h2 class="section-title">Oblasti pôsobenia</h2>
        <p class="section-subtitle">Poskytujeme služby sťahovania a autodopravy v týchto lokalitách</p>

        <div class="areas-grid">
            <div class="area-card primary">
                <h3 class="area-title">Humenné</h3>
                <p class="area-description">Hlavné pôsobisko našej firmy. Sťahovanie bytov, domov, kancelárií a firiem.</p>
                <ul class="area-services">
                    <li>Sťahovanie bytov a domov</li>
                    <li>Firemné sťahovanie</li>
                    <li>Vypratávanie priestorov</li>
                    <li>Montáž a demontáž nábytku</li>
                </ul>
            </div>

            <div class="area-card">
                <h3 class="area-title">Snina</h3>
                <p class="area-description">Komplexné sťahovacie služby pre Sninu a okolie.</p>
            </div>

            <div class="area-card">
                <h3 class="area-title">Michalovce</h3>
                <p class="area-description">Profesionálne sťahovanie a autodoprava v Michalovciach.</p>
            </div>

            <div class="area-card">
                <h3 class="area-title">Medzilaborce</h3>
                <p class="area-description">Spoľahlivé sťahovacie služby pre Medzilaborce.</p>
            </div>

            <div class="area-card large">
                <h3 class="area-title">Celé Slovensko</h3>
                <p class="area-description">
                    Poskytujeme vnútroštátnu a medzinárodnú prepravu po celom Slovensku a v rámci EU.
                    Bez ohľadu na vzdialenosť vás presťahujeme bezpečne a profesionálne.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="section map-section">
    <div class="container">
        <h2 class="section-title">Kde nás nájdete</h2>
        <p class="section-subtitle">Humenné, východné Slovensko</p>

        <div class="map-container">
            <?php if (!empty($google_api_key)): ?>
                <!-- When Google Maps API key is provided, JavaScript will initialize interactive map here -->
                <div id="googleMap" class="google-map"></div>

                <script>
                // Initialize Google Map when API is loaded
                function initMap() {
                    const humenne = { lat: 48.9336, lng: 21.9118 };
                    const map = new google.maps.Map(document.getElementById('googleMap'), {
                        zoom: 13,
                        center: humenne,
                        mapTypeControl: true,
                        streetViewControl: true,
                        fullscreenControl: true,
                    });

                    const marker = new google.maps.Marker({
                        position: humenne,
                        map: map,
                        title: '<?php echo $company_name; ?>',
                    });

                    const infoWindow = new google.maps.InfoWindow({
                        content: '<div class="map-info-window">' +
                                 '<h3><?php echo $company_name; ?></h3>' +
                                 '<p><?php echo $company_address; ?></p>' +
                                 '<p><a href="tel:<?php echo $company_phone_link; ?>"><?php echo $company_phone; ?></a></p>' +
                                 '</div>'
                    });

                    marker.addListener('click', () => {
                        infoWindow.open(map, marker);
                    });
                }
                </script>
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_api_key; ?>&callback=initMap">
                </script>

            <?php else: ?>
                <!-- Default iframe embed when API key is not provided -->
                <!-- To use interactive Google Maps:
                     1. Get a Google Maps API key from https://console.cloud.google.com/
                     2. Enable Maps JavaScript API and Places API
                     3. Add the API key to includes/config.php ($google_api_key)
                -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41689.38396450534!2d21.88!3d48.93!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ee4b8c1b5d8a9%3A0x400f7d1c6978d60!2sHumenn%C3%A9!5e0!3m2!1ssk!2ssk!4v1234567890"
                    width="100%"
                    height="500"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mapa - K&Š Sťahovanie Humenné"
                    class="map-iframe">
                </iframe>
            <?php endif; ?>
        </div>

        <div class="map-links">
            <a href="https://www.google.com/maps/search/Humenn%C3%A9" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">
                Otvoriť v Google Maps
            </a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section faq-section">
    <div class="container">
        <h2 class="section-title">Často kladené otázky</h2>

        <div class="faq-grid">
            <div class="faq-item">
                <h3 class="faq-question">Ako si objednám sťahovanie?</h3>
                <p class="faq-answer">
                    Jednoducho nás zavoláte na čísle <strong><?php echo $company_phone; ?></strong>.
                    Telefonicky si dohodneme nezáväznú cenovú kalkuláciu a termín obhliadky alebo konzultácie.
                    Následne vám pripravíme presnú cenovú ponuku.
                </p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Koľko stojí sťahovanie?</h3>
                <p class="faq-answer">
                    Cena závisí od viacerých faktorov: veľkosti bytu/domu, množstva vecí, vzdialenosti,
                    prístupnosti (výťah/schodisko), doplnkových služieb (balenie, montáž).
                    Pre nezáväznú cenovú ponuku nás kontaktujte telefonicky.
                </p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Ako dlho trvá sťahovanie?</h3>
                <p class="faq-answer">
                    Priemerné sťahovanie 2-izbového bytu trvá 3-5 hodín. Väčšie byty alebo domy
                    4-8 hodín. Závisí to od množstva vecí, potreby balenia a montáže nábytku.
                    Presný časový odhad vám poskytneme po obhliadke.
                </p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Poskytujete baliaci materiál?</h3>
                <p class="faq-answer">
                    Áno, ponúkame kompletný baliaci servis vrátane dodania kvalitného baliaceho materiálu
                    (krabice, bublinkové fólie, lepiacu pásku). Materiál môžete využiť aj sami,
                    alebo vám poskytneme kompletný baliaci servis.
                </p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Sťahujete aj cez víkend?</h3>
                <p class="faq-answer">
                    Áno, sťahovania realizujeme aj cez víkend a sviatky. Termín si dohodneme podľa
                    vašich potrieb a našich kapacitných možností. Pre sťahovanie cez víkend
                    odporúčame rezerváciu dopredu.
                </p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Sťahujete aj do zahraničia?</h3>
                <p class="faq-answer">
                    Áno, poskytujeme medzinárodné sťahovanie a prepravu v rámci celej EU.
                    Realizujeme sťahovanie zo Slovenska do EU, z EU na Slovensko aj v rámci EU.
                    Pre viac informácií nás kontaktujte.
                </p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Čo keď sa niečo počas sťahovania poškodí?</h3>
                <p class="faq-answer">
                    K vášmu majetku pristupujeme s maximálnou opatrnosťou. Náš tím má dlhoročné
                    skúsenosti a pracuje s profesionálnym vybavením. V prípade akéhokoľvek
                    poškodenia sme zodpovední a situáciu vyriešime.
                </p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Ponúkate aj skladovanie?</h3>
                <p class="faq-answer">
                    V súčasnosti neposkytujeme skladovacie služby. Špecializujeme sa na sťahovanie,
                    autodopravu a doplnkové služby ako balenie, montáž nábytku a upratovanie.
                    V prípade potreby vám môžeme odporučiť spoľahlivé skladovacie priestory.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Máte ďalšie otázky?</h2>
            <p class="cta-text">
                Zavolajte nám a radi vám poskytneme všetky informácie, ktoré potrebujete.
            </p>
            <div class="cta-buttons">
                <a href="tel:<?php echo $company_phone_link; ?>" class="btn btn-primary btn-xl">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <?php echo $company_phone; ?>
                </a>
                <a href="mailto:<?php echo $company_email; ?>" class="btn btn-secondary btn-xl">
                    Napísať email
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
