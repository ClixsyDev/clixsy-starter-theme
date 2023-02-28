<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $welcome_banner__page_title = get_field('welcome_banner__page_title');
    $welcome_banner__page_description = get_field('welcome_banner__page_description');
    $welcome_banner__page_link = get_field('welcome_banner__page_link');
    $welcome_banner__page_hover = get_field('welcome_banner__page_hover');
    $welcome_banner__page_bg = get_field('welcome_banner__page_bg');
    $welcome_banner__page_icon = get_field('welcome_banner__page_icon');

?>
    <div class="h-[750px] xl:h-[600px] bg-cover" style="background-image: url('<?php echo wp_get_attachment_image_url($welcome_banner__page_bg, 'full') ?>');">
        <div class="container h-full">
            <div class="flex flex-col items-center justify-center h-full -mb-12 md:mb-auto">
                <div class="flex flex-col gap-5 text-center bg-accent bg-opacity-70	 px-8 py-12 w-13/24 xl:w-16/24 mdt:w-18/24 md:w-21/24 sm:w-22/24 xs:py-8">
                    <?php if ($welcome_banner__page_title) { ?>
                        <h1 class="span-change_color_2 text-6xl leading-tight font-main font-bold 2xl:text-5xl mdt:text-4xl xs:text-3xl"><?php echo $welcome_banner__page_title ?></h1>
                    <?php } ?>
                    <?php if ($welcome_banner__page_description) { ?>
                        <div class="relative">
                            <span class="absolute border-t-2 border-black w-3/24 h-2 left-[11%] top-[45%] 2xl:left-[5%] mdt:w-2/24 mdt:left-[2%] xs:left-[-8%] 2xs:top-[20%] 2xs:left-[2%]"></span>
                            <p class="text-lg md:text-base xs:text-sm"><?php echo $welcome_banner__page_description ?></p>
                            <span class="absolute border-t-2 border-black w-3/24 h-2 right-[11%] top-[45%] 2xl:right-[5%] mdt:w-2/24 mdt:right-[2%] xs:right-[-8%] 2xs:top-[20%] 2xs:right-[2%]"></span>
                        </div>
                    <?php } ?>
                    <?php if ($welcome_banner__page_link) { ?>
                        <div class="mt-2.5 lg:mt-4">
                            <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => $welcome_banner__page_link['url'],
                                'text' => __($welcome_banner__page_link['title'], 'law'),
                                'text_hover' => $welcome_banner__page_hover ?: false,
                                'classes' => 'btn_xl btn_headings hover_white_text_accent max-w-[470px] center', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                            ]); ?>
                        </div>
                    <?php } ?>
                </div>
                <?php if ($welcome_banner__page_icon) { ?>
                    <div class="flex mt-6 lg:-mb-24 mdt:justify-center mdt:mb-0 mdt:mt-2">
                        <?php echo wp_get_attachment_image($welcome_banner__page_icon, 'full', '', ['class' => 'w-18/24 m-auto xs:w-14/24']) ?>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
