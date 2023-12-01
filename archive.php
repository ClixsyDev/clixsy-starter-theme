<?php

use App\Template;

get_header(); ?>

<div class="container pt-16 pb-12">

    <h1 class="heading_default_color mb-4"><?php echo single_cat_title() ?></h1>

    <div class="grid grid-cols-12 gap-[30px]">
        <div class="col-span-12 md:col-span-12">
            <div class="grid grid-cols-2 lg:grid-cols-1 gap-[30px]">

                <?php if (have_posts()) : ?>

                    <!-- The Loop -->
                    <?php while (have_posts()) : the_post(); ?>
                        <?php include(Template::locate('_template-parts/archive/_entry__archive--blog.php')); ?>
                    <?php endwhile; ?>

                <?php else : ?>
                    <p class="mt-8 prose-xl">Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>

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