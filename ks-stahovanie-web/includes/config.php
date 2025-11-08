<?php
/**
 * K&Š Sťahovanie - Configuration File
 *
 * This file contains all configurable settings for the website.
 * Edit these values to customize your site.
 */

// Company Information
$company_name = "K&Š sťahovanie autodoprava s.r.o.";
$company_phone = "0907 090 155";
$company_phone_link = "+421907090155"; // For tel: links
$company_email = "ksstahovanie@gmail.com";
$company_address = "Humenné, Slovensko";

// SEO Settings
$base_url = "https://www.ksstahovanie.sk"; // Change this to your actual domain
$site_title = "K&Š Sťahovanie Humenné";
$site_description = "Profesionálne sťahovanie a autodoprava z Humenného. Snina, Michalovce, Medzilaborce a celé Slovensko.";

// Google Services Configuration
// To enable Google Maps and Reviews, add your API key below:
$google_api_key = ""; // Add your Google API key here (Maps JavaScript API + Places API)
$google_place_id = ""; // Add your Google Place ID here for reviews

// Business Hours (optional - currently not displayed but available for future use)
$business_hours = [
    'Pondelok - Piatok' => '07:00 - 18:00',
    'Sobota' => '08:00 - 14:00',
    'Nedeľa' => 'Po dohode'
];

// Service Areas (for SEO)
$service_areas = [
    "Humenné",
    "Snina",
    "Michalovce",
    "Medzilaborce",
    "Východné Slovensko",
    "Celé Slovensko"
];

// Social Media Links (optional - add when available)
$facebook_url = "";
$instagram_url = "";

// Site Settings
$items_per_page = 12; // For gallery pagination if needed
$slider_interval = 4000; // Slider autoplay interval in milliseconds

// Trust Badges Text
$trust_badges = [
    "Rýchle nacenenie po telefóne",
    "Pracujeme po celom Slovensku",
    "Overené recenzie"
];

// Current Page Detection
$current_page = basename($_SERVER['PHP_SELF']);

// Navigation Menu
$nav_menu = [
    'index.php' => 'Domov',
    'onas.php' => 'O nás',
    'sluzby.php' => 'Služby',
    'prace.php' => 'Naše práce',
    'recenzie.php' => 'Recenzie',
    'kontakt.php' => 'Kontakt'
];

// Helper function to check if current page is active
function isActive($page) {
    global $current_page;
    return $current_page === $page ? 'active' : '';
}

// Helper function to format phone number for display
function formatPhone($phone) {
    return str_replace(' ', ' ', $phone);
}

// Helper function to get page title
function getPageTitle($page) {
    $titles = [
        'index.php' => 'Sťahovanie Humenné | Snina | Michalovce | Medzilaborce',
        'onas.php' => 'O nás - Profesionálne sťahovanie',
        'sluzby.php' => 'Naše služby - Sťahovanie a autodoprava',
        'prace.php' => 'Naše práce - Fotogaléria zo sťahovania',
        'recenzie.php' => 'Recenzie spokojných zákazníkov',
        'kontakt.php' => 'Kontakt - Zavolajte nám'
    ];
    return isset($titles[$page]) ? $titles[$page] . ' - ' . $GLOBALS['site_title'] : $GLOBALS['site_title'];
}

// Helper function to get page description
function getPageDescription($page) {
    $descriptions = [
        'index.php' => 'Profesionálne sťahovanie a autodoprava z Humenného. Snina, Michalovce, Medzilaborce a celé Slovensko. Volajte 0907 090 155.',
        'onas.php' => 'Sme skúsená sťahovacia firma z Humenného. Ponúkame komplexné služby sťahovania bytov, domov, kancelárií a prepravy po celom Slovensku.',
        'sluzby.php' => 'Komplexné služby: sťahovanie bytov a domov Humenné, firemné sťahovanie Snina, autodoprava Michalovce, vypratávanie, montáž nábytku.',
        'prace.php' => 'Pozrite si fotografie z našich úspešne zrealizovaných sťahovaní v Humennom, Snine, Michalovciach a po celom Slovensku.',
        'recenzie.php' => 'Prečítajte si recenzie našich spokojných zákazníkov zo sťahovania v Humennom, Snine, Michalovciach a Medzilaborciach.',
        'kontakt.php' => 'Kontaktujte nás pre nezáväznú cenovú ponuku. Telefón: 0907 090 155, Email: ksstahovanie@gmail.com. Sťahovanie Humenné a okolie.'
    ];
    return isset($descriptions[$page]) ? $descriptions[$page] : $GLOBALS['site_description'];
}
?>
