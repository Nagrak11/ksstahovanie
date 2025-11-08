================================================================================
K&Š SŤAHOVANIE AUTODOPRAVA S.R.O. - WEBSITE DOCUMENTATION
================================================================================

Version: 1.0
Date: January 2025
Technology: PHP, HTML5, CSS3, JavaScript (No frameworks - pure vanilla code)

================================================================================
TABLE OF CONTENTS
================================================================================

1. Quick Start Guide
2. File Structure
3. Configuration
4. Replacing Images
5. Google Maps & Reviews Setup
6. SEO Configuration
7. Customization Guide
8. Deployment Instructions
9. Troubleshooting
10. Support & Maintenance

================================================================================
1. QUICK START GUIDE
================================================================================

STEP 1: Upload Files
--------------------
1. Extract the ks-stahovanie-web.zip file
2. Upload ALL files to your web hosting via FTP or cPanel File Manager
3. Make sure all files maintain the directory structure

STEP 2: Configure Basic Settings
--------------------------------
1. Open includes/config.php in a text editor
2. Update the following variables:
   - $base_url = "https://www.yourdomain.sk"
   - $company_phone = "0907 090 155" (if different)
   - $company_email = "ksstahovanie@gmail.com" (if different)
3. Save the file and re-upload

STEP 3: Add Your Images
-----------------------
1. See section 4 "Replacing Images" below
2. Replace placeholder images with your actual photos
3. Upload to assets/images/ directory

STEP 4: Test the Website
------------------------
1. Open your website in a browser
2. Check all pages work correctly
3. Test phone number click-to-call
4. Test navigation on mobile devices

That's it! Your website is ready to go.

================================================================================
2. FILE STRUCTURE
================================================================================

ks-stahovanie-web/
├── index.php                   # Homepage with hero slider
├── onas.php                    # About page (with company description)
├── sluzby.php                  # Services page
├── prace.php                   # Gallery/Our Work page
├── recenzie.php                # Reviews page
├── kontakt.php                 # Contact page
├── sitemap.xml                 # XML sitemap for search engines
├── robots.txt                  # Robots.txt for SEO
├── README.txt                  # This file
│
├── includes/
│   ├── config.php              # Main configuration file
│   ├── header.php              # Site header (navigation, top bar)
│   └── footer.php              # Site footer (JSON-LD, links)
│
└── assets/
    ├── style.css               # Main stylesheet (all styles)
    ├── main.js                 # JavaScript (slider, lightbox, etc.)
    │
    ├── images/
    │   ├── logo.png            # Company logo
    │   ├── IMAGES-INFO.txt     # Image guidelines
    │   │
    │   ├── slider/             # Hero slider images (4 images)
    │   │   ├── slide1.jpg
    │   │   ├── slide2.jpg
    │   │   ├── slide3.jpg
    │   │   └── slide4.jpg
    │   │
    │   ├── vozidla/            # Vehicle photos (3 images)
    │   │   ├── cervena-1.jpg
    │   │   ├── cervena-2.jpg
    │   │   └── biela-kontajner.jpg
    │   │
    │   └── prace/              # Gallery photos (8 images)
    │       ├── zima-nakladanie.jpg
    │       ├── dodavka-nalozena.jpg
    │       ├── schody-panel.jpg
    │       ├── cervena-naklad.jpg
    │       ├── nalozene-2.jpg
    │       ├── montaz-nabytku.jpg
    │       ├── okno-schody.jpg
    │       └── interier-nabytok.jpg
    │
    └── fonts/                  # (Optional) Custom fonts

================================================================================
3. CONFIGURATION
================================================================================

Main Configuration File: includes/config.php
-------------------------------------------

IMPORTANT SETTINGS TO CHANGE:

1. Domain/URL Settings:
   -----------------------
   $base_url = "https://www.ksstahovanie.sk";

   Change this to your actual domain name.
   DO NOT include trailing slash.

   Examples:
   - "https://www.yourdomain.sk"
   - "https://yourdomain.com"

2. Company Information:
   ---------------------
   $company_name = "K&Š sťahovanie autodoprava s.r.o.";
   $company_phone = "0907 090 155";
   $company_phone_link = "+421907090155";
   $company_email = "ksstahovanie@gmail.com";
   $company_address = "Humenné, Slovensko";

   Update these with your actual information.

3. Google Services (Optional - see section 5):
   -------------------------------------------
   $google_api_key = "";
   $google_place_id = "";

   Leave empty for now. See section 5 for setup instructions.

