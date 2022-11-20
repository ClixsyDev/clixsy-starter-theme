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

    <div class="overflow-hidden">
        <div class="container flex items-center justify-between rounded-2xl uniq_xl:w-23/24 uniq_xl:px-16 lg:flex-col-reverse lg:pb-10 sm:px-6 <?php echo $how_much_cost__select == 'Wider' ? 'max-w-full w-20/24 px-60 xxxl:px-24' : 'px-20' ?>" style="background-color: <?php echo $how_much_cost__block_bg ?: ''  ?> ;">
            <?php if ($how_much_cost__title || $how_much_cost__description || $how_much_cost__link) { ?>
                <div class="w-12/24 flex flex-col gap-6 lg:items-center lg:w-full lg:text-center">
                    <?php if ($how_much_cost__title) { ?>
                        <h3 class="text-headings leading-tight font-second text-5xl font-medium uniq_xl:text-4xl"><?php echo $how_much_cost__title ?></h3>
                    <?php } ?>
                    <?php if ($how_much_cost__description) { ?>
                        <p class="text-xl leading-tight uniq_xl:text-lg"><?php echo $how_much_cost__description ?></p>
                    <?php } ?>
                    <?php if ($how_much_cost__link && $how_much_cost__link['url']) { ?>
                        <?php
                        Template::load('_template-parts/components/button.php', [
                            'link' => $how_much_cost__link['url'],
                            'text' => __($how_much_cost__link['title'], 'law'),
                            'text_hover' => false,
                            'classes' => 'btn_md bigauto_red hover_accent uppercase max-w-[460px]', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                        ]); ?>
                    <?php } ?>
                </div>
                <div class="font-second text-accent font-black max-h-[570px] flex items-center relative lg:max-h-80 xs:max-h-64">
                    <span class="absolute text-13xl top-11% -left-25% lg:-top-7% lg:-left-35% xs:text-10xl xs:top-0">$</span>
                    <div class="text-20xl lg:text-17xl xs:text-15xl">0</div>
                </div>
            <?php } ?>
        </div>
    </div>

    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';