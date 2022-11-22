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
    $welcome_banner__case_overlay = get_field('welcome_banner__case_overlay');

?>
<!-- welcome-banner__case--template.php -->
    <?php if ($welcome_banner__case_title || $welcome_banner__case_link || $welcome_banner__case_bg || $welcome_banner__case_icon) { ?>
        <section class="w-full relative bg-cover pt-16 pb-16 md:h-auto md:pt-10 md:pb-10" style="background-image: url('<?php echo wp_get_attachment_image_url($welcome_banner__case_bg, 'full') ?>')">
        <span class="block absolute left-0 top-0 h-full w-full" style="background-color: <?php echo $welcome_banner__case_overlay ?: '' ?>"></span>
            <div class="container h-full relative left-0 right-0 top-0  mx-auto ">
                <div class="">
                    
                    <?php if ($welcome_banner__case_title) { ?>
                        <div class="pb-12 text-white text-[90px] 2xl:text-[60px] md:text-[40px] text-center font-bold">
                            <span class="bg-accent w-2/5 h-2 absolute left-0 right-0 mx-auto"></span>
                            <h1 class="py-3 leading-tight"><?php echo $welcome_banner__case_title ?></h1>
                            <span class="bg-accent w-2/5  h-2 absolute left-0 right-0 mx-auto"></span>
                        </div>
                    <?php } ?>

                    <?php if ($welcome_banner__case_icon) { ?>
                        <div class="pb-16 md:pb-6 flex flex-row justify-center">
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
