<?php
get_header();
?>

<div class="projects-container">
    <h1>Mes Projets</h1>
    <div class="projects-grid">
        <?php
        $args = array(
            'post_type' => 'projet',
            'posts_per_page' => -1,
        );
        $projects = new WP_Query($args);

        if ($projects->have_posts()) :
            while ($projects->have_posts()) : $projects->the_post();
                $resume = get_post_meta(get_the_ID(), 'resume', true);
                $categorie = get_post_meta(get_the_ID(), 'categorie', true);
                ?>
                <div class="project-card">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                        <h2><?php the_title(); ?></h2>
                        <p><?php echo esc_html($resume); ?></p>
                        <span class="project-category"><?php echo esc_html($categorie); ?></span>
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
</div>

<?php
get_footer();
