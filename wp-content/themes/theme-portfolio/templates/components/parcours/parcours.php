<?php
$path_title = get_field( 'path_title' );
?>
<section class="pages__parcours parcours">
    <div class="parcours__container">
        <div class="parcours__content">
            <?php if (!empty($path_title)) : ?>
                <h2 class="parcours__title">
                    <?= esc_html($path_title) ?>
                </h2>
            <?php endif; ?>
        </div>
    </div>
</section>
