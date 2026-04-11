<?php

$aboutme_title = get_field('aboutme_title');
$aboutme_image = get_field('aboutme_image');
$aboutme_badge = get_field('aboutme_badge');
$aboutme_desc = get_field('aboutme_desc');

$path_title = get_field('path_title');
?>
<section class="page__aboutme">
    <div class="aboutme__container">
        <div class="aboutme__content">
            <?php if (!empty($aboutme_image)) : ?>
                <div class="aboutme__image">
                    <img src="<?= esc_url($aboutme_image['sizes']['large']); ?>"
                         alt="<?= esc_attr($aboutme_image['alt']); ?>"
                         width="<?= esc_attr($aboutme_image['sizes']['large-width']); ?>"
                         height="<?= esc_attr($aboutme_image['sizes']['large-height']); ?>">
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
    </div>
</section>

