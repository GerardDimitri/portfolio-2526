<?php

$aboutme_title = get_field('aboutme_title');
$aboutme_image = get_field('aboutme_image');
$aboutme_badge = get_field('aboutme_badge');
$aboutme_desc = get_field('aboutme_desc');

$path_title = get_field('path_title');
?>
<main id="contenu" class="background-aboutme">
    <section class="page__presentation">
            <div class="aboutme__content">
                <?php if (!empty($aboutme_image)) : ?>
                    <div class="aboutme__image">
                        <?= wp_get_attachment_image($aboutme_image['id'], 'medium', [
                                'alt' => $aboutme_image['alt'],
                                'lazyload' => true,
                        ]) ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($aboutme_title)) : ?>
                    <h2 class="aboutme__title">
                        <?= esc_html($aboutme_title) ?>
                    </h2>
                <?php endif; ?>

                <?php if (!empty($aboutme_badge)) : ?>
                    <span class="aboutme__badge">
                    <?= esc_html($aboutme_badge) ?>
                </span>
                <?php endif; ?>
            </div>
            <?php if (!empty($aboutme_desc)) : ?>
                <p class="aboutme__desc">
                    <?= esc_html($aboutme_desc) ?>
                </p>
            <?php endif; ?>
    </section>
    <?php get_template_part('templates/components/parcours/parcours'); ?>
    <?php get_template_part('templates/components/skills/skills'); ?>
</main>

