<?php

use App\Template;
?>

<?php get_header(); ?>

<!-- Main Content -->
<main>
<?php
$case_types_archive = get_field('reviews_archive', 'options');
Template::load('_template-parts/components/hero-section.php', [
    'img' => $case_types_archive ? $case_types_archive['hero_image'] : get_template_directory_uri() . '/_assets/public/images/home-hero.jpg',
    'title' => $case_types_archive ? $case_types_archive['title'] : 'Phillips Law <br> Group',
    'subtitle' => $case_types_archive ? $case_types_archive['hero_subtitle'] : '',
]); ?>
    <div class="container pt-24">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12">
                <div class="grid grid-cols-3 lg:grid-cols-2 sm:grid-cols-1 gap-[30px]">

                    <?php if (have_posts()) : ?>

                        <!-- The Loop -->
                        <?php while (have_posts()) : the_post(); ?>
                            <?php include(Template::locate('_template-parts/archive/_entry__archive--review.php')); ?>
                        <?php endwhile; ?>

                    <?php else : ?>
                        <p>Sorry, no posts matched your criteria.</p>
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
</main>

<?php get_footer(); ?>