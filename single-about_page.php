<?php 
/*
Template Name: About Page
*/
get_header();
?>

<!-- Conteneur principal -->
<div class="about-page-container">
    <div class="about-content">
        <!-- Image circulaire -->
        <div class="about-photo">
            <?php 
            $about_image = get_field('about_image'); // Utilisation de get_field pour récupérer l'image
            if ($about_image) {
                echo '<img src="' . esc_url($about_image) . '" alt="Photo" class="rounded-photo">';
            }
            ?>
        </div>

        <!-- Contenu de présentation -->
        <div class="about-details">
            <h1 class="about-title"><?php the_title(); ?></h1>

            <p class="about-intro">
                <?php 
                $about_intro = get_field('about_intro'); // Utilisation de get_field pour le texte d'introduction
                echo wp_kses_post($about_intro);
                ?>
            </p>

            <div class="about-description">
                <?php 
                $about_details = get_field('about_details'); // Utilisation de get_field pour la description
                echo wp_kses_post($about_details);
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
