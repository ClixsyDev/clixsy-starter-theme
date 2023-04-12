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
    $welcome_banner__banner_heading_tag = get_field('banner_heading_tag');
    $welcome_banner__design_four_title = get_field('welcome_banner__design_four_title');

?>


    <section class="bg-cover overflow-hidden bg-no-repeat bg-center relative pb-48 pt-8 xl:pb-28 xs:pb-16 sm:pt-4 zoom-animation">
        <?php if (!empty($welcome_banner__design_four_bg)) { ?>
            <img class="animated-image -z-10 absolute top-0 left-0 object-cover h-full w-full" src="<?php echo wp_get_attachment_image_url($welcome_banner__design_four_bg, 'full') ?>" alt="background">
        <?php } ?>
        <?php if ($welcome_banner__design_four_title || $welcome_banner__design_four_logo || $welcome_banner__design_four_subtitle) { ?>
            <div class="container text-center">
                <?php if ($welcome_banner__design_four_logo) { ?>
                    <?php echo wp_get_attachment_image($welcome_banner__design_four_logo, 'full', '', ['class' => 'mx-auto mb-3 md:w-5/24 xs:w-6/24']) ?>
                <?php } ?>
                <?php if ($welcome_banner__design_four_subtitle) { ?>
                    <h2 class="text-button_color font-semibold text-4xl pb-4 tracking-widest lg:!text-2xl xl:pb-0 sm:!text-lg "><?php echo $welcome_banner__design_four_subtitle ?></h2>
                <?php } ?>
                <?php if ($welcome_banner__design_four_title) { ?>
                    <?php echo '<' . $welcome_banner__banner_heading_tag . ' class="hero_heading_h1 banner !leading-none revealUp">' . $welcome_banner__design_four_title . '</' . $welcome_banner__banner_heading_tag . '>'; ?>
                <?php } ?>
            </div>
            <div class="dots-bg h-24 absolute w-full bottom-0 left-0 xl:h-16 xs:h-12"></div>
        <?php } ?>
    </section>
    <div class="flex items-center justify-center w-max h-28 bg-slate-600 m-auto p-5 mt-4 mb-4 text-white" data-aos="flip-up">Take a look predrag</div>
<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
