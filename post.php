<?php

use App\Template;
?>

<?php get_header(); ?>
<!-- Main Content -->
<h1>single post</h1>
<main class="page-text-styles">
    <?php the_content() ?>
</main>

<?php get_footer(); ?>