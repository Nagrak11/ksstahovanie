# K&S Stahovanie - Website

Professional moving and transport company website built with PHP, JavaScript, HTML, and CSS.

## Features

- **Responsive Design** - Mobile-first approach, works on all devices
- **Hero Slider** - Auto-rotating hero images with smooth transitions
- **Service Showcase** - Detailed service offerings
- **Image Gallery** - Interactive gallery with lightbox functionality
- **Customer Reviews** - Testimonials section
- **Contact Information** - Easy-to-find contact details
- **Floating Call Button** - Persistent call-to-action
- **Job Offer Popup** - Session-based recruitment popup
- **SEO Optimized** - Proper meta tags and structured data
- **Performance Optimized** - Lazy loading, caching, and compression

## Technical Stack

- **Backend**: PHP 7.0+
- **Frontend**: Vanilla JavaScript (ES6+)
- **Styling**: CSS3 with CSS Variables
- **Server**: Apache (with .htaccess) or Nginx

## File Structure

```
/
├── index.php                  # Main entry point
├── constants.php              # Configuration and content data
├── header.php                 # Header component
├── footer.php                 # Footer component
├── hero_slider.php            # Hero slider section
├── home.php                   # Home section
├── about.php                  # About section
├── services.php               # Services section
├── gallery.php                # Gallery section
├── reviews.php                # Reviews section
├── contact.php                # Contact section
├── floating_call_button.php   # Floating call button
├── job_offer_popup.php        # Job offer popup
├── styles.css                 # Main stylesheet
├── main.js                    # Main JavaScript file
├── .htaccess                  # Apache configuration
└── README.md                  # This file
```

## Installation

### Requirements

- PHP 7.0 or higher
- Apache web server (recommended) or Nginx
- mod_rewrite enabled (for Apache)

### Deployment Steps

1. **Upload Files**
   Upload all files to your web server's public directory (e.g., `public_html`, `www`, or `htdocs`)

2. **Configure Constants**
   Edit `constants.php` and update:
   - `COMPANY_PHONE` - Your actual phone number
   - `COMPANY_EMAIL` - Your actual email address
   - `FACEBOOK_URL` - Your Facebook page URL
   - `INSTAGRAM_URL` - Your Instagram profile URL

3. **Apache Configuration**
   - Ensure `.htaccess` file is uploaded
   - Verify `mod_rewrite` is enabled
   - Check file permissions (644 for files, 755 for directories)

4. **Test the Website**
   - Open your website in a browser
   - Test all interactive features
   - Check mobile responsiveness
   - Verify all links work correctly

### For Nginx

If using Nginx, add this to your server configuration:

```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /path/to/website;
    index index.php index.html;

    # Security headers
    add_header X-Frame-Options "SAMEORIGIN" always;
    add_header X-Content-Type-Options "nosniff" always;
    add_header X-XSS-Protection "1; mode=block" always;

    # Gzip compression
    gzip on;
    gzip_types text/css application/javascript text/javascript;

    # PHP processing
    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }

    # Deny access to hidden files
    location ~ /\. {
        deny all;
    }
}
```

## Customization

### Changing Content

All content is centralized in `constants.php`:

- **Hero Slider** - Update `$hero_slides` array
- **Services** - Modify `$services` array
- **Gallery Images** - Edit `$gallery_images` array
- **Customer Reviews** - Update `$reviews` array

### Changing Styles

Edit `styles.css` to customize:

- **Colors** - Modify CSS variables in `:root`
- **Fonts** - Change `font-family` in `body`
- **Layout** - Adjust grid and flex properties

### Changing Behavior

Edit `main.js` to modify:

- Slider timing (line 112: `slideInterval`)
- Popup delay (line 225: `setTimeout` delay)
- Smooth scrolling behavior
- Lightbox functionality

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Optimizations

- Lazy loading for images
- CSS and JavaScript minification ready
- Browser caching via .htaccess
- Gzip compression
- Throttled scroll events
- Optimized image sizes from Unsplash

## SEO Features

- Semantic HTML5 markup
- Open Graph tags for social sharing
- Structured data (Schema.org)
- Meta descriptions and keywords
- Proper heading hierarchy
- Alt text for all images

## Security Features

- XSS protection headers
- Clickjacking protection
- Content type sniffing prevention
- Direct file access prevention
- Output escaping with `htmlspecialchars()`

## Support

For issues or questions:
- Phone: +421 905 123 456
- Email: info@ksstahovanie.sk

## License

© 2025 K&S stahovanie autodoprava s.r.o. All rights reserved.

---

**Built with care for a professional moving company in Humenne, Slovakia**
