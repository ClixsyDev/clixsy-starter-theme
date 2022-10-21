<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $key = 'cases_we_handle';
    $title = get_field($key . '_title');
    $cases = get_field($key . '_items');
    $button1 = get_field($key . '_button_1');
    $button2 = get_field($key . '_button_2');
?>
    <div class="bg-headings pt-14 pb-16">
        <div class="container">
            <?php if ($title) { ?>
                <h2 class="font-avenir text-white text-5xl leading-tight text-center pb-5 mdt:text-4xl">
                    <?= $title ?>
                </h2>
            <?php } ?>
            <hr class="bg-accent border-none mx-auto h-1 w-[124px] max-w-full mb-6">
            <div class="flex gap-14 mt-14 mdt:flex-wrap mdt:justify-center md:gap-6">
                <?php foreach ($cases as $case) { ?>
                    <a href="<?= $case[$key . '_case_link'] ?>" class="flex-1 flex flex-col items-center mdt:w-[250px] mdt:flex-none ">
                        <img src="<?= wp_get_attachment_image_url($case[$key . '_case_image'], 'full') ?>" alt="">
                        <div class="font-avenir text-2xl text-white "><?= $case[$key . '_case_name'] ?></div>
                    </a>
                <?php
                } ?>
            </div>
            <div class=" mt-11 flex justify-center gap-11 md:flex-col md:items-center md:gap-4">
                <?php if ($button1) { ?>
                    <a href="<?= $button1['url'] ?>" class=" text-2xl uppercase font-bold rounded-full bg-white py-4 px-12 leading-none md:py-2 md:px-8 md:text-lg"><?= $button1['title'] ?></a>
                <?php } ?>
                <?php if ($button2) { ?>
                    <a href="<?= $button2['url'] ?>" class="text-white text-2xl uppercase font-bold rounded-full bg-accent py-4 px-12 leading-none md:py-2 md:px-8 md:text-lg"><?= $button2['title'] ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php }
if (!get_fields()) echo 'Fill block with content';
