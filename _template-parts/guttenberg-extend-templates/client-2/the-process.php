<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $the_process__title = get_field('the_process__title');
    $the_process__process_box = get_field('the_process__process_box');
    $the_process__process_text = get_field('the_process__process_text');
    $the_process__link = get_field('the_process__link');
    $the_process__number = get_field('the_process__number');
    $the_process__block_bg = get_field('the_process__block_bg'); ?>

    <section class="pt-8">
        <div class="container mb-64 mdt:mb-10">
            <div class="flex justify-center">
                <h2 class="font-second text-center font-bold text-6xl xl:pb-5 sm:!text-5xl xs:leading-none"><?php echo $the_process__title ?></h2>
            </div>
        </div>
        <div class="max-w-[1610px] rounded-lg mx-auto sm:!bg-inherit" style="background-color: <?php echo $the_process__block_bg ?: ''  ?> ;">
            <div class="container">
                <?php if ($the_process__process_box) { ?>
                    <div class="flex justify-center gap-24 xl:gap-5 w-full mb-7 mdt:mb-4 md:flex-wrap">
                        <?php foreach ($the_process__process_box as $item) { ?>
                            <div class="bg-black shadow-siteWide !-mt-32 mdt:!mt-28 xs:!mt-20 !w-[250px] rounded-md px-6 pb-7 h-56 2xl:px-4 mdt:h-full mdt:pb-4 md:pt-10 md:text-center md:relative md:!w-[230px] sm:!w-[145px]">
                                <?php if ($item['icon']) { ?>
                                    <?php echo wp_get_attachment_image($item['icon'], 'full', '', ['class' => '-mt-16 mx-auto !max-h-24 md:-mt-24 object-contain ']) ?>
                                <?php } ?>
                                <?php if ($item['number']) { ?>
                                    <h3 class="font-bold text-5xl text-left mt-4 mb-2 text-white 2xl:!text-2xl mdt:!mb-0"><?php echo $item['number'] ?></h3>
                                <?php } ?>
                                <?php if ($item['title']) { ?>
                                    <h3 class="text-white font-bold text-2xl text-left mdt:!text-base"><?php echo $item['title'] ?></h3>
                                <?php } ?>
                                <div class="hidden absolute items-center gap-1 w-23/24 left-0 -bottom-6 md:!flex">
                                    <div class="w-5 h-5 rounded-full bg-accent mdt:w-3 mdt:h-3"></div>
                                    <div class="h-[2px] w-full bg-[#cbcbcb]"></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="flex justify-center ml-3 items-center gap-3 mb-16 xl:ml-0 xl:gap-1 mdt:mb-12 mdt:!justify-start md:!hidden">
                        <?php foreach ($the_process__process_box as $key => $item) { ?>
                            <div class="w-5 h-5 rounded-full bg-accent mdt:w-3 mdt:h-3"></div>
                            <div class="h-[2px] bg-[#cbcbcb] <?php echo $key == 3 ? 'w-4/24 mdt:w-5/24' : 'w-5/24 mdt:w-[23%]' ?>"></div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if ($the_process__process_text) { ?>
                    <div class=" w-4/6 xl:w-5/6 mdt:w-full mx-auto mb-16 md:mt-12">
                        <?php foreach ($the_process__process_text as $item) { ?>
                            <div class="mb-8">
                                <?php if ($item['title']) { ?>
                                    <h3 class="text-black mb-3 font-bold text-5xl md:text-3xl sm:text-2xl"><?php echo $item['title'] ?></h3>
                                <?php } ?>
                                <?php if ($item['description']) { ?>
                                    <div class="text-black font-main text-lg sm:text-base"><?php echo $item['description'] ?></div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <div class=" flex flex-wrap items-center justify-center flex-row mx-auto w-3/5 md:w-full pb-20 gap-5">
                    <?php if ($the_process__link) { ?>
                        <?php
                        Template::load('_template-parts/components/button.php', [
                            'link' => $the_process__link['url'],
                            'text' => __($the_process__link['title'], 'law'),
                            'text_hover' => false,
                            'classes' => 'bigauto_red shadow-siteWide hover_accent !max-w-[460px] rounded-xl sm:shadow-btn', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                        ]); ?>
                    <?php } ?>
                    <div class="text-accent font-bold text-6xl xs:!text-5xl font-second"> <?php echo $the_process__number ?></div>
                </div>
            </div>
        </div>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
