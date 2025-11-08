<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Naše práce</h1>
        <p class="page-subtitle">Fotografie z úspešne zrealizovaných sťahovaní v Humennom a po celom Slovensku</p>
    </div>
</section>

<!-- Gallery Introduction -->
<section class="section gallery-intro">
    <div class="container">
        <p class="intro-text">
            Pozrite si ukážky našich zrealizovaných sťahovaní v <strong>Humennom, Snine, Michalovciach
            a Medzilaborciach</strong>. Každá fotografia dokumentuje našu prácu s profesionálnym prístupom,
            modernou technikou a ohľaduplným zaobchádzaním s vašim majetkom.
        </p>
    </div>
</section>

<?php
// Gallery images with captions containing local keywords
$gallery_images = [
    [
        'file' => 'zima-nakladanie.jpg',
        'alt' => 'Sťahovanie Humenné - nakladanie v zimných podmienkach',
        'caption' => 'Sťahovanie Humenné — nakladanie nábytku v zimných podmienkach'
    ],
    [
        'file' => 'dodavka-nalozena.jpg',
        'alt' => 'Sťahovanie Snina - naložená dodávka pripravená na prepravu',
        'caption' => 'Sťahovanie Snina — profesionálne naložená dodávka pripravená na odvoz'
    ],
    [
        'file' => 'schody-panel.jpg',
        'alt' => 'Sťahovanie Michalovce - vynášanie nábytku po schodoch',
        'caption' => 'Sťahovanie Michalovce — vynášanie po schodoch v panelovom dome'
    ],
    [
        'file' => 'cervena-naklad.jpg',
        'alt' => 'Autodoprava Humenné - nakladanie do červeného vozidla',
        'caption' => 'Autodoprava Humenné — nakladanie do nášho červeného vozidla'
    ],
    [
        'file' => 'nalozene-2.jpg',
        'alt' => 'Preprava nábytku - kompletne naložené vozidlo',
        'caption' => 'Preprava nábytku — kompletne a bezpečne naložené vozidlo'
    ],
    [
        'file' => 'montaz-nabytku.jpg',
        'alt' => 'Montáž nábytku Humenné - zmontovaný nábytok v novom byte',
        'caption' => 'Montáž nábytku Humenné — zmontovaný nábytok v novom byte zákazníka'
    ],
    [
        'file' => 'okno-schody.jpg',
        'alt' => 'Sťahovanie Medzilaborce - vynášanie veľkých panelov',
        'caption' => 'Sťahovanie Medzilaborce — vynášanie veľkých panelov cez okno'
    ],
    [
        'file' => 'interier-nabytok.jpg',
        'alt' => 'Sťahovanie bytov Humenné - zabalený nábytok v miestnosti',
        'caption' => 'Sťahovanie bytov Humenné — profesionálne zabalený nábytok pripravený na prepravu'
    ]
];
?>

<!-- Gallery Grid -->
<section class="section gallery-section">
    <div class="container">
        <div class="gallery-grid" id="galleryGrid">
            <?php foreach ($gallery_images as $index => $image): ?>
            <div class="gallery-item" data-index="<?php echo $index; ?>">
                <img
                    src="assets/images/prace/<?php echo $image['file']; ?>"
                    alt="<?php echo $image['alt']; ?>"
                    loading="lazy"
                    class="gallery-img"
                >
                <div class="gallery-overlay">
                    <button class="gallery-zoom" aria-label="Zväčšiť obrázok">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.35-4.35"></path>
                            <line x1="11" y1="8" x2="11" y2="14"></line>
                            <line x1="8" y1="11" x2="14" y2="11"></line>
                        </svg>
                    </button>
                </div>
                <p class="gallery-caption"><?php echo $image['caption']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Galéria obrázkov">
    <button class="lightbox-close" id="lightboxClose" aria-label="Zavrieť galériu">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
    </button>

    <button class="lightbox-nav lightbox-prev" id="lightboxPrev" aria-label="Predchádzajúci obrázok">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
    </button>

    <div class="lightbox-content">
        <img src="" alt="" id="lightboxImg" class="lightbox-img">
        <p class="lightbox-caption" id="lightboxCaption"></p>
        <div class="lightbox-counter" id="lightboxCounter"></div>
    </div>

    <button class="lightbox-nav lightbox-next" id="lightboxNext" aria-label="Nasledujúci obrázok">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
    </button>
</div>

