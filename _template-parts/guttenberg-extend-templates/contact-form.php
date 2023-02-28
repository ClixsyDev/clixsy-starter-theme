<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $key = 'contact_form';
    $title = get_field($key . '_title');
    $form = get_field($key . '_form_id');
    $change_form_style = get_field($key . '_change_form_style');

?>
<!-- contact-form.php -->
<div class="how_can_help_form">
    <div class="container translate-y-20">
        <div class="form_elements_design_one <?php echo $change_form_style ? 'dark_style' : '' ?> w-[555px] max-w-full bg-headings pt-7 px-12 mx-auto md:px-4 pb-8 ">
            <?php if ($title) { ?>
                <h2 class=" text-4xl text-white text-center"><?= $title ?></h2>
            <?php } ?>
            <?= do_shortcode('[contact-form-7 id="' . $form . '"]') ?>
            <?php
                Template::load('_template-parts/components/thank-you-message.php', [
                    'classes_disclaimer' => 'text-white',
                    'classes_thankyou' => 'text-white'
                ]); ?>
        </div>
    </div>
</div>
<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
