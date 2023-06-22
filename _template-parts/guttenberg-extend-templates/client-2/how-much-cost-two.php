<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $how_much_cost_two__title = get_field('how_much_cost_two__title');
    $how_much_cost_two__description = get_field('how_much_cost_two__description');
    $phone = get_field('phone', 'options');
    $phone_link = get_field('phone_link', 'options');
    $how_much_cost_two__block_bg = get_field('how_much_cost_two__block_bg');
    $how_much_cost_two__select = get_field('how_much_cost_two__select'); ?>

    <div class="relative pt-12 lg:!pt-0 rounded-2xl shadow-siteWide overflow-hidden <?php echo $how_much_cost_two__select == 'Wider' ? 'max-w-full w-full px-48 xxxl:px-24' : 'container px-24' ?>"" style="background-color: <?php echo $how_much_cost_two__block_bg ?: ''  ?> ;">
        <?php if ($how_much_cost_two__title || $how_much_cost_two__description) { ?>
            <div class="flex gap-44 rounded-2xl xl:w-23/24 xl:gap-32 xl:px-16 lg:flex-col-reverse lg:items-center lg:gap-0 lg:pb-10 sm:px-2 justify-center">
                <div class="w-11/24 z-10 lg:items-center lg:w-full lg:text-center">
                    <?php if ($how_much_cost_two__title) { ?>
                        <h3 class="text-headings font-second font-bold pb-10 leading-[65px] text-6xl font-medium xl:!text-5xl sm:!text-4xl sm:leading-none sm:pt-9 sm:pb-5"><?php echo $how_much_cost_two__title ?></h3>
                    <?php } ?>
                    <?php if ($how_much_cost_two__description) { ?>
                        <p class="text-xl pb-16 leading-tight xl:text-lg lg:pb-10"><?php echo $how_much_cost_two__description ?></p>
                    <?php } ?>
                    <?php if ($phone && $phone_link) { ?>
                        <?php
                        Template::load('_template-parts/components/button.php', [
                            'link' => 'tel:' . $phone_link,
                            'text' => __($phone, 'law'),
                            'text_hover' => false,
                            'classes' => 'btn-medium hover_accent uppercase lg:m-auto ', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                        ]); ?>
                    <?php } ?>
                </div>
                <div class="font-main z-10 pb-24 text-accent font-black max-h-[570px] relative xs:max-h-64 lg:!pb-0 lg:max-h-max">
                    <div class="font-second text-[430px] mt-8 leading-[370px] xl:text-17xl md:text-15xl lg:mb-8 md:leading-[190px]">$0</div>
                </div>
            </div>
        <?php } ?>
        <div class="dots-bg h-28 absolute w-full bottom-0 lg:h-20 left-0"></div>
    </div>
<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
