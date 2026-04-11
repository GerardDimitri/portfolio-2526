<?php
$path_title = get_field('path_title');
?>
<section class="parcours">
    <div class="parcours__container">
        <div class="parcours__content">
            <?php if (!empty($path_title)) : ?>
                <h2 class="parcours__title">
                    <?= esc_html($path_title) ?>
                </h2>
            <?php endif; ?>

            <?php if (have_rows('skills')): ?>
                <div class="">
                    <?php while (have_rows('skills')): the_row();
                        $skill_title = get_sub_field('skill_title');
                        $skill_text  = get_sub_field('skill_text');
                        ?>
                        <article class="">
                            <div class="">
                                <?php if ($skill_title) : ?>
                                    <h3 class=""><?php echo esc_html($skill_title); ?></h3>
                                <?php endif; ?>

                                <?php if ($skill_text) : ?>
                                    <div class="">
                                        <?php echo $skill_text; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
