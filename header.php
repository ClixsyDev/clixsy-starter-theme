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

    <!-- testing mega menu -->

    <header class="flex flex-col items-center justify-between mt-32" x-cloak x-data="appData()" x-init="appInit()">
        <?php main_menu(); ?>
        <div class="flex flex-col">
            <!-- Navbar -->
            <nav class="flex justify-around py-4 bg-[#032241]
            backdrop-blur-md shadow-md w-full
            fixed top-0 left-0 right-0 z-10" style="<?php echo is_admin_bar_showing() ? 'top: 32px' : ''; ?>">

                <!-- Logo Container -->
                <div class="flex items-center">

                    <div class="mobile-nav">
                        <div class="nav__content hidden xl:block">
                            <button aria-label="menu toggle" class="button small" id="main-menu-button">
                                <span class="ico-b open-menu"><span></span></span>
                                <span class="ico-c close-menu"></span>
                            </button>
                        </div>
                    </div>
                    <!-- Logo -->
                    <a class="cursor-pointer">
                        <?php $logo = get_field('logo', 'options');
                        echo wp_get_attachment_image($logo, 'full') ?>
                    </a>
                </div>

                <!-- desktop menu -->
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

                <!-- Icon Menu Section -->
                <div class="flex items-center space-x-5">
                    <div class="header-right-part">
                        <a href="tel:6022588888" class="flex items-center justify-items-center flex-col ">
                            <span class="text-white text-sm mb-2">Available 24/7</span>
                            <span class="text-white font-bold text-2xl">(602) 258-8888</span>
                        </a>
                        <a href="/contact-us/" class="block bg-yellow px-4 py-2 text-black rounded-full mt-2 text-center font-semibold language-switcher">Call now</a>
                    </div>
                </div>
            </nav>
        </div>


    </header>