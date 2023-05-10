<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $text_button__cost_title = get_field('text_button__cost_title');
    $text_button__cost_link = get_field('text_button__cost_link');
    $text_button__cost_block_bg = get_field('text_button__cost_block_bg');
?>

    <section class="container ">
        <div class="relative pt-12 rounded-md shadow-siteWide " style="background-color: <?php echo $text_button__cost_block_bg ?: ''  ?> ;">
            <?php if ($text_button__cost_title || $text_button__cost_description || $text_button__cost_link) { ?>
                <div class="flex justify-center items-center">
                    <div class="z-10 items-center text-center">
                        <?php if ($text_button__cost_title) { ?>
                            <h3 class="text-headings font-bold capitalize font-second pb-10 leading-[65px] text-6xl sm:!text-4xl sm:leading-none sm:pt-9 sm:pb-5"><?php echo $text_button__cost_title ?></h3>
                        <?php } ?>
                        <?php if ($text_button__cost_link && $text_button__cost_link['url']) { ?>
                            <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => $text_button__cost_link['url'],
                                'text' => __($text_button__cost_link['title'], 'law'),
                                'text_hover' => false,
                                'classes' => 'btn-medium hover_accent uppercase mx-auto', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
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
