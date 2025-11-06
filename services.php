<section id="services" class="section" style="background-color: var(--bg-light);">
    <div class="container">
        <h2 class="section-title">Naae slu~by</h2>
        <p class="section-subtitle">Komplexné seahovacie a dopravné slu~by na mieru</p>

        <div class="services-grid">
            <?php
            global $services;
            foreach ($services as $service):
            ?>
            <div class="service-card">
                <div class="service-icon"><?php echo $service['icon']; ?></div>
                <h3><?php echo $service['title']; ?></h3>
                <p><?php echo $service['description']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="tel:<?php echo COMPANY_PHONE; ?>" class="btn btn-primary">
                Získajte cenovú ponuku
            </a>
        </div>
    </div>
</section>
