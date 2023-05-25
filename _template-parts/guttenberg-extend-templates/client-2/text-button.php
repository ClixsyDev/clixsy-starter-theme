<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $text_button__cost_title = get_field('text_button__cost_title');
    $text_button__cost_description = get_field('text_button__cost_description');
    $text_button__cost_link = get_field('text_button__cost_link');
    $text_button__cost_block_bg = get_field('text_button__cost_block_bg');
    $text_button__dots = get_field('text_button__dots');
    $text_button__phone = get_field('text_button__phone');
    $phone = get_field('phone', 'options');
    $phone_link = get_field('phone_link', 'options');
?>

    <section class="container">
        <div class="relative pt-20 <?php echo in_array('Yes', $text_button__dots) ? 'pb-36 xs:!pb-24' : 'pb-16 xs:!pb-8' ?> mb-10 xs:!pt-12 rounded-md shadow-siteWide xs:mb-6" style="background-color: <?php echo $text_button__cost_block_bg ?: ''  ?> ;">
            <?php if ($text_button__cost_title || $text_button__cost_description || $text_button__cost_link) { ?>
                <div class="flex justify-center items-center px-2">
                    <div class="z-10 items-center text-center">
                        <?php if ($text_button__cost_title) { ?>
                            <h3 class="text-headings font-bold capitalize font-second pb-10 leading-[65px] text-6xl sm:!text-4xl sm:leading-none sm:pt-9 sm:pb-5"><?php echo $text_button__cost_title ?></h3>
                        <?php } ?>
                        <?php if ($text_button__cost_description) { ?>
                            <div class="pb-12 text-left max-w-[1050px]"><?php echo $text_button__cost_description ?></div>
                        <?php } ?>
                        <?php if (in_array('Yes', $text_button__phone)) {
                            if ($phone && $phone_link) {
                                Template::load('_template-parts/components/button.php', [
                                    'link' => 'tel:' . $phone_link,
                                    'text' => __($phone, 'law'),
                                    'text_hover' => false,
                                    'classes' => 'btn-medium hover_accent uppercase mx-auto', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                                ]);
                            } ?>
                        <?php } else {
                            if ($text_button__cost_link && $text_button__cost_link['url']) {
                                Template::load('_template-parts/components/button.php', [
                                    'link' => $text_button__cost_link['url'],
                                    'text' => __($text_button__cost_link['title'], 'law'),
                                    'text_hover' => false,
                                    'classes' => 'btn-medium hover_accent uppercase mx-auto', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                                ]);
                            }
                        } ?>
                    </div>
                </div>
            <?php } ?>
            <?php if (in_array('Yes', $text_button__dots)) { ?>
                <div class="dots-bg h-24 absolute w-full bottom-0 left-0 xl:h-16 xs:h-12"></div>
            <?php } ?>
        </div>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
