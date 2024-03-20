<?php

use App\Template;
// Template Name: Sidebar template
get_header(); ?>

<?php get_header(); ?>
<!-- Main Content -->
<main>
    <!-- Entry -->

    <section class="bg-cover pb-32 pt-11 relative mb-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_assets/src/img/news-title-bg.jpg')">
        <div class="bg-white !bg-opacity-80 absolute w-full h-full top-0 left-0"></div>
        <div class="container relative z-10">
            <h1 class="hero_heading_h1 uppercase mb-5 text-13xl md:text-12xl sm:text-8xl leading-none text-accent lg:pb-2 repeat-animation" data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="700"><?php the_title() ?></h1>
            <a href="/contact/" class="btn hover:bg-white relative transform items-center group bigauto_red hover_accent  mx-auto uppercase min-w-[460px] repeat-animation" data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="1000">
                <span class="btn_text_1 group-hover:opacity-0 absolute block transform transition-opacity duration-300">
                    FREE CASE REVIEW </span>
                <span class="btn_text_2 opacity-0 group-hover:opacity-100 transform transition-opacity duration-300">
                    FREE CASE REVIEW <span class="btn_arrow">⟶</span>
                </span>
            </a>
        </div>
        <div class="dots-bg h-20 absolute w-full bottom-0 left-0"></div>
    </section>

    <div class="container grid grid-cols-7 md:grid-cols-1">
        <div class="py-6 pr-6 col-span-5 md:pr-0">
            <?php the_content() ?>
        </div>
        <?php
        Template::load('_template-parts/components/sidebar.php', [
            'form_class' => 'sidebar-template',
            'hide_recent_posts' => false
        ]); ?>
    </div>

</main>

<?php get_footer(); ?>


<?php get_footer(); ?>