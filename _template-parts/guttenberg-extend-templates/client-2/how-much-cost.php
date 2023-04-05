<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $how_much_cost__title = get_field('how_much_cost__title');
    $how_much_cost__description = get_field('how_much_cost__description');
    $how_much_cost__link = get_field('how_much_cost__link');
    $how_much_cost__block_bg = get_field('how_much_cost__block_bg');
    $how_much_cost__select = get_field('how_much_cost__select'); ?>

    <div class="overflow-hidden relative">
        <div class="container z-10 rounded-2xl" style="background-color: <?php echo $how_much_cost__block_bg ?: ''  ?> ;">
            <div class="relative">
                <?php if ($how_much_cost__title || $how_much_cost__description || $how_much_cost__link) { ?>
                    <div class="flex gap-44 pt-12 rounded-2xl shadow-siteWide xl:w-23/24 xl:gap-32 xl:px-16 lg:flex-col-reverse lg:items-center lg:gap-0 lg:pb-10 sm:px-2 <?php echo $how_much_cost__select == 'Wider' ? 'max-w-full w-full px-48 xxxl:px-24' : 'px-20' ?>">
                        <div class="w-12/24 z-10 flex flex-col lg:items-center lg:w-full lg:text-center">
                            <?php if ($how_much_cost__title) { ?>
                                <h3 class="text-headings font-second pb-10 leading-[65px] text-6xl font-bold xl:!text-5xl sm:!text-4xl sm:leading-none sm:pt-9 sm:pb-5"><?php echo $how_much_cost__title ?></h3>
                            <?php } ?>
                            <?php if ($how_much_cost__description) { ?>
                                <p class="text-lg pb-16 leading-tight xl:text-lg lg:pb-10"><?php echo $how_much_cost__description ?></p>
                            <?php } ?>
                            <?php if ($how_much_cost__link && $how_much_cost__link['url']) { ?>
                                <?php
                                Template::load('_template-parts/components/button.php', [
                                    'link' => $how_much_cost__link['url'],
                                    'text' => __($how_much_cost__link['title'], 'law'),
                                    'text_hover' => false,
                                    'classes' => 'btn-medium hover_accent uppercase lg:m-auto', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                                ]); ?>
                            <?php } ?>
                        </div>
                        <div class="font-main z-10 pb-20 text-accent font-black max-h-[570px] relative xs:max-h-64 lg:!pb-0 lg:max-h-max">
                            <div class="font-second text-[500px] leading-[370px] xl:text-17xl md:text-15xl lg:mb-8 md:leading-[190px] md:mt-8">$0</div>
                        </div>
                    </div>
                    <div class="dots-bg h-28 left-0 absolute w-full bottom-0 lg:h-20"></div>
                <?php } ?>
            </div>
        </div>
    </div>

    </div>
<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';