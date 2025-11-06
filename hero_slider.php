<section id="hero-slider" class="hero-slider">
    <?php
    global $hero_slides;
    foreach ($hero_slides as $index => $slide):
        $active_class = $index === 0 ? 'active opacity-100' : 'opacity-0';
    ?>
    <div class="hero-slide <?php echo $active_class; ?>">
        <img
            src="<?php echo htmlspecialchars($slide['image']); ?>"
            alt="<?php echo htmlspecialchars($slide['title']); ?>"
            class="hero-slide-image"
            loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>"
        >
        <div class="hero-overlay">
            <div class="hero-content container">
                <h1><?php echo htmlspecialchars($slide['title']); ?></h1>
                <p><?php echo htmlspecialchars($slide['subtitle']); ?></p>
                <a href="tel:<?php echo htmlspecialchars(COMPANY_PHONE); ?>" class="btn btn-primary">Zavolajte nam</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</section>
