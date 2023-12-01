<?php

use App\Template;
// Template Name: Sidebar template
get_header(); ?>

<?php get_header(); ?>
<!-- Main Content -->
<main>
    <!-- Entry -->
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