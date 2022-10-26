<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $bg_image = get_field('welcome_banner_background_image');
    $bg_image_with_attorney = get_field('welcome_banner_attorney_image');
    $bg_image_with_attorney_mobile = get_field('welcome_banner_attorney_image_mobile');
    $text_line_1 = get_field('welcome_banner_banner_text_line_1');
    $text_line_2 = get_field('welcome_banner_banner_text_line_2');
    $text_line_3 = get_field('welcome_banner_banner_text_line_3');
    $button = get_field('welcome_banner_button');
    $wecome_banner_button_text = get_field('welcome_banner_button_text');
    
?>
    <div class="welcome_banner relative h-[780px] lg:h-[427px] mdt:h-auto sm:h-[486px] md:overflow-hidden">
        <img src="<?= wp_get_attachment_image_url($bg_image, 'full') ?>" class="absolute left-0 top-0 w-full h-full object-cover" alt="">
        <div class="container relative z-10 flex flex-col h-full justify-center items-end  mdt:items-center mdt:p-0">
            <div class="flex flex-col items-center mdt:w-[496px] mdt:bg-white/75 mdt:px-6 mdt:py-8 mdt:absolute mdt:left-1/2 mdt:bottom-10 mdt:-translate-x-1/2 mdt:z-10 sm:w-10/12">
                <h1 class="flex flex-col mb-16 items-center text-headings_second lg:mb-10 lg:px-3 mdt:mb-6 sm:mb-4">
                    <?php if ($text_line_1) { ?>
                        <div class="font-second relative text-3xl leading-tight 
                        before:block before:absolute before:bg-accent before:right-full before:w-40 before:h-1 before:top-1/2 before:mr-4
                        after:block after:absolute after:bg-accent after:left-full after:w-40 after:h-1 after:top-1/2 after:ml-4
                        2xl:after:w-24 2xl:before:w-24
                        xl:text-2xl mdt:text-xl mdt:after:w-20 mdt:before:w-20 sm:text-sm sm:after:w-12 sm:before:w-12">
                            <?= $text_line_1 ?>
                        </div>
                    <?php } ?>
                    <?php if ($text_line_2) { ?>
                        <div class=" text-[150px] font-main font-bold leading-none my-3 xl:text-[100px] mdt:text-8xl mdt:my-1 sm:text-[53px]">
                            <?= $text_line_2 ?>
                        </div>
                    <?php } ?>
                    <?php if ($text_line_3) { ?>
                        <div class="font-second relative text-3xl leading-tight
                        before:block before:absolute before:bg-accent before:right-full before:w-40 before:h-1 before:top-1/2 before:mr-4
                        after:block after:absolute after:bg-accent after:left-full after:w-40 after:h-1 after:top-1/2 after:ml-4
                        2xl:after:w-24 2xl:before:w-24
                        xl:text-2xl mdt:text-xl mdt:after:w-20 mdt:before:w-20 sm:text-sm sm:after:w-12 sm:before:w-12">
                            <?= $text_line_3 ?>
                        </div>
                    <?php } ?>
                </h1>
                <?php if ($button) { ?>
                    <?php
                    Template::load('_template-parts/components/button.php', [
                        'link' => $button['url'],
                        'text' => __($button['title'], 'law'),
                        'text_hover' => $wecome_banner_button_text ?: false,
                        'classes' => 'btn_xl hover_headings', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                    ]); ?>
                <?php } ?>
            </div>
            <?php echo wp_get_attachment_image($bg_image_with_attorney_mobile, 'full', '', ['class' => 'hidden relative left-0 bottom-0 w-auto h-full object-cover max-w-[1920px] mx-auto mdt:flex mdt:m-0 mdt:l-0']) ?>
        </div>
        <img src="<?= wp_get_attachment_image_url($bg_image_with_attorney, 'full') ?>" class="absolute left-1/2 bottom-0 w-full h-full object-cover max-w-[1920px] mx-auto -translate-x-1/2 mdt:hidden" alt="">
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';
