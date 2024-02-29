<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#114b7d">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&family=Montserrat:ital,wght@0,300;0,400;0,900;1,400&display=swap" rel="stylesheet">
    <style type="text/css">
        @font-face {
            font-family: "ArialRounded";
            src: url(http://www.example.org/mycustomfont.ttf) format("truetype");
            src: url(<?php echo get_stylesheet_directory_uri() . '/_assets/src/fonts/ArialRoundedBold.ttf' ?>) format("truetype");
        }

        @font-face {
            font-family: "Bebas Neue Pro";
            src: url("<?php echo get_stylesheet_directory_uri() . '/_assets/src/fonts/BebasNeuePro.ttf' ?>") format("truetype");
            font-weight: bold;
            font-style: normal;
        }

        @font-face {
            font-family: "Bebas Neue Pro";
            src: url("<?php echo get_stylesheet_directory_uri() . '/_assets/src/fonts/BebasNeueProRegular.ttf' ?>") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Industry";
            src: url(http://www.example.org/mycustomfont.ttf) format("truetype");
            src: url(<?php echo get_stylesheet_directory_uri() . '/_assets/src/fonts/IndustryBold.ttf' ?>) format("truetype");
        }
    </style>
    <!-- Google fonts -->

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ?>/_assets/src/img/favicons/_apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() ?>/_assets/src/img/favicons/_favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() ?>/_assets/src/img/favicons/_favicon-16x16.png">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() ?>/_assets/src/img/favicons/_safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- favicons -->
</head>

<body <?php body_class('font-main body'); ?>>
    <?php
    $logo = get_field('logo', 'options');
    $phone = get_field('phone', 'options');
    $phone_link = get_field('phone_link', 'options');
    ?>

    <!-- testing mega menu -->

    <header class="sticky top-0 w-full z-50 h-32 lg:h-[80px] lg:max-h-[80px] lg:p-1 shadow">
        <div class="z-10 absolute left-0 top-0 w-full h-full object-cover bg-white"></div>
        <div class="relative z-20 container flex justify-between items-center h-full">
            <a href="<?php echo home_url() ?>" class="logo-desktop 2xl:max-w-[200px] lg:hidden">
                <?php echo wp_get_attachment_image($logo, 'full', '', ['class' => '']) ?>
            </a>
            <?php main_menu(); ?>
            <div class="menu-row-wrapper lg:hidden h-full flex">

                <div class="call_header mb-6 hidden justify-center items-center flex-row text-white font-main gap-5 lg:flex">
                    <div class="font-main text-lg leading-none">
                        <?= get_field('phone_available', 'option') ?>
                    </div>
                    <div class="font-main font-bold text-2xl leading-none">
                        <a href="tel:<?php echo $phone ?>"><?= get_field('phone_with_letters', 'option') ?></a>
                    </div>
                    <a class="font-main font-bold flex justify-center items-center bg-accent px-10 py-2 rounded-full text-2xl leading-none h-11 hover:bg-white hover:text-headings" href="tel:<?= get_field('phone', 'option') ?>">
                        Call Now
                    </a>
                </div>
                <a href="<?php echo home_url('/') ?>" class="logo-link-wrapper hidden">
                    <?php echo wp_get_attachment_image($logo, 'full', '', ['class' => 'block w-full h-auto transform transition-all ']) ?>
                </a>
                <?php wp_nav_menu([
                    'menu'                 => 'Main Menu',
                    'container'            => '',
                    'container_class'      => '',
                    'container_id'         => '',
                    'container_aria_label' => '',
                    'menu_class'           => 'main-menu font-main',
                    'menu_id'              => '',
                    'echo'                 => true,
                    'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'item_spacing'         => 'preserve',
                    'depth'                => 0,
                    'walker'               => '',
                    'theme_location'       => 'starter_main_menu',
                    'walker'          => new My_Walker_Nav_Menu(),
                ]) ?>

            </div>
            <div class="mobile-menu-row__wrapper hidden w-full flex-row-reverse items-center justify-between lg:flex">
                <div class="buttons_wrapper flex gap-5 items-center">
                    <a href="tel:<?php echo $phone ?>" class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40.512" height="40.512" viewBox="0 0 40.512 40.512">
                            <g id="telephone-call" transform="translate(-2 -2)">
                                <path id="Path_504" class="fill-accent" data-name="Path 504" d="M41.634,32.9c-1.265-1.061-8.681-5.757-9.914-5.541-.579.1-1.021.6-2.206,2.01a16.909,16.909,0,0,1-1.8,1.949,15.564,15.564,0,0,1-3.435-1.273,21.269,21.269,0,0,1-9.815-9.818A15.564,15.564,0,0,1,13.19,16.8,16.909,16.909,0,0,1,15.139,15c1.412-1.185,1.907-1.625,2.01-2.206.216-1.236-4.485-8.649-5.541-9.914C11.164,2.352,10.762,2,10.247,2,8.754,2,2,10.351,2,11.433c0,.088.145,8.782,11.125,19.953C24.3,42.367,32.99,42.512,33.078,42.512c1.082,0,9.433-6.754,9.433-8.247,0-.515-.352-.917-.878-1.36Z" transform="translate(0 0)" fill="#69be26" />
                                <path id="Path_505" class="fill-accent" data-name="Path 505" d="M25.681,18.575h2.894A11.588,11.588,0,0,0,17,7V9.894a8.69,8.69,0,0,1,8.681,8.681Z" transform="translate(6.703 2.234)" fill="#69be26" />
                                <path id="Path_506" class="fill-accent" data-name="Path 506" d="M32.915,20.809h2.894A18.831,18.831,0,0,0,17,2V4.894A15.934,15.934,0,0,1,32.915,20.809Z" transform="translate(6.703)" fill="#69be26" />
                            </g>
                        </svg>
                    </a>
                    <button aria-label="menu toggle" class="button small" id="main-menu-button">
                        <span class="ico-b open-menu"><span></span></span>
                        <span class="ico-c close-menu"></span>
                    </button>
                </div>
                <a href="<?php echo home_url('/') ?>">
                    <?php echo wp_get_attachment_image($logo, 'full', '', ['class' => 'block w-36 h-auto transform transition-all my-0 mx-auto mobile-logo']) ?>
                </a>
            </div>
            <div class="call_header flex justify-center items-center flex-col font-main gap-2 xl:hidden">
                <div class="font-main text-lg leading-none text-smoke font-thin">
                    <?= get_field('phone_available', 'option') ?>
                </div>
                <div class="font-main font-bold text-3xl 2xl:text-2xl text-button_color leading-none">
                    <a href="tel:<?php echo $phone_link ?>"><?= get_field('phone_with_letters', 'option') ?></a>
                </div>
                <a class="btn !pl-5 !pr-5" href="tel:<?php echo $phone_link ?>">
                    1 (844) 244-2886
                </a>
            </div>
        </div>
    </header>