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
            $about_image = get_post_meta(get_the_ID(), 'about_image', true);
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
                $about_intro = get_post_meta(get_the_ID(), 'about_intro', true);
                echo wp_kses_post($about_intro);
                ?>
            </p>

            <div class="about-description">
                <?php 
                $about_details = get_post_meta(get_the_ID(), 'about_details', true);
                echo wp_kses_post($about_details);
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
