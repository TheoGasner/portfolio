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
                <li><a href="<?php echo site_url('/'); ?>"><i class="fas fa-home"></i> Accueil</a></li>
                <li><a href="<?php echo site_url('/a-propos'); ?>"><i class="fas fa-user"></i> À propos</a></li>
                <li><a href="<?php echo site_url('/cv'); ?>"><i class="fas fa-briefcase"></i> CV</a></li>
                <li><a href="<?php echo site_url('/contact'); ?>"><i class="fas fa-phone"></i> Contact</a></li>
            </ul>
        </nav>

        <!-- Séparateur -->
        <div class="footer-divider"></div>

        <!-- Réseaux sociaux -->
        <div class="social-links">
            <a href="https://www.facebook.com/theo.gasner.7" target="_blank" rel="noopener noreferrer" class="social-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.svg" alt="Facebook">
            </a>
             <a href="https://www.instagram.com/theo_gsnr/" target="_blank" rel="noopener noreferrer" class="social-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.svg" alt="Instagram">
             </a>
             <a href="https://www.linkedin.com/in/th%C3%A9o-gasner-a6758129a/" target="_blank" rel="noopener noreferrer" class="social-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-icon.svg" alt="LinkedIn">
    </a>
</div>

        <!-- Mentions légales -->
        <div class="footer-info">
            <p>© 2024 Théo Gasner | Tous droits réservés</p>
        </div>
    </div>
</footer>
