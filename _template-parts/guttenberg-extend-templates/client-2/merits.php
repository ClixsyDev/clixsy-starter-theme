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
        <div class="grid w-23/24 m-auto py-6 justify-between grid-gap grid-flow-col 2xl:grid-cols-2 2xl:grid-flow-row 2xl:gap-y-5 md:grid-cols-1">
            <?php if ($merits__items) { ?>
                <?php foreach ($merits__items as $item) { ?>
                    <div class="flex items-center gap-4 2xl:justify-center">
                        <?php if ($item['merits__icons']) { ?>
                            <img class="" src="<?= wp_get_attachment_image_url($item['merits__icons'], 'full') ?>">
                        <?php } ?>
                        <?php if ($item['merits__title']) { ?>
                            <h3 class="font-second text-white text-2xl mdt:text-xl xs:text-base"><?php echo $item['merits__title'] ?></h3>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </section>
    
<?php }
if (!get_fields()) echo 'Fill block with content';