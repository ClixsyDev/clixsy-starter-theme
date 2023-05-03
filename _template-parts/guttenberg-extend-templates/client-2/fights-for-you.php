<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $fights_for_you__title = get_field('fights_for_you__title');
    $for_you_heading_tag = get_field('for_you_heading_tag');
    $fights_for_you__singleattorney_image = get_field('fights_for_you__singleattorney_image');
    $fights_for_you__rating_image = get_field('fights_for_you__rating_image');
    $fights_for_you__color = get_field('fights_for_you__color');
    $fights_for_you__bg_image = get_field('fights_for_you__bg_image');
    $fights_for_you__text_available = get_field('fights_for_you__text_available');
    $fights_for_you__time_available = get_field('fights_for_you__time_available');
    $fights_for_you__color_available = get_field('fights_for_you__color_available');
    $fights_for_you__benefits = get_field('fights_for_you__benefits');
    $fights_for_you__description = get_field('fights_for_you__description');
    $phone = get_field('phone', 'options');
    $phone_link = get_field('phone_link', 'options');
    $fights_for_you__link = get_field('fights_for_you__link');
    $fights_for_you__cost_title = get_field('fights_for_you__cost_title');
    $fights_for_you__cost_description = get_field('fights_for_you__cost_description');
    $fights_for_you__cost_link = get_field('fights_for_you__cost_link');
    $fights_for_you__cost_block_bg = get_field('fights_for_you__cost_block_bg');
    $fights_for_you__cost_select = get_field('fights_for_you__cost_select'); ?>

    <section class="pt-10 relative z-10">
        <?php if ($fights_for_you__bg_image) { ?>
            <?php echo wp_get_attachment_image($fights_for_you__bg_image, 'full', '', ['class' => 'absolute shadow-siteWide max-h-[525px] w-full h-full top-0 -z-10 lg:max-h-[655px]']) ?>
        <?php } ?>
        <div class="container">
            <div class="flex gap-16 justify-start items-start xl:gap-8 mdt:mb-44 mdt:flex-col-reverse">
                <?php if ($fights_for_you__singleattorney_image) { ?>
                    <?php echo wp_get_attachment_image($fights_for_you__singleattorney_image, 'full', '', ['class' => 'mdt:hidden']) ?>
                <?php } ?>
                <div class="flex xl:flex-col xl:gap-5 2xl:items-center xl:items-baseline mdt:!flex-row mdt:w-full mdt:justify-between">
                    <div class="flex items-center xl:flex-col xl:!items-start md:w-full md:gap-6 md:!items-center md:mb-9">
                        <?php if ($fights_for_you__title) { ?>
                            <?php echo '<' .  $for_you_heading_tag . ' class="text-6xl capitalize pt-8 text-black font-bold font-second xl:pt-0 mdt:pt-0 md:!text-5xl leading-none">' . $fights_for_you__title . '</' .  $for_you_heading_tag . '>'; ?>
                        <?php } ?>
                        <div class="hidden shadow-siteWide px-3 w-9/12 h-full justify-center font-main gap-3 py-4 !items-center rounded-2xl text-white md:!flex xs:!py-2" style="background-color: <?php echo $fights_for_you__color_available ?: ''  ?> ;">
                            <div class="flex flex-col">
                                <p class="text-xl text-right font-light br-remove"><?php echo $fights_for_you__text_available ?></p>
                            </div>
                            <?php if ($fights_for_you__time_available) { ?>
                                <p class="font-second text-6xl leading-[77px] xl:!text-3xl xl:leading-none font-bold xs:!text-5xl"><?php echo $fights_for_you__time_available ?></p>
                            <?php } ?>
                        </div>
                        <?php if ($fights_for_you__rating_image) { ?>
                            <?php echo wp_get_attachment_image($fights_for_you__rating_image, 'full', '', ['class' => 'object-contain h-full pt-10 ml-32 2xl:ml-3 xl:!ml-0 xl:!pt-0 xl:w-16/24 2xl:!pt-12 md:w-12/24 xs:w-14/24']) ?>
                        <?php } ?>
                    </div>
                    <div class="hidden shadow-siteWide px-3 w-5/12 h-full font-main gap-3 py-4 !items-center rounded-2xl text-white xl:w-6/24 xl:!items-end xl:mr-0 xl:justify-center sm:w-full mdt:!flex md:!hidden" style="background-color: <?php echo $fights_for_you__color_available ?: ''  ?> ;">
                        <div class="flex flex-col">
                            <p class="text-xl text-right font-light br-remove"><?php echo $fights_for_you__text_available ?></p>
                        </div>
                        <?php if ($fights_for_you__time_available) { ?>
                            <p class="font-second text-6xl leading-[77px] xl:!text-3xl xl:leading-none font-bold xs:!text-5xl"><?php echo $fights_for_you__time_available ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="px-20 rounded-md pb-10 xl:pt-7 mdt:px-7 sm:px-4 pt-5 2xl:pt-0" style="background-color: <?php echo $fights_for_you__color ?: ''  ?> ;">
                <div class="flex items-center md:-mt-44 md:justify-center">
                    <?php if ($fights_for_you__text_available || $fights_for_you__time_available) { ?>
                        <div class="flex items-center shadow-siteWide pl-10 pr-12 w-5/12 h-full mt-2.5 font-main gap-3 py-1 rounded-l-2xl -mr-1 text-white xl:px-5 xl:flex-col xl:w-6/24 xl:gap-1 xl:py-2 xl:!items-end xl:mr-0 xl:justify-center sm:w-full mdt:!hidden" style="background-color: <?php echo $fights_for_you__color_available ?: ''  ?> ;">
                            <div class="flex flex-col">
                                <p class="text-xl text-right font-light leading-6"><?php echo $fights_for_you__text_available ?></p>
                            </div>
                            <?php if ($fights_for_you__time_available) { ?>
                                <p class="font-second text-6xl leading-[77px] xl:!text-3xl xl:leading-none font-bold xs:!text-5xl"><?php echo $fights_for_you__time_available ?></p>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if ($fights_for_you__benefits) { ?>
                        <div class="flex gap-14 -mt-40 2xl:-mt-24 2xl:gap-7 xl:-mt-24 xl:gap-11 mdt:gap-4 md:flex-col md:items-center md:gap-28 md:mt-12">
                            <?php foreach ($fights_for_you__benefits as $item) { ?>
                                <div class="bg-black w-4/12 rounded-md px-6 pb-7 h-max 2xl:h-full 2xl:px-4 2xl:min-h-[300px] xl:w-7/24 xl:min-h-[230px] mdt:w-full mdt:min-h-[270px] md:min-h-[170px] md:w-9/12 md:pt-10 md:px-7 md:text-left sm:w-full">
                                    <?php if ($item['icon']) { ?>
                                        <?php echo wp_get_attachment_image($item['icon'], 'full', '', ['class' => '-mt-16 mb-7 !max-h-24 xl:min-h-[120px] xl:min-w-[120px] xl:-mt-20 md:m-auto md:-mt-32']) ?>
                                    <?php } ?>
                                    <?php if ($item['title']) { ?>
                                        <h3 class="font-bold font-third text-[28px] mt-8 mb-6 text-white xl:!my-4 2xl:!text-2xl xs:!text-xl"><?php echo $item['title'] ?></h3>
                                    <?php } ?>
                                    <?php if ($item['description']) { ?>
                                        <div class="text-white"><?php echo $item['description'] ?></div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <?php if ($fights_for_you__description || $phone || $phone_link || $fights_for_you__link) { ?>
                    <div>
                        <?php if ($fights_for_you__description) { ?>
                            <div class="text-left py-10 px-16 text-white text-2xl font-light xl:px-0 lg:!text-xl">
                                <?php echo $fights_for_you__description ?>
                            </div>
                        <?php } ?>
                        <?php if ($phone || $phone_link || $fights_for_you__link) { ?>
                            <div class="flex items-center justify-center gap-16 xl:!justify-between lg:flex-col lg:gap-0">
                                <a href="tel:<?php echo $phone_link ?>" class="font-second font-black text-white text-6xl sm:!text-5xl"><?php echo $phone ?></a>
                                <?php if ($fights_for_you__link && $fights_for_you__link['url']) { ?>
                                    <?php
                                    Template::load('_template-parts/components/button.php', [
                                        'link' => $fights_for_you__link['url'],
                                        'text' => __($fights_for_you__link['title'], 'law'),
                                        'text_hover' => false,
                                        'classes' => 'uppercase disabled:hover min-w-[460px]', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                                    ]); ?>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="relative pt-12 lg:!pt-0 rounded-2xl shadow-siteWide lg:hidden" style="background-color: <?php echo $fights_for_you__cost_block_bg ?: ''  ?> ;">
                <?php if ($fights_for_you__cost_title || $fights_for_you__cost_description || $fights_for_you__cost_link) { ?>
                    <div class="flex gap-44 rounded-2xl xl:w-23/24 xl:gap-32 xl:px-16 lg:flex-col-reverse lg:items-center lg:gap-0 lg:pb-10 sm:px-2 <?php echo $fights_for_you__cost_select == 'Wider' ? 'max-w-full w-full px-48 xxxl:px-24' : 'px-24' ?>">
                        <div class="w-12/24 z-10 lg:items-center lg:w-full lg:text-center">
                            <?php if ($fights_for_you__cost_title) { ?>
                                <h3 class="text-headings font-bold capitalize font-second pb-10 leading-[65px] text-6xl sm:!text-4xl sm:leading-none sm:pt-9 sm:pb-5"><?php echo $fights_for_you__cost_title ?></h3>
                            <?php } ?>
                            <?php if ($fights_for_you__cost_description) { ?>
                                <p class="pb-16 text-lg leading-tight xl:text-lg lg:pb-10"><?php echo $fights_for_you__cost_description ?></p>
                            <?php } ?>
                            <?php if ($fights_for_you__cost_link && $fights_for_you__cost_link['url']) { ?>
                                <?php
                                Template::load('_template-parts/components/button.php', [
                                    'link' => $fights_for_you__cost_link['url'],
                                    'text' => __($fights_for_you__cost_link['title'], 'law'),
                                    'text_hover' => false,
                                    'classes' => 'btn-medium hover_accent uppercase lg:m-auto ', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                                ]); ?>
                            <?php } ?>
                        </div>
                        <div class="font-main z-10 pb-20 text-accent font-black max-h-[570px] relative xs:max-h-64 lg:!pb-0 lg:max-h-max">
                            <div class="font-second text-[500px] leading-[370px] md:text-15xl lg:mb-8 md:leading-[190px] md:mt-8">$0</div>
                        </div>
                    </div>
                <?php } ?>
                <div class="dots-bg h-28 absolute w-full bottom-0 lg:h-20"></div>
            </div>
            <div class="relative lg:!pt-5 hidden rounded-2xl shadow-siteWide lg:!block" style="background-color: <?php echo $fights_for_you__cost_block_bg ?: ''  ?> ;">
                <?php if ($fights_for_you__cost_title || $fights_for_you__cost_description || $fights_for_you__cost_link) { ?>
                    <div class="flex gap-44 rounded-2xl xl:w-23/24 xl:gap-32 xl:px-16 lg:flex-col-reverse lg:items-center lg:gap-0 lg:pb-10 sm:px-2 <?php echo $fights_for_you__cost_select == 'Wider' ? 'max-w-full w-full px-48 xxxl:px-24' : 'px-24' ?>">
                        <div class="w-12/24 z-10 lg:items-center lg:w-full lg:text-left lg:max-w-[60%] sm:max-w-[90%]">
                            <?php if ($fights_for_you__cost_title) { ?>
                                <h3 class="text-headings font-bold capitalize font-second pb-10 leading-[65px] text-6xl xl:!text-5xl lg:pb-0 sm:!text-4xl sm:leading-none sm:pt-9 sm:pb-5"><?php echo $fights_for_you__cost_title ?></h3>
                            <?php } ?>
                            <div class="font-main z-10 pb-20 text-accent font-black max-h-[570px] relative xs:max-h-64 lg:!pb-0 lg:max-h-max">
                                <div class="font-second text-[500px] leading-[370px] xl:text-17xl md:text-15xl lg:mb-0 md:leading-[190px] md:my-8">$0</div>
                            </div>
                            <?php if ($fights_for_you__cost_description) { ?>
                                <p class="pb-16 text-lg leading-tight xl:text-lg lg:pb-10"><?php echo $fights_for_you__cost_description ?></p>
                            <?php } ?>
                            <?php if ($fights_for_you__cost_link && $fights_for_you__cost_link['url']) { ?>
                                <?php
                                Template::load('_template-parts/components/button.php', [
                                    'link' => $fights_for_you__cost_link['url'],
                                    'text' => __($fights_for_you__cost_link['title'], 'law'),
                                    'text_hover' => false,
                                    'classes' => 'btn-medium hover_accent uppercase lg:m-auto sm:m-0', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                                ]); ?>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <div class="dots-bg h-28 absolute w-full bottom-0 lg:h-20"></div>
            </div>
        </div>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
