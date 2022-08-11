<?php

use App\Template;

get_header(); ?>


    <div class="container pt-36">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-8 md:col-span-12">
                <div class="grid grid-cols-2 lg:grid-cols-1 gap-[30px]">

                    <?php if (have_posts()) : ?>

                        <!-- The Loop -->
                        <?php while (have_posts()) : the_post(); ?>
                            <?php include(Template::locate('_template-parts/archive/_entry.php')); ?>
                        <?php endwhile; ?>

                    <?php else : ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>

            </div>
            <div class="col-span-4 md:col-span-12">
                <?php Template::load('_template-parts/components/sidebar_archive.php', []); ?>
            </div>
        </div>
        <?php $count_posts = wp_count_posts();
        $published_posts = $count_posts->publish;

        if ($published_posts > get_query_var('posts_per_page')) { ?>
            <div class="flex  justify-center pt-12">
                <?php if (function_exists("pagination")) {
                    pagination();
                } ?>
            </div>
        <?php } ?>
    </div>


<?php get_footer(); ?>