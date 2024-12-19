<?php

// Enregistrer les emplacements des menus
function portfolio_register_menus() {
    register_nav_menus(array(
        'header-menu' => __('Menu Principal', 'portfolio'),
        'footer-menu' => __('Menu Footer', 'portfolio')
    ));
}
add_action('after_setup_theme', 'portfolio_register_menus');

// Activer les images mises en avant et le titre du site
function portfolio_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'portfolio_theme_support');

// Charger les styles et scripts
function portfolio_theme_enqueue_scripts() {
    // Charger les styles
    wp_enqueue_style(
        'portfolio-styles',
        get_template_directory_uri() . '/css/styles.css',
        [],
        filemtime(get_template_directory() . '/css/styles.css')
    );

    // Charger le script pour le fond spatial
    wp_enqueue_script(
        'background-animation',
        get_template_directory_uri() . '/js/background.js',
        [],
        filemtime(get_template_directory() . '/js/background.js'),
        true
    );

    // Charger le script pour l'en-tête
    wp_enqueue_script(
        'header-animation',
        get_template_directory_uri() . '/js/header.js',
        [],
        filemtime(get_template_directory() . '/js/header.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'portfolio_theme_enqueue_scripts');

?>