4. Business Hours (Optional):
   --------------------------
   Edit the $business_hours array if you want to display
   different operating hours.

All other settings are optimized and usually don't need changes.

================================================================================
4. REPLACING IMAGES
================================================================================

The website comes with placeholder images that MUST be replaced with your
actual company photos.

REQUIRED IMAGES:
---------------

1. LOGO (logo.png)
   - Location: assets/images/logo.png
   - Size: 180x60 pixels recommended
   - Format: PNG with transparent background preferred
   - Can create at: Canva.com or hire a designer

2. SLIDER IMAGES (4 images)
   - Location: assets/images/slider/
   - Files: slide1.jpg, slide2.jpg, slide3.jpg, slide4.jpg
   - Size: 1920x600 pixels (minimum 1200x400)
   - Format: JPG, compressed for web
   - Show: Your trucks, team in action, happy customers
   - Max file size: 200KB each (use compression tools)

3. VEHICLE PHOTOS (3 images)
   - Location: assets/images/vozidla/
   - Files: cervena-1.jpg, cervena-2.jpg, biela-kontajner.jpg
   - Size: 800x600 pixels
   - Format: JPG
   - Show: Your actual moving vehicles
   - Professional, clean photos

4. GALLERY PHOTOS (8 images)
   - Location: assets/images/prace/
   - Files: (see file structure above)
   - Size: 800x600 pixels
   - Format: JPG
   - Show: Real work - loading, carrying furniture, etc.
   - Demonstrate professionalism

