<?php

use App\Template;
?>
<?php
Template::load('_template-parts/components/button.php', [
    'link' => home_url('/contact-us/'),
    'text' => __('Start My Case', 'clixsy'),
    'text_hover' =>  __('text →', 'clixsy'),
    'classes' => 'btn_headings hover_headings',
]); ?>
<?php get_header(); ?>
<!-- Main Content -->
<main class="page-text-styles">
    <?php the_content() ?>
</main>

<?php get_footer(); ?>