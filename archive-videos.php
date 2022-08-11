<?php

use App\Template;
?>

<?php get_header(); ?>

<!-- Main Content -->
<main>
    <?php
    $videos_archive = get_field('videos_archive', 'options');
    Template::load('_template-parts/components/hero-section.php', [
        'img' => $videos_archive ? $videos_archive['hero_image'] : get_template_directory_uri() . '/_assets/public/images/home-hero.jpg',
        'title' => $videos_archive ? $videos_archive['title'] : 'Phillips Law <br> Group',
        'subtitle' => $videos_archive ? $videos_archive['hero_subtitle'] : '',
    ]); ?>
    <div class="container pt-24">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-8 md:col-span-12">
                <div class="grid grid-cols-2 lg:grid-cols-1 gap-[30px]">

                    <?php if (have_posts()) : ?>

                        <!-- The Loop -->
                        <?php while (have_posts()) : the_post(); ?>
                            <?php include(Template::locate('_template-parts/archive/_entry__archive--video.php')); ?>
                        <?php endwhile; ?>

                    <?php else : ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>

            </div>
            <div class="col-span-4 md:col-span-12">
                <div>
                    <?php Template::load('_template-parts/components/sidebar_archive.php', []); ?>

                    <?php
                    $args = array(
                        'taxonomy'     => 'video_categories',
                        'type' => 'post',
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    );
                    $currentPageId = get_queried_object_id();

                    $cats = get_categories($args);

                    ?>
                    <?php if ($cats) { ?>
                        <p class="text-xl mb-6 pt-8">Categories:</p>
                        <ul class="w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">

                            <?php foreach ($cats as $cat) { ?>
                                <li class="py-2 px-4 w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                    <a class="<?php echo  $currentPageId == $cat->term_id ? 'font-semibold text-accent' : '' ?>" aria-current="page" href="<?php echo get_category_link($cat->term_id) ?>">
                                        <?php echo $cat->name; ?>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    <?php } ?>
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
</main>

<?php get_footer(); ?>