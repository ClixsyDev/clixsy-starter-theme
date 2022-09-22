<?php

use App\Template;
?>

<?php get_header(); ?>

<!-- Main Content -->
<main>
    <?php include(Template::locate('_template-parts/guttenberg-extend-templates/welcome-banner.php')); ?>
    <?php include(Template::locate('_template-parts/guttenberg-extend-templates/awards.php')); ?>
    <?php include(Template::locate('_template-parts/guttenberg-extend-templates/verdicts.php')); ?>
    <?php include(Template::locate('_template-parts/guttenberg-extend-templates/how-can-help.php')); ?>
    <?php include(Template::locate('_template-parts/guttenberg-extend-templates/cta.php')); ?>
    <?php include(Template::locate('_template-parts/guttenberg-extend-templates/customer-service.php')); ?>

    <!-- Entry -->
    <?php while (have_posts()) : the_post(); ?>
        <?php include(Template::locate('_template-parts/single/_entry.php')); ?>
    <?php endwhile; ?>

</main>

<?php get_footer(); ?>