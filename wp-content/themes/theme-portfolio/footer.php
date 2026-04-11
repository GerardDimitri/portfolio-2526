<?php
$social_media = dw_get_navigation_links('social-media');
$nav_footer   = dw_get_navigation_links('footer');
$utils_1      = dw_get_navigation_links('utils-1'); // ex: CSS Tricks, etc.
$utils_2      = dw_get_navigation_links('utils-2'); // ex: Cairn, Gallica
?>

<footer class="footer" role="contentinfo">
    <div class="footer__container">

        <nav class="footer__section" aria-label="Ressources techniques">
            <h2 class="footer__title">Ressources Utiles</h2>
            <ul class="footer__list" role="list">
                <?php foreach ($utils_1 as $link) : ?>
                    <li class="footer__item">
                        <a class="footer__link" href="<?= $link->href ?>" target="_blank" rel="noopener"><?= $link->label ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <nav class="footer__section" aria-label="Menu secondaire">
            <h2 class="footer__title">Navigation</h2>
            <ul class="footer__list" role="list">
                <?php foreach ($nav_footer as $link) : ?>
                    <li class="footer__item">
                        <a class="footer__link" href="<?= $link->href ?>"><?= $link->label ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <nav class="footer__section" aria-label="Ressources académiques">
            <h2 class="footer__title">Ressources utiles</h2>
            <ul class="footer__list" role="list">
                <?php foreach ($utils_2 as $link) : ?>
                    <li class="footer__item">
                        <a class="footer__link" href="<?= $link->href ?>" target="_blank" rel="noopener"><?= $link->label ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <div class="footer__section">
            <h2 class="footer__title">Mes réseaux sociaux</h2>
            <ul class="footer__list" role="list">
                <?php foreach ($social_media as $link) : ?>
                    <li class="footer__item">
                        <a class="footer__link" href="<?= $link->href ?>" title="<?= $link->label ?>" target="_blank" rel="noopener">
                            <?= $link->label ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div> <div class="footer__bottom">
        <p class="footer__copyright">
            © <?= date('Y'); ?> <strong>Dimitri Gerard</strong>. Tous droits réservés. Créé par Dimitri Gerard
        </p>
        <a href="<?= get_permalink(get_page_by_path('mention-legale')); ?>" class="footer__legal">Mentions légales</a>
    </div>
</footer>