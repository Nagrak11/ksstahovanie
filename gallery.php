<section id="gallery" class="section">
    <div class="container">
        <h2 class="section-title">Galéria</h2>
        <p class="section-subtitle">Pozrite si naau prácu a flotilu vozidiel</p>

        <div class="gallery-grid">
            <?php
            global $gallery_images;
            foreach ($gallery_images as $image):
            ?>
            <div class="gallery-image-container">
                <img
                    src="<?php echo $image['url']; ?>"
                    alt="<?php echo $image['alt']; ?>"
                    data-caption="<?php echo $image['caption']; ?>"
                    loading="lazy"
                >
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Lightbox -->
    <div id="lightbox" class="lightbox hidden">
        <button id="close-lightbox" class="close-lightbox" aria-label="Zavriee">×</button>
        <div class="lightbox-content">
            <img id="lightbox-img" src="" alt="">
            <p id="lightbox-caption" class="lightbox-caption"></p>
        </div>
    </div>
</section>
