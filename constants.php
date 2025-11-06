<?php
/**
 * Configuration file for K&S Stahovanie website
 * All site constants and content data
 */

// Prevent direct access
if (!defined('SITE_ACCESS')) {
    die('Direct access not permitted');
}

// Company Information
define('COMPANY_NAME', 'K&S stahovanie autodoprava s.r.o.');
define('COMPANY_PHONE', '+421 905 123 456');
define('COMPANY_EMAIL', 'info@ksstahovanie.sk');
define('COMPANY_ADDRESS', 'Humenne, Slovakia');

// Site Configuration
define('SITE_TITLE', 'K&S stahovanie - Profesionalne stahovacie sluzby v Humenne');
define('SITE_DESCRIPTION', 'Profesionalne stahovacie a autodopravne sluzby v Humenne a okoli. Rychlo, bezpecne a spolahlivo.');
define('SITE_KEYWORDS', 'stahovanie, autodoprava, Humenne, Slovakia, preprava, stahovacie sluzby');

// Social Media (Update with actual URLs)
define('FACEBOOK_URL', 'https://www.facebook.com');
define('INSTAGRAM_URL', 'https://www.instagram.com');

// Hero Slider Images
$hero_slides = [
    [
        'image' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1920&h=1080&fit=crop&q=80',
        'title' => 'Profesionalne stahovacie sluzby',
        'subtitle' => 'Rychlo, bezpecne a spolahlivo'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1600518464441-9154a4dea21b?w=1920&h=1080&fit=crop&q=80',
        'title' => 'Autodoprava po celej Europe',
        'subtitle' => 'Prepravime vsetko, co potrebujete'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=1920&h=1080&fit=crop&q=80',
        'title' => 'Skuseny tim profesionalov',
        'subtitle' => 'Vase veci su v bezpeci'
    ]
];

// Services
$services = [
    [
        'icon' => '&#128666;',
        'title' => 'Stahovanie bytov a domov',
        'description' => 'Komplexne stahovacie sluzby pre domacnosti akejkolvek velkosti. Postarame sa o vsetko od balenia az po instalaciu.'
    ],
    [
        'icon' => '&#127970;',
        'title' => 'Firemne stahovanie',
        'description' => 'Profesionalne stahovanie kancelarii a firiem s minimalnym prestojom vasho podnikania.'
    ],
    [
        'icon' => '&#128230;',
        'title' => 'Balenie a ochrana',
        'description' => 'Kvalitne balenie vasich cennych predmetov pomocou profesionalnych obalovych materialov.'
    ],
    [
        'icon' => '&#128667;',
        'title' => 'Medzinarodna preprava',
        'description' => 'Autodoprava po celej Europe. Rychla a bezpecna preprava vasho tovaru.'
    ],
    [
        'icon' => '&#128295;',
        'title' => 'Montaz a demontaz',
        'description' => 'Odborna demontaz a montaz nabytku priamo na mieste.'
    ],
    [
        'icon' => '&#128230;',
        'title' => 'Uskladnenie',
        'description' => 'Bezpecne uskladnenie vasho majetku v nasich strazenych skladoch.'
    ]
];

// Gallery Images
$gallery_images = [
    [
        'url' => 'https://images.unsplash.com/photo-1600518464441-9154a4dea21b?w=640&h=480&fit=crop&q=80',
        'alt' => 'Stahovaci kamion',
        'caption' => 'Moderna flotila vozidiel'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=640&h=480&fit=crop&q=80',
        'alt' => 'Tim pracovnikov',
        'caption' => 'Profesionalny tim'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=640&h=480&fit=crop&q=80',
        'alt' => 'Balenie veci',
        'caption' => 'Bezpecne balenie'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1527689368864-3a821dbccc34?w=640&h=480&fit=crop&q=80',
        'alt' => 'Krabice pripravene na presun',
        'caption' => 'Organizovane stahovanie'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=640&h=480&fit=crop&q=80',
        'alt' => 'Nakladanie nabytku',
        'caption' => 'Opatarne zaobchadzanie'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=640&h=480&fit=crop&q=80',
        'alt' => 'Uskladnenie',
        'caption' => 'Bezpecne uskladnenie'
    ]
];

// Reviews
$reviews = [
    [
        'name' => 'Jan Kovac',
        'rating' => 5,
        'text' => 'Perfektna sluzba! Chlapci boli rychli, profesionalni a velmi ohladuplni k nasmu majetku. Odporucam kazdemu!'
    ],
    [
        'name' => 'Maria Novakova',
        'rating' => 5,
        'text' => 'Stahovali sme sa s celou rodinou a bolo to bez stresu. Vsetko prebehlo hladko a v dohodnutom case.'
    ],
    [
        'name' => 'Peter Varga',
        'rating' => 5,
        'text' => 'Vyborna firma! Stahovali nam kancelariu a absolutne bez problemov. Profesionalny pristup.'
    ],
    [
        'name' => 'Eva Horvathova',
        'rating' => 5,
        'text' => 'Velmi spokojna so sluzbami. Chlapci boli mili a sikovni. Cena zodpovedala kvalite.'
    ]
];
?>
