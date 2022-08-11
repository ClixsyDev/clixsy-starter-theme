<?php
use App\Template;
$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $guttenberg_single_button = get_field('guttenberg_single_button');
    $guttenberg_single_button_hover = get_field('guttenberg_single_button_hover');
?>
    <div class="!my-6">
        <?php 
        Template::load('_template-parts/components/button.php', [
            'link' => $guttenberg_single_button['url'],
            'classes' => '',
            'text' => $guttenberg_single_button['title'],
        ]); ?>
    </div>
<?php }
