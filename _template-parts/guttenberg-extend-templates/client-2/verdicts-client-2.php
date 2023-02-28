<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $key = 'verdicts_design_two';
    $verdicts = get_field($key . '_verdicts_repeater2');
    $bg = get_field($key . '_background_image2');
?>
    <!-- verdicts.php -->
    <div class="relative">
        <?php if ($bg) { ?>
            <img src="<?= wp_get_attachment_image_url($bg, 'full') ?>" class="absolute left-0 top-0 w-full h-full object-cover" alt="">
        <?php } ?>
        <div class="verdicts_slider_ba glide relative pt-12 pb-14 2xl:pt-6 2xl:pb-7">
            <div class="glide__track" data-glide-el="track">
                <div class="glide__slides overflow-visible flex justify-around gap-3 items-center py-2">
                    <?php
                    foreach ($verdicts as $verdict) {
                    ?>
                        <div class="glide__slide bg-white pt-6 pb-12  px-4  text-center flex-1 shadow-reviews relative">
                            <div class="font-avenir font-bold  text-4xl leading-none 2xl:text-3xl">
                                <?= $verdict['verdicts_value'] ?>
                            </div>
                            <div class="w-full flex justify-center">
                                <span class="h-1 my-4 bg-accent w-20 block"></span>
                            </div>
                            <div class="font-avenir text-xl 2xl:text-2xl">
                                <?= $verdict['verdicts_description'] ?>
                            </div>
                            <div class="dots-bg h-8 absolute w-full bottom-0 left-0"></div>
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
