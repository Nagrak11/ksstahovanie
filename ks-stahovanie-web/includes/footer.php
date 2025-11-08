    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <!-- Company Info Column -->
                <div class="footer-col">
                    <h3 class="footer-heading"><?php echo $company_name; ?></h3>
                    <p class="footer-text">
                        Profesionálne sťahovacie služby a autodoprava z Humenného.
                        Ponúkame komplexné riešenia pre sťahovanie bytov, domov, kancelárií
                        a firiem po celom Slovensku.
                    </p>
                    <div class="footer-contact">
                        <p>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <a href="tel:<?php echo $company_phone_link; ?>"><?php echo $company_phone; ?></a>
                        </p>
                        <p>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <a href="mailto:<?php echo $company_email; ?>"><?php echo $company_email; ?></a>
                        </p>
                        <p>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <?php echo $company_address; ?>
                        </p>
                    </div>
                </div>

                <!-- Quick Links Column -->
                <div class="footer-col">
                    <h3 class="footer-heading">Navigácia</h3>
                    <ul class="footer-links">
                        <?php foreach ($nav_menu as $page => $label): ?>
                        <li><a href="<?php echo $page; ?>"><?php echo $label; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Services Column -->
                <div class="footer-col">
                    <h3 class="footer-heading">Naše služby</h3>
                    <ul class="footer-links">
                        <li><a href="sluzby.php#stahovanie-bytov">Sťahovanie bytov a domov</a></li>
                        <li><a href="sluzby.php#firemne">Firemné sťahovanie</a></li>
                        <li><a href="sluzby.php#autodoprava">Autodoprava a preprava</a></li>
                        <li><a href="sluzby.php#vypratavanie">Vypratávanie bytov</a></li>
                        <li><a href="sluzby.php#montaz">Montáž a demontáž nábytku</a></li>
                        <li><a href="sluzby.php#upratovanie">Upratovanie a tepovanie</a></li>
                    </ul>
                </div>

                <!-- Service Areas Column -->
                <div class="footer-col">
                    <h3 class="footer-heading">Oblasti pôsobenia</h3>
                    <ul class="footer-links">
                        <li><a href="index.php">Sťahovanie Humenné</a></li>
                        <li><a href="index.php">Sťahovanie Snina</a></li>
                        <li><a href="index.php">Sťahovanie Michalovce</a></li>
                        <li><a href="index.php">Sťahovanie Medzilaborce</a></li>
                        <li><a href="index.php">Celé Slovensko</a></li>
                    </ul>
                </div>
            </div>

            <!-- SEO Footer Text -->
            <div class="footer-seo">
                <h4>Sťahovanie Humenné, Snina, Michalovce a Medzilaborce</h4>
                <p>
                    <strong>K&Š sťahovanie autodoprava s.r.o.</strong> je profesionálna sťahovacia firma
                    s hlavným pôsobením v meste <strong>Humenné</strong> a okolí. Poskytujeme komplexné služby
                    <strong>sťahovania bytov, rodinných domov, kancelárií a firiem</strong> v regiónoch
                    <strong>Snina, Michalovce, Medzilaborce</strong> a po celom Slovensku. Naša autodoprava
                    zabezpečí bezpečnú prepravu vášho majetku kamkoľvek potrebujete. Ponúkame aj doplnkové služby
                    ako vypratávanie bytov, montáž a demontáž nábytku, upratovanie a tepovanie. Pre nezáväznú
                    cenovú kalkuláciu nás kontaktujte na telefónnom čísle <strong><?php echo $company_phone; ?></strong>.
                </p>
            </div>

            <!-- Trust Badges -->
            <div class="footer-trust">
                <?php foreach ($trust_badges as $badge): ?>
                <span class="trust-badge">✓ <?php echo $badge; ?></span>
                <?php endforeach; ?>
            </div>

            <!-- Copyright -->
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php echo $company_name; ?>. Všetky práva vyhradené.</p>
            </div>
        </div>
    </footer>

    <!-- JSON-LD Structured Data for LocalBusiness -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "@id": "<?php echo $base_url; ?>",
        "name": "<?php echo $company_name; ?>",
        "image": "<?php echo $base_url; ?>/assets/images/logo.png",
        "description": "<?php echo $site_description; ?>",
        "telephone": "<?php echo $company_phone_link; ?>",
        "email": "<?php echo $company_email; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "",
            "addressLocality": "Humenné",
            "addressRegion": "Prešovský kraj",
            "postalCode": "",
            "addressCountry": "SK"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "48.9336",
            "longitude": "21.9118"
        },
        "url": "<?php echo $base_url; ?>",
        "priceRange": "€€",
        "areaServed": [
            <?php foreach ($service_areas as $index => $area): ?>
            {
                "@type": "Place",
                "name": "<?php echo $area; ?>"
            }<?php if ($index < count($service_areas) - 1): ?>,<?php endif; ?>
            <?php endforeach; ?>
        ],
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "07:00",
                "closes": "18:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Saturday",
                "opens": "08:00",
                "closes": "14:00"
            }
        ],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "47"
        }
    }
    </script>

    <!-- JavaScript -->
    <script src="assets/main.js"></script>
</body>
</html>
