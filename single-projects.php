<?php get_header(); ?>

<main class="project-single">
    <div class="project-details">
        <h1><?php the_title(); ?></h1>
        <?php the_post_thumbnail('large'); ?>
        <div class="project-description">
            <?php the_field('description_complete'); ?>
        </div>
        <p><strong>Catégorie :</strong> <?php the_field('categorie'); ?></p>
        <?php if (get_field('lien_du_projet')) : ?>
            <p><a href="<?php the_field('lien_du_projet'); ?>" target="_blank">Voir le projet</a></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
