/**
 * K&Š Sťahovanie - Main JavaScript
 * Handles slider, lightbox, navigation, and interactions
 */

(function() {
    'use strict';

    // ========================================
    // MOBILE NAVIGATION TOGGLE
    // ========================================

    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            const isExpanded = navMenu.classList.contains('active');
            navToggle.setAttribute('aria-expanded', isExpanded);
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!navToggle.contains(event.target) && !navMenu.contains(event.target)) {
                navMenu.classList.remove('active');
                navToggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Close menu when clicking on a link
        const navLinks = navMenu.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('active');
                navToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // ========================================
    // HERO SLIDER
    // ========================================

    const heroSlider = document.getElementById('heroSlider');

    if (heroSlider) {
        const slides = heroSlider.querySelectorAll('.slide');
        const prevBtn = document.getElementById('sliderPrev');
        const nextBtn = document.getElementById('sliderNext');
        const indicatorsContainer = document.getElementById('sliderIndicators');

        let currentSlide = 0;
        let sliderInterval;
        const slideInterval = 4000; // 4 seconds as specified

        // Create indicators
        if (indicatorsContainer) {
            slides.forEach((_, index) => {
                const indicator = document.createElement('button');
                indicator.classList.add('slider-indicator');
                indicator.setAttribute('aria-label', `Prejsť na snímku ${index + 1}`);
                if (index === 0) indicator.classList.add('active');
                indicator.addEventListener('click', () => goToSlide(index));
                indicatorsContainer.appendChild(indicator);
            });
        }

        const indicators = indicatorsContainer ? indicatorsContainer.querySelectorAll('.slider-indicator') : [];

        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            indicators.forEach(indicator => indicator.classList.remove('active'));

            slides[index].classList.add('active');
            if (indicators[index]) {
                indicators[index].classList.add('active');
            }
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        function goToSlide(index) {
            currentSlide = index;
            showSlide(currentSlide);
            resetInterval();
        }

        function startInterval() {
            sliderInterval = setInterval(nextSlide, slideInterval);
        }

        function resetInterval() {
            clearInterval(sliderInterval);
            startInterval();
        }

        // Event listeners
        if (nextBtn) nextBtn.addEventListener('click', () => {
            nextSlide();
            resetInterval();
        });

        if (prevBtn) prevBtn.addEventListener('click', () => {
            prevSlide();
            resetInterval();
        });

        // Pause on hover
        heroSlider.addEventListener('mouseenter', () => clearInterval(sliderInterval));
        heroSlider.addEventListener('mouseleave', startInterval);

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                prevSlide();
                resetInterval();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
                resetInterval();
            }
        });

        // Start autoplay
        startInterval();
    }

    // ========================================
    // GALLERY LIGHTBOX
    // ========================================

    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightbox = document.getElementById('lightbox');

    if (lightbox && galleryItems.length > 0) {
        const lightboxImg = document.getElementById('lightboxImg');
        const lightboxCaption = document.getElementById('lightboxCaption');
        const lightboxCounter = document.getElementById('lightboxCounter');
        const lightboxClose = document.getElementById('lightboxClose');
        const lightboxPrev = document.getElementById('lightboxPrev');
        const lightboxNext = document.getElementById('lightboxNext');

        let currentImageIndex = 0;
        const galleryData = window.galleryData || [];

        function openLightbox(index) {
            currentImageIndex = index;
            updateLightboxContent();
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        }

        function updateLightboxContent() {
            if (galleryData[currentImageIndex]) {
                const imgPath = `assets/images/prace/${galleryData[currentImageIndex].file}`;
                lightboxImg.src = imgPath;
                lightboxImg.alt = galleryData[currentImageIndex].alt;
                lightboxCaption.textContent = galleryData[currentImageIndex].caption;
                lightboxCounter.textContent = `${currentImageIndex + 1} / ${galleryData.length}`;
            }
        }

        function showPrevImage() {
            currentImageIndex = (currentImageIndex - 1 + galleryData.length) % galleryData.length;
            updateLightboxContent();
        }

        function showNextImage() {
            currentImageIndex = (currentImageIndex + 1) % galleryData.length;
            updateLightboxContent();
        }

        // Event listeners
        galleryItems.forEach((item, index) => {
            item.addEventListener('click', () => openLightbox(index));
        });

        if (lightboxClose) {
            lightboxClose.addEventListener('click', closeLightbox);
        }

        if (lightboxPrev) {
            lightboxPrev.addEventListener('click', showPrevImage);
        }

        if (lightboxNext) {
            lightboxNext.addEventListener('click', showNextImage);
        }

        // Close on background click
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('active')) return;

            if (e.key === 'Escape') {
                closeLightbox();
            } else if (e.key === 'ArrowLeft') {
                showPrevImage();
            } else if (e.key === 'ArrowRight') {
                showNextImage();
            }
        });
    }

    // ========================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ========================================

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ========================================
    // STICKY HEADER ON SCROLL
    // ========================================

    const header = document.getElementById('mainHeader');
    let lastScroll = 0;

    if (header) {
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                header.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = '';
            }

            lastScroll = currentScroll;
        });
    }

    // ========================================
    // LAZY LOADING IMAGES
    // ========================================

    const lazyImages = document.querySelectorAll('img[loading="lazy"]');

    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });

        lazyImages.forEach(img => imageObserver.observe(img));
    }

    // ========================================
    // GOOGLE REVIEWS INTEGRATION
    // ========================================

    // This function will load Google reviews if API key and Place ID are configured
    // Instructions for setup are in the README.txt file

    function loadGoogleReviews() {
        // Check if we're on the reviews page
        const googleReviewsContainer = document.getElementById('googleReviews');
        if (!googleReviewsContainer) return;

        // This is a placeholder function. To enable Google Reviews:
        // 1. Get a Google API key with Places API enabled
        // 2. Add the key to includes/config.php
        // 3. Add your Google Place ID to includes/config.php
        // 4. The Places API will automatically fetch reviews

        // Example implementation (requires API key):
        /*
        if (typeof google !== 'undefined' && google.maps && google.maps.places) {
            const service = new google.maps.places.PlacesService(googleReviewsContainer);
            const request = {
                placeId: 'YOUR_PLACE_ID_HERE',
                fields: ['reviews', 'rating', 'user_ratings_total']
            };

            service.getDetails(request, (place, status) => {
                if (status === google.maps.places.PlacesServiceStatus.OK && place.reviews) {
                    displayReviews(place.reviews);
                }
            });
        }
        */

        console.log('Google Reviews: Add your API key and Place ID to enable live reviews');
    }

    function displayReviews(reviews) {
        const container = document.getElementById('googleReviews');
        if (!container) return;

        container.innerHTML = '';

        reviews.forEach(review => {
            const reviewCard = document.createElement('div');
            reviewCard.className = 'review-card';

            const stars = '★'.repeat(review.rating) + '☆'.repeat(5 - review.rating);

            reviewCard.innerHTML = `
                <div class="review-header">
                    <div class="review-avatar">${review.author_name.charAt(0)}</div>
                    <div class="review-author-info">
                        <h3 class="review-author">${review.author_name}</h3>
                        <p class="review-location">Google recenzia</p>
                    </div>
                </div>
                <div class="review-rating">
                    <div class="stars">${stars}</div>
                    <span class="review-date">${formatReviewDate(review.time)}</span>
                </div>
                <p class="review-text">${review.text}</p>
            `;

            container.appendChild(reviewCard);
        });
    }

    function formatReviewDate(timestamp) {
        const date = new Date(timestamp * 1000);
        const now = new Date();
        const diffTime = Math.abs(now - date);
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

        if (diffDays < 7) {
            return `Pred ${diffDays} dňami`;
        } else if (diffDays < 30) {
            const weeks = Math.floor(diffDays / 7);
            return `Pred ${weeks} týždňami`;
        } else if (diffDays < 365) {
            const months = Math.floor(diffDays / 30);
            return `Pred ${months} mesiacmi`;
        } else {
            return date.toLocaleDateString('sk-SK');
        }
    }

    // ========================================
    // SCROLL REVEAL ANIMATIONS
    // ========================================

    function revealOnScroll() {
        const reveals = document.querySelectorAll('.service-card, .review-card, .gallery-item, .process-step');

        reveals.forEach(element => {
            const windowHeight = window.innerHeight;
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                element.classList.add('fade-in');
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll);
    window.addEventListener('load', revealOnScroll);

    // ========================================
    // FORM VALIDATION (if contact forms are added)
    // ========================================

    const forms = document.querySelectorAll('form[data-validate]');

    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const inputs = form.querySelectorAll('[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('error');
                } else {
                    input.classList.remove('error');
                }

                // Email validation
                if (input.type === 'email') {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(input.value)) {
                        isValid = false;
                        input.classList.add('error');
                    }
                }

                // Phone validation
                if (input.type === 'tel') {
                    const phoneRegex = /^[+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{3,6}$/;
                    if (!phoneRegex.test(input.value.replace(/\s/g, ''))) {
                        isValid = false;
                        input.classList.add('error');
                    }
                }
            });

            if (isValid) {
                // Form is valid, submit it
                form.submit();
            } else {
                alert('Prosím vyplňte všetky povinné polia správne.');
            }
        });
    });

    // ========================================
    // CLICK TO CALL TRACKING
    // ========================================

    document.querySelectorAll('a[href^="tel:"]').forEach(link => {
        link.addEventListener('click', function() {
            // Track phone clicks for analytics
            if (typeof gtag !== 'undefined') {
                gtag('event', 'phone_call', {
                    'event_category': 'contact',
                    'event_label': this.getAttribute('href')
                });
            }
        });
    });

    // ========================================
    // PERFORMANCE OPTIMIZATION
    // ========================================

    // Preload critical assets on hover
    const ctaButtons = document.querySelectorAll('.btn-primary, .btn-phone');

    ctaButtons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            // Preconnect to phone service on hover
            if (this.getAttribute('href')?.startsWith('tel:')) {
                // This helps with faster phone dialing on some devices
            }
        });
    });

    // ========================================
    // INITIALIZE
    // ========================================

    // Load Google Reviews if on reviews page
    if (window.location.pathname.includes('recenzie.php')) {
        loadGoogleReviews();
    }

    // Log initialization
    console.log('K&Š Sťahovanie - Website initialized successfully');

})();
