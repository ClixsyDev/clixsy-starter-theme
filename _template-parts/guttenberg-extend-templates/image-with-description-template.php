<?php
$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $image = get_field('image');
    $description = get_field('description');
?>
    <div class="relative flex justify-end pt-12">
        <div class="bg-orange w-11/12 flex px-9 py-4 mb-8 md:flex-wrap md:w-full md:p-8">
            <div class="w-4/12 relative md:w-full">
                <img  class="absolute -top-10 -left-24 block !m-0 md:relative md:top-0 md:left-0" src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="">
            </div>
            <div class="text-white text-3xl w-8/12 font-light -ml-10 md:w-full md:ml-0 md:text-2x helvetica ">
                <?php echo $description ?>
            </div>
        </div>
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';