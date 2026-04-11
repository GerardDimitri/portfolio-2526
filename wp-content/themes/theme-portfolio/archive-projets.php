<?php get_header(); ?>

    <main class="archive-projets">
        <div class="archive-projets__container">

            <header class="archive-projets__header">
                <h1 class="section__title">Mes Réalisations</h1>
                <p class="archive-projets__intro">
                    Découvrez les escales de mon voyage numérique : des projets passionnants alliant technique et esthétique.
                </p>
            </header>

            <?php if (have_posts()) : ?>
                <div class="projets-grid">
                    <?php while (have_posts()) : the_post();
                        // On récupère les types de projets (taxonomie 'difficulty')
                        $terms = get_the_terms(get_the_ID(), 'difficulty');
                        ?>
                        <article class="projet-card">
                            <a href="<?php the_permalink(); ?>" class="projet-card__link">

                                <div class="projet-card__image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php else : ?>
                                        <img src="<?= get_template_directory_uri(); ?>/public/img/default-project.jpg" alt="Projet Dimitri">
                                    <?php endif; ?>
                                </div>

                                <div class="projet-card__content">
                                    <?php if ($terms) : ?>
                                        <span class="projet-card__type">
                                        <?= esc_html($terms[0]->name); ?>
                                    </span>
                                    <?php endif; ?>

                                    <h2 class="projet-card__title"><?php the_title(); ?></h2>

                                    <div class="projet-card__excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>

                                    <span class="projet-card__btn">Voir le projet</span>
                                </div>
                            </a>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="archive-projets__pagination">
                    <?php the_posts_pagination(); ?>
                </div>

            <?php else : ?>
                <p class="archive-projets__empty">Aucun projet n'a été trouvé pour le moment. L'aventure commence bientôt !</p>
            <?php endif; ?>

        </div>
    </main>

<?php get_footer(); ?>