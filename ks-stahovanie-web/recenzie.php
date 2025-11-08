<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Recenzie</h1>
        <p class="page-subtitle">Prečítajte si, čo hovoria naši spokojní zákazníci z Humenného, Sniny, Michaloviec a Medzilaboriec</p>
    </div>
</section>

<!-- Reviews Stats -->
<section class="section reviews-stats">
    <div class="container">
        <div class="stats-wrapper">
            <div class="stats-main">
                <div class="rating-large">4.9</div>
                <div class="stars-large">
                    ★★★★★
                </div>
                <p class="rating-text">Na základe 47+ recenzií</p>
            </div>
            <div class="stats-bars">
                <div class="rating-bar">
                    <span class="rating-label">5 hviezd</span>
                    <div class="bar-container">
                        <div class="bar-fill" style="width: 89%;"></div>
                    </div>
                    <span class="rating-count">42</span>
                </div>
                <div class="rating-bar">
                    <span class="rating-label">4 hviezdy</span>
                    <div class="bar-container">
                        <div class="bar-fill" style="width: 9%;"></div>
                    </div>
                    <span class="rating-count">4</span>
                </div>
                <div class="rating-bar">
                    <span class="rating-label">3 hviezdy</span>
                    <div class="bar-container">
                        <div class="bar-fill" style="width: 2%;"></div>
                    </div>
                    <span class="rating-count">1</span>
                </div>
                <div class="rating-bar">
                    <span class="rating-label">2 hviezdy</span>
                    <div class="bar-container">
                        <div class="bar-fill" style="width: 0%;"></div>
                    </div>
                    <span class="rating-count">0</span>
                </div>
                <div class="rating-bar">
                    <span class="rating-label">1 hviezda</span>
                    <div class="bar-container">
                        <div class="bar-fill" style="width: 0%;"></div>
                    </div>
                    <span class="rating-count">0</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Grid -->
