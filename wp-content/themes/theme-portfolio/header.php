<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?= dw_asset('css'); ?>">
    <script src="<?= dw_asset('js') ?>" defer></script>
</head>
<body>
<header class="header" role="banner">
    <h1 class="hidden title-hidden">Accueil</h1>
    <nav class="header__nav" role="navigation" aria-label="Navigation principale">
        <h2 class="hidden title-hidden" aria-level="2" role="heading">Menu de navigation principale</h2>
        <a class="sro" href="#contenu" tabindex="1" title="Aller au contenu principal de la page">Aller au contenu</a>

        <a href="<?= home_url('/') ?>" class="header__logo" title="Vers la page d'accueil">
            <svg class="header__logo-svg" viewBox="0 0 702 406" aria-hidden="true">
                <path d="M632.572 193.827C633.735 193.181 635.144 193.156 636.33 193.76L699.331 225.847C700.672 226.53 701.516 227.907 701.516 229.412V257.479C701.516 258.977 700.679 260.349 699.348 261.035L427.206 401.271C424.094 402.875 420.568 399.989 421.527 396.621L434.232 351.975C434.534 350.914 435.26 350.025 436.24 349.518L636.759 245.68C637.565 245.262 638.072 244.43 638.072 243.522C638.072 242.591 637.54 241.742 636.703 241.335L595.78 221.471C592.867 220.057 592.754 215.948 595.585 214.376L632.572 193.827Z"/>
                <path d="M476.765 91.833C479.438 91.8331 481.359 94.4052 480.6 96.9688L477.046 108.962C476.498 110.811 477.347 112.787 479.066 113.663L557.772 153.749C560.772 155.277 560.658 159.601 557.582 160.969L513.85 180.405C512.776 180.882 511.547 180.863 510.488 180.354L466.949 159.377C464.728 158.307 462.077 159.481 461.377 161.844L391.138 398.904C390.634 400.603 389.074 401.767 387.303 401.768H344.097C341.392 401.768 339.466 399.138 340.283 396.56L435.95 94.624C436.477 92.9621 438.019 91.8331 439.763 91.833H476.765Z"/>
                <path d="M407.639 0C410.386 0 412.315 2.70548 411.421 5.30273L275.798 399.07C275.242 400.684 273.724 401.767 272.017 401.768H235.19C232.443 401.768 230.514 399.062 231.408 396.465L236.053 382.978C236.702 381.092 235.864 379.016 234.086 378.111L2.18457 260C0.844278 259.317 0.000136413 257.941 0 256.437V228.442C0 226.907 0.879267 225.506 2.2627 224.839L302.441 80.126C305.631 78.5882 309.099 81.6486 307.97 85.0049L294.031 126.421C293.691 127.432 292.961 128.264 292.004 128.734L64.8125 240.355C64.0066 240.752 63.4894 241.565 63.4727 242.463C63.4553 243.4 63.985 244.261 64.8291 244.668L248.481 333.172C250.638 334.211 253.22 333.135 253.999 330.871L367.031 2.69727C367.587 1.08345 369.106 0.000114316 370.812 0H407.639Z"/>
            </svg>
        </a>

        <input class="header__checkbox sro" type="checkbox" id="menu-toggle" aria-hidden="true"/>
        <label class="header__burger" for="menu-toggle" id="burger">
            <span class="sro">Menu</span>
            <svg focusable="false" aria-hidden="true" width="48" height="32" viewBox="0 0 48 32" xmlns="http://www.w3.org/2000/svg">
                <path class="line-top" d="M24.2648 7.57568L13.4553 5.97009C8.18626 5.20121 6.01532 3.86699 0.022614 2.96243C0.022614 2.93982 18.7696 0 18.9279 0C27.9735 1.26638 36.0467 1.42468 42.469 2.2614L43.6902 2.41969L44.8209 2.57799L44.0294 4.83939C43.6223 4.83939 24.7397 7.64352 24.2648 7.57568Z"/>
                <path class="line-mid" d="M1.24377 14.4277L2.28401 14.2694L3.50516 14.1111C9.99537 13.297 18.0459 13.1387 27.2724 11.8497C27.4081 11.8497 47.3989 14.7895 47.3084 14.7895C41.2479 15.6941 38.1271 17.0509 32.7903 17.7972L21.8677 19.4028C21.3928 19.4028 2.32924 16.6891 1.89957 16.7569L1.24377 14.4277Z"/>
                <path class="line-bot" d="M42.469 26.7523L43.6902 26.9106L44.8209 27.0689L44.0294 29.3303C43.5997 29.3303 24.7171 32.0666 24.2422 31.9988L13.4327 30.3932C8.16364 29.6243 6.01532 28.2901 0 27.3855C0 27.3855 18.747 24.4005 18.9053 24.4231C28.0639 25.7573 36.0467 25.9382 42.469 26.7523Z"/>
            </svg>
        </label>

        <div class="container">
            <ul class="menu-mobile" role="list">
                <?php foreach (dw_get_navigation_links('header') as $link) :
                    $is_active = (home_url($_SERVER['REQUEST_URI']) == $link->href);
                    $modifier = $is_active ? ' header__item--active' : '';
                    ?>
                    <li class="header__item<?= $modifier ?>">
                        <a href="<?= $link->href ?>" class="header__link" title="Se diriger vers <?= $link->label ?>">
                            <?= $link->label ?>
                        </a>
                    </li>
                <?php endforeach; ?>

                <?php if (function_exists('pll_the_languages')): ?>
                    <?php foreach (pll_the_languages(['raw' => 1]) as $lang => $link) :
                        if ($link['current_lang']) continue;
                        ?>
                        <li class="header__item header__item--lang">
                            <a class="header__link" href="<?= $link['url'] ?>"
                               title="Changer la langue en <?= $lang ?>">
                                <?= strtoupper($lang) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>