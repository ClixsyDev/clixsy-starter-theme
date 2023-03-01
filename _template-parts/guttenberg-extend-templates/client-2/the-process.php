<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $the_process__title = get_field('the_process__title');
    $the_process__process_box = get_field('the_process__process_box');
    $the_process__process_text = get_field('the_process__process_text');
    $the_process__link = get_field('the_process__link');
    $the_process__number = get_field('the_process__number'); ?>


    <section class="">
        <div class="container mb-64 mdt:mb-10">
            <div class="flex justify-center">
                <h2 class="font-second text-center text-5xl xl:pb-5 2xl:text-4xl xl:text-3xl"><?php echo $the_process__title ?></h2>
            </div>
        </div>

        <div class="max-w-[1720px] bg-smoke rounded-lg mx-auto">
            <div class="container">
                <?php if ($the_process__process_box) { ?>
                    <div class="flex justify-between mdt:flex-wrap mdt:!justify-around xl:gap-5 w-full mb-14">
                        <?php foreach ($the_process__process_box as $item) { ?>
                            <div class="bg-black !-mt-32 mdt:!mt-28 xs:!mt-20  !w-[250px]  rounded-md px-6 pb-7 h-64 2xl:px-4  md:w-9/12 md:pt-10 md:text-center sm:w-full ">
                                <?php if ($item['icon']) { ?>
                                    <?php echo wp_get_attachment_image($item['icon'], 'full', '', ['class' => '-mt-16 mx-auto !max-h-24 md:-mt-24 object-contain ']) ?>
                                <?php } ?>
                                <?php if ($item['number']) { ?>
                                    <h3 class="font-fourth font-bold text-5xl mt-8 mb-2 text-white 2xl:!text-2xl"><?php echo $item['number'] ?></h3>
                                <?php } ?>
                                <?php if ($item['title']) { ?>
                                    <h3 class="text-white font-third font-bold text-2xl"><?php echo $item['title'] ?></h3>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>

                <?php if ($the_process__process_text) { ?>
                    <div class=" w-4/6 xl:w-5/6 mdt:w-full mx-auto mb-16">
                        <?php foreach ($the_process__process_text as $item) { ?>
                            <div class=" mb-8 ">
                                <?php if ($item['title']) { ?>
                                    <h3 class="text-white font-third font-bold text-5xl md:text-3xl sm:text-2xl"><?php echo $item['title'] ?></h3>
                                <?php } ?>
                                <?php if ($item['description']) { ?>
                                    <div class="text-white font-main text-lg sm:text-base"><?php echo $item['description'] ?></div>
                                <?php } ?>
                            </div>

                        <?php } ?>

                    </div>
                <?php } ?>

                <div class=" flex flex-wrap items-center justify-center flex-row mx-auto w-3/5 md:w-full pb-20 gap-5">
                    <?php if ($the_process__link) { ?>
                        <?php
                        Template::load('_template-parts/components/button.php', [
                            'link' => $the_process__link['url'],
                            'text' => __($the_process__link['title'], 'law'),
                            'text_hover' => false,
                            'classes' => 'btn_sm bigauto_red hover_accent !max-w-[460px] rounded-xl ', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                        ]); ?>
                    <?php } ?>

                    <div class="text-white text-6xl xs:text-4xl font-second"> <?php echo $the_process__number ?></div>
                </div>




            </div>
        </div>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
