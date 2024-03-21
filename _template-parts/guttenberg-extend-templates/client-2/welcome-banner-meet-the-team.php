<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $welcome_banner__meet_the_team_bg = get_field('welcome_banner__meet_the_team_bg');
    $welcome_banner__meet_the_team_title = get_field('welcome_banner__meet_the_team_title');
    $welcome_banner__meet_the_team_link = get_field('welcome_banner__meet_the_team_link'); 
    $welcome_banner__meet_the_team_form_select = get_field('welcome_banner__meet_the_team_form_select');
    $welcome_banner__meet_the_team_form_title = get_field('welcome_banner__meet_the_team_form_title');
     ?>


    <section class="bg-cover pb-32 pt-11 relative <?php echo $welcome_banner__meet_the_team_form_select ? 'form-modal-banner' : '' ?>" style="background-image:url('<?php echo !empty($welcome_banner__meet_the_team_bg) ? wp_get_attachment_image_url($welcome_banner__meet_the_team_bg, 'full') : ''; ?>');">
        <div class="bg-white !bg-opacity-80 absolute w-full h-full top-0 left-0"></div>
        <div class="container relative z-10">
            <?php if ($welcome_banner__meet_the_team_title) { ?>
                <h1 class="hero_heading_h1 uppercase text-13xl md:text-12xl sm:text-8xl leading-none text-accent lg:pb-2 repeat-animation" data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="700"><?php echo $welcome_banner__meet_the_team_title ?></h1>
            <?php } ?>

            <?php if ($welcome_banner__meet_the_team_link) { ?>
                <?php
                Template::load('_template-parts/components/button.php', [
                    'link' => $welcome_banner__meet_the_team_link['url'],
                    'text' => __($welcome_banner__meet_the_team_link['title'], 'law'),
                    'attributes' => 'data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="1000"',
                    'text_hover' => false,
                    'classes' => 'bigauto_red hover_accent  mx-auto uppercase min-w-[460px] repeat-animation', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                ]); ?>
            <?php } ?>
        </div>
        <div class="dots-bg h-20 absolute w-full bottom-0 left-0"></div>

        <?php if ($welcome_banner__meet_the_team_form_select) { ?>
            <div class="form-modal-window-banner">
                <div class="form-modal-window-wrapper">
                    <div class="form banner-form w-full my-0 big-auto-footer-form p-10 xl:p-7 bg-accent font-main 2xl:w-full mx-auto 2xl:mx-0 mdt:text-center">
                        <?php if ($welcome_banner__meet_the_team_form_title) { ?>
                            <div class="text-white text-center font-second font-bold uppercase leading-[1] pb-5 text-[3.5rem] 2xl:!text-[50px] xs:!text-3xl "><?php echo $welcome_banner__meet_the_team_form_title ?></div>
                        <?php } ?>
                        <?php echo $welcome_banner__meet_the_team_form_select ? do_shortcode('[contact-form-7 id="' . $welcome_banner__meet_the_team_form_select['0'] . '" title=""]') : '' ?>
                        <?php
                        Template::load('_template-parts/components/thank-you-message-homepage.php', [
                            'classes_disclaimer' => 'text-white',
                            'classes_thankyou' => 'text-white'
                        ]); ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
