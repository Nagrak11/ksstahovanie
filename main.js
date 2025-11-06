/**
 * K&S Stahovanie - Main JavaScript
 * Handles all interactive functionality
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {

  // ============================================
  // Smooth Scrolling for Anchor Links
  // ============================================
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href !== '#' && href.length > 1) {
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }
    });
  });


  // ============================================
  // Header Scroll Effect
  // ============================================
  const header = document.querySelector('header');
  if (header) {
    let lastScroll = 0;
    const handleScroll = () => {
      const currentScroll = window.scrollY;
      if (currentScroll > 10) {
        header.classList.add('shadow-lg');
      } else {
        header.classList.remove('shadow-lg');
      }
      lastScroll = currentScroll;
    };

    // Throttle scroll events for better performance
    let ticking = false;
    window.addEventListener('scroll', () => {
      if (!ticking) {
        window.requestAnimationFrame(() => {
          handleScroll();
          ticking = false;
        });
        ticking = true;
      }
    });
  }


  // ============================================
  // Mobile Menu Toggle
  // ============================================
  const mobileMenuButton = document.querySelector('#mobile-menu-button');
  const mobileMenu = document.querySelector('#mobile-menu');
  const mobileMenuLinks = document.querySelectorAll('#mobile-menu a');

  if (mobileMenuButton && mobileMenu) {
    const toggleMenu = () => {
      const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
      mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
      mobileMenu.classList.toggle('hidden');

      // Update icon
      const path = mobileMenuButton.querySelector('path');
      if (path) {
        if (!isExpanded) {
          path.setAttribute('d', 'M6 18L18 6M6 6l12 12');
        } else {
          path.setAttribute('d', 'M4 6h16M4 12h16m-7 6h7');
        }
      }
    };

    mobileMenuButton.addEventListener('click', toggleMenu);

    // Close mobile menu on link click
    mobileMenuLinks.forEach(link => {
      link.addEventListener('click', () => {
        if (!mobileMenu.classList.contains('hidden')) {
          toggleMenu();
        }
      });
    });

    // Close menu on escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
        toggleMenu();
      }
    });
  }


  // ============================================
  // Hero Slider
  // ============================================
  const heroSlider = document.querySelector('#hero-slider');
  if (heroSlider) {
    const slides = heroSlider.querySelectorAll('.hero-slide');
    if (slides.length > 1) {
      let currentSlide = 0;
      const slideInterval = 5000; // 5 seconds

      const showSlide = (index) => {
        slides.forEach((slide, i) => {
          if (i === index) {
            slide.classList.remove('opacity-0');
            slide.classList.add('opacity-100');
          } else {
            slide.classList.remove('opacity-100');
            slide.classList.add('opacity-0');
          }
        });
      };

      const nextSlide = () => {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
      };

      // Auto-advance slides
      const sliderTimer = setInterval(nextSlide, slideInterval);

      // Pause on hover
      heroSlider.addEventListener('mouseenter', () => clearInterval(sliderTimer));
    }
  }


  // ============================================
  // Gallery Lightbox
  // ============================================
  const galleryImages = document.querySelectorAll('.gallery-image-container');
  const lightbox = document.querySelector('#lightbox');
  const lightboxImg = document.querySelector('#lightbox-img');
  const lightboxCaption = document.querySelector('#lightbox-caption');
  const closeLightboxBtn = document.querySelector('#close-lightbox');

  if (lightbox && lightboxImg && lightboxCaption) {
    // Open lightbox
    galleryImages.forEach(imgContainer => {
      imgContainer.addEventListener('click', () => {
        const img = imgContainer.querySelector('img');
        if (img) {
          // Get larger version of image
          const largeSrc = img.src.replace(/w=\d+/, 'w=1280').replace(/h=\d+/, 'h=960');
          lightboxImg.src = largeSrc;
          lightboxImg.alt = img.alt;
          lightboxCaption.textContent = img.alt || '';
          lightbox.classList.remove('hidden');
          lightbox.classList.add('flex');
          document.body.style.overflow = 'hidden'; // Prevent body scroll
        }
      });

      // Add keyboard navigation
      imgContainer.setAttribute('tabindex', '0');
      imgContainer.addEventListener('keypress', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          imgContainer.click();
        }
      });
    });

    // Close lightbox
    const closeLightbox = () => {
      lightbox.classList.add('hidden');
      lightbox.classList.remove('flex');
      document.body.style.overflow = ''; // Restore body scroll
    };

    if (closeLightboxBtn) {
      closeLightboxBtn.addEventListener('click', closeLightbox);
    }

    // Close on background click
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) {
        closeLightbox();
      }
    });

    // Close on escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
        closeLightbox();
      }
    });

    // Prevent image click from closing lightbox
    const lightboxContent = lightbox.querySelector('.lightbox-content');
    if (lightboxContent) {
      lightboxContent.addEventListener('click', (e) => e.stopPropagation());
    }
  }


  // ============================================
  // Job Offer Popup
  // ============================================
  const jobOfferPopup = document.querySelector('#job-offer-popup');
  if (jobOfferPopup) {
    const expandedView = jobOfferPopup.querySelector('#job-offer-expanded');
    const collapsedView = jobOfferPopup.querySelector('#job-offer-collapsed');
    const collapseButton = jobOfferPopup.querySelector('#job-offer-collapse-btn');
    const closeButton = jobOfferPopup.querySelector('#job-offer-close-btn');

    // Check if user has closed popup in this session
    const isClosedInSession = sessionStorage.getItem('jobOfferClosed');

    // Show popup after delay if not closed
    if (!isClosedInSession) {
      setTimeout(() => {
        jobOfferPopup.classList.remove('hidden');
      }, 3000); // Show after 3 seconds
    }

    // Expand collapsed view
    if (collapsedView && expandedView) {
      collapsedView.addEventListener('click', () => {
        collapsedView.classList.add('hidden');
        expandedView.classList.remove('hidden');
      });
    }

    // Collapse expanded view
    if (collapseButton && expandedView && collapsedView) {
      collapseButton.addEventListener('click', (e) => {
        e.stopPropagation();
        expandedView.classList.add('hidden');
        collapsedView.classList.remove('hidden');
      });
    }

    // Close popup permanently for this session
    if (closeButton) {
      closeButton.addEventListener('click', (e) => {
        e.stopPropagation();
        jobOfferPopup.classList.add('hidden');
        sessionStorage.setItem('jobOfferClosed', 'true');
      });
    }
  }


  // ============================================
  // Performance: Lazy Load Images (if browser doesn't support native lazy loading)
  // ============================================
  if ('loading' in HTMLImageElement.prototype === false) {
    const images = document.querySelectorAll('img[loading="lazy"]');
    images.forEach(img => {
      img.src = img.dataset.src || img.src;
    });
  }

});
