<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $auto_accident_fault__image = get_field('auto_accident_fault__image');
    $auto_accident_fault__title = get_field('auto_accident_fault__title');
    $auto_accident_fault__description = get_field('auto_accident_fault__description');
    $auto_accident_fault__items = get_field('auto_accident_fault__items');
    $auto_accident_fault__block_color = get_field('auto_accident_fault__block_color');
    $auto_accident_fault__description_repeater = get_field('auto_accident_fault__description_repeater'); ?>

    <section class="pt-20 xl:pt-10 mdt:mb-10">
        <div class="container">
            <div class="flex gap-16 px-6 xl:flex-col-reverse xl:items-center md:gap-9 xs:px-0 ">
                <?php if ($auto_accident_fault__image) { ?>
                    <div class="w-12/24 md:w-19/24">
                        <?php echo wp_get_attachment_image($auto_accident_fault__image, 'full', '', ['class' => 'w-full rounded-md']) ?>
                    </div>
                <?php } ?>
                <?php if ($auto_accident_fault__title || $auto_accident_fault__description) { ?>
                    <div class="w-12/24 pt-3 xl:w-22/24 xl:text-center">
                        <?php if ($auto_accident_fault__title) { ?>
                            <h2 class="font-second font-bold text-5xl xl:pb-5 2xl:text-4xl xl:text-3xl"><?php echo $auto_accident_fault__title ?></h2>
                        <?php } ?>
                        <?php if ($auto_accident_fault__description) { ?>
                            <div class="text-xl xs:text-base"><?php echo $auto_accident_fault__description ?></div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <?php if ($auto_accident_fault__items) { ?>
                <div class="flex pr-7 rounded-md gap-24 py-5 -mt-56 2xl:-mt-20 xl:justify-center xl:pt-32 md:pr-0" style="background-color: <?php echo $auto_accident_fault__block_color ?: ''  ?> ;">
                    <div class="w-12/24 xl:hidden"></div>
                    <div class="w-12/24 xl:w-18/24">
                        <?php if ($auto_accident_fault__description_repeater) { ?>
                            <p class="text-white text-xl pb-5 xl:text-center"><?php echo $auto_accident_fault__description_repeater ?></p>
                        <?php } ?>
                        <div class="grid grid-cols-3 gap-y-10 gap-x-3 md:!grid-cols-2 xs:!gap-x-16 xs:!gap-y-5 xs:g!rid-cols-1">
                            <?php foreach ($auto_accident_fault__items as $item) { ?>
                                <div class="flex justify-start items-center gap-2 xl:justify-center md:justify-start xs:justify-center">
                                    <?php if ($item['icons']) { ?>
                                        <?php echo wp_get_attachment_image($item['icons'], 'full', '', ['class' => '']) ?>
                                    <?php } ?>
                                    <?php if ($item['title']) { ?>
                                        <h4 class="text-white font-third uppercase font-bold text-xl mdt:!text-base "><?php echo $item['title'] ?></h4>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
