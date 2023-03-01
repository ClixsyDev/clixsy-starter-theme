<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $merits__block_bg = get_field('merits__block_bg');
    $merits__items = get_field('merits__items'); ?>

    <section style="background-color: <?php echo $merits__block_bg ?: ''  ?> ;">
        <div class="merits glide px-3">
            <div class="glide__track" data-glide-el="track">
                <div class="glide__slides py-6 m-auto 2xl:grid-cols-2 2xl:grid-flow-row 2xl:gap-y-5 md:grid-cols-1">
                    <?php if ($merits__items) { ?>
                        <?php foreach ($merits__items as $item) { ?>
                            <div class="glide__slide">
                                <div class="flex gap-5 justify-center items-center">
                                    <?php if ($item['merits__icons']) { ?>
                                        <img class="" src="<?= wp_get_attachment_image_url($item['merits__icons'], 'full') ?>">
                                    <?php } ?>
                                    <?php if ($item['merits__title']) { ?>
                                        <h3 class="font-third font-bold text-white  xxxl:text-xl md:text-base xs:text-base"><?php echo $item['merits__title'] ?></h3>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
