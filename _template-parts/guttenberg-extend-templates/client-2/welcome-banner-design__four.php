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
    $welcome_banner__design_four_info = get_field('welcome_banner__design_four_info');
    $welcome_banner__design_four_link = get_field('welcome_banner__design_four_link');
    $welcome_banner__banner_heading_tag = get_field('banner_heading_tag');
    $welcome_banner__design_four_title = get_field('welcome_banner__design_four_title');

?>


    <section class="bg-cover overflow-hidden bg-no-repeat bg-center relative pb-32 pt-24 xl:pb-28 xs:pb-16 sm:pt-4 zoom-animation">
        <?php if (!empty($welcome_banner__design_four_bg)) { ?>
            <img class="animated-image -z-10 absolute top-0 left-0 object-cover h-full w-full" src="<?php echo wp_get_attachment_image_url($welcome_banner__design_four_bg, 'full') ?>" alt="background">
        <?php } ?>
        <?php if ($welcome_banner__design_four_title || $welcome_banner__design_four_logo || $welcome_banner__design_four_subtitle) { ?>
            <div class="container text-center">
                <?php if ($welcome_banner__design_four_subtitle) { ?>
                    <h2 class="text-button_color font-semibold text-[41px] pb-0 tracking-widest lg:!text-2xl xl:pb-0 sm:!text-lg my-element " data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="700" data-aos-iteration="infinite"><?php echo $welcome_banner__design_four_subtitle ?></h2>
                <?php } ?>
                <?php if ($welcome_banner__design_four_title) { ?>
                    <?php echo '<' . $welcome_banner__banner_heading_tag . ' class="hero_heading_h1 banner !leading-none revealUp" data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="1000" data-aos-iteration="infinite" >' . $welcome_banner__design_four_title . '</' . $welcome_banner__banner_heading_tag . '>'; ?>
                <?php } ?>
                <?php if ($welcome_banner__design_four_info) { ?>
                    <h2 class="text-button_color font-semibold text-3xl pb-12 tracking-widest lg:!text-2xl xl:pb-0 sm:!text-lg" data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="1200" data-aos-iteration="infinite"><?php echo $welcome_banner__design_four_info ?></h2>
                <?php } ?>
                <?php if ($welcome_banner__design_four_logo || $welcome_banner__design_four_link) { ?>
                    <a href="<?php echo $welcome_banner__design_four_link['url'] ?>"> <?php echo wp_get_attachment_image($welcome_banner__design_four_logo, 'full', '', ['class' => 'mx-auto mb-3 md:w-5/24 xs:w-6/24', 'data-aos' => 'fade-up', 'data-aos-easing' => 'ease-in', 'data-aos-duration' => '1400',]) ?>
                    </a>
                <?php } ?>
            </div>
            <div class="dots-bg h-24 absolute w-full bottom-0 left-0 xl:h-16 xs:h-12">
            </div>
        <?php } ?>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
