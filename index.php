<?php
// Load constants and configuration
require_once 'constants.php';
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">
    <meta name="keywords" content="<?php echo SITE_KEYWORDS; ?>">
    <title><?php echo SITE_TITLE; ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ctext y='.9em' font-size='90'%3E=š%3C/text%3E%3C/svg%3E">

    <!-- Styles -->
    <link rel="stylesheet" href="styles.css">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo SITE_TITLE; ?>">
    <meta property="og:description" content="<?php echo SITE_DESCRIPTION; ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo SITE_TITLE; ?>">
    <meta name="twitter:description" content="<?php echo SITE_DESCRIPTION; ?>">
</head>
<body>
    <!-- Header / Navigation -->
    <?php include 'header.php'; ?>

    <!-- Hero Slider -->
    <?php include 'hero_slider.php'; ?>

    <!-- Home Section -->
    <?php include 'home.php'; ?>

    <!-- About Section -->
    <?php include 'about.php'; ?>

    <!-- Services Section -->
    <?php include 'services.php'; ?>

    <!-- Gallery Section -->
    <?php include 'gallery.php'; ?>

    <!-- Reviews Section -->
    <?php include 'reviews.php'; ?>

    <!-- Contact Section -->
    <?php include 'contact.php'; ?>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Floating Call Button -->
    <?php include 'floating_call_button.php'; ?>

    <!-- Job Offer Popup -->
    <?php include 'job_offer_popup.php'; ?>

    <!-- JavaScript -->
    <script src="main.js"></script>
</body>
</html>
