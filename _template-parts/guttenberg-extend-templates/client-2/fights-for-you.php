<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $fights_for_you__title = get_field('fights_for_you__title');
    $fights_for_you__singleattorney_image = get_field('fights_for_you__singleattorney_image');
    $fights_for_you__rating_image = get_field('fights_for_you__rating_image');
    $fights_for_you__color = get_field('fights_for_you__color');
    $fights_for_you__bg_image = get_field('fights_for_you__bg_image');
    $fights_for_you__text_available = get_field('fights_for_you__text_available');
    $fights_for_you__time_available = get_field('fights_for_you__time_available');
    $fights_for_you__color_available = get_field('fights_for_you__color_available');
    $fights_for_you__benefits = get_field('fights_for_you__benefits');
    $fights_for_you__description = get_field('fights_for_you__description');
    $fights_for_you__number = get_field('fights_for_you__number');
    $fights_for_you__link = get_field('fights_for_you__link');
    $fights_for_you__cost_title = get_field('fights_for_you__cost_title');
    $fights_for_you__cost_description = get_field('fights_for_you__cost_description');
    $fights_for_you__cost_link = get_field('fights_for_you__cost_link');
    $fights_for_you__cost_block_bg = get_field('fights_for_you__cost_block_bg');
    $fights_for_you__cost_select = get_field('fights_for_you__cost_select'); ?>

    <section class="pt-10 relative">
        <?php if ($fights_for_you__bg_image) { ?>
            <?php echo wp_get_attachment_image($fights_for_you__bg_image, 'full', '', ['class' => 'absolute shadow-siteWide max-h-[525px] w-full top-0 -z-10']) ?>
        <?php } ?>
        <div class="container">
            <div class="flex gap-16 justify-center items-start xl:items-center xl:gap-8 mdt:flex-col-reverse"> 
                <?php if ($fights_for_you__singleattorney_image) { ?>
                    <?php echo wp_get_attachment_image($fights_for_you__singleattorney_image, 'full', '', ['class' => '']) ?>
                <?php } ?>
                <?php if ($fights_for_you__title) { ?>
                    <h2 class="text-6xl pt-8 text-headings font-third 2xl:text-4xl xl:text-3xl mdt:pt-0"><?php echo $fights_for_you__title ?></h2>
                <?php } ?>
                <?php if ($fights_for_you__rating_image) { ?>
                    <?php echo wp_get_attachment_image($fights_for_you__rating_image, 'full', '', ['class' => 'object-contain h-full pt-16 ml-32 mdt:!pt-5']) ?>
                <?php } ?>
            </div>
            <div class="px-20 rounded-md pb-10 xl:px-10 xl:pt-7 sm:px-4" style="background-color: <?php echo $fights_for_you__color ?: ''  ?> ;">
                <div class="flex xl:flex-col items-center">
                    <?php if ($fights_for_you__text_available || $fights_for_you__time_available) { ?>
                        <div class="flex items-center shadow-siteWide pl-10 pr-12 w-4/12 h-full mt-2.5 font-main gap-3 py-1 rounded-l-2xl -mr-1 text-white xl:px-10 xl:mr-0 xl:justify-center xl:w-12/24 sm:w-full" style="background-color: <?php echo $fights_for_you__color_available ?: ''  ?> ;">
                            <?php if ($fights_for_you__text_available) { ?>
                                <p class="text-xl text-right font-light leading-6"><?php echo $fights_for_you__text_available ?></p>
                            <?php } ?>
                            <?php if ($fights_for_you__time_available) { ?>
                                <p class="font-third text-6xl leading-[77px] font-bold"><?php echo $fights_for_you__time_available ?></p>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if ($fights_for_you__benefits) { ?>
                        <div class="flex gap-14 -mt-40 2xl:-mt-24 2xl:gap-7 xl:mt-28 md:flex-col md:items-center md:gap-12 md:mt-12">
                            <?php foreach ($fights_for_you__benefits as $item) { ?>
                                <div class="bg-black w-4/12 rounded-md px-6 pb-7 h-max 2xl:h-full 2xl:px-4 2xl:min-h-[300px] xl:min-h-[320px] md:w-9/12 md:pt-10 md:text-center sm:w-full">
                                    <?php if ($item['icon']) { ?>
                                        <?php echo wp_get_attachment_image($item['icon'], 'full', '', ['class' => '-mt-16 !max-h-24 md:m-auto']) ?>
                                    <?php } ?>
                                    <?php if ($item['title']) { ?>
                                        <h3 class="font-fourth font-bold text-3xl mt-8 mb-6 text-white 2xl:!text-2xl"><?php echo $item['title'] ?></h3>
                                    <?php } ?>
                                    <?php if ($item['description']) { ?>
                                        <p class="text-white"><?php echo $item['description'] ?></p>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>  
                </div>
                <?php if ($fights_for_you__description || $fights_for_you__number || $fights_for_you__link) { ?>
                    <div>
                        <?php if ($fights_for_you__description) { ?>
                            <div class="text-left py-10 px-16 text-white text-2xl font-light lg:!text-xl">
                                <?php echo $fights_for_you__description ?>
                            </div>
                        <?php } ?>
                        <?php if ($fights_for_you__number || $fights_for_you__link) { ?>
                            <div class="flex items-center justify-center gap-16 md:flex-col">
                                <a href="tel:+<?php echo $fights_for_you__number ?>" class="font-third font-black text-white text-6xl lg:!text-3xl"><?php echo $fights_for_you__number ?></a>
                                <?php if ($fights_for_you__link && $fights_for_you__link['url']) { ?>
                                    <?php
                                    Template::load('_template-parts/components/button.php', [
                                        'link' => $fights_for_you__link['url'],
                                        'text' => __($fights_for_you__link['title'], 'law'),
                                        'text_hover' => false,
                                        'classes' => 'bigauto_red hover_accent uppercase min-w-[460px]', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                                    ]); ?>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="relative pt-12" style="background-color: <?php echo $fights_for_you__cost_block_bg ?: ''  ?> ;">
                <?php if ($fights_for_you__cost_title || $fights_for_you__cost_description || $fights_for_you__cost_link) { ?>
                    <div class="flex gap-44 rounded-2xl uniq_xl:w-23/24 uniq_xl:px-16 lg:flex-col-reverse lg:pb-10 sm:px-6 <?php echo $fights_for_you__cost_select == 'Wider' ? 'max-w-full w-full px-48 xxxl:px-24' : 'px-24' ?>">
                        <div class="w-11/24 z-10 lg:items-center lg:w-full lg:text-center">
                            <?php if ($fights_for_you__cost_title) { ?>
                                <h3 class="text-headings font-third pb-10 leading-[65px] text-6xl font-medium uniq_xl:text-4xl"><?php echo $fights_for_you__cost_title ?></h3>
                            <?php } ?>
                            <?php if ($fights_for_you__cost_description) { ?>
                                <p class="text-xl pb-16 leading-tight uniq_xl:text-lg"><?php echo $fights_for_you__cost_description ?></p>
                            <?php } ?>
                            <?php if ($fights_for_you__cost_link && $fights_for_you__cost_link['url']) { ?>
                                <?php
                                Template::load('_template-parts/components/button.php', [
                                    'link' => $fights_for_you__cost_link['url'],
                                    'text' => __($fights_for_you__cost_link['title'], 'law'),
                                    'text_hover' => false,
                                    'classes' => ' hover_accent uppercase !min-w-[400px] ', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                                ]); ?>
                            <?php } ?>
                        </div>
                        <div class="font-third z-10 pb-24 text-accent font-black max-h-[570px] relative lg:max-h-80 xs:max-h-64">
                            <div class="text-20xl leading-[370px] lg:text-17xl xs:text-15xl">$0</div>
                        </div>
                    </div>
                <?php } ?>
                <div class="dots-bg h-28 absolute w-full bottom-0"></div>
            </div>
        </div>
    </section>

<?php }
if (!get_fields()) echo 'Fill block with content';
