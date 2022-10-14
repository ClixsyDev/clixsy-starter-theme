<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#114b7d">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
    <!-- Google Tag Manager -->
    <!-- 	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TF8CHB6');</script> -->
    <!-- End Google Tag Manager -->
    <style>
        <?php $theme_colors = get_field('theme_colors', 'option');
        if ($theme_colors) {
            foreach ($theme_colors as $color) {
                ?>
                .bg-<?= $color['name'] ?> {
                    background-color: <?= $color['color'] ?> !important;
                }
                .text-<?= $color['name'] ?> {
                    color: <?= $color['color'] ?> !important;
                }
                <?php
            }
        }
        $site_colors = get_field('site_colors', 'option');
        if ($site_colors) {
            foreach ($site_colors as $color_name => $color_value) {
                ?>
                .bg-<?= $color_name ?> {
                    background-color: <?= $color_value ? $color_value : '#fff' ?> !important;
                }
                .text-<?= $color_name ?> {
                    color: <?= $color_value ? $color_value : '#fff' ?> !important;
                }
                <?php
            }
        }
        ?>
    </style>
</head>
<body <?php body_class('font-helvetica body'); ?>>
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TF8CHB6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->

    <!-- testing mega menu -->

    <header class="bg-headings_second sticky top-0 w-full z-50 h-40 py-8">
        <div class="container flex justify-between items-center">
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/logo.png" alt="">
            <?php main_menu(); ?>
            <div class="menu-row-wrapper lg:hidden">
                <a href="<?php echo home_url('/') ?>" class="logo-link-wrapper hidden">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/logo.png" alt="" class="block w-full h-auto transform transition-all ">
                </a>
                <?php wp_nav_menu([
                    'menu'                 => 'Main Menu',
                    'container'            => '',
                    'container_class'      => '',
                    'container_id'         => '',
                    'container_aria_label' => '',
                    'menu_class'           => 'main-menu',
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
            <div class="mobile-menu-row__wrapper hidden lg:grid lg:grid-cols-3">
                <button aria-label="menu toggle" class="button small" id="main-menu-button">
                    <span class="ico-b open-menu"><span></span></span>
                    <span class="ico-c close-menu"></span>
                </button>
                <a href="<?php echo home_url('/') ?>">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/logo.png" alt="" class="block w-20 h-auto transform transition-all my-0 mx-auto mobile-logo">
                </a>
            </div>
            <div class="flex justify-center items-center flex-col text-white font-avenir gap-2 ">
                <div class=" text-lg leading-none">
                    AVAILABLE 24/7
                </div>
                <div class=" text-2xl leading-none">
                    855-GO-KENNY
                </div>
                <a class=" flex justify-center items-center bg-accent px-10 py-2 rounded-full text-2xl leading-none h-11" href="#">
                    Call Now
                </a>
            </div>
        </div>



    </header>