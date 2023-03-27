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
            <div class="flex gap-16 px-6 mdt:gap-9 md:px-5 md:!block">
                <?php if ($auto_accident_fault__image) { ?>
                    <div class="w-12/24 xl:w-full uniq_xl:w-15/24 mdt:w-16/24 md:w-19/24 md:hidden">
                        <?php echo wp_get_attachment_image($auto_accident_fault__image, 'full', '', ['class' => 'w-full rounded-md 2xl:min-h-[700px] xl:object-cover mdt:min-h-[780px]']) ?>
                    </div>
                <?php } ?>
                <?php if ($auto_accident_fault__title || $auto_accident_fault__description) { ?>
                    <div class="w-12/24 pt-3 xl:w-22/24 md:w-full">
                        <?php if ($auto_accident_fault__title) { ?>
                            <h2 class="font-second font-bold text-6xl mdt:!text-5xl"><?php echo $auto_accident_fault__title ?></h2>
                        <?php } ?>
                        <?php if ($auto_accident_fault__description) { ?>
                            <div class="text-xl xs:text-base"><?php echo $auto_accident_fault__description ?></div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <?php if ($auto_accident_fault__items) { ?>
                <div class="flex pr-7 rounded-md gap-24 py-5 -mt-56 2xl:-mt-20 2xl:-mt-52 xl:gap-0 xl:justify-center md:px-3 md:mt-5" style="background-color: <?php echo $auto_accident_fault__block_color ?: ''  ?> ;">
                    <div class="w-12/24 xl:w-23/24 uniq_xl:w-15/24 mdt:w-16/24 md:hidden"></div>
                    <div class="w-12/24 xl:w-18/24 md:w-full">
                        <?php if ($auto_accident_fault__description_repeater) { ?>
                            <p class="text-white text-xl pb-5 xs:!text-base"><?php echo $auto_accident_fault__description_repeater ?></p>
                        <?php } ?>
                        <div class="grid grid-cols-3 gap-y-10 gap-x-3 md:!grid-cols-2 xs:!gap-x-1 xs:!gap-y-5">
                            <?php foreach ($auto_accident_fault__items as $item) { ?>
                                <div class="flex justify-start items-center gap-2 xl:justify-center md:justify-start xs:justify-start xs:!gap-0">
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
