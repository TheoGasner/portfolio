<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="main-header">
    <div class="container">
        <!-- Logo -->
        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="Logo Théo GASNER">
        </a>

        <!-- Navigation principale -->
        <nav class="main-nav">
            <!-- Icône burger -->
            <div class="burger-icon" id="burger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- Menu overlay -->
            <div class="menu-overlay" id="menu-overlay">
                <ul>
                    <li><a href="#projects">Projets</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('about_page'); ?>">À propos</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<?php wp_footer(); ?>
</body>
</html>
