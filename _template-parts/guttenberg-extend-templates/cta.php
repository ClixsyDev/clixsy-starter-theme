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
?>
    <div class=" pt-10 pb-9 bg-smoke sm:pt-6 sm:pb-7">
        <div class="container">
            <?php if ($title) { ?>
                <h2 class="font-avenir text-white text-5xl leading-tight text-center mb-7 sm:text-2xl"><?= $title ?></h2>
            <?php } ?>
            <?php if ($button) { ?>
                <a href="<?= $button['url'] ?>" class=" mx-auto w-[233px] h-[67px] flex justify-center items-center bg-accent rounded-full text-2xl leading-none text-white uppercase">
                    <?= $button['title'] ?>
                </a>
            <?php } ?>

        </div>
    </div>
</div>
<?php }
if (!get_fields()) echo 'Fill block with content';
