<?php
/**
 * Template Name: Page Liste Projets
 */
get_header();

$terms = get_terms(['taxonomy' => 'difficulty', 'hide_empty' => true]);

// 2. On regarde si un filtre est présent dans l'URL (ex: ?filter=facile)
$current_filter = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : 'all';
?>

    <main class="background-projets">
        <section class="page-projets projets">

            <h2 class="projets__title">Mes Projets</h2>

            <nav class="projets-filter">
                <a href="<?= get_permalink(); ?>"
                   class="projets-filter__btn <?= (!isset($_GET['filter']) || $_GET['filter'] === 'all') ? 'is-active' : ''; ?>">
                    Tout
                </a>

                <?php foreach ($terms as $term) : ?>
                    <?php
                    // On crée l'URL : page-actuelle.php?filter=nom-du-slug
                    $url = add_query_arg('filter', $term->slug, get_permalink());
                    ?>
                    <a href="<?= esc_url($url); ?>"
                       class="projets-filter__btn <?= (isset($_GET['filter']) && $_GET['filter'] === $term->slug) ? 'is-active' : ''; ?>">
                        <?= esc_html($term->name); ?>
                    </a>
                <?php endforeach; ?>
            </nav>

            <?php
            $args = [
                    'post_type' => 'projets',
                    'posts_per_page' => -1
            ];

            // 3. Si un filtre spécifique est sélectionné, on modifie la requête
            if ($current_filter !== 'all') {
                $args['tax_query'] = [
                        [
                                'taxonomy' => 'difficulty',
                                'field'    => 'slug',
                                'terms'    => $current_filter,
                        ],
                ];
            }
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

                                    if (!empty($image_projet)) : ?>
                                        <div class="projet-card__image">
                                            <?= wp_get_attachment_image($image_projet['id'], 'medium', [
                                                    'alt' => $image_projet['alt'],
                                                    'lazyload' => true,
                                            ]) ?>
                                        </div>
                                    <?php else : ?>
                                        <div class="projet-card__image">
                                            <?php the_post_thumbnail('large'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php
                                    $title_projet = get_field('project_title');
                                    if (!empty($title_projet)) : ?> ?>
                                    <h3 class="projet-card__title"> <?= esc_html($title_projet) ?></h3>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>


            <div class="cta">
                <div class="projets-pagination__cta"><a href="#" class="btn">Suivant &rarr;</a>
                </div>
            </div>
    </main>

<?php get_footer(); ?>