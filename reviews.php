<section id="reviews" class="section" style="background-color: var(--bg-light);">
    <div class="container">
        <h2 class="section-title">Recenzie</h2>
        <p class="section-subtitle">o hovoria naai spokojní zákazníci</p>

        <div class="reviews-grid">
            <?php
            global $reviews;
            foreach ($reviews as $review):
            ?>
            <div class="review-card">
                <div class="review-header">
                    <div class="review-name"><?php echo $review['name']; ?></div>
                </div>
                <div class="review-stars">
                    <?php
                    for ($i = 0; $i < $review['rating']; $i++) {
                        echo 'P';
                    }
                    ?>
                </div>
                <p class="review-text">"<?php echo $review['text']; ?>"</p>
            </div>
            <?php endforeach; ?>
        </div>

        <div style="text-align: center; margin-top: 3rem; padding: 2rem; background-color: var(--white); border-radius: 0.5rem; box-shadow: var(--shadow);">
            <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--text-dark);">
                Chcete bye alaí spokojný zákazník?
            </h3>
            <p style="color: var(--text-light); margin-bottom: 1.5rem;">
                Kontaktujte nás eate dnes a získajte bezplatnú cenovú ponuku!
            </p>
            <a href="tel:<?php echo COMPANY_PHONE; ?>" class="btn btn-primary">
                =Þ Zavolajte teraz
            </a>
        </div>
    </div>
</section>
