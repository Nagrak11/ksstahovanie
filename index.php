<?php
/**
 * K&S Stahovanie - Main Entry Point
 * Professional moving and transport company website
 */

// Define access constant
define('SITE_ACCESS', true);

// Load configuration
require_once __DIR__ . '/constants.php';

// Set proper headers
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo htmlspecialchars(SITE_DESCRIPTION); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars(SITE_KEYWORDS); ?>">
    <meta name="author" content="<?php echo htmlspecialchars(COMPANY_NAME); ?>">
    <meta name="robots" content="index, follow">

    <title><?php echo htmlspecialchars(SITE_TITLE); ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ctext y='.9em' font-size='90'%3E&#128666;%3C/text%3E%3C/svg%3E">

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://images.unsplash.com">
    <link rel="dns-prefetch" href="https://images.unsplash.com">

    <!-- Styles -->
    <link rel="stylesheet" href="styles.css">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars(SITE_TITLE); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars(SITE_DESCRIPTION); ?>">
    <meta property="og:locale" content="sk_SK">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars(SITE_TITLE); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars(SITE_DESCRIPTION); ?>">

    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "<?php echo htmlspecialchars(COMPANY_NAME); ?>",
        "telephone": "<?php echo htmlspecialchars(COMPANY_PHONE); ?>",
        "email": "<?php echo htmlspecialchars(COMPANY_EMAIL); ?>",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "<?php echo htmlspecialchars(COMPANY_ADDRESS); ?>",
            "addressCountry": "SK"
        }
    }
    </script>
</head>
<body>
    <!-- Header / Navigation -->
    <?php include __DIR__ . '/header.php'; ?>

    <!-- Hero Slider -->
    <?php include __DIR__ . '/hero_slider.php'; ?>

    <!-- Home Section -->
    <?php include __DIR__ . '/home.php'; ?>

    <!-- About Section -->
    <?php include __DIR__ . '/about.php'; ?>

    <!-- Services Section -->
    <?php include __DIR__ . '/services.php'; ?>

    <!-- Gallery Section -->
    <?php include __DIR__ . '/gallery.php'; ?>

    <!-- Reviews Section -->
    <?php include __DIR__ . '/reviews.php'; ?>

    <!-- Contact Section -->
    <?php include __DIR__ . '/contact.php'; ?>

    <!-- Footer -->
    <?php include __DIR__ . '/footer.php'; ?>

    <!-- Floating Call Button -->
    <?php include __DIR__ . '/floating_call_button.php'; ?>

    <!-- Job Offer Popup -->
    <?php include __DIR__ . '/job_offer_popup.php'; ?>

    <!-- JavaScript -->
    <script src="main.js" defer></script>
</body>
</html>
