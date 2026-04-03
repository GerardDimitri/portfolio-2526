<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?= dw_asset('css'); ?>">
    <script src="<?= dw_asset('js') ?>" defer></script>
</head>
<body>
<a href="#main-content" class="skip-link sro">Sauter au contenu principal</a>
<header class="header" role="banner">
    <nav class="header__nav" aria-label="Navigation principale">
        <div class="header__logo">
            <a href="<?= home_url('/') ?>" class="header__logo-link">
                <svg class="header__logo-svg" viewBox="0 0 702 406" aria-hidden="true">
                    <path d="M632.572 193.827C633.735 193.181 635.144 193.156 636.33 193.76L699.331 225.847C700.672 226.53 701.516 227.907 701.516 229.412V257.479C701.516 258.977 700.679 260.349 699.348 261.035L427.206 401.271C424.094 402.875 420.568 399.989 421.527 396.621L434.232 351.975C434.534 350.914 435.26 350.025 436.24 349.518L636.759 245.68C637.565 245.262 638.072 244.43 638.072 243.522C638.072 242.591 637.54 241.742 636.703 241.335L595.78 221.471C592.867 220.057 592.754 215.948 595.585 214.376L632.572 193.827Z" fill="#0C00F7"/>
                    <path d="M476.765 91.833C479.438 91.8331 481.359 94.4052 480.6 96.9688L477.046 108.962C476.498 110.811 477.347 112.787 479.066 113.663L557.772 153.749C560.772 155.277 560.658 159.601 557.582 160.969L513.85 180.405C512.776 180.882 511.547 180.863 510.488 180.354L466.949 159.377C464.728 158.307 462.077 159.481 461.377 161.844L391.138 398.904C390.634 400.603 389.074 401.767 387.303 401.768H344.097C341.392 401.768 339.466 399.138 340.283 396.56L435.95 94.624C436.477 92.9621 438.019 91.8331 439.763 91.833H476.765Z" fill="#0C00F7"/>
                    <path d="M407.639 0C410.386 0 412.315 2.70548 411.421 5.30273L275.798 399.07C275.242 400.684 273.724 401.767 272.017 401.768H235.19C232.443 401.768 230.514 399.062 231.408 396.465L236.053 382.978C236.702 381.092 235.864 379.016 234.086 378.111L2.18457 260C0.844278 259.317 0.000136413 257.941 0 256.437V228.442C0 226.907 0.879267 225.506 2.2627 224.839L302.441 80.126C305.631 78.5882 309.099 81.6486 307.97 85.0049L294.031 126.421C293.691 127.432 292.961 128.264 292.004 128.734L64.8125 240.355C64.0066 240.752 63.4894 241.565 63.4727 242.463C63.4553 243.4 63.985 244.261 64.8291 244.668L248.481 333.172C250.638 334.211 253.22 333.135 253.999 330.871L367.031 2.69727C367.587 1.08345 369.106 0.000114316 370.812 0H407.639Z" fill="#0C00F7"/>
                </svg>
                <span class="sro">Dimitri Gerard - Accueil</span>
            </a>
        </div>

        <input type="checkbox" id="menu-toggle" class="header__checkbox sro" aria-hidden="true">

        <label for="menu-toggle" class="header__burger" aria-label="Ouvrir le menu">
            <span class="header__burger-line"></span>
            <span class="header__burger-line"></span>
            <span class="header__burger-line"></span>
        </label>

        <ul class="header__menu" role="list">
            <?php foreach (dw_get_navigation_links('header') as $link) :
                $active_class = (home_url($_SERVER['REQUEST_URI']) == $link->href) ? 'active' : '';
                ?>
                <li class="header__item <?= $active_class ?>">
                    <a href="<?= $link->href ?>" class="header__link"><?= $link->label ?></a>
                </li>
            <?php endforeach; ?>
            <?php if(function_exists('pll_the_languages')): ?>
                <?php foreach (pll_the_languages(['raw' => 1]) as $lang => $link) :
                    if($link['current_lang']) continue;
                    ?>
                    <li class="header__item">
                        <a class="header__link" href="<?= $link['url'] ?>"><?= strtoupper($lang) ?></a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </nav>
</header>
