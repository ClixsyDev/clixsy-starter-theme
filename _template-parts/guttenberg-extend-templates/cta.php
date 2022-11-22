<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $key = 'cta';
    $title = get_field($key . '_title');
    $button = get_field($key . '_button');
    $button_hover = get_field($key . '_button_hover');
    $block_bg = get_field($key . '_block_bg');
?>
    <!-- cta.php -->
    <div class=" pt-10 pb-9 bg-smoke sm:pt-6 sm:pb-7" style="background-color: <?php echo $block_bg ?: ''  ?> ;">
        <div class="container">
            <?php if ($title) { ?>
                <h2 class="font-main font-bold text-white text-5xl leading-tight text-center mb-7 sm:text-2xl"><?= $title ?></h2>
            <?php } ?>
            <?php if ($button) { ?>
                <?php
                Template::load('_template-parts/components/button.php', [
                    'link' => $button['url'],
                    'text' => __($button['title'], 'law'),
                    'text_hover' => $button_hover ?: false,
                    'classes' => 'btn_md hover_accent center', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                ]); ?>
            <?php } ?>

        </div>
    </div>
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';
