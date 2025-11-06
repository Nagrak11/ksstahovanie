document.addEventListener('DOMContentLoaded', () => {

  // --- Header Logic ---
  const header = document.querySelector('header');
  const mobileMenuButton = document.querySelector('#mobile-menu-button');
  const mobileMenu = document.querySelector('#mobile-menu');
  const mobileMenuLinks = document.querySelectorAll('#mobile-menu a');

  if (header) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 10) {
        header.classList.add('shadow-lg');
      } else {
        header.classList.remove('shadow-lg');
      }
    });
  }

  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', () => {
      const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
      mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
      mobileMenu.classList.toggle('hidden');
      const path = mobileMenuButton.querySelector('path');
      if (!isExpanded) {
        path.setAttribute('d', 'M6 18L18 6M6 6l12 12');
      } else {
        path.setAttribute('d', 'M4 6h16M4 12h16m-7 6h7');
      }
    });
    
    // Close mobile menu on link click
    mobileMenuLinks.forEach(link => {
      link.addEventListener('click', () => {
        mobileMenuButton.setAttribute('aria-expanded', 'false');
        mobileMenu.classList.add('hidden');
        mobileMenuButton.querySelector('path').setAttribute('d', 'M4 6h16M4 12h16m-7 6h7');
      });
    });
  }


  // --- Hero Slider Logic ---
  const heroSlider = document.querySelector('#hero-slider');
  if (heroSlider) {
    const slides = heroSlider.querySelectorAll('.hero-slide');
    if (slides.length > 0) {
        let currentSlide = 0;
        const slideInterval = 4000;

        const nextSlide = () => {
            if (slides[currentSlide]) {
                slides[currentSlide].classList.remove('opacity-100');
                slides[currentSlide].classList.add('opacity-0');
            }
            currentSlide = (currentSlide + 1) % slides.length;
            if (slides[currentSlide]) {
                slides[currentSlide].classList.remove('opacity-0');
                slides[currentSlide].classList.add('opacity-100');
            }
        };

        setInterval(nextSlide, slideInterval);
    }
  }


  // --- Gallery Lightbox Logic ---
  const galleryImages = document.querySelectorAll('.gallery-image-container');
  const lightbox = document.querySelector('#lightbox');
  const lightboxImg = document.querySelector('#lightbox-img');
  const lightboxCaption = document.querySelector('#lightbox-caption');
  const closeLightboxBtn = document.querySelector('#close-lightbox');

  if (lightbox && lightboxImg && lightboxCaption) {
    galleryImages.forEach(imgContainer => {
      imgContainer.addEventListener('click', () => {
        const img = imgContainer.querySelector('img');
        if (img) {
            const largeSrc = img.src.replace(/(\d+)\/(\d+)/, '1280/960');
            lightboxImg.src = largeSrc;
            lightboxImg.alt = img.alt;
            lightboxCaption.textContent = img.dataset.caption || '';
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
        }
      });
    });

    const closeLightbox = () => {
      lightbox.classList.add('hidden');
      lightbox.classList.remove('flex');
    };

    if (closeLightboxBtn) closeLightboxBtn.addEventListener('click', closeLightbox);
    lightbox.addEventListener('click', closeLightbox);
    const lightboxContent = lightbox.querySelector('div');
    if(lightboxContent) lightboxContent.addEventListener('click', (e) => e.stopPropagation());
  }

  // --- Job Offer Popup Logic ---
  const jobOfferPopup = document.querySelector('#job-offer-popup');
  if (jobOfferPopup) {
    const expandedView = jobOfferPopup.querySelector('#job-offer-expanded');
    const collapsedView = jobOfferPopup.querySelector('#job-offer-collapsed');
    const collapseButton = jobOfferPopup.querySelector('#job-offer-collapse-btn');
    const closeButton = jobOfferPopup.querySelector('#job-offer-close-btn');

    const isClosedInSession = sessionStorage.getItem('jobOfferClosed');

    if (!isClosedInSession) {
      setTimeout(() => {
        jobOfferPopup.classList.remove('hidden');
      }, 2500);
    }
    
    if (collapsedView && expandedView) {
        collapsedView.addEventListener('click', () => {
            collapsedView.classList.add('hidden');
            expandedView.classList.remove('hidden');
        });
    }

    if (collapseButton && expandedView && collapsedView) {
        collapseButton.addEventListener('click', () => {
            expandedView.classList.add('hidden');
            collapsedView.classList.remove('hidden');
        });
    }
    
    if (closeButton) {
        closeButton.addEventListener('click', () => {
            jobOfferPopup.classList.add('hidden');
            sessionStorage.setItem('jobOfferClosed', 'true');
        });
    }
  }

});
