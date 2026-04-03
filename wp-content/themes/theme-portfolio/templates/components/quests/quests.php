<?php
/**
 * Component: Quests Section
 * Path: templates/components/quests/quests.php
 */

$quest_title = get_field('quest_title'); // Le titre stylisé (ex: "Le départ")
$title       = get_field('title');       // Le titre de la section (ex: "Ma Quête")
?>

<section class="quest-section">
    <div class="quest-section__container">

        <?php if ($title): ?>
            <h2 class="section__title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <?php if ($quest_title): ?>
            <header class="quest-section__header">
                <h3 class="quest-section__subtitle"><?php echo esc_html($quest_title); ?></h3>
                <div class="quest-section__divider"></div>
            </header>
        <?php endif; ?>

        <?php if (have_rows('step_quests')): ?>
            <div class="quest-section__timeline">
                <?php while (have_rows('step_quests')): the_row();
                    $step_title = get_sub_field('step_title');
                    $step_desc  = get_sub_field('step_desc');
                    $step_align = get_sub_field('step_align');
                    $modifier   = ($step_align === 'droite') ? 'quest-step--right' : 'quest-step--left';
                    ?>
                    <article class="quest-step <?php echo $modifier; ?>">
                        <div class="quest-step__content">
                            <?php if ($step_title): ?>
                                <h3 class="quest-step__title"><?php echo esc_html($step_title); ?></h3>
                            <?php endif; ?>

                            <?php if ($step_desc): ?>
                                <div class="quest-step__description">
                                    <?php echo $step_desc; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <div class="quest-section__cta">
            <?php get_template_part('templates/components/cta/cta'); ?>
        </div>

    </div>
</section>