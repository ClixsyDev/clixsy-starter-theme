<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $title = get_field('start_process_today_design_2__title');
    $start_process_today_design_2__steps = get_field('start_process_today_design_2__steps');
    $start_process_today_design_2__start_link = get_field('start_process_today_design_2__start_link');
?>

    <div class="relative py-16 xs:py-4">
        <div class="container p-0 overflow-hidden">
            <?php if ($title) { ?>
                <h2 class="heading_h2 pb-4"><?php echo $title ?></h2>
                <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
            <?php } ?>
            <?php if ($start_process_today_design_2__steps) { ?>
                <div class="flex flex-col gap-8 mt-11 overflow-hidden">
                    <?php foreach ($start_process_today_design_2__steps as $i => $step_item) { ?>
                        <div class="relative flex justify-center items-center gap-20 pt-16 pb-24 mdt:flex-col mdt:gap-16 md:gap-14 md:pt-4 md:pb-16 xs:gap-0 <?php echo $i % 2 == 0 ?: 'flex-row-reverse' ?>" style="background-color: <?php echo $step_item['start_process_today_design_2__block_bg'] ?: ''  ?> ;">
                            <span class="absolute skew-y-1 w-full h-[110%] -top-[6%] z-[-1]" style="background-color: <?php echo $step_item['start_process_today_design_2__block_bg'] ?: ''  ?> ;"></span>
                            <?php if ($step_item['start_process_today_design_2__image']) { ?>
                                <div class="<?php echo $i % 2 == 0 ?: 'w-7/24 xs:p-4 sm:w-15/24' ?>">
                                    <img src="<?= wp_get_attachment_image_url($step_item['start_process_today_design_2__image'], 'full') ?>" class="max-w-md mdt:max-w-none mdt:w-15/24 mdt:m-auto" alt="">
                                </div>
                            <?php } ?>
                            <div class="w-10/24 mdt:text-center mdt:w-full mdt:p-5 <?php echo $i % 2 == 0 ?: 'text-end' ?>">
                                <?php if ($step_item['start_process_today_design_2__title_step']) { ?>
                                    <h3 class="font-main text-accent text-3xl"><?php echo $step_item['start_process_today_design_2__title_step'] ?></h3>
                                <?php } ?>
                                <?php if ($step_item['start_process_today_design_2__content']) { ?>
                                    <div class="font-main leading-tight text-headings text-lg pt-5 md:text-base"><?php echo $step_item['start_process_today_design_2__content'] ?></div>
                                <?php } ?>
                                <?php if ($step_item['start_process_today_design_2__number_link']) { ?>
                                    <p class="font-main text-accent font-bold text-5xl py-8 lg:text-3xl xs:text-2xl"><?php echo $step_item['start_process_today_design_2__number_link'] ?></p>
                                <?php } ?>
                                <?php if ($step_item['start_process_today_design_2__link']) {
                                    Template::load('_template-parts/components/button.php', [
                                        'link' => $step_item['start_process_today_design_2__link']['url'],
                                        'text' => __($step_item['start_process_today_design_2__link']['title'], 'law'),
                                        'text_hover' => false,
                                        'classes' => 'btn_sm hover_accent mdt:m-auto', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                                    ]);
                                } ?>
                            </div>
                            <div class="z-10 border-transparent border-[25px] absolute m-auto <?php echo $i % 2 == 0 ? 'bottom-[-59px] border-t-[#e2e4e8] lg:bottom-[-56px] mdt:bottom-[-47px]' : '-bottom-[16%] border-t-white lg:-bottom-[14%] mdt:-bottom-[8%] md:-bottom-[10%]'  ?>"></div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

        </div>
        <?php if ($start_process_today_design_2__start_link) { ?>
            <div class="mt-12">
                <?php
                Template::load('_template-parts/components/button.php', [
                    'link' => $start_process_today_design_2__start_link['url'],
                    'text' => __($start_process_today_design_2__start_link['title'], 'law'),
                    'text_hover' => false,
                    'classes' => 'btn_sm hover_accent uppercase max-w-[410px] center', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                ]); ?>
            </div>
        <?php } ?>
    </div>
    </div>
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';
