<?php

use App\Template;
?>

<?php get_header(); ?>

<!-- Main Content -->
<main>
    <?php the_content(); ?>
    <?php require_once("_template-parts/guttenberg-extend-templates/welcome-banner.php"); ?>
    <?php require_once("_template-parts/guttenberg-extend-templates/awards.php"); ?>
    <?php require_once("_template-parts/guttenberg-extend-templates/verdicts.php"); ?>
</main>

<?php get_footer(); ?>