<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $logo__image = get_field('logo__image'); ?>

    <?php if ($logo__image) { ?>
        <section class="pt-7">   
            <div class="container">
                <?php echo wp_get_attachment_image($logo__image, 'full', '', ['class' => 'm-auto pb-3']) ?>
            </div>
            <div class="dots-bg"></div>
        </section>
    <?php } ?>

<?php }
if (!get_fields()) echo 'Fill block with content';
