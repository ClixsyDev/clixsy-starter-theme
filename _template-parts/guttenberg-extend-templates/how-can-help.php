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
    $attorney_image_mobile = get_field($key . '_attorney_image_mobile');
    $company_logo = get_field($key . '_company_logo');
    $state_icon = get_field($key . '_state_icon');
    $state_name = get_field($key . '_state_name');
    $title = get_field($key . '_title');
    $form_description = get_field($key . '_form_description');
    $form = get_field($key . '_form_shortcode');
?>
    <div class="how_can_help relative pt-8 pb-44">
        <div class="container flex items-end xl:max-w-full md:flex-wrap md:flex-col">
            <div class="w-[65%] lg:w-full relative">
                <h2 class="font-main font-bold absolute right-4 top-40 text-[60px] text-right leading-tight max-w-[367px] 
                    2xl:text-[40px] 2xl:max-w-[280px] md:top-0 sm:text-[30px] sm:max-w-[200px] transorm lg:-translate-y-16 lg:text-3xl md:text-5xl md:translate-y-0"><?= $title ?>
                    <span class="absolute w-[72px] h-1 bg-accent -bottom-4 right-0 hidden lg:block"></span>
                </h2>
                <img src="<?= wp_get_attachment_image_url($attorney_image, 'full') ?>" class="relative z-20 left-0 top-0 w-[632px] h-auto object-cover transform xl:-translate-x-12 lg:-translate-x-24  sm:transform-none sm:left-0 sm:max-w-[200px] md:hidden" alt="">
                <?php echo wp_get_attachment_image($attorney_image_mobile, 'full', '', ['class' => 'hidden md:block relative z-20 left-0 top-0 sm:w-8/12']) ?>
                <div class="bg-headings absolute bottom-0 left-0 w-full h-72 z-0 xl:h-32"></div>
                <div class="absolute items-end bottom-0 left-0 lg:-left-16 md:left-0 w-full h-72 z-30 flex pt-9 px-5 pb-3 md:justify-between md:border-b-2 border-white">
                    <div class="flex items-end justify-between md:justify-end sm:justify-evenly sm:item-center w-full">
                        <img class=" w-16 h-auto mr-11 md:w-10 md:mr-3 lg:opacity-0 sm:opacity-100" src="<?= wp_get_attachment_image_url($company_logo, 'full') ?>" alt="">
                        <img class="xl:max-w-[220px] lg:max-w-[160px] md:max-w-[100px]" src="<?= wp_get_attachment_image_url($state_icon, 'full') ?>" alt="">
                        <?php if ($state_name) { ?>
                            <div class="font-main text-white text-10xl leading-tight mb-6 2xl:text-8xl xl:text-5xl md:text-4xl sm:text-4xl transform sm:translate-y-8"><?= $state_name ?></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="w-[515px] lg:w-full form_elements_design_one how_can_help_form  bg-headings p-11 -mb-12 sm:p-6 ">
                <?php if ($form_description) { ?>
                    <div class="text-white text-xl lg:text-base leading-tight mb-4">
                        <?= $form_description ?>
                    </div>
                <?php } ?>
                <div class="md:w-full m-auto">
                    <?= do_shortcode('[contact-form-7 id="' . $form . '"]') ?>
                </div>
            </div>
        </div>
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';
