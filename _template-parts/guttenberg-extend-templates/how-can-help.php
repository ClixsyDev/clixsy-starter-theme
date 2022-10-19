<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $key = 'how_can_help';
    $attorney_image = get_field($key . '_attorney_image');
    $company_logo = get_field($key . '_company_logo');
    $state_icon = get_field($key . '_state_icon');
    $state_name = get_field($key . '_state_name');
    $title = get_field($key . '_title');
    $form_description = get_field($key . '_form_description');
    $form = get_field($key . '_form_shortcode');
?>
    <div class="relative pt-8 pb-44">
        <div class="container flex xl:flex-wrap">
            <div class="w-[65%] relative xl:w-full">
                <h2 class="absolute right-4 top-40 text-[60px] text-right leading-tight max-w-[367px] mdt:top-0 md:relative md:text-center md:text-4xl md:w-full md:m-0 md:left-0 md:right-0 md:mx-auto"><?= $title ?></h2>
                <img src="<?= wp_get_attachment_image_url($attorney_image, 'full') ?>" class="relative z-20 left-0 top-0 w-[60%] h-auto object-cover md:left-50% md:-translate-x-1/2" alt="">
                <div class="bg-headings absolute bottom-0 left-0 w-full h-72 z-0 md:h-32"></div>
                <div class="absolute flex items-end bottom-0 left-0 w-full h-72 z-30 flex pt-9 px-5 pb-3 md:justify-center">
                    <img class=" w-16 h-auto mr-11 md:w-10 md:mr-3" src="<?= wp_get_attachment_image_url($company_logo, 'full') ?>" alt="">
                    <img class="mdt:w-40 md:w-24" src="<?= wp_get_attachment_image_url($state_icon, 'full') ?>" alt="">
                    <?php if ($state_name) { ?>
                        <div class="text-white text-10xl leading-tight mb-6 2xl:text-8xl md:text-3xl"><?= $state_name ?></div>
                    <?php } ?>
                </div>
            </div>
            <div class="w-[35%] bg-headings p-11 how_can_help_form -mb-12 xl:w-full xl:max-w-2xl xl:my-0 xl:mx-auto md:p-4">
                <div class=" text-white text-xl leading-tight">
                    <?= $form_description ?>
                </div>
                <?= do_shortcode('[contact-form-7 id="' . $form . '"]') ?>
            </div>
        </div>
    </div>
<?php }
