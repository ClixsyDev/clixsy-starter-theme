<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $key = 'verdicts';
    $verdicts = get_field($key . '_verdicts_repeater');
    $bg = get_field($key . '_background_image');
?>
<!-- verdicts.php -->
    <div class="relative">
        <img src="<?= wp_get_attachment_image_url($bg, 'full') ?>" class="absolute left-0 top-0 w-full h-full object-cover" alt="">
        <div class="verdicts_slider glide relative pt-12 pb-14 2xl:pt-6 2xl:pb-7">
            <div class="glide__track" data-glide-el="track">
                <div class="glide__slides overflow-visible flex justify-around gap-3 items-center py-2">
                    <?php
                    foreach ($verdicts as $verdict) {
                    ?>
                        <div class="glide__slide bg-white pt-4 pb-2 px-4 text-center flex-1 shadow-reviews">
                            <div class="font-avenir font-bold text-accent text-4xl leading-none 2xl:text-3xl">
                                <?= $verdict['verdicts_value'] ?>
                            </div>
                            <div class="font-avenir text-[35px] 2xl:text-[25px]">
                                <?= $verdict['verdicts_description'] ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';
