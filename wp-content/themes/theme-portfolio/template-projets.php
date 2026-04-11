<?php
/**
 * Template Name: Page Liste Projets
 */
get_header();

$terms = get_terms(['taxonomy' => 'difficulty', 'hide_empty' => true]);
?>

    <main class="page-projets">
        <div class="page-projets__container">

            <h1 class="section__title">Mes Projets</h1>

            <nav class="projets-filter">
                <button class="projets-filter__btn is-active" data-filter="all">Tout</button>
                <?php foreach ($terms as $term) : ?>
                    <button class="projets-filter__btn" data-filter="<?= esc_attr($term->slug); ?>">
                        <?= esc_html($term->name); ?>
                    </button>
                <?php endforeach; ?>
            </nav>

            <?php
            $args = ['post_type' => 'projets', 'posts_per_page' => -1];
            $projets_query = new WP_Query($args);

            if ($projets_query->have_posts()) : ?>
                <div class="projets-grid">
                    <?php while ($projets_query->have_posts()) : $projets_query->the_post();
                        $project_terms = get_the_terms(get_the_ID(), 'difficulty');
                        $slugs = $project_terms ? implode(' ', wp_list_pluck($project_terms, 'slug')) : '';
                        ?>
                        <article class="projet-card" data-category="<?= esc_attr($slugs); ?>">
                            <a href="<?php the_permalink(); ?>" class="projet-card__link">
                                <div class="projet-card__wrapper">

                                    <?php
                                    $image_projet = get_field('project_image');

                                    if ( !empty($image_projet) ) : ?>
                                        <div class="projet-card__image">
                                            <img src="<?php echo esc_url($image_projet['url']); ?>"
                                                 alt="<?php echo esc_attr($image_projet['alt']); ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="projet-card__image">
                                            <?php the_post_thumbnail('large'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <h2 class="projet-card__title"><?php the_title(); ?></h2>
                                </div>
                            </a>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>

            <div class="cta">
                <div class="projets-pagination__cta"> <a href="#" class="btn">Suivant &rarr;</a>
            </div>

        </div>
    </main>

<?php get_footer(); ?>