<?php
if (!isset($company_name)) {
    require_once 'config.php';
}
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Web App Meta Tags -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#0f5aa6">
    <meta name="format-detection" content="telephone=yes">

    <!-- SEO Meta Tags -->
    <title><?php echo getPageTitle($current_page); ?></title>
    <meta name="description" content="<?php echo getPageDescription($current_page); ?>">
    <meta name="keywords" content="sťahovanie Humenné, sťahovanie Snina, sťahovanie Michalovce, sťahovanie Medzilaborce, autodoprava Humenné, preprava nábytku, vypratávanie bytov, montáž nábytku">
    <meta name="author" content="<?php echo $company_name; ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo getPageTitle($current_page); ?>">
    <meta property="og:description" content="<?php echo getPageDescription($current_page); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $base_url . '/' . $current_page; ?>">
    <meta property="og:locale" content="sk_SK">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/logo.png">

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/style.css">

    <!-- Structured Data - Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "<?php echo $company_name; ?>",
        "image": "<?php echo $base_url; ?>/assets/images/logo.png",
        "telephone": "<?php echo $company_phone_link; ?>",
        "email": "<?php echo $company_email; ?>",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Humenné",
            "addressCountry": "SK"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Humenné"
            },
            {
                "@type": "City",
                "name": "Snina"
            },
            {
                "@type": "City",
                "name": "Michalovce"
            },
            {
                "@type": "City",
                "name": "Medzilaborce"
            },
            {
                "@type": "Country",
                "name": "Slovakia"
            }
        ],
        "priceRange": "€€",
        "url": "<?php echo $base_url; ?>",
        "sameAs": [
            <?php if ($facebook_url): ?>"<?php echo $facebook_url; ?>",<?php endif; ?>
            <?php if ($instagram_url): ?>"<?php echo $instagram_url; ?>"<?php endif; ?>
        ]
    }
    </script>
</head>
<body>
    <!-- Top Info Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-bar-text">
                    <span class="top-bar-highlight">Sťahovacia služba z Humenného</span> — pôsobíme po celom Slovensku
                </div>
                <div class="top-bar-contact">
                    <a href="tel:<?php echo $company_phone_link; ?>" class="top-bar-phone">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <?php echo $company_phone; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header / Navigation -->
    <header class="main-header" id="mainHeader">
        <div class="container">
            <nav class="navbar" role="navigation" aria-label="Main navigation">
                <div class="nav-brand">
                    <a href="index.php" class="logo-link">
                        <img src="assets/images/logo.png" alt="<?php echo $company_name; ?> - Sťahovanie Humenné" class="logo" width="180" height="60">
                    </a>
                </div>

                <!-- Mobile Menu Toggle -->
                <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation" aria-expanded="false">
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                </button>

                <!-- Navigation Menu -->
                <ul class="nav-menu" id="navMenu">
                    <?php foreach ($nav_menu as $page => $label): ?>
                    <li class="nav-item">
                        <a href="<?php echo $page; ?>" class="nav-link <?php echo isActive($page); ?>">
                            <?php echo $label; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <!-- CTA Phone Button -->
                <div class="nav-cta">
                    <a href="tel:<?php echo $company_phone_link; ?>" class="btn btn-primary btn-phone">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span class="btn-phone-text"><?php echo $company_phone; ?></span>
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Floating Call Button (Mobile) -->
    <a href="tel:<?php echo $company_phone_link; ?>" class="floating-call-btn" aria-label="Zavolať teraz">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
        </svg>
    </a>

    <!-- Main Content -->
    <main class="main-content">
