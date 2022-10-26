<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $welcome_banner__case_title = get_field('welcome_banner__case_title');
    $welcome_banner__case_link = get_field('welcome_banner__case_link');
    $welcome_banner__case_hover_text = get_field('welcome_banner__case_hover_text');
    $welcome_banner__case_bg = get_field('welcome_banner__case_bg');
    $welcome_banner__case_icon = get_field('welcome_banner__case_icon');


?>

    <?php if ($welcome_banner__case_title || $welcome_banner__case_link || $welcome_banner__case_bg || $welcome_banner__case_icon) { ?>
        <section class="w-full relative">
            <?php if ($welcome_banner__case_bg) { ?>
                <?php echo wp_get_attachment_image($welcome_banner__case_bg, 'full', '', ['class' => 'object-cover h-[730px] w-full md:h-[600px] ']) ?>
            <?php } ?>
            <div class="container h-full absolute left-0 right-0 top-0  mx-auto ">
                <div class=" translate-y-[20%] 2xl:translate-y-[30%] lg:translate-y-[20%] md:translate-y-[35%]">
                    
                    <?php if ($welcome_banner__case_title) { ?>
                        <div class="pb-12 text-white text-[90px] 2xl:text-[60px] md:text-[40px] text-center font-bold">
                            <span class="bg-accent w-2/5 h-2 absolute left-0 right-0 mx-auto"></span>
                            <h2 class="py-3 leading-tight"><?php echo $welcome_banner__case_title ?></h2>
                            <span class="bg-accent w-2/5  h-2 absolute left-0 right-0 mx-auto"></span>
                        </div>
                    <?php } ?>

                    <?php if ($welcome_banner__case_icon) { ?>
                        <div class="pb-16 flex flex-row justify-center">
                            <div class="flex items-center justify-center">
                                <?php echo wp_get_attachment_image($welcome_banner__case_icon, 'full', '', ['class' => ' object-contain h-14 md:h-9 w-auto ']) ?>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if ($welcome_banner__case_link) { ?>
                        <div class="w-full flex justify-center ">
                        <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => $welcome_banner__case_link['url'],
                                'text' => __($welcome_banner__case_link['title'], 'law'),
                                'text_hover' => $welcome_banner__case_hover_text ?: false,
                                'classes' => 'btn_xl hover_headings center', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                            ]); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } else { ?>
        <h1>fill block with content</h1>
<?php }
}
