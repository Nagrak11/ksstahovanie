<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3><?php echo htmlspecialchars(COMPANY_NAME); ?></h3>
                <p>Profesionalne stahovacie a autodopravne sluzby v Humenne a okoli.</p>
                <p>Rychlo, bezpecne a spolahlivo.</p>
            </div>

            <div class="footer-section">
                <h3>Kontakt</h3>
                <p>&#128222; <a href="tel:<?php echo htmlspecialchars(COMPANY_PHONE); ?>"><?php echo htmlspecialchars(COMPANY_PHONE); ?></a></p>
                <p>&#9993; <a href="mailto:<?php echo htmlspecialchars(COMPANY_EMAIL); ?>"><?php echo htmlspecialchars(COMPANY_EMAIL); ?></a></p>
                <p>&#128205; <?php echo htmlspecialchars(COMPANY_ADDRESS); ?></p>
            </div>

            <div class="footer-section">
                <h3>Sluzby</h3>
                <a href="#services">Stahovanie bytov a domov</a>
                <a href="#services">Firemne stahovanie</a>
                <a href="#services">Medzinarodna preprava</a>
                <a href="#services">Balenie a ochrana</a>
            </div>

            <div class="footer-section">
                <h3>Rychle odkazy</h3>
                <a href="#home">Domov</a>
                <a href="#about">O nas</a>
                <a href="#gallery">Galeria</a>
                <a href="#contact">Kontakt</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars(COMPANY_NAME); ?>. Vsetky prava vyhradene.</p>
        </div>
    </div>
</footer>
