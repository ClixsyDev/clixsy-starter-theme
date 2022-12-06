<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $fights_for_you__title = get_field('fights_for_you__title');
    $fights_for_you__singleattorney_image = get_field('fights_for_you__singleattorney_image');
    $fights_for_you__rating_image = get_field('fights_for_you__rating_image');
    $fights_for_you__color = get_field('fights_for_you__color');
    $fights_for_you__text_available = get_field('fights_for_you__text_available');
    $fights_for_you__time_available = get_field('fights_for_you__time_available');
    $fights_for_you__color_available = get_field('fights_for_you__color_available');
    $fights_for_you__benefits = get_field('fights_for_you__benefits');
    $fights_for_you__description = get_field('fights_for_you__description');
    $fights_for_you__number = get_field('fights_for_you__number');
    $fights_for_you__link = get_field('fights_for_you__link');
?>
    <section class="pt-10">
        <div class="container">
            <div class="flex justify-between items-start"> 
                <?php if ($fights_for_you__singleattorney_image) { ?>
                    <?php echo wp_get_attachment_image($fights_for_you__singleattorney_image, 'full', '', ['class' => '']) ?>
                <?php } ?>
                <?php if ($fights_for_you__title) { ?>
                    <h2 class="text-5xl pt-14 text-headings font-second"><?php echo $fights_for_you__title ?></h2>
                <?php } ?>
                <?php if ($fights_for_you__rating_image) { ?>
                    <?php echo wp_get_attachment_image($fights_for_you__rating_image, 'full', '', ['class' => 'object-contain h-full pt-16']) ?>
                <?php } ?>
            </div>
            <div class="px-20 rounded-md" style="background-color: <?php echo $fights_for_you__color ?: ''  ?> ;">
                <div class="flex">
                    <?php if ($fights_for_you__text_available || $fights_for_you__time_available) { ?>
                        <div class="flex items-center px-16 w-4/12 h-full mt-2.5 font-main gap-3 py-3.5 text-white" style="background-color: <?php echo $fights_for_you__color_available ?: ''  ?> ;">
                                <?php if ($fights_for_you__text_available) { ?>
                                    <p class="text-2xl text-right font-light"><?php echo $fights_for_you__text_available ?></p>
                                <?php } ?>
                                <?php if ($fights_for_you__time_available) { ?>
                                    <p class="text-5xl font-bold"><?php echo $fights_for_you__time_available ?></p>
                                <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if ($fights_for_you__benefits) { ?>
                        <div class="flex gap-14 -mt-10 class">
                            <?php foreach ($fights_for_you__benefits as $item) { ?>
                                <div class="bg-headings w-4/12 rounded-md px-7 pb-7">
                                    <?php if ($item['icon']) { ?>
                                        <?php echo wp_get_attachment_image($item['icon'], 'full', '', ['class' => '-mt-40 !max-h-24	']) ?>
                                    <?php } ?>
                                    <?php if ($item['title']) { ?>
                                        <h3 class="font-second text-3xl my-10 text-white"><?php echo $item['title'] ?></h3>
                                    <?php } ?>
                                    <?php if ($item['description']) { ?>
                                        <p class="text-white"><?php echo $item['description'] ?></p>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>  
                </div>
                <?php if ($fights_for_you__description || $fights_for_you__number || $fights_for_you__link) { ?>
                    <div>
                        <?php if ($fights_for_you__description) { ?>
                            <div class="text-center py-10 text-white text-2xl font-light">
                                <?php echo $fights_for_you__description ?>
                            </div>
                        <?php } ?>
                        <?php if ($fights_for_you__number || $fights_for_you__link) { ?>
                            <div class="flex items-center justify-center gap-6">
                                <a href="tel:+<?php echo $fights_for_you__number ?>" class="font-main font-black text-white text-5xl"><?php echo $fights_for_you__number ?></a>
                                <?php if ($fights_for_you__link && $fights_for_you__link['url']) { ?>
                                    <?php
                                    Template::load('_template-parts/components/button.php', [
                                        'link' => $fights_for_you__link['url'],
                                        'text' => __($fights_for_you__link['title'], 'law'),
                                        'text_hover' => false,
                                        'classes' => 'btn_md bigauto_red hover_accent uppercase max-w-[460px]', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                                    ]); ?>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php }
if (!get_fields()) echo 'Fill block with content';
