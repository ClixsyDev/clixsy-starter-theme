<?php

use App\Template;
?>

<?php get_header(); ?>

<!-- Main Content -->
<main>



    <?php include(Template::locate('_template-parts/guttenberg-extend-templates/bio-page/banner.php')); ?>
    <?php include(Template::locate('_template-parts/guttenberg-extend-templates/bio-page/dedicat-info.php')); ?>
    <?php include(Template::locate('_template-parts/guttenberg-extend-templates/bio-page/awards-slider.php')); ?>
    <?php include(Template::locate('_template-parts/guttenberg-extend-templates/bio-page/bar-admissions.php')); ?>
    <?php include(Template::locate('_template-parts/guttenberg-extend-templates/bio-page/life-family.php')); ?>
    <?php include(Template::locate('_template-parts/guttenberg-extend-templates/bio-page/most-memorable.php')); ?>
    <?php include(Template::locate('_template-parts/guttenberg-extend-templates/bio-page/education.php')); ?>

    <?php include(Template::locate('_template-parts/guttenberg-extend-templates/case-type-and-contact-us.php')); ?>
</main>

<?php get_footer(); ?>