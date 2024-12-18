<footer id="main-footer">
    <div class="footer-container">
        <!-- Logo TG cliquable -->
        <a href="<?php echo home_url(); ?>" class="footer-logo-tg">
            <img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="Logo Théo GASNER">
        </a>


        <!-- Logo MMI en bas à gauche -->
        <div class="footer-mmi-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/mmi.png" alt="Logo MMI">
        </div>

        <!-- Navigation -->
        <nav class="footer-nav">
            <ul>
                <li><a href="#home"><i class="fas fa-home"></i> Accueil</a></li>
                <li><a href="#about"><i class="fas fa-user"></i> À propos</a></li>
                <li><a href="#cv"><i class="fas fa-briefcase"></i> CV</a></li>
                <li><a href="<?php echo get_post_type_archive_link('about_page'); ?>">À propos</a></li>
            </ul>
        </nav>

        <!-- Séparateur -->
        <div class="footer-divider"></div>

        <!-- Réseaux sociaux -->
        <div class="footer-socials">
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>

        <!-- Mentions légales -->
        <div class="footer-info">
            <p>© 2024 Théo Gasner | Tous droits réservés</p>
        </div>
    </div>
</footer>
