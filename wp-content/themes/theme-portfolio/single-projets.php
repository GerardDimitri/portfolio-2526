<?php get_header(); ?>

    <main class="single-projet">
        <div class="single-projet__container">

            <a href="<?= get_post_type_archive_link('projets'); ?>" class="single-projet__back">
                &larr; Retour aux projets
            </a>

            <header class="single-projet__header">
                <h1 class="single-projet__title"><?php the_title(); ?></h1>
            </header>

            <div class="single-projet__layout">

                <div class="single-projet__text">
                    <h2 class="single-projet__subtitle">L'histoire du projet</h2>
                    <div class="wysiwyg-content">
                        <?php
                        $description = get_field('projet_description');
                        echo $description ? wp_kses_post($description) : 'Pas de description pour le moment.';
                        ?>
                    </div>
                </div>

                <div class="single-projet__media">
                    <?php
                    $image = get_field('projet_image_detail');
                    if( !empty( $image ) ): ?>
                        <div class="single-projet__image-wrapper">
                            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
                        </div>
                    <?php else: ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php endif; ?>
                </div>

            </div>

        </div>
    </main>

<?php get_footer(); ?>