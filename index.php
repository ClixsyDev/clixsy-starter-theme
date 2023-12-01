<?php

use App\Template;

$archive_blog_title = get_field('archive_blog_title', 'options');
$archive_blog_description = get_field('archive_blog_description', 'options');
?>

<?php get_header(); ?>
<main>
    <div class="max-w-[1190px] m-auto xl:container pt-20 pb-24">
        <?php if ($archive_blog_title) { ?>
            <h1 class="heading_default_color text-5xl sm:text-3xl"><?php echo $archive_blog_title ?></h1>
        <?php } ?>

        <?php
            $last_post_query = "SELECT * FROM wp_posts WHERE post_type='post' AND post_status='publish' ORDER BY post_date DESC LIMIT 1";
            $last_post_sql = $wpdb->get_results($last_post_query);
        ?>

        <div class="pt-9 pb-20 sm:pt-5 sm:pb-8">
            <article class="h-full">
                <a class="relative p-32 group min-h-[500px] lg:min-h-auto h-full flex bg-cover xl:min-h-full lg:p-14 sm:p-5" style="background-image: url(<?php echo get_the_post_thumbnail_url($last_post_sql[0] -> ID) ?: $thumbnail_placeholder ?>);" href="<?= get_permalink($post) ?>">
                    <div class="bg-black bg-opacity-60 absolute z-20 w-full h-full top-0 left-0"></div>
                    <div class="z-30 w-full max-w-[830px]">
                        <div class="text-white font-second text-5xl leading-tight mb-3 xl:text-4xl sm:text-2xl">
                            <?php echo get_the_title($last_post_sql[0] -> ID); ?>
                        </div>
                        <?php $cat = get_the_category($last_post_sql[0]->ID); ?>
                        <div class="mb-3 text-white text-lg uppercase sm:text-sm">
                            <span><?php echo $cat[0]->name ?></span>
                            <span>| <?php echo get_the_date('F d, Y') ?></span>
                        </div>
                        <div class="font-libre text-2xl text-white mb-2 mr-9 sm:text-sm sm:mr-0">
                            <?php echo get_the_excerpt($last_post_sql[0] -> ID) ?>
                        </div>
                        <div class="chevron_link absolute right-4 bottom-4 hidden group-hover:block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37">
                                <path class="fill-accent" id="Icon_ionic-ios-arrow-dropright-circle" data-name="Icon ionic-ios-arrow-dropright-circle" d="M3.375,21.875a18.5,18.5,0,1,0,18.5-18.5A18.5,18.5,0,0,0,3.375,21.875Zm21.746,0-7.284-7.213a1.717,1.717,0,0,1,2.428-2.428l8.485,8.512a1.715,1.715,0,0,1,.053,2.366L20.443,31.5a1.714,1.714,0,1,1-2.428-2.419Z" transform="translate(-3.375 -3.375)" fill="#25dd7e" />
                            </svg>
                        </div>
                    </div>
                </a>
            </article>
        </div>

        <?php if ($archive_blog_description) { ?>
            <div class="heading_default_color text-5xl sm:text-3xl">
                <?php echo $archive_blog_description ?>
            </div>
        <?php } ?>

        <div class="grid grid-cols-12 gap-[30px] pt-9 sm:pt-5 lg:grid-cols-1">
            <div class="col-span-12 md:col-span-10">
                <div class="grid grid-cols-3 lg:grid-cols-2 sm:grid-cols-1 gap-x-8 gap-y-20 lg:gap-y-12">
                    <?php if (have_posts()) : ?>
                        <!-- The Loop -->
                        <?php while (have_posts()) : the_post(); ?>
                            <?php if( $wp_query->current_post !== 0 ) : ?>
                                <?php include(Template::locate('_template-parts/archive/_entry__archive--blog.php')); ?>
                            <?php endif; ?>
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
            <div class="flex justify-center pt-24">
                <?php 
                if (function_exists("pagination")) {

                    echo pagination();
                } ?>
            </div>
        <?php } ?>
    </div>
</main>



<?php get_footer(); ?>