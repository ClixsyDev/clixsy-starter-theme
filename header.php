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
</head>

<body <?php body_class('font-helvetica body'); ?>>
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TF8CHB6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->
    <header class="bg-accent fixed w-full z-20">
        <?php main_menu(); ?>
        <div class="menu-row-wrapper lg:hidden">
            <a href="<?php echo home_url('/') ?>" class="logo-link-wrapper">
                <img src="<?php echo get_template_directory_uri() ?>/_assets/public/images/logo.webp" alt="" class="block w-full h-auto transform transition-all ">
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
        <div class="mobile-menu-row__wrapper hidden lg:grid   lg:grid-cols-3">
            <button aria-label="menu toggle" class="button small" id="main-menu-button">
                <span class="ico-b open-menu"><span></span></span>
                <span class="ico-c close-menu"></span>
            </button>
            <a href="<?php echo home_url('/') ?>">
                <img src="<?php echo get_template_directory_uri() ?>/_assets/public/images/logo.webp" alt="" class="block w-20 h-auto transform transition-all my-0 mx-auto mobile-logo">
            </a>
        </div>

    </header>
    <!-- testing mega menu -->


    <!-- Main Content -->
    <main class="site-main">