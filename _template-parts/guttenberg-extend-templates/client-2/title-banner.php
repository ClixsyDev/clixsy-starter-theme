<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $title_block__title = get_field('title_block__title');
    $title_block__background_image = get_field('title_block__background_image'); ?>

    <section class="bg-cover overflow-hidden" style="
    background-image:url('<?php echo !empty($title_block__background_image) ? wp_get_attachment_image_url($title_block__background_image['ID'], 'full') : ''; ?>');">
        <div class="relative">
            <div class="container">
                <?php if ($title_block__title) { ?>
                    <h1 class="text-black uppercase text-[100px] leading-[120px] font-bold font-second text-center font-third md:!text-[36px] pt-48 pb-80 xl:pt-32 xl:pb-64 md:pt-16 md:pb-28 md:leading-snug"><?php echo $title_block__title ?></h1>
                <?php } ?>
                <div class="dots-bg h-24 absolute w-full bottom-0 left-0 xl:h-16 xs:h-12"></div>
            </div>
        </div>
    </section>
<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
