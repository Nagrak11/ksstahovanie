<section id="hero-slider" class="hero-slider">
    <?php
    global $hero_slides;
    foreach ($hero_slides as $index => $slide):
        $active_class = $index === 0 ? 'active opacity-100' : 'opacity-0';
    ?>
    <div class="hero-slide <?php echo $active_class; ?>">
        <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>" class="hero-slide-image">
        <div class="hero-overlay">
            <div class="hero-content container">
                <h1><?php echo $slide['title']; ?></h1>
                <p><?php echo $slide['subtitle']; ?></p>
                <a href="tel:<?php echo COMPANY_PHONE; ?>" class="btn btn-primary">Zavolajte nám</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</section>
