<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $logo_design_two__image = get_field('logo_design_two__image');
    $logo_design_two__background_image = get_field('logo_design_two__background_image');
    $logo_design_two__title = get_field('logo_design_two__title'); ?>

    <?php if ($logo_design_two__image || $logo_design_two__background_image) { ?>
        <section class="pt-7 relative bg-no-repeat bg-center bg-cover" style="background-image:url('<?php echo !empty($logo_design_two__background_image) ? wp_get_attachment_image_url($logo_design_two__background_image, 'full') : ''; ?>');">   
            <div class="bg-white !bg-opacity-80 absolute w-full h-full top-0 left-0"></div>
            <div class="container mt-11 relative z-10 sm:!p-0 lg:!mt-5">
                <?php echo wp_get_attachment_image($logo_design_two__image, 'full', '', ['class' => 'm-auto pb-4 sm:pb-4']) ?>
                <?php if ($logo_design_two__title) { ?>
                    <h1 class="hero_heading_h1 banner location"><?php echo $logo_design_two__title ?></h1>
                <?php } ?>
            </div>
            <div class="dots-bg -mt-12 z-10 relative lg:-mt-5"></div>
        </section>
    <?php } ?>
<?php }
if (!get_fields()) echo 'Fill block with content';
