<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $about_us_fights_for_you__title = get_field('about_us_fights_for_you__title');
    $about_us_fights_for_you__block_color = get_field('about_us_fights_for_you__block_color');
    $about_us_fights_for_you__image = get_field('about_us_fights_for_you__image');
    $about_us_fights_for_you__attorney_subtitle = get_field('about_us_fights_for_you__attorney_subtitle');
    $about_us_fights_for_you__attorney_title = get_field('about_us_fights_for_you__attorney_title');
    $about_us_fights_for_you__attorney_block_color = get_field('about_us_fights_for_you__attorney_block_color');
    $about_us_fights_for_you__first_description = get_field('about_us_fights_for_you__first_description');
    $about_us_fights_for_you__cost_title = get_field('about_us_fights_for_you__cost_title');
    $about_us_fights_for_you__cost_description = get_field('about_us_fights_for_you__cost_description');
    $about_us_fights_for_you__cost_link = get_field('about_us_fights_for_you__cost_link');
    $about_us_fights_for_you__cost_block_bg = get_field('about_us_fights_for_you__cost_block_bg');
    $about_us_fights_for_you__cost_select = get_field('about_us_fights_for_you__cost_select');
    $phone = get_field('phone', 'options');
    $phone_link = get_field('phone_link', 'options');
