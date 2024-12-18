<?php get_header(); ?>

<!-- Section Fond animé -->
<div id="space-background">
    <div id="stars"></div>
    <canvas id="shooting-stars"></canvas>
</div>

<!-- Contenu principal -->
<div id="main-content">
    <h1><span>Bonjour, je suis</span> <strong>Théo GASNER</strong></h1>
    <p>Bienvenue sur mon portfolio, découvrez tous mes projets ici !</p>
    <div class="buttons">
        <a href="#contact" class="btn btn-primary">Contactez-moi</a>
        <a href="#cv" class="btn btn-secondary">Voir mon CV</a>
    </div>
</div>

<!-- Section Compétences -->
<section id="competences">
    <h2 class="section-title">Mes compétences</h2>

    <!-- Design d'expérience -->
    <div class="competence-section">
        <div class="competence-description">
            <h3 class="competence-title">🎨 Design d'expérience</h3>
            <div class="competence-text-box">
                <p>J’ai acquis beaucoup d’expérience lors de ma formation en BUT MMI en termes de design. 
                Que ce soit de la réalisation de logos jusqu’à la création de maquettes interactives, 
                j’ai de solides bases sur les logiciels suivants :</p>
            </div>
        </div>
        <div class="competence-planetes">
            <!-- Planète principale -->
            <div class="planete-main">
                <img src="<?php echo get_template_directory_uri(); ?>/images/design_experience_main.png" alt="Design d'expérience">
            </div>
            <!-- Planètes en orbite -->
            <div class="planete-orbite">
                <div class="planete" data-nom="Figma"><img src="<?php echo get_template_directory_uri(); ?>/images/design_experience_figma.png" alt="Figma"></div>
                <div class="planete" data-nom="Canva"><img src="<?php echo get_template_directory_uri(); ?>/images/design_experience_canva.png" alt="Canva"></div>
                <div class="planete" data-nom="Photoshop"><img src="<?php echo get_template_directory_uri(); ?>/images/design_experience_photoshop.png" alt="Photoshop"></div>
                <div class="planete" data-nom="Illustrator"><img src="<?php echo get_template_directory_uri(); ?>/images/design_experience_illustrator.png" alt="Illustrator"></div>
                <div class="planete" data-nom="OBS"><img src="<?php echo get_template_directory_uri(); ?>/images/design_experience_obs.png" alt="OBS"></div>
                <div class="planete" data-nom="DaVinci Resolve"><img src="<?php echo get_template_directory_uri(); ?>/images/design_experience_davinci.png" alt="DaVinci Resolve"></div>
            </div>
        </div>
    </div>

    <!-- Développement Web -->
    <div class="competence-section">
        <div class="competence-description">
            <h3 class="competence-title">💻 Développement Web</h3>
            <div class="competence-text-box">
                <p>J'ai développé mes compétences en programmation avec des frameworks et langages tels que 
                HTML, CSS, JavaScript, React, et WordPress. Voici quelques outils et technologies que j'utilise :</p>
            </div>
        </div>
        <div class="competence-planetes">
            <!-- Planète principale -->
            <div class="planete-main">
                <img src="<?php echo get_template_directory_uri(); ?>/images/dev_web_main.png" alt="Développement Web">
            </div>
            <!-- Planètes en orbite -->
            <div class="planete-orbite">
                <div class="planete" data-nom="HTML"><img src="<?php echo get_template_directory_uri(); ?>/images/dev_web_html.png" alt="HTML"></div>
                <div class="planete" data-nom="CSS"><img src="<?php echo get_template_directory_uri(); ?>/images/dev_web_css.png" alt="CSS"></div>
                <div class="planete" data-nom="JavaScript"><img src="<?php echo get_template_directory_uri(); ?>/images/dev_web_js.png" alt="JavaScript"></div>
                <div class="planete" data-nom="VuejS"><img src="<?php echo get_template_directory_uri(); ?>/images/dev_web_vuejs.png" alt="VueJs"></div>
                <div class="planete" data-nom="PHP"><img src="<?php echo get_template_directory_uri(); ?>/images/dev_web_php.png" alt="PHP"></div>
                <div class="planete" data-nom="WordPress"><img src="<?php echo get_template_directory_uri(); ?>/images/dev_web_wordpress.png" alt="WordPress"></div>
            </div>
        </div>
    </div>

    <!-- Stratégie de Communication -->
    <div class="competence-section">
        <div class="competence-description">
            <h3 class="competence-title">📊 Stratégie de Communication</h3>
            <div class="competence-text-box">
                <p>J'ai mis en place des stratégies de communication digitales pour analyser les besoins des entreprises 
                et élaborer des campagnes ciblées. Voici quelques outils que j’utilise :</p>
            </div>
        </div>
        <div class="competence-planetes">
            <!-- Planète principale -->
            <div class="planete-main">
                <img src="<?php echo get_template_directory_uri(); ?>/images/strategie_comm_main.png" alt="Stratégie de Communication">
            </div>
            <!-- Planètes en orbite -->
            <div class="planete-orbite">
                <div class="planete" data-nom="Trello"><img src="<?php echo get_template_directory_uri(); ?>/images/strategie_comm_trello.png" alt="Trello"></div>
                <div class="planete" data-nom="Miro"><img src="<?php echo get_template_directory_uri(); ?>/images/strategie_comm_miro.png" alt="Miro"></div>
                <div class="planete" data-nom="PowerPoint"><img src="<?php echo get_template_directory_uri(); ?>/images/strategie_comm_powerpoint.png" alt="PowerPoint"></div>
                <div class="planete" data-nom="Excel"><img src="<?php echo get_template_directory_uri(); ?>/images/strategie_comm_excel.png" alt="Excel"></div>
                <div class="planete" data-nom="Word"><img src="<?php echo get_template_directory_uri(); ?>/images/strategie_comm_word.png" alt="Word"></div>
                <div class="planete" data-nom="GanttProject"><img src="<?php echo get_template_directory_uri(); ?>/images/strategie_comm_gantt.png" alt="GanttProject"></div>
            </div>
        </div>
    </div>
</section>

<!-- Script pour les interactions -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const planetes = document.querySelectorAll('.planete');

    planetes.forEach(planete => {
        planete.addEventListener('click', function () {
            // Vérifie si déjà sélectionnée pour réinitialiser
            const isActive = this.classList.contains('clicked');

            planetes.forEach(p => {
                p.classList.remove('clicked');
                p.style.setProperty('--clicked-text', 'none');
            });

            if (!isActive) {
                this.classList.add('clicked');
                this.style.setProperty('--clicked-text', 'block');
            }
        });
    });
});
</script>



<?php get_footer(); ?>
