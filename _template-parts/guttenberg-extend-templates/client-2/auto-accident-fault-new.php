<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $auto_accident_fault_new__image = get_field('auto_accident_fault_new__image');
    $auto_accident_fault_new__title = get_field('auto_accident_fault_new__title');
    $auto_accident_fault_new__description = get_field('auto_accident_fault_new__description');
    $auto_accident_fault_new__items = get_field('auto_accident_fault_new__items');
    $auto_accident_fault_new__block_color = get_field('auto_accident_fault_new__block_color');
    $auto_accident_fault_new__description_repeater = get_field('auto_accident_fault_new__description_repeater'); ?>

    <section class="pt-20 xl:pt-10 mdt:mb-10">
        <div class="container relative">
            <?php if ($auto_accident_fault_new__image) { ?>
                <div class="absolute top-10 bottom-10 left-10 right-1/2 mr-8 rounded-md overflow-hidden flex justify-center items-center">
                    <?php echo wp_get_attachment_image($auto_accident_fault_new__image, 'full', '', ['class' => 'object-cover min-h-full min-w-full']) ?>
                </div>
            <?php } ?>
            <div class="flex py-10 px-6 gap-16 2xl:gap-8">
                <div class="w-1/2"></div>
                <?php if ($auto_accident_fault_new__title || $auto_accident_fault_new__description) { ?>
                    <div class="w-1/2">
                        <?php if ($auto_accident_fault_new__title) { ?>
                            <h2 class="font-second font-bold text-6xl mdt:!text-5xl"><?php echo $auto_accident_fault_new__title ?></h2>
                        <?php } ?>
                        <?php if ($auto_accident_fault_new__description) { ?>
                            <div class="text-xl xs:text-base"><?php echo $auto_accident_fault_new__description ?></div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <?php if ($auto_accident_fault_new__items) { ?>
                <div class="flex text-white py-5 px-7 rounded-md gap-16 2xl:gap-8" style="background-color: <?php echo $auto_accident_fault_new__block_color ?: ''  ?> ;">
                    <div class="w-1/2"></div>
                    <div class="w-1/2">
                        <?php if ($auto_accident_fault_new__description_repeater) { ?>
                            <p class="text-xl mb-5 xs:!text-base"><?php echo $auto_accident_fault_new__description_repeater ?></p>
                        <?php } ?>
                        <div class="grid grid-cols-3 gap-y-10 gap-x-3 2xl:gap-3">
                            <?php foreach ($auto_accident_fault_new__items as $item) { ?>
                                <div class=" flex items-center gap-2">
                                    <?php if ($item['icons']) { ?>
                                        <?php echo wp_get_attachment_image($item['icons'], 'full', '', ['class' => '']) ?>
                                    <?php } ?>
                                    <?php if ($item['title']) { ?>
                                        <h4 class="text-white font-third uppercase leading-snug font-bold text-xl mdt:!text-base "><?php echo $item['title'] ?></h4>
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
