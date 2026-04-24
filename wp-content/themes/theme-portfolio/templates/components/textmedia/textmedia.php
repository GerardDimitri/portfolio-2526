<?php
$media_text = get_field('media_text');
$media_title = get_field('media_title');
$media_image = get_field('media_image');
$media_link = get_field('media_link');
?>

<div class="single-projet__text">
    <h2 class="single-projet__subtitle">L'histoire du projet</h2>
    <div class="wysiwyg-content">
        <?= esc_html($media_text);
        ?>
    </div>
</div>

<div class="single-projet__media">
    <?php

    if( !empty( $media_image ) ): ?>
        <div class="single-projet__image-wrapper">
            <img src="<?= esc_url($media_image['url']); ?>" alt="<?= esc_attr($media_image['alt']); ?>" />
        </div>
    <?php else: ?>
        <?php the_post_thumbnail('large'); ?>
    <?php endif; ?>
</div>