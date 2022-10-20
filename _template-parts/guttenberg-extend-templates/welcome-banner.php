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
    $text_line_1 = get_field('welcome_banner_banner_text_line_1');
    $text_line_2 = get_field('welcome_banner_banner_text_line_2');
    $text_line_3 = get_field('welcome_banner_banner_text_line_3');
    $button = get_field('welcome_banner_button');
    ?>
    <div class="welcome_banner relative h-[780px] 2xl:h-[560px] mdt:h-auto">
        <img src="<?= wp_get_attachment_image_url($bg_image, 'full') ?>" class="absolute left-0 top-0 w-full h-full object-cover" alt="">
        <div class="container relative z-10 flex flex-col h-full justify-center items-end  mdt:items-center mdt:py-4">
            <div class="flex flex-col items-center">
                <div class="flex flex-col mb-16 items-center text-headings_second lg:mb-10 lg:px-3">
                    <?php if ($text_line_1) { ?>
                        <div class="relative text-3xl leading-tight 
                        before:block before:absolute before:bg-accent before:right-full before:w-40 before:h-1 before:top-1/2 before:mr-4
                        after:block after:absolute after:bg-accent after:left-full after:w-40 after:h-1 after:top-1/2 after:ml-4
                        xl:text-2xl mdt:text-xl mdt:after:w-20 mdt:before:w-20">
                            <?= $text_line_1 ?>
                        </div>
                    <?php } ?>
                    <?php if ($text_line_2) { ?>
                        <div class=" text-[150px] leading-none my-3 xl:text-[100px] md:text-6xl">
                            <?= $text_line_2 ?>
                        </div>
                    <?php } ?>
                    <?php if ($text_line_3) { ?>
                        <div class="relative text-3xl leading-tight
                        before:block before:absolute before:bg-accent before:right-full before:w-40 before:h-1 before:top-1/2 before:mr-4
                        after:block after:absolute after:bg-accent after:left-full after:w-40 after:h-1 after:top-1/2 after:ml-4
                        xl:text-2xl mdt:text-xl mdt:after:w-20 mdt:before:w-20">
                            <?= $text_line_3 ?>
                        </div>
                    <?php } ?>
                </div>
                <?php if ($button) { ?>
                    <a href="<?= $button['url'] ?>" class=" h-[75px] px-14 flex justify-center items-center bg-accent rounded-full text-4xl leading-none text-white uppercase xl:text-3xl md:text-2xl">
                        <?= $button['title'] ?>
                    </a>
                <?php } ?>
            </div>
        </div>
        <img src="<?= wp_get_attachment_image_url($bg_image_with_attorney, 'full') ?>" class="absolute left-1/2 bottom-0 w-full h-full object-cover max-w-[1920px] mx-auto -translate-x-1/2 mdt:relative mdt:translate-0 mdt:mt-4" alt="">
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';
