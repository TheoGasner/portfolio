<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<div class="contact-container">
    <h1 class="contact-title">Contactez-moi</h1>
    
    <!-- Formulaire -->
    <div class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="0eac97b" title="Contact"]'); ?>
    </div>

    <!-- Carte Google Maps -->
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2696.8501037310484!2d6.759372175877801!3d47.47335039717031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47921144d66b55bf%3A0x35e6a3f6e830ddea!2s15%20Rue%20du%20Foyard%2C%2025420%20Voujeaucourt!5e0!3m2!1sfr!2sfr!4v1734620240354!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<?php get_footer(); ?>
