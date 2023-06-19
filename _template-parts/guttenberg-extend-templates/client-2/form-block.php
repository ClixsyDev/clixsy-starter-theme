<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $form_block__form_title = get_field('form_block__form_title');
    $form_block__form_subtitle = get_field('form_block__form_subtitle');
    $form_block__form_description = get_field('form_block__form_description');
    $form_block__form_select = get_field('form_block__form_select'); ?>

    <section class="relative mt-10" id="footer-form">
        <div class="sm:pb-14 xs:h-full  ">
            <div class="container flex flex-row mdt:flex-col justify-center items-end">
                <?php if ($form_block__form_select) { ?>
                    <div class="first-step text-left  z-[1] w-1/2 mdt:w-full ">
                        <div class="form banner-form my-0 big-auto-footer-form p-10 xl:p-7 bg-accent font-main w-22/24 2xl:w-full mx-auto 2xl:mx-0 mdt:text-center">
                            <?php if ($form_block__form_subtitle) { ?>
                                <div class="text-white font-thin text-2xl 2xl:!text-[20px] mdt:!pb-3 xl:!text-lg xs:!text-base">
                                    <?php echo $form_block__form_subtitle ?>
                                </div>
                            <?php } ?>
                            <?php if ($form_block__form_title) { ?>
                                <div class="text-white font-second font-bold uppercase leading-[1] pb-5 text-[3.5rem] 2xl:!text-[50px] xs:!text-3xl "><?php echo $form_block__form_title ?></div>
                            <?php } ?>
                            <?php echo $form_block__form_select ? do_shortcode('[contact-form-7 id="' . $form_block__form_select['0'] . '" title=""]') : '' ?>
                            <?php
                            Template::load('_template-parts/components/thank-you-message-homepage.php', [
                                'classes_disclaimer' => 'text-white',
                                'classes_thankyou' => 'text-white'
                            ]); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
