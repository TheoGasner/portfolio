<?php
function portfolio_theme_enqueue_scripts() {
    // Charger les styles
    wp_enqueue_style('portfolio-styles', get_template_directory_uri() . '/css/styles.css');

    wp_enqueue_script('background-animation', get_template_directory_uri() . '/js/background.js', [], null, true);


    // Script pour l’animation de header
    wp_enqueue_script('header-animation', get_template_directory_uri() . '/js/header.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'portfolio_theme_enqueue_scripts');

