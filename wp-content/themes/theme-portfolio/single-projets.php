<?php get_header(); ?>

    <main class="background-single-projet">
        <section class="single-projet__container">

            <a href="<?= get_post_type_archive_link('projets'); ?>" class="single-projet__back">
                &larr; Retour aux projets
            </a>

            <h2 class="single-projet__title"><?php the_title(); ?></h2>
            <?php if (have_rows('textmedia_project')): ?>

                <?php
                $count = 0;
                while (have_rows('textmedia_project')):
                    the_row();
                    $count++;
                    $textmedia_title = get_sub_field('textmedia_title');
                    $textmedia_desc = get_sub_field('textmedia_desc');
                    $textmedia_image = get_sub_field('textmedia_image');
                    $textmedia_link = get_sub_field('textmedia_link');
                    $textmedia_align = get_sub_field('textmedia_align');
                    $modifier = ($textmedia_align === 'droite') ? '__right' : '__left';
                    ?>
                    <div class="single-projet__layout<?= $modifier; ?>">
                        <div class="single-projet-textmedia__container">
                            <?php if ($textmedia_title): ?>
                                <h2 class="single-projet-textmedia__title"><?= esc_html($textmedia_title); ?></h2>
                            <?php endif; ?>
                            <?php if (!empty($textmedia_desc)): ?>
                                <div class="single-projet-textmedia__desc">

                                    <?= $textmedia_desc; ?>
                                </div>
                            <?php endif; ?>
                            <?php
                            if (!empty($textmedia_image)): ?>
                            <div class="single-projet-textmedia__link">
                                <a
                                        class="text-media__button"
                                        title="<?= esc_attr($textmedia_link['title']); ?>"
                                        target="<?= esc_attr($textmedia_link['target']); ?>"
                                        href="<?= esc_url($textmedia_link['url']); ?>"
                                >
                                    <?= esc_html($textmedia_link['title']); ?>
                                </a>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php

                        if (!empty($textmedia_image)): ?>
                            <div class="single-projet-textmedia__media">
                            <div class="single-projet-textmedia__image-wrapper">
                                <?= wp_get_attachment_image($textmedia_image['id'], 'medium', [
                                        'alt' => $textmedia_image['alt'],
                                        'lazyload' => true,
                                ]) ?>
                            </div>
                        <?php else: ?>
                            <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>
    </main>

<?php get_footer(); ?>