<section class="section reviews-section">
    <div class="container">
        <div id="reviewsContainer">
            <?php
            /*
             * IMPORTANT: These are placeholder reviews styled to match Google reviews.
             * To display live Google reviews:
             * 1. Add your Google API key to includes/config.php ($google_api_key)
             * 2. Add your Google Place ID to includes/config.php ($google_place_id)
             * 3. The JavaScript in assets/main.js will automatically fetch and display live reviews
             *
             * When API key is not provided, these static placeholder reviews will be displayed.
             */

            // Placeholder reviews (will be replaced by Google API if key is provided)
            if (empty($google_api_key) || empty($google_place_id)):
                $placeholder_reviews = [
                    [
                        'author' => 'Mária K.',
                        'location' => 'Humenné',
                        'rating' => 5,
                        'date' => '2 týždne',
                        'text' => 'Vynikajúce sťahovacie služby! Presťahovali nás z bytu v Humennom do rodinného domu veľmi rýchlo a profesionálne. Pracovníci boli milí, všetko zabalili a pekne umiestnili v novom dome. Cena bola férová. Určite odporúčam!'
                    ],
                    [
                        'author' => 'Ján V.',
                        'location' => 'Snina',
                        'rating' => 5,
                        'date' => '1 mesiac',
                        'text' => 'Potreboval som urgentne presťahovať kanceláriu v Snine. K&Š sťahovanie bolo super - prišli na druhý deň, všetko zbalili, presťahovali a pomontovali nábytok. Žiadne poškodenie, všetko v poriadku. Veľmi som spokojný!'
                    ],
                    [
                        'author' => 'Andrea T.',
                        'location' => 'Michalovce',
                        'rating' => 5,
                        'date' => '3 týždne',
                        'text' => 'Sťahovala som sa z Michaloviec do Košíc. Pán bol veľmi ochotný, všetko mi vysvetlil a dohodli sme sa na výhodnej cene. Chalani prišli načas, všetko profesionálne zabalili a odviezli. V novom byte aj pomontovali nábytok. Top služby!'
                    ],
                    [
                        'author' => 'Peter S.',
                        'location' => 'Medzilaborce',
                        'rating' => 5,
                        'date' => '2 mesiace',
                        'text' => 'Presťahovanie rodinného domu z Medzilaboriec. Veľmi profesionálny prístup, skúsení pracovníci, ktorí vedeli čo robia. Ocenil som hlavne ohľaduplný prístup k nábytu a krehkým veciam. Všetko prešlo bez poškodenia. Odporúčam!'
                    ],
                    [
                        'author' => 'Lucia M.',
                        'location' => 'Humenné',
                        'rating' => 5,
                        'date' => '3 týždne',
                        'text' => 'Vypratávali sme pivnicu a garáž po rodičoch. Firma K&Š nám s tým veľmi pomohla - všetko odviezli a zlikvidovali. Rýchlo, efektívne a za dobrú cenu. Ďakujem!'
                    ],
                    [
                        'author' => 'Michal D.',
                        'location' => 'Snina',
                        'rating' => 5,
                        'date' => '1 mesiac',
                        'text' => 'Potrebovali sme presťahovať klavír z jedného poschodia na druhé v Snine. Volal som viaceré firmy, ale len títo sa toho zhostili. Pracovali veľmi opatrne a klavír presťahovali bez problémov. Veľká vďaka!'
                    ],
                    [
                        'author' => 'Eva R.',
                        'location' => 'Michalovce',
                        'rating' => 4,
                        'date' => '1 mesiac',
                        'text' => 'Celkovo spokojná so sťahovaním z Michaloviec. Prišli načas, pracovali rýchlo. Jeden kus nábytku mal malú škrabancu, ale to nie je až taký problém. Inak super.'
                    ],
                    [
                        'author' => 'Tomáš B.',
                        'location' => 'Humenné',
                        'rating' => 5,
                        'date' => '2 týždne',
                        'text' => 'Firemné sťahovanie v Humennom prebehlo hladko. Dohodli sme sa na víkende, aby sme neprerušili prevádzku. Všetko zrealizovali presne podľa plánu. Veľmi profesionálni ľudia. Ďakujem!'
                    ],
                    [
                        'author' => 'Katarína H.',
                        'location' => 'Snina',
                        'rating' => 5,
                        'date' => '3 mesiace',
                        'text' => 'Sťahovali sme sa zo Sniny do Prešova. Dlhá trasa, veľa vecí, ale všetko prebehlo bez problémov. Ocenila som hlavne baliaci servis - všetko pekne zabalili a označili. V novom byte sme sa rýchlo zorientovali.'
                    ],
                    [
                        'author' => 'Vladimír K.',
                        'location' => 'Humenné',
                        'rating' => 5,
                        'date' => '1 týždeň',
                        'text' => 'Montáž nábytku z IKEA. Kúpil som veľa vecí a nemal som čas to montovať. Chalani prišli, rýchlo všetko zmontovali a aj rady dali. Super servis, určite budem volať znova!'
                    ]
                ];
            ?>

            <div class="reviews-grid">
                <?php foreach ($placeholder_reviews as $review): ?>
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-avatar">
                            <?php echo mb_substr($review['author'], 0, 1); ?>
                        </div>
                        <div class="review-author-info">
                            <h3 class="review-author"><?php echo htmlspecialchars($review['author']); ?></h3>
                            <p class="review-location"><?php echo htmlspecialchars($review['location']); ?></p>
                        </div>
                    </div>
                    <div class="review-rating">
                        <div class="stars">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <span class="star <?php echo $i < $review['rating'] ? 'filled' : ''; ?>">★</span>
                            <?php endfor; ?>
                        </div>
                        <span class="review-date">Pred <?php echo $review['date']; ?></span>
                    </div>
                    <p class="review-text"><?php echo htmlspecialchars($review['text']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="reviews-note">
                <p>
                    <strong>Poznámka:</strong> Toto sú vzorové recenzie. Pre zobrazenie skutočných Google recenzií
                    pridajte Google API kľúč a Place ID do konfiguračného súboru.
                </p>
            </div>

            <?php else: ?>
            <!-- This section will be populated by JavaScript when Google API is configured -->
            <div class="reviews-grid" id="googleReviews">
                <div class="reviews-loading">
                    <p>Načítavajú sa recenzie z Google...</p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Review CTA -->
<section class="section review-cta-section">
    <div class="container">
        <div class="review-cta-content">
            <h2 class="section-title">Boli ste s nami spokojní?</h2>
            <p class="section-text">
                Zanechajte nám recenziu a pomôžte ostatným zákazníkom s rozhodnutím.
                Vaša spätná väzba je pre nás veľmi dôležitá!
            </p>
            <div class="review-cta-buttons">
                <a href="https://www.google.com/search?q=K%26%C5%A0+s%C5%A5ahovanie+autodoprava" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg">
                    Napísať recenziu na Google
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Trust Section -->
<section class="section trust-highlights">
    <div class="container">
        <h2 class="section-title">Prečo nám zákazníci dôverujú</h2>
        <div class="trust-grid">
            <div class="trust-highlight">
                <div class="trust-icon-large">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"/>
                        <path d="m9 11 2 2 4-4"/>
                    </svg>
                </div>
                <h3 class="trust-highlight-title">Profesionalita a spoľahlivosť</h3>
                <p class="trust-highlight-text">
                    Každé sťahovanie realizujeme s maximálnou zodpovednosťou a profesionálnym prístupom.
                </p>
            </div>

            <div class="trust-highlight">
                <div class="trust-icon-large">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="8" r="7"></circle>
                        <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                    </svg>
                </div>
                <h3 class="trust-highlight-title">Dlhoročné skúsenosti</h3>
                <p class="trust-highlight-text">
                    Desiatky úspešne zrealizovaných sťahovaní v Humennom a po celom Slovensku.
                </p>
            </div>

            <div class="trust-highlight">
                <div class="trust-icon-large">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <h3 class="trust-highlight-title">Individuálny prístup</h3>
                <p class="trust-highlight-text">
                    Každému zákazníkovi venujeme plnú pozornosť a prispôsobujeme sa jeho potrebám.
                </p>
            </div>

            <div class="trust-highlight">
                <div class="trust-icon-large">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <h3 class="trust-highlight-title">Rýchlosť a efektivita</h3>
                <p class="trust-highlight-text">
                    Sťahovanie realizujeme v čo najkratšom čase bez zbytočného zdržiavania.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Pripojte sa k našim spokojeným zákazníkom</h2>
            <p class="cta-text">
                Zavolajte nám a presvedčte sa sami o našich kvalitných službách.
            </p>
            <div class="cta-buttons">
                <a href="tel:<?php echo $company_phone_link; ?>" class="btn btn-primary btn-xl">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <?php echo $company_phone; ?>
                </a>
                <a href="kontakt.php" class="btn btn-secondary btn-xl">Kontaktujte nás</a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
