<?php $skills_title = get_field('skills_title'); ?>
<?php if (have_rows('skills')): ?>
    <section class="page__skills__footer">
        <div class="page__skills skills">
            <h2 class="skills__title"><?= esc_html($skills_title) ?></h2>
            <div class="skills__container">
                <?php while (have_rows('skills')):
                    the_row();
                    $skill_title = get_sub_field('skill_title');
                    $skill_text = get_sub_field('skill_text');
                    ?>
                    <article class="skills__cards cards">
                        <?php if ($skill_title) : ?>
                            <h3 class="cards__title"><?php echo esc_html($skill_title); ?></h3>
                        <?php endif; ?>

                        <?php if ($skill_text) : ?>
                            <p class="cards__text">
                                <?php echo $skill_text; ?>
                            </p>
                        <?php endif; ?>
                    </article>

                <?php endwhile; ?>
            </div>
            <div class="skills__cta">
                <?php get_template_part('templates/components/cta/cta'); ?>
            </div>
        </div>
    </section>
<?php endif; ?>