?>


    <section class="pt-40  -mb-[4%] lg:-mb-[6%] 2xl:pt-44 md:pt-28 relative z-[1] lg:!pt-8">
        <div class="container lg:relative lg:z-10">
            <span class="absolute right-0 left-0 min-h-[71%] top-72 -z-10 w-full bg-smoke hidden lg:!block sm:min-h-[65%] xs:top-80 xs:min-h-[61%]"></span>
            <?php if ($about_us_fights_for_you__title) { ?>
                <h2 class="heading_h2 leading-relaxed text-black text-7xl text-center ml-72 lg:text-left lg:ml-0 lg:mb-[45%] mdt:mb-[65%] md:text-5xl"><?php echo $about_us_fights_for_you__title ?></h2>
            <?php } ?>
            <div class="flex bg-smoke pb-8 px-9 gap-16 lg:gap-8 items-center max-h-96  2xl:pt-8 lg:flex-col lg:max-h-max lg:mb-8 md:gap-8 lg:p-0 lg:bg-inherit md:mb-0 xs:!gap-4">
                <div class="flex flex-col -mt-80 w-12/24 lg:-mt-[55%] mdt:-mt-[70%] leading-none lg:w-full xs:-mt-[42%]">
                    <?php if ($about_us_fights_for_you__image) { ?>
                        <?php echo wp_get_attachment_image($about_us_fights_for_you__image, 'full', '', ['class' => '2xl:mx-auto']) ?>
                    <?php } ?>
                    <?php if ($about_us_fights_for_you__attorney_subtitle || $about_us_fights_for_you__attorney_title) { ?>
                        <div class=" py-7 px-8 text-center rounded-md shadow-siteWide sm:px-9 sm:py-4" style="background-color: <?php echo $about_us_fights_for_you__attorney_block_color ?: ''  ?> ;">
                            <?php if ($about_us_fights_for_you__attorney_subtitle) { ?>
                                <p class=" text-black font-third font-bold text-5xl 2xl:!text-4xl xl:!text-3xl lg:!text-5xl mdt:!text-4xl xs:!text-xl  "><?php echo $about_us_fights_for_you__attorney_subtitle ?></p>
                            <?php } ?>
                            <?php if ($about_us_fights_for_you__attorney_title) { ?>
                                <h3 class=" font-second font-bold text-white text-12xl 2xl:text-10xl xl:text-[74px] mdt:text-10xl lg:text-12xl md:text-8xl xs:text-[44px] "><?php echo $about_us_fights_for_you__attorney_title ?></h3>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <?php if ($about_us_fights_for_you__first_description) { ?>
                    <div class="w-12/24 mt-10 lg:w-full lg:mt-4">
                        <div class="font-main text-xl pb-12 font-light text-white lg:!text-xl lg:!pb-4 leading-tight">
                            <?php echo $about_us_fights_for_you__first_description ?>
                        </div>
                        <?php if ($phone && $phone_link) { ?>
                            <a href="tel:<?php echo $phone_link ?>" class="text-white text-6xl font-second font-bold lg:text-center xs:!text-5xl"> <?php echo $phone ?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="relative  pt-48 lg:!pt-0  shadow-siteWide lg:hidden" style="background-color: <?php echo $about_us_fights_for_you__cost_block_bg ?: ''  ?> ;">
            <?php if ($about_us_fights_for_you__cost_title || $about_us_fights_for_you__cost_description || $about_us_fights_for_you__cost_link) { ?>
                <div class="flex gap-44 rounded-2xl xl:w-23/24 xl:gap-32 xl:px-16 lg:flex-col-reverse lg:items-center lg:gap-0 lg:pb-10 sm:px-2 <?php echo $about_us_fights_for_you__cost_select == 'Wider' ? 'max-w-full w-full px-48 xxxl:px-24' : 'px-24' ?>">
                    <div class="w-12/24 z-10 lg:items-center lg:w-full lg:text-center">
                        <?php if ($about_us_fights_for_you__cost_title) { ?>
                            <h3 class="text-headings font-bold capitalize font-second pb-10 leading-[65px] text-6xl sm:!text-4xl sm:leading-none sm:pt-9 sm:pb-5"><?php echo $about_us_fights_for_you__cost_title ?></h3>
                        <?php } ?>
                        <?php if ($about_us_fights_for_you__cost_description) { ?>
                            <p class="pb-16 text-lg leading-tight xl:text-lg lg:pb-10"><?php echo $about_us_fights_for_you__cost_description ?></p>
                        <?php } ?>
                        <?php if ($about_us_fights_for_you__cost_link && $about_us_fights_for_you__cost_link['url']) { ?>
                            <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => $about_us_fights_for_you__cost_link['url'],
                                'text' => __($about_us_fights_for_you__cost_link['title'], 'law'),
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
        <div class="relative lg:!pt-5 hidden rounded-2xl shadow-siteWide lg:!block" style="background-color: <?php echo $about_us_fights_for_you__cost_block_bg ?: ''  ?> ;">
            <?php if ($about_us_fights_for_you__cost_title || $about_us_fights_for_you__cost_description || $about_us_fights_for_you__cost_link) { ?>
                <div class="flex gap-44 rounded-2xl xl:w-23/24 xl:gap-32 xl:px-16 lg:flex-col-reverse lg:items-center lg:gap-0 lg:pb-10 sm:px-2 <?php echo $about_us_fights_for_you__cost_select == 'Wider' ? 'max-w-full w-full px-48 xxxl:px-24' : 'px-24' ?>">
                    <div class="w-12/24 z-10 lg:items-center lg:w-full lg:text-left lg:max-w-[60%] sm:max-w-[90%]">
                        <?php if ($about_us_fights_for_you__cost_title) { ?>
                            <h3 class="text-headings font-bold capitalize font-second pb-10 leading-[65px] text-6xl xl:!text-5xl lg:pb-0 sm:!text-4xl sm:leading-none sm:pt-9 sm:pb-5"><?php echo $about_us_fights_for_you__cost_title ?></h3>
                        <?php } ?>
                        <div class="font-main z-10 pb-20 text-accent font-black max-h-[570px] relative xs:max-h-64 lg:!pb-0 lg:max-h-max">
                            <div class="font-second text-[500px] leading-[370px] xl:text-17xl md:text-15xl lg:mb-0 md:leading-[190px] md:my-8">$0</div>
                        </div>
                        <?php if ($about_us_fights_for_you__cost_description) { ?>
                            <p class="pb-16 text-lg leading-tight xl:text-lg lg:pb-10"><?php echo $about_us_fights_for_you__cost_description ?></p>
                        <?php } ?>
                        <?php if ($about_us_fights_for_you__cost_link && $about_us_fights_for_you__cost_link['url']) { ?>
                            <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => $about_us_fights_for_you__cost_link['url'],
                                'text' => __($about_us_fights_for_you__cost_link['title'], 'law'),
                                'text_hover' => false,
                                'classes' => 'btn-medium hover_accent uppercase lg:m-auto sm:m-0', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                            ]); ?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <div class="dots-bg h-28 absolute w-full bottom-0 lg:h-20"></div>
        </div>
    </section>


<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
