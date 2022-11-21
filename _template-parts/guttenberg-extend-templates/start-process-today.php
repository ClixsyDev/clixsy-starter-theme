<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $key = 'start_process_today';
    $title = get_field($key . '_title');
    $step_1_icon = get_field($key . '_step_1_icon');
    $step_2_icon = get_field($key . '_step_2_icon');
    $step_3_icon = get_field($key . '_step_3_icon');
    $step_1_text = get_field($key . '_step_1_text');
    $step_2_text = get_field($key . '_step_2_text');
    $step_3_text = get_field($key . '_step_3_text');
    $step_1_link = get_field($key . '_step_1_link');
    $step_1_phone = get_field($key . '_step_1_phone');
    $start_btn = get_field($key . '_start_btn');
?>
    <div class="relative py-16 xs:py-4">
        <div class="container p-0 overflow-hidden">
            <?php if ($title) { ?>
                <h2 class="heading_h2 pb-4"><?= $title ?></h2>
                <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
            <?php } ?>
            <div class="flex flex-col gap-12 mt-11">
                <div class="step-block overflow-hidden top relative flex justify-center items-center gap-44 pt-16 pb-24 md:gap-28 md:pt-4 md:pb-16 xs:gap-10">
                    <span class="absolute skew-y-2 bg-process_smoke w-full h-[120%] -top-[30%] z-[-1]"></span>
                    <div class="max-w-[170px] xs:max-w-[80px]">
                        <img src="<?= wp_get_attachment_image_url($step_1_icon, 'full') ?>" class="" alt="">
                    </div>
                    <div>
                        <h3 class="font-second text-accent text-6xl lg:text-5xl xs:text-4xl">Step 01</h3>
                        <p class="font-main leading-tight text-kennyGrayText text-4xl py-3 lg:text-3xl md:text-2xl xs:text-xl"><?= $step_1_text ?></p>
                        <?php if ($step_1_phone) { ?>
                            <p class="font-main text-kennyGrayText font-bold text-3xl pb-5 lg:text-2xl md:text-xl xs:text-2xl"><?= $step_1_phone ?></p>
                        <?php } ?>
                        <?php
                        Template::load('_template-parts/components/button.php', [
                            'link' => $step_1_link['url'],
                            'text' => __($step_1_link['title'], 'law'),
                            'text_hover' => false,
                            'classes' => 'btn_sm hover_headings', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                        ]); ?>
                    </div>
                    <div class="triangle absolute bottom-[6%] m-auto lg:top-[95%] mdt:top-[91%]"></div>
                </div>
                <div class="step-block relative flex justify-center items-center gap-44 pt-16 pb-24 md:gap-28 md:pt-4 md:pb-16 xs:gap-10"">
                <div>
                    <h3 class=" font-second text-headings_second text-6xl text-end lg:text-5xl xs:text-4xl">Step 02</h3>
                    <p class="font-main leading-tight  text-accent text-4xl py-3 text-right lg:text-3xl md:text-2xl xs:text-xl"><?= $step_2_text ?></p>
                </div>
                <div class="max-w-[170px] xs:max-w-[80px]">
                    <img src="<?= wp_get_attachment_image_url($step_2_icon, 'full') ?>" class="" alt="">
                </div>
                <div class="triangle white absolute top-[96%] m-auto"></div>
            </div>
            <div class="step-block bg-process_smoke relative bottom flex justify-center items-center gap-44 pt-16 pb-24 md:gap-28 md:pt-12 md:pb-16 xs:gap-10">
                <span class="absolute skew-y-2 bg-process_smoke w-full h-full -top-[10%] z-[-1]"></span>
                <div class="max-w-[170px] xs:max-w-[80px]">
                    <img src="<?= wp_get_attachment_image_url($step_3_icon, 'full') ?>" class="" alt="">
                </div>
                <div>
                    <h3 class="font-second text-accent text-6xl lg:text-5xl xs:text-4xl">Step 03</h3>
                    <p class="font-main leading-tight text-kennyGrayText text-4xl py-3 lg:text-3xl md:text-2xl xs:text-xl"><?= $step_3_text ?></p>
                </div>
                <div class="triangle absolute top-[95%] m-auto lg:top-[98%]"></div>
            </div>
        </div>
        <?php if ($start_btn) { ?>
            <div class="mt-12">
                <?php
                Template::load('_template-parts/components/button.php', [
                    'link' => $start_btn['url'],
                    'text' => __($start_btn['title'], 'law'),
                    'text_hover' => false,
                    'classes' => 'btn_xl hover_headings uppercase max-w-[410px] center', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                ]); ?>
            </div>
        <?php } ?>
    </div>
    </div>
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';
