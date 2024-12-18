<?php
/*
Template Name: Page Contact
*/
get_header();
?>

<main class="contact-page">
    <h1>Contact</h1>
    <div class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="123" title="Formulaire de contact"]'); ?>
    </div>

    <div class="contact-map">
        <h2>Ma Localisation</h2>
        <iframe src="https://maps.google.com/maps?q=ton_adresse&t=&z=15&ie=UTF8&iwloc=&output=embed"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</main>

<?php get_footer(); ?>
