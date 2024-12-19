<?php
/* Template Name: Projects */
get_header();
?>

<div class="projects-container">
    <h1>Mes Projets</h1>
    <div class="project-filters">
        <button class="filter-btn" data-category="all">Tous les projets</button>
        <button class="filter-btn" data-category="developpement">Développement</button>
        <button class="filter-btn" data-category="design">Design</button>
        <button class="filter-btn" data-category="communication">Communication</button>
    </div>

    <div class="projects-grid">
        <?php
        $args = array(
            'post_type' => 'projects',
            'posts_per_page' => -1,
        );
        $projects = new WP_Query($args);
        if ($projects->have_posts()) :
            while ($projects->have_posts()) : $projects->the_post();
                $resume = get_field('resume');
                $category = get_field('categorie');
                ?>
                <div class="project-card" data-category="<?php echo esc_attr($category); ?>">
                    <a href="<?php the_permalink(); ?>">
                        <div class="project-image">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                        <div class="project-info">
                            <h2><?php the_title(); ?></h2>
                            <p><?php echo esc_html($resume); ?></p>
                        </div>
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

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const filterButtons = document.querySelectorAll(".filter-btn");
        const projectCards = document.querySelectorAll(".project-card");

        filterButtons.forEach(button => {
            button.addEventListener("click", () => {
                const category = button.getAttribute("data-category");

                projectCards.forEach(card => {
                    if (category === "all" || card.getAttribute("data-category") === category) {
                        card.style.display = "block";
                    } else {
                        card.style.display = "none";
                    }
                });
            });
        });
    });
</script>

<?php get_footer(); ?>