IMAGE OPTIMIZATION:
------------------
Before uploading, compress images using:
- TinyPNG.com (free, easy to use)
- Squoosh.app (Google's tool)
- ImageOptim (Mac app)

Target compression: 70-80% quality for JPG files

WHERE TO GET IMAGES:
-------------------
Option 1: Use your own photos (BEST)
Option 2: Hire a photographer
Option 3: Temporary stock photos:
   - Unsplash.com (free)
   - Pexels.com (free)
   - Search: "moving truck", "movers", "furniture moving"

IMPORTANT: Replace stock photos with real company photos ASAP!

================================================================================
5. GOOGLE MAPS & REVIEWS SETUP
================================================================================

The website includes placeholders for Google Maps and Google Reviews.
To enable these features, follow these steps:

STEP 1: Get a Google API Key
----------------------------
1. Go to: https://console.cloud.google.com/
2. Create a new project (or select existing)
3. Enable these APIs:
   - Maps JavaScript API
   - Places API
4. Create credentials → API Key
5. Copy the API key

STEP 2: Get Your Google Place ID
--------------------------------
1. Go to: https://developers.google.com/maps/documentation/javascript/examples/places-placeid-finder
2. Search for your business: "K&Š sťahovanie autodoprava Humenné"
3. Click on your business marker
4. Copy the Place ID (starts with "ChIJ...")

STEP 3: Add to Configuration
----------------------------
1. Open includes/config.php
2. Find these lines:

   $google_api_key = "";
   $google_place_id = "";

3. Update them:

   $google_api_key = "YOUR_API_KEY_HERE";
   $google_place_id = "YOUR_PLACE_ID_HERE";

4. Save and re-upload

STEP 4: Test
-----------
1. Visit kontakt.php - interactive map should load
2. Visit recenzie.php - live Google reviews should load

NOTES:
- Google API has free tier (plenty for small business website)
- Set API key restrictions in Google Console for security
- If you don't add API key, static map iframe will be used (works fine)

================================================================================
6. SEO CONFIGURATION
================================================================================

The website is pre-optimized for SEO with focus on local keywords:
- sťahovanie Humenné
- sťahovanie Snina
- sťahovanie Michalovce
- sťahovanie Medzilaborce

WHAT'S ALREADY OPTIMIZED:
------------------------
✓ Meta titles and descriptions (all pages)
✓ Structured data (JSON-LD) for search engines
✓ Semantic HTML5 markup
✓ Mobile-first responsive design
✓ Fast loading times
✓ Image alt texts with keywords
✓ Clean URLs
✓ Sitemap.xml
✓ Robots.txt

SITEMAP SUBMISSION:
------------------
After going live, submit your sitemap to search engines:

1. Google Search Console:
   - Go to: https://search.google.com/search-console
   - Add your property (domain)
   - Submit sitemap: https://www.yourdomain.sk/sitemap.xml

2. Update Sitemap URLs:
   - Edit sitemap.xml
   - Replace "https://www.ksstahovanie.sk" with your domain
   - Update lastmod dates to current date

LOCAL SEO TIPS:
--------------
1. Create Google Business Profile
2. Get listed on:
   - Google Maps
   - Slovakian business directories
   - Zoznam.sk
3. Collect customer reviews on Google
4. Use consistent NAP (Name, Address, Phone) everywhere

================================================================================
7. CUSTOMIZATION GUIDE
================================================================================

CHANGING COLORS:
---------------
Edit: assets/style.css

Find these CSS variables at the top:
--primary-blue: #0f5aa6;      (Main blue color)
--accent-orange: #ff9100;      (Orange accent)
--navy-dark: #0f172a;          (Dark navy)

Change the hex values to your preferred colors.

CHANGING PHONE NUMBER:
---------------------
Edit: includes/config.php

$company_phone = "0907 090 155";
$company_phone_link = "+421907090155";

Important: phone_link should be in international format without spaces.

ADDING/REMOVING SLIDER SLIDES:
-----------------------------
1. Add image to assets/images/slider/
2. Edit index.php
3. Copy a <div class="slide"> block
4. Update image src and alt text
5. JavaScript will automatically detect new slides

CHANGING NAVIGATION MENU:
------------------------
Edit: includes/config.php

Find $nav_menu array:
$nav_menu = [
    'index.php' => 'Domov',
    'onas.php' => 'O nás',
    ... add more pages here ...
];

EDITING CONTENT:
---------------
Each page is self-contained PHP file:
- index.php → Homepage
- onas.php → About (contains verbatim company description)
- sluzby.php → Services
- prace.php → Gallery
- recenzie.php → Reviews
- kontakt.php → Contact

Open the file in text editor and modify the HTML content.

================================================================================
8. DEPLOYMENT INSTRUCTIONS
================================================================================

HOSTING REQUIREMENTS:
--------------------
✓ PHP 7.4 or higher (PHP 8.x recommended)
✓ Apache or Nginx web server
✓ HTTPS/SSL certificate (required for security and SEO)
✓ At least 100 MB disk space
✓ No database required (static PHP)

RECOMMENDED HOSTING PROVIDERS (Slovakia):
----------------------------------------
- Websupport.sk
- Forpsi.sk
- Hostinger.sk
- Wedos.sk

All provide PHP hosting and free SSL certificates.

DEPLOYMENT STEPS:
----------------
1. Choose a hosting provider
2. Register domain name (e.g., ksstahovanie.sk)
3. Upload website files via FTP or cPanel:
   - Host: ftp.yourdomain.sk
   - Username: (provided by host)
   - Password: (provided by host)
4. Upload to public_html or www directory
5. Set file permissions (usually 644 for files, 755 for directories)
6. Enable SSL certificate in hosting control panel
7. Test website: https://www.yourdomain.sk

FILE PERMISSIONS:
----------------
Files: 644 (readable by everyone, writable by owner)
Directories: 755 (executable/accessible by everyone)

If using FTP client (FileZilla):
Right-click → File Permissions → Set numeric value

REDIRECTS (Optional):
--------------------
To redirect www to non-www (or vice versa), add to .htaccess:

# Redirect www to non-www
RewriteEngine On
RewriteCond %{HTTP_HOST} ^www\.(.*)$ [NC]
RewriteRule ^(.*)$ https://%1/$1 [R=301,L]

# OR redirect non-www to www
RewriteEngine On
RewriteCond %{HTTP_HOST} !^www\. [NC]
RewriteRule ^(.*)$ https://www.%{HTTP_HOST}/$1 [R=301,L]

================================================================================
9. TROUBLESHOOTING
================================================================================

PROBLEM: Images not showing
SOLUTION:
- Check file paths are correct
- Verify files were uploaded to assets/images/
- Check file names match exactly (case-sensitive)
- Clear browser cache (Ctrl+F5)

PROBLEM: Phone number not clickable on mobile
SOLUTION:
- Check phone number format in config.php
- Ensure $company_phone_link uses international format
- Test on actual mobile device, not desktop browser

PROBLEM: Google Maps not loading
SOLUTION:
- Check API key is correct in config.php
- Verify Maps JavaScript API is enabled in Google Console
- Check browser console for error messages (F12)
- Ensure billing is enabled in Google Cloud (required even for free tier)

PROBLEM: Slider not working
SOLUTION:
- Check JavaScript console for errors (F12)
- Verify main.js is loaded (view page source)
- Ensure slider images exist
- Check slide HTML structure in index.php

PROBLEM: Mobile menu not opening
SOLUTION:
- Check main.js is loaded
- Clear browser cache
- Test on actual mobile device
- Check JavaScript console for errors

PROBLEM: Website looks broken
SOLUTION:
- Clear browser cache (Ctrl+Shift+Del)
- Check style.css is loaded (view page source)
- Verify all CSS files uploaded correctly
- Test in different browser

PROBLEM: Reviews not showing
SOLUTION:
- Check if you added API key and Place ID
- Without API, placeholder reviews will show (this is normal)
- Check JavaScript console for API errors
- Verify Place ID is correct for your business

================================================================================
10. SUPPORT & MAINTENANCE
================================================================================

REGULAR MAINTENANCE:
-------------------
1. Update photos regularly (add new work photos)
2. Keep reviews current (encourage customers to leave reviews)
3. Update sitemap.xml lastmod dates monthly
4. Check for broken links quarterly
5. Backup website files monthly

SECURITY:
---------
1. Keep PHP version updated (hosting provider does this)
2. Use strong FTP/cPanel passwords
3. Enable HTTPS/SSL (required)
4. Don't share API keys publicly
5. Regular backups

ANALYTICS:
----------
To track website visitors, add Google Analytics:

1. Create account: https://analytics.google.com
2. Get tracking code
3. Add to includes/footer.php before </body>

Example:
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>

FUTURE ENHANCEMENTS:
-------------------
Potential additions (require development):
- Online booking/quote form
- Live chat widget
- Blog section
- Customer testimonial submission form
- Multi-language support (English version)

GETTING HELP:
------------
For technical issues:
1. Check this README first
2. Search Google for error messages
3. Contact your hosting provider for server issues
4. For code modifications, hire a web developer

IMPORTANT FILES TO BACKUP:
-------------------------
- includes/config.php (your settings)
- assets/images/ (all your photos)
- All .php files (if you made custom changes)

Store backups in a safe location (cloud storage, external drive).

================================================================================
FINAL NOTES
================================================================================

This website is designed to be:
✓ Fast and mobile-friendly
✓ SEO-optimized for local search
✓ Easy to maintain (no database, no complex frameworks)
✓ Focused on phone conversions (primary CTA)

The website uses clean, modern code:
- Pure PHP (no frameworks)
- Vanilla JavaScript (no jQuery or other libraries)
- Responsive CSS (mobile-first approach)
- Semantic HTML5
- Accessibility features (ARIA labels, alt texts)

Remember:
1. Replace ALL placeholder images with your real photos
2. Test on multiple devices (desktop, tablet, mobile)
3. Submit sitemap to Google Search Console
4. Set up Google Business Profile
5. Collect customer reviews regularly

Good luck with your website!

================================================================================
TECHNICAL SPECIFICATIONS
================================================================================

Technology Stack:
- Frontend: HTML5, CSS3, JavaScript (ES6)
- Backend: PHP 7.4+
- No database required
- No external dependencies (self-contained)

Browser Compatibility:
- Chrome/Edge (latest 2 versions)
- Firefox (latest 2 versions)
- Safari (latest 2 versions)
- Mobile browsers (iOS Safari, Chrome Android)

Performance:
- Lazy loading images
- Minified/optimized code
- Fast page load times
- Mobile-first responsive design

SEO Features:
- Structured data (JSON-LD)
- Semantic HTML
- Meta tags (all pages)
- Image optimization
- Mobile responsive
- XML sitemap

Accessibility:
- ARIA labels
- Semantic markup
- Keyboard navigation
- Alt texts for images
- Good color contrast

================================================================================
VERSION HISTORY
================================================================================

Version 1.0 (January 2025)
- Initial release
- 6 main pages (Home, About, Services, Gallery, Reviews, Contact)
- Mobile-first responsive design
- Hero slider
- Gallery with lightbox
- Google Maps integration (optional)
- Google Reviews integration (optional)
- SEO optimized
- Local keywords: Humenné, Snina, Michalovce, Medzilaborce

================================================================================
LICENSE & USAGE
================================================================================

This website was created specifically for K&Š sťahovanie autodoprava s.r.o.

You may:
✓ Modify content and styling
✓ Add new features
✓ Replace images
✓ Customize colors and branding

Please:
- Keep code clean and well-commented if making modifications
- Backup before making major changes
- Test thoroughly after any modifications

================================================================================
CONTACT INFORMATION
================================================================================

Website: https://www.ksstahovanie.sk (update with your domain)
Phone: 0907 090 155
Email: ksstahovanie@gmail.com

For website technical support, contact your web developer or hosting provider.

================================================================================
END OF DOCUMENTATION
================================================================================
