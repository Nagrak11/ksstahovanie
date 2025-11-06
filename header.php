<header>
    <div class="header-container">
        <a href="#home" class="logo"><?php echo htmlspecialchars(COMPANY_NAME); ?></a>

        <nav class="nav-desktop" aria-label="Primary navigation">
            <ul>
                <li><a href="#home">Domov</a></li>
                <li><a href="#about">O nas</a></li>
                <li><a href="#services">Sluzby</a></li>
                <li><a href="#gallery">Galeria</a></li>
                <li><a href="#reviews">Recenzie</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </nav>

        <button id="mobile-menu-button" class="mobile-menu-button" aria-expanded="false" aria-label="Toggle menu" type="button">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <nav id="mobile-menu" class="mobile-menu hidden" aria-label="Mobile navigation">
        <a href="#home">Domov</a>
        <a href="#about">O nas</a>
        <a href="#services">Sluzby</a>
        <a href="#gallery">Galeria</a>
        <a href="#reviews">Recenzie</a>
        <a href="#contact">Kontakt</a>
    </nav>
</header>
