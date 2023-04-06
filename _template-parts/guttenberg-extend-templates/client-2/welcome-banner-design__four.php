<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $welcome_banner__design_four_bg = get_field('welcome_banner__design_four_bg');
    $welcome_banner__design_four_logo = get_field('welcome_banner__design_four_logo');
    $welcome_banner__design_four_subtitle = get_field('welcome_banner__design_four_subtitle');
    $welcome_banner__design_four_title = get_field('welcome_banner__design_four_title'); ?>

    <section class="bg-cover bg-no-repeat relative pb-48 pt-8 xl:pb-28 xs:pb-16 sm:pt-4" style="background-image:url('<?php echo !empty($welcome_banner__design_four_bg) ? wp_get_attachment_image_url($welcome_banner__design_four_bg, 'full') : ''; ?>');">
        <?php if ($welcome_banner__design_four_title || $welcome_banner__design_four_logo || $welcome_banner__design_four_subtitle) { ?>
            <div class="container text-center">
                <?php if ($welcome_banner__design_four_logo) { ?>
                    <?php echo wp_get_attachment_image($welcome_banner__design_four_logo, 'full', '', ['class' => 'mx-auto mb-3 md:w-5/24 xs:w-6/24']) ?>
                <?php } ?>
                <?php if ($welcome_banner__design_four_subtitle) { ?>
                    <h2 class="text-button_color font-semibold text-4xl pb-4 tracking-widest lg:!text-2xl xl:pb-0 sm:!text-lg "><?php echo $welcome_banner__design_four_subtitle ?></h2>
                <?php } ?>
                <?php if ($welcome_banner__design_four_title) { ?>
                    <h1 class="hero_heading_h1 banner revealUp"><?php echo $welcome_banner__design_four_title ?></h1>
                <?php } ?>
            </div>
            <div class="dots-bg h-24 absolute w-full bottom-0 left-0 xl:h-16 xs:h-12"></div>
        <?php } ?>
    </section>

    <!-- <section class="relative pb-48 pt-8 xl:pb-28 xs:pb-16 sm:pt-4">
        <div class="bg-image-wrapper" style="background-image:url('<?php echo !empty($welcome_banner__design_four_bg) ? wp_get_attachment_image_url($welcome_banner__design_four_bg, 'full') : ''; ?>');">
            <div class="container text-center">
                <?php if ($welcome_banner__design_four_logo) { ?>
                    <?php echo wp_get_attachment_image($welcome_banner__design_four_logo, 'full', '', ['class' => 'mx-auto mb-3 md:w-5/24 xs:w-6/24']) ?>
                <?php } ?>
                <?php if ($welcome_banner__design_four_subtitle) { ?>
                    <h2 class="text-button_color font-semibold text-4xl pb-4 tracking-widest lg:!text-2xl xl:pb-0 sm:!text-lg "><?php echo $welcome_banner__design_four_subtitle ?></h2>
                <?php } ?>
                <?php if ($welcome_banner__design_four_title) { ?>
                    <h1 class="hero_heading_h1 banner"><?php echo $welcome_banner__design_four_title ?></h1>
                <?php } ?>
            </div>
        </div>
        <div class="dots-bg h-24 absolute w-full bottom-0 left-0 xl:h-16 xs:h-12"></div>
    </section> -->

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
