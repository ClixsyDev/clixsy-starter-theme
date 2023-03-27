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
    $about_us__number = get_field('about_us__number');
    $about_us__second_description = get_field('about_us__second_description');
    $about_us__title_items = get_field('about_us__title_items');
    $about_us__items = get_field('about_us__items');
    $about_us__link = get_field('about_us__link');
    $about_us__background = get_field('about_us__background');


?>
    <section class="pt-40  -mb-[4%] lg:-mb-[6%] 2xl:pt-44 md:pt-28 relative z-[1] lg:!pt-8">
        <div class="container lg:relative lg:z-10">
            <span class="absolute right-0 left-0 min-h-[67%] top-72 -z-10 w-full bg-smoke hidden lg:!block sm:min-h-[59%] xs:top-60 xs:min-h-[65%]"></span>
            <?php if ($about_us__title) { ?>
                <h2 class="heading_h2 leading-relaxed text-black text-7xl text-center ml-72 lg:text-left lg:ml-0 lg:mb-[45%] mdt:mb-[65%] md:text-5xl"><?php echo $about_us__title ?></h2>
            <?php } ?>
            <div class="flex bg-smoke pb-8 px-9 gap-16 lg:gap-8 items-center max-h-96  2xl:pt-8 lg:flex-col lg:max-h-max lg:mb-8 md:gap-8 lg:p-0 lg:bg-inherit md:mb-0 xs:!gap-4">
                <div class="flex flex-col -mt-80 w-12/24 lg:-mt-[55%] mdt:-mt-[70%] leading-none lg:w-full xs:-mt-[42%]">
                    <?php if ($about_us__image) { ?>
                        <?php echo wp_get_attachment_image($about_us__image, 'full', '', ['class' => '2xl:mx-auto']) ?>
                    <?php } ?>
                    <?php if ($about_us__attorney_subtitle || $about_us__attorney_title) { ?>
                        <div class=" py-7 px-8 text-center rounded-md shadow-siteWide sm:px-9 sm:py-4" style="background-color: <?php echo $about_us__attorney_block_color ?: ''  ?> ;">
                            <?php if ($about_us__attorney_subtitle) { ?>
                                <p class=" text-black font-third font-bold text-5xl 2xl:!text-4xl xl:!text-3xl lg:!text-5xl mdt:!text-4xl xs:!text-xl  "><?php echo $about_us__attorney_subtitle ?></p>
                            <?php } ?>
                            <?php if ($about_us__attorney_title) { ?>
                                <h3 class=" font-second font-bold text-white text-12xl 2xl:text-10xl xl:text-[74px] mdt:text-10xl lg:text-12xl md:text-8xl xs:text-[44px] "><?php echo $about_us__attorney_title ?></h3>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <?php if ($about_us__first_description) { ?>
                    <div class="w-12/24 mt-10 lg:w-full lg:mt-4">
                        <div class="font-main text-xl pb-12 font-light text-white lg:!text-xl lg:!pb-4 leading-tight">
                            <?php echo $about_us__first_description ?>
                        </div>
                        <div class="text-white text-6xl font-second font-bold lg:text-center xs:!text-5xl"> <?php echo $about_us__number ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section style="background-image: url('<?php echo $about_us__background ?>');background-size: cover;" class="pb-10 w-full">

        <div class="container pt-[6%]">
            <?php if ($about_us__second_description || $about_us__title_items || $about_us__items || $about_us__link) { ?>
                <div class="flex gap-16 lg:flex-col-reverse justify-center">
                    <div class="flex flex-col gap-20 w-1/2 lg:w-full lg:m-auto lg:items-center lg:gap-10">
                        <?php if ($about_us__second_description) { ?>
                            <div class="font-main font-normal text-xl lg:mt-3 sm:!text-base"><?php echo $about_us__second_description ?></div>
                        <?php } ?>
                        <?php if ($about_us__link && $about_us__link['url']) { ?>
                            <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => $about_us__link['url'],
                                'text' => __($about_us__link['title'], 'law'),
                                'text_hover' => false,
                                'classes' => 'btn_sm bigauto_red hover_accent !max-w-[460px] rounded-xl xs:!text-xl', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                            ]); ?>
                        <?php } ?>
                    </div>
                    <?php if ($about_us__items || $about_us__title_items) { ?>
                        <div class="shadow-siteWide bg-white w-2/6 px-12 xl:px-8 pt-9 pb-20 xl:pb-9 h-max lg:hidden">
                            <?php if ($about_us__title_items) { ?>
                                <h3 class="font-second text-3xl text-headings pb-16 sm:pb-8 "><?php echo $about_us__title_items ?></h3>
                            <?php } ?>
                            <?php if ($about_us__items) { ?>
                                <div class="flex flex-col gap-8">
                                    <?php foreach ($about_us__items as $item) { ?>
                                        <?php if ($item['title'] || $item['icons']) { ?>
                                            <div class="flex gap-5 items-center">
                                                <?php if ($item['icons']) { ?>
                                                    <div class="min-w-[66px]">
                                                        <?php echo wp_get_attachment_image($item['icons'], 'full', '', ['class' => 'm-auto']) ?>
                                                    </div>
                                                <?php } ?>
                                                <?php if ($item['title']) { ?>
                                                    <h4 class="font-third text-3xl xl:text-2xl font-black sm:!text-xl"><?php echo $item['title'] ?></h4>
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
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
