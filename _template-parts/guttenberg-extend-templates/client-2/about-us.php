<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $about_us__title = get_field('about_us__title');
    $about_us__block_color = get_field('about_us__block_color');
    $about_us__image = get_field('about_us__image');
    $about_us__attorney_subtitle = get_field('about_us__attorney_subtitle');
    $about_us__attorney_title = get_field('about_us__attorney_title');
    $about_us__attorney_block_color = get_field('about_us__attorney_block_color');
    $about_us__first_description = get_field('about_us__first_description');
    $about_us__second_description = get_field('about_us__second_description');
    $about_us__title_items = get_field('about_us__title_items');
    $about_us__items = get_field('about_us__items');
    $about_us__link = get_field('about_us__link');
    
?>
    <section class="pt-72 2xl:pt-44 md:pt-28">
        <div class="container">
            <?php if ($about_us__title) { ?>
                <h2 class="heading_h2 leading-relaxed text-black text-7xl text-center ml-96 xl:text-left xl:ml-0 md:text-5xl"><?php echo $about_us__title ?></h2>
            <?php } ?>
            <div class="flex pb-8 px-9 gap-16 items-center max-h-96 mb-16 2xl:pt-8 xl:flex-col xl:max-h-max lg:mb-8 lg:px-5 md:gap-8" style="background-color: <?php echo $about_us__block_color ?: ''  ?> ;">
                <div class="flex flex-col -mt-80 w-12/24 xl:w-23/24 xl:mt-0">
                    <?php if ($about_us__image) { ?>
                        <?php echo wp_get_attachment_image($about_us__image, 'full', '', ['class' => '']) ?>
                    <?php } ?>
                    <?php if ($about_us__attorney_subtitle || $about_us__attorney_title) { ?>
                        <div class="py-9 px-16 text-center rounded-md shadow-siteWide sm:px-9 sm:py-4" style="background-color: <?php echo $about_us__attorney_block_color ?: ''  ?> ;">
                            <?php if ($about_us__attorney_subtitle) { ?>
                                <p class="text-[#C6C5C5] font-second text-3xl md:!text-2xl xs:!text-xl"><?php echo $about_us__attorney_subtitle ?></p>
                            <?php } ?>
                            <?php if ($about_us__attorney_title) { ?>
                                <h3 class="font-main font-bold text-white text-7xl 2xl:text-5xl md:text-4xl xs:text-3xl"><?php echo $about_us__attorney_title ?></h3>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <?php if ($about_us__first_description) { ?>
                    <div class="font-main text-3xl font-light text-white w-12/24 xl:w-20/24 lg:!text-xl lg:text-center"><?php echo $about_us__first_description ?></div>
                <?php } ?>
            </div>
            <?php if ($about_us__second_description || $about_us__title_items || $about_us__items || $about_us__link) { ?>
                <div class="flex gap-16 lg:flex-col-reverse">
                    <div class="flex flex-col gap-20 w-15/24 lg:w-full lg:m-auto lg:items-center lg:gap-10">
                        <?php if ($about_us__second_description) { ?>
                            <div class="font-main font-normal text-xl sm:!text-base"><?php echo $about_us__second_description ?></div>
                        <?php } ?>
                        <?php if ($about_us__link && $about_us__link['url']) { ?>
                            <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => $about_us__link['url'],
                                'text' => __($about_us__link['title'], 'law'),
                                'text_hover' => false,
                                'classes' => 'btn_md bigauto_red hover_accent !max-w-[460px]', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                            ]); ?>
                        <?php } ?>
                    </div>
                    <?php if ($about_us__items || $about_us__title_items) { ?>
                        <div class="shadow-siteWide w-11/24 px-12 pt-9 pb-20 h-max lg:w-full lg:m-auto lg:px-7 sm:pb-10">
                            <?php if ($about_us__title_items) { ?>
                                <h3 class="font-second text-3xl text-headings pb-16 sm:pb-8"><?php echo $about_us__title_items ?></h3>
                            <?php } ?>
                            <?php if ($about_us__items) { ?>
                                <div class="flex flex-col gap-8">
                                    <?php foreach ($about_us__items as $item) { ?>
                                        <?php if ($item['title'] || $item['icons']) { ?>
                                            <div class="flex gap-5 items-center">
                                                <?php if ($item['icons']) { ?>
                                                    <div class="min-w-[66px]">
                                                        <?php echo wp_get_attachment_image($item['icons'], 'full', '', ['class' => '']) ?>
                                                    </div>
                                                <?php } ?>
                                                <?php if ($item['title']) { ?>
                                                    <h4 class="text-3xl font-main font-black sm:!text-xl"><?php echo $item['title'] ?></h4>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>

<?php }
if (!get_fields()) echo 'Fill block with content';