<!-- Lightbox data for JavaScript -->
<script>
// Gallery images data for lightbox
window.galleryData = <?php echo json_encode($gallery_images, JSON_HEX_TAG | JSON_HEX_AMP); ?>;
</script>

<!-- Our Fleet -->
<section class="section fleet-section">
    <div class="container">
        <h2 class="section-title">Náš vozový park</h2>
        <p class="section-subtitle">Moderné a spoľahlivé vozidlá pre každý typ sťahovania</p>

        <div class="fleet-grid">
            <!-- Vehicle 1 -->
            <div class="fleet-card">
                <img
                    src="assets/images/vozidla/cervena-1.jpg"
                    alt="Sťahovacie auto Humenné - červené vozidlo"
                    loading="lazy"
                    class="fleet-img"
                >
                <div class="fleet-info">
                    <h3 class="fleet-title">Červená dodávka</h3>
                    <p class="fleet-description">
                        Naša univerzálna dodávka ideálna pre sťahovanie bytov v Humennom a okolí.
                        Dostatočná kapacita pre väčšinu bežných sťahovaní.
                    </p>
                </div>
            </div>

            <!-- Vehicle 2 -->
            <div class="fleet-card">
                <img
                    src="assets/images/vozidla/cervena-2.jpg"
                    alt="Autodoprava Snina - prepravné vozidlo"
                    loading="lazy"
                    class="fleet-img"
                >
                <div class="fleet-info">
                    <h3 class="fleet-title">Sťahovacie vozidlo</h3>
                    <p class="fleet-description">
                        Priestranné vozidlo s vysokou nosnosťou pre presťahovanie domov a väčších bytov.
                        Vhodné pre autodopravu po celom Slovensku.
                    </p>
                </div>
            </div>

            <!-- Vehicle 3 -->
            <div class="fleet-card">
                <img
                    src="assets/images/vozidla/biela-kontajner.jpg"
                    alt="Preprava nábytku - vozidlo s kontajnerom"
                    loading="lazy"
                    class="fleet-img"
                >
                <div class="fleet-info">
                    <h3 class="fleet-title">7,5-tonové auto s čelom</h3>
                    <p class="fleet-description">
                        Naše najväčšie vozidlo určené pre firemné sťahovanie, presun skladov a prepravy
                        veľkých množstiev nábytku a zariadenia.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section process-section">
    <div class="container">
        <h2 class="section-title">Ako prebieha sťahovanie</h2>
        <div class="process-grid">
            <div class="process-step">
                <div class="process-number">1</div>
                <h3 class="process-title">Kontakt a konzultácia</h3>
                <p class="process-description">
                    Zavoláte nám a dohodneme si nezáväznú konzultáciu. Zistíme vaše potreby
                    a poskytneme orientačnú cenovú kalkuláciu.
                </p>
            </div>

            <div class="process-step">
                <div class="process-number">2</div>
                <h3 class="process-title">Obhliadka a cenová ponuka</h3>
                <p class="process-description">
                    Vykonáme obhliadku priestorov (alebo konzultáciu po telefóne) a pripravíme
                    presnú cenovú ponuku.
                </p>
            </div>

            <div class="process-step">
                <div class="process-number">3</div>
                <h3 class="process-title">Plánovanie a príprava</h3>
                <p class="process-description">
                    Dohodneme termín sťahovania, pripravíme baliaci materiál a naplánujeme
                    všetky detaily presťahovania.
                </p>
            </div>

            <div class="process-step">
                <div class="process-number">4</div>
                <h3 class="process-title">Realizácia sťahovania</h3>
                <p class="process-description">
                    Naši pracovníci prídu v dohodnutý termín, zabalia, demontujú, naloži
                    a prevezú váš majetok na nové miesto.
                </p>
            </div>

            <div class="process-step">
                <div class="process-number">5</div>
                <h3 class="process-title">Montáž a usporiadanie</h3>
                <p class="process-description">
                    Vykládka, montáž a rozmiestenie nábytku podľa vašich požiadaviek v novom
                    byte alebo dome.
                </p>
            </div>

            <div class="process-step">
                <div class="process-number">6</div>
                <h3 class="process-title">Upratovanie (voliteľné)</h3>
                <p class="process-description">
                    Na želanie vykonáme upratovanie priestorov po sťahovaní alebo tepovanie nábytku.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Páčia sa vám naše práce?</h2>
            <p class="cta-text">
                Chcete takisto profesionálne sťahovanie? Zavolajte nám pre nezáväznú cenovú kalkuláciu.
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
