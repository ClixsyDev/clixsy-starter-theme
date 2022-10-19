<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $verdicts_design_one__verdicts = get_field('verdicts_design_one__verdicts');
    $verdicts_design_one__bg = get_field('verdicts_design_one__bg');

?>
    <?php if ($verdicts_design_one__verdicts['0']) { ?>
        <div class="relative">
            <?php if ($verdicts_design_one__bg) {
                echo wp_get_attachment_image($verdicts_design_one__bg, 'full', '', ['class' => 'absolute left-0 top-0 w-full h-full object-cover']);
            } ?>
            <div class="verdicts_slider glide relative pt-12 pb-14 2xl:pt-6 2xl:pb-7">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides overflow-visible flex justify-around gap-3 items-center">
                        <?php
                        foreach ($verdicts_design_one__verdicts as $verdic_item) {
                        ?>
                            <div class="glide__slide bg-white pt-4 pb-2 px-4 text-center flex-1">
                                <div class="text-accent text-5xl leading-none 2xl:text-3xl">
                                    <?php echo $verdic_item['price'] ?>
                                </div>
                                <div class=" text-[40px] 2xl:text-[25px]">
                                    <?php echo $verdic_item['case'] ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <h1>Fill block with content</h1>
<?php }
}
