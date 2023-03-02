<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $welcome_banner__case_design_two_bg = get_field('welcome_banner__case_design_two_bg');
    $welcome_banner__case_design_two_title = get_field('welcome_banner__case_design_two_title');
    $welcome_banner__case_design_two_subtitle = get_field('welcome_banner__case_design_two_subtitle');
    $welcome_banner__case_design_two_link = get_field('welcome_banner__case_design_two_link'); ?>


    <section class="bg-cover pb-6 pt-9 relative" style="background-image:url('<?php echo !empty($welcome_banner__case_design_two_bg) ? wp_get_attachment_image_url($welcome_banner__case_design_two_bg, 'full') : ''; ?>');">
        <div class="bg-white !bg-opacity-80 absolute w-full h-full top-0 left-0"></div>
        <div class="container relative z-10">
            <?php if ($welcome_banner__case_design_two_title) { ?>
                <h1 class="hero_heading_h1 banner-case-type lg:pb-2"><?php echo $welcome_banner__case_design_two_title ?></h1>
                <div class="h-1 w-11/24 bg-accent m-auto"></div>
            <?php } ?>
            <?php if ($welcome_banner__case_design_two_subtitle) { ?>
                <h2 class="hero_heading_h2 pt-2 lg:!pt-3"><?php echo $welcome_banner__case_design_two_subtitle ?></h2>
            <?php } ?>
            <?php if ($welcome_banner__case_design_two_link) { ?>
                <?php
                Template::load('_template-parts/components/button.php', [
                    'link' => $welcome_banner__case_design_two_link['url'],
                    'text' => __($welcome_banner__case_design_two_link['title'], 'law'),
                    'text_hover' => false,
                    'classes' => 'bigauto_red hover_accent mt-16 mx-auto uppercase min-w-[460px]', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                ]); ?>
            <?php } ?>
        </div>
        <div class="dots-bg h-32 absolute w-full bottom-0 left-0"></div>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
