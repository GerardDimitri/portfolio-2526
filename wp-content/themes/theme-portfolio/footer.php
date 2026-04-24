<?php
$social_media = dw_get_navigation_links('social-media');
$nav_footer = dw_get_navigation_links('footer');
$utils_1 = dw_get_navigation_links('utils-1'); // ex: CSS Tricks, etc.
$utils_2 = dw_get_navigation_links('utils-2'); // ex: Cairn, Gallica
?>

<footer class="footer" role="contentinfo">
    <nav class="footer__menu" aria-label="Ressources techniques">
        <h2 class="hidden">Menu de navigation de bas de page</h2>
        <ul class="footer__list" role="list">
            <li class="footer__item">
                Ressources utiles
                <ul>
                    <li itemprop="sameAs">
                        <a href="">test</a>
                    </li>
                </ul>
            </li>
            <li class="footer__item">
                Navigation
                <ul>
                    <li itemprop="sameAs">
                        <a href="">test</a>
                    </li>
                </ul>
            </li>
            <li class="footer__item">
                Ressources utiles (encore)
                <ul>
                    <li itemprop="sameAs">
                        <a href="">test</a>
                    </li>
                </ul>
            </li>
            <li class="footer__item">
                Suivez-moi
                <ul>
                    <li itemprop="sameAs">
                        <a href="">test</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="footer__bottom">
            <div>
                <p class="footer__copyright">
                    © <?= date('Y'); ?> <strong>Dimitri Gerard</strong>. Tous droits réservés. Créé par Dimitri Gerard
                </p>
                <a href="<?= get_permalink(get_page_by_path('mention-legale')); ?>" class="footer__legal">Mentions
                    légales</a>
            </div>
        </div>
    </nav>
</footer>