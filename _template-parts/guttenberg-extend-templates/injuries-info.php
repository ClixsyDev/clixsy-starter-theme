<?php
$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $key = 'injuries_info';
    $bg_image = get_field($key . '_background_image');
    $description = get_field($key . '_description');
    $title = get_field($key . '_title');
    $subtitle = get_field($key . '_subtitle');
?>
    <div class="relative py-28 md:py-12">
        <?php 
        if (!empty($bg_image)) { ?>
            <img src="<?= wp_get_attachment_image_url($bg_image, 'full') ?>" class="absolute left-0 top-0 w-full h-full object-cover" alt="">
        <?php } ?>
        <div class="container relative">
            <?php if ($title) { ?>
                <h2 class="heading_h2 pb-4"><?php echo $title ?></h2>
            <?php } ?>
            <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
            <?php if ($subtitle) { ?>
                <p class="font-second font-bold text-2xl text-center md:text-xl"><?php echo $subtitle ?></p>
            <?php } ?>
            <?php if ($description) { ?>
                <div class="font-main text-xl max-w-[1120px] m-auto pt-10 lg:px-16 md:pt-3 md:text-base xs:px-0 xs:pt-5">
                    <?php echo $description ?>
                </div>
            <?php } ?>
        </div>
    </div>
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';
