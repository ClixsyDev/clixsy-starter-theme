<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $welcome_banner__meet_the_team_bg = get_field('welcome_banner__meet_the_team_bg');
    $welcome_banner__meet_the_team_title = get_field('welcome_banner__meet_the_team_title');
    $welcome_banner__meet_the_team_link = get_field('welcome_banner__meet_the_team_link'); ?>


    <section class="bg-cover pb-32 pt-11 relative" style="background-image:url('<?php echo !empty($welcome_banner__meet_the_team_bg) ? wp_get_attachment_image_url($welcome_banner__meet_the_team_bg, 'full') : ''; ?>');">
        <div class="bg-white !bg-opacity-80 absolute w-full h-full top-0 left-0"></div>
        <div class="container relative z-10">
            <?php if ($welcome_banner__meet_the_team_title) { ?>
                <h1 class="hero_heading_h1 uppercase text-13xl text-accent lg:pb-2"><?php echo $welcome_banner__meet_the_team_title ?></h1>
            <?php } ?>

            <?php if ($welcome_banner__meet_the_team_link) { ?>
                <?php
                Template::load('_template-parts/components/button.php', [
                    'link' => $welcome_banner__meet_the_team_link['url'],
                    'text' => __($welcome_banner__meet_the_team_link['title'], 'law'),
                    'text_hover' => false,
                    'classes' => 'bigauto_red hover_accent  mx-auto uppercase min-w-[460px]', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                ]); ?>
            <?php } ?>
        </div>
        <div class="dots-bg h-20 absolute w-full bottom-0 left-0"></div>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
