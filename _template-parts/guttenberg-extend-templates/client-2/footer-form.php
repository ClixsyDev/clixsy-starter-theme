<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $big_auto_footer_form__image = get_field('big_auto_footer_form__image');
    $big_auto_footer_form__number = get_field('big_auto_footer_form__number');
    $big_auto_footer_form__title_form = get_field('big_auto_footer_form__title_form');
    $big_auto_footer_form__description_form = get_field('big_auto_footer_form__description_form');
    $big_auto_footer_form__form_select = get_field('big_auto_footer_form__form_select');
?>
    <!-- welcome-banner-design__two.php -->
    <section class="relative mt-10">
        <div class="dots-bg h-10 absolute w-full bottom-0 left-0"></div>
        <div class="sm:pb-14 xs:h-full  ">
            <div class="container flex flex-row mdt:flex-col justify-center items-end">
                <div class="text-button_color text-center text-8xl 2xl:text-[70px] xl:text-6xl xs:!text-[44px] text font-second z-[1] w-1/2 mdt:w-full">
                    <?php echo wp_get_attachment_image($big_auto_footer_form__image, 'full', '', ['class' => 'block mx-auto ']) ?>

                    <?php echo $big_auto_footer_form__number ?>
                </div>

                <?php if ($big_auto_footer_form__form_select) { ?>
                    <div class="first-step text-left  z-[1] w-1/2 mdt:w-full ">
                        <div class="form banner-form big-auto-footer-form p-10 xl:p-7 bg-accent font-main w-22/24 2xl:w-full mx-auto 2xl:mx-0 mdt:text-center">
                            <?php if ($big_auto_footer_form__title_form) { ?>
                                <div class="text-white text-2xl 2xl:!text-[20px] xl:!text-lg xs:!text-base">
                                    <?php echo $big_auto_footer_form__title_form ?>
                                </div>
                            <?php } ?>
                            <?php if ($big_auto_footer_form__description_form) { ?>
                                <div class="text-white text-6xl 2xl:!text-[50px] xs:!text-3xl "><?php echo $big_auto_footer_form__description_form ?></div>
                            <?php } ?>
                            <?php echo $big_auto_footer_form__form_select ? do_shortcode('[contact-form-7 id="' . $big_auto_footer_form__form_select['0'] . '" title=""]') : '' ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>





<?php }
if (!get_fields()) echo 'Fill block with content';
