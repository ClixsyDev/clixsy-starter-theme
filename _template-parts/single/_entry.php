<?php

use App\Template;

$remove_title = get_field('remove_title');
$remove_breadcrumbs = get_field('remove_breadcrumbs');
$title_h2_before_table = get_field('title_h2_before_table');
$title_main_hero_section = get_field('title_main_hero_section');
$remove_table_of_content = get_field('remove_table_of_content');
$custom_table_of_content = get_field('custom_table_of_content');

global $post;
?>

<article class="blog-article ">

    <section class="bg-cover pb-32 pt-11 relative mb-10 sm:m-0" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');">
        <div class="bg-white !bg-opacity-80 absolute w-full h-full top-0 left-0"></div>
        <div class="container relative z-10">

            <h1 class="hero_heading_h1 uppercase mb-5 text-13xl md:text-12xl sm:text-8xl leading-none text-accent lg:pb-2 repeat-animation" data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="700">
                <?php echo $title_main_hero_section ? $title_main_hero_section : the_title() ?>
            </h1>
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



    <?php if (!$remove_breadcrumbs) { ?>
        <div class="container breadcrumbs_wrapper lg:mb-6 sm:hidden">
            <?php if (function_exists('rw_breadcrumbs')) rw_breadcrumbs(); ?>
        </div>

    <?php } ?>
    <div class="container grid grid-cols-5 mdt:grid-cols-1 break-all">
        <div class="py-6 pr-6 md:pr-0 col-span-3">
            <?php if ($title_h2_before_table) { ?>
                <h2 class="mt-2 mb-5 text-4xl text-green font-semibold leading-snug"><?php echo $title_h2_before_table ?></h2>
            <?php } ?>

            <?php
            $markupFixer  = new TOC\MarkupFixer();
            $tocGenerator = new TOC\TocGenerator();
            $content = wpautop($post->post_content);
            $fixed_content = $markupFixer->fix($content);
            if (!$remove_table_of_content) {
                $tocGenerator = new TOC\TocGenerator(); ?>
                <?php if (!empty($tocGenerator->getHtmlMenu($fixed_content))) { ?>
                    <div class="tldp">
                        <h2 style="line-height: 1em;" class="mt-8 mb-5 text-4xl text-green font-semibold">Table of Contents:</h2>
                        <div class=" border-accent border-2 border-solid p-7 mb-14">
                            <?php
                            Template::load('/_template-parts/components/toc.php', [
                                'content' => wpautop($post->post_content)
                            ]); ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } else if ($custom_table_of_content && $custom_table_of_content['title'] || $custom_table_of_content['content']) { ?>
                <div class="tldp">
                    <?php if ($custom_table_of_content['title']) { ?>
                        <h2 style="line-height: 1em;" class="mt-8 mb-5 text-4xl text-green font-semibold"><?php echo $custom_table_of_content['title'] ?></h2>
                    <?php } ?>
                    <div class=" border-accent border-2 border-solid p-7 mb-14">
                        <?php echo $custom_table_of_content['content'] ?>
                    </div>
                </div>
            <?php } ?>
            <!-- Content -->
            <div class="prose-xl sm:!prose-base single-content">
                <?php
                $markupFixer  = new TOC\MarkupFixer();
                echo $markupFixer->fix($post->post_content);

                // Snippet
                Template::load('_template-parts/blog-posts-snippet.php');
                ?>
            </div>
        </div>
        <?php
        Template::load('_template-parts/components/sidebar.php', [
            'hide_recent_posts' => true
        ]); ?>
    </div>
</article>