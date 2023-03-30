<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $process_design_one__sercive_repeater = get_field('process_design_one__sercive_repeater');
    $process_design_one__title = get_field('process_design_one__title');
    $process_design_one__image = get_field('process_design_one__image');
    $process_design_one__image_mobile = get_field('process_design_one__image_mobile');
    $process_design_one__button = get_field('process_design_one__button');
    $phone = get_field('phone', 'options');
    $phone_link = get_field('phone_link', 'options'); ?>

    <?php if ($process_design_one__sercive_repeater || $process_design_one__title || $process_design_one__image || $process_design_one__button) { ?>
        <div class="pt-20 pb-24 xs:pb-16">
            <div class="container md:p-0">
                <?php if ($process_design_one__title) { ?>
                    <div class="mb-16 md:mb-8">
                        <h2 class="heading_h2 pb-4"><?php echo $process_design_one__title ?></h2>
                        <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
                    </div>
                <?php } ?>
                <div class="flex md:flex-col">
                    <?php if ($process_design_one__image) { ?>
                        <div class="w-12/24 md:hidden">
                            <?php echo wp_get_attachment_image($process_design_one__image, 'full', '', ['class' => 'h-full w-full object-cover']) ?>
                        </div>
                    <?php }
                    if ($process_design_one__image_mobile) { ?>
                        <div class="hidden md:block">
                            <?php echo wp_get_attachment_image($process_design_one__image_mobile, 'full', '', ['class' => 'w-full']) ?>
                        </div>
                    <?php } ?>
                    <?php if ($process_design_one__sercive_repeater) { ?>
                        <div class="flex flex-col w-18/24 md:w-full md:-mt-[15px]">
                            <?php foreach ($process_design_one__sercive_repeater as $key => $process_design_one__sercive_repeater_item) {
                                if ($key % 2 == 0) { ?>
                                    <div class="bg-process_smoke min-h-[246px] flex gap-5 px-5 py-12 xl:py-8 xl:min-h-[195px] xl:items-center lg:min-h-max md:px-20 xs:px-6 xs:py-5">
                                        <div class="text-accent font-second font-bold text-7xl xl:text-6xl xs:text-5xl">
                                            <?php echo str_pad(++$key, 2, '0', STR_PAD_LEFT) ?>
                                        </div>
                                        <div class="text-4xl font-main xl:text-3xl lg:text-2xl xs:text-xl">
                                            <div class="text-headings process_text_design__one">
                                                <?php echo $process_design_one__sercive_repeater_item['process_design_one__service_text'] ?>
                                                <?php if ($phone && $phone_link) { ?>
                                                    <br>
                                                    <a class="" href="tel:<?php echo $phone_link ?>"><strong><?php echo $phone ?></strong></a>
                                                <?php } ?>
                                            </div>
                                            <?php if ($process_design_one__sercive_repeater_item['process_design_one__service_link'] && $process_design_one__sercive_repeater_item['process_design_one__service_link']['url']) { ?>
                                                <div class="mt-3">
                                                    <?php
                                                    Template::load('_template-parts/components/button.php', [
                                                        'link' => $process_design_one__sercive_repeater_item['process_design_one__service_link']['url'],
                                                        'text' => __($process_design_one__sercive_repeater_item['process_design_one__service_link']['title'], 'law'),
                                                        'text_hover' =>  false,
                                                        'classes' => 'btn_sm hover_headings', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                                                    ]); ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="bg-smoke min-h-[246px] flex items-center gap-5 px-5 py-12 xl:py-8 xl:min-h-[195px] xl:items-center lg:min-h-max md:px-20 xs:px-6 xs:py-5">
                                        <div class="text-white font-second font-bold text-7xl xl:text-6xl xs:text-5xl">
                                            <?php echo str_pad(++$key, 2, '0', STR_PAD_LEFT) ?>
                                        </div>
                                        <div class="text-4xl font-main xl:text-3xl lg:text-2xl xs:text-xl">
                                            <div class="text-headings process_text_design__one"><?php echo $process_design_one__sercive_repeater_item['process_design_one__service_text'] ?></div>
                                        </div>
                                        <?php if ($process_design_one__sercive_repeater_item['process_design_one__service_link'] && $process_design_one__sercive_repeater_item['process_design_one__service_link']['url']) { ?>
                                            <div class="mt-3">
                                                <?php
                                                Template::load('_template-parts/components/button.php', [
                                                    'link' => $process_design_one__sercive_repeater_item['process_design_one__service_link']['url'],
                                                    'text' => __($process_design_one__sercive_repeater_item['process_design_one__service_link']['title'], 'law'),
                                                    'text_hover' =>  false,
                                                    'classes' => 'btn_sm hover_headings', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                                                ]); ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    <?php } ?>
                </div>
                <?php if ($process_design_one__button) { ?>
                    <div class="text-center mt-16 xs:mt-12">
                        <div class="mt-3">
                            <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => $process_design_one__button['url'],
                                'text' => __($process_design_one__button['title'], 'law'),
                                'text_hover' =>  false,
                                'classes' => 'btn_xl center hover_headings max-w-[400px]', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                            ]); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } else { ?>
        <h1>Please fill out with content</h1>
    <?php } ?>
<?php }
