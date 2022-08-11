<?php

use App\Template;

$remove_title = get_field('remove_title');
$remove_breadcrumbs = get_field('remove_breadcrumbs');
?>

<article class="blog-article ">

        <div class=" mb-6" style="background: rgba(4, 30, 66, 0.91);">
            <div class="container pt-24 pb-12">
                <div class="blog-article__title-wrapper">
                <h1 class="font-bold  text-6xl text-white mb-3"><?php the_title() ?></h1>
                    <span class="block border border-yellow mt-4  w-1/4"></span>
                </div>
            </div>
        </div>


        <div class="container breadcrumbs_wrapper">
            <?php if (function_exists('rw_breadcrumbs')) rw_breadcrumbs(); ?>
        </div>

    <div class="container grid sidebar_layout">
        <div class="content p-6 md:p-2 sm:p-0">

            <!-- Content -->
            <div class="prose-lg">
                <?php the_content() ?>
            </div>
        </div>
        <?php
        Template::load('_template-parts/components/sidebar.php', []); ?>
    </div>
</article>