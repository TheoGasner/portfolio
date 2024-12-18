<?php
/*
Template Name: Page Projets
*/
get_header();
?>

<main class="projects-page">
    <h1 class="page-title">Mes Projets</h1>

    <!-- Filtres -->
    <div class="project-filters">
        <button data-filter="all">Tous</button>
        <button data-filter="dev">Développement</button>
        <button data-filter="design">Design</button>
        <button data-filter="comm">Communication</button>
    </div>

    <!-- Liste des projets -->
    <div class="project-cards">
        <?php
        $args = [
            'post_type' => 'projects',
            'posts_per_page' => -1,
        ];
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $category = get_field('categorie'); // Catégorie ajoutée avec ACF
                $summary = get_field('resume'); // Résumé
        ?>
                <div class="project-card" data-category="<?php echo esc_attr($category); ?>">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                        <h2><?php the_title(); ?></h2>
                        <p><?php echo esc_html($summary); ?></p>
                    </a>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Aucun projet trouvé.</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
