<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $welcome_banner_contact_design_two__bg = get_field('welcome_banner_contact_design_two__bg');
    $welcome_banner_contact_design_two__top_description = get_field('welcome_banner_contact_design_two__top_description');
    $welcome_banner_contact_design_two__title = get_field('welcome_banner_contact_design_two__title');
    $welcome_banner_contact_design_two__bottom_description = get_field('welcome_banner_contact_design_two__bottom_description');
    $welcome_banner_contact_design_two__tel = get_field('welcome_banner_contact_design_two__tel');
    $welcome_banner_contact_design_two__image = get_field('welcome_banner_contact_design_two__image');
    $welcome_banner_contact_design_two__form_bg = get_field('welcome_banner_contact_design_two__form_bg');
    $welcome_banner_contact_design_two__form_select = get_field('welcome_banner_contact_design_two__form_select');
    $welcome_banner_contact_design_two__form_description = get_field('welcome_banner_contact_design_two__form_description');
?>
    <!-- welcome-banner-contact-design__two.php -->
    <section class="bg-no-repeat bg-center pt-36 lg:pt-16 mdt:bg-contain mdt:bg-[center_top_12rem]" style="
    background-color: <?php echo $welcome_banner_contact_design_two__bg ?: ''  ?>; 
    background-image:url('<?php echo !empty($welcome_banner_contact_design_two__image) ? wp_get_attachment_image_url($welcome_banner_contact_design_two__image['ID']) : ''; ?>');">
        <div class="container">
            <div class="flex items-center px-20 gap-64 2xl:px-0 xl:gap-40 mdt:flex-col mdt:gap-16">
                <?php if ($welcome_banner_contact_design_two__top_description || $welcome_banner_contact_design_two__title || $welcome_banner_contact_design_two__bottom_description) { ?>
                    <div class="font-main text-white text-3xl leading-tight xl:text-2xl mdt:text-center xs:text-xl">
                        <?php if ($welcome_banner_contact_design_two__top_description) { ?>
                            <p class="font-light"><?php echo $welcome_banner_contact_design_two__top_description ?></p>
                        <?php } ?>
                        <?php if ($welcome_banner_contact_design_two__title) { ?>
                            <h1 class="font-black text-7xl xl:text-6xl xs:text-5xl"><?php echo $welcome_banner_contact_design_two__title ?></h1>
                        <?php } ?>
                        <?php if ($welcome_banner_contact_design_two__bottom_description) { ?>
                            <p class="font-light"><?php echo $welcome_banner_contact_design_two__bottom_description ?></p>
                        <?php } ?>
                        <?php if ($welcome_banner_contact_design_two__tel) { ?>
                            <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => 'tel:' . $welcome_banner_contact_design_two__tel,
                                'text' => __($welcome_banner_contact_design_two__tel, 'law'),
                                'text_hover' => false,
                                'classes' => 'mt-10 btn_xl bigauto_red border-white border-2 hover_white_text_accent er_accent uppercase max-w-[395px] mdt:mx-auto', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                            ]); ?>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if ($welcome_banner_contact_design_two__form_select) { ?>
                    <div class="w-2/5 mdt:w-20/24" style="background-color: <?php echo $welcome_banner_contact_design_two__form_bg ?: ''  ?> ;">
                        <div class="form py-10">
                            <?php echo $welcome_banner_contact_design_two__form_select ? do_shortcode('[contact-form-7 id="' . $welcome_banner_contact_design_two__form_select['0'] . '" title=""]') : '' ?>
                            <?php
                            Template::load('_template-parts/components/thank-you-message.php', [
                                'classes_disclaimer' => 'text-white',
                                'classes_thankyou' => 'text-white'
                            ]); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php if ($welcome_banner_contact_design_two__form_description) { ?>
                <div class="font-main text-white text-base font-extralight pt-3 pb-6 xs:text-sm">
                    <?php echo $welcome_banner_contact_design_two__form_description ?>
                </div>
            <?php } ?>
        </div>
    </section>

<?php }
if (!get_fields()) echo 'Fill block with content';
