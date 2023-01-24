<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $welcome_banner__design_two__title = get_field('welcome_banner__design_two__title');
    $welcome_banner__design_two__description = get_field('welcome_banner__design_two__description');
    $welcome_banner__design_two__image = get_field('welcome_banner__design_two__image');
    $welcome_banner__design_two__link = get_field('welcome_banner__design_two__link');
    $welcome_banner__design_two__section_bg_first = get_field('welcome_banner__design_two__section_bg_first');
    $welcome_banner__design_two__section_bg_second = get_field('welcome_banner__design_two__section_bg_second');
    $welcome_banner__design_two__description_form = get_field('welcome_banner__design_two__description_form');
    $welcome_banner__design_two__form_select = get_field('welcome_banner__design_two__form_select');
?>
    <!-- welcome-banner-design__two.php -->
    <section>
        <div class="pb-32 pt-10 lg:pb-32 sm:pb-10" style="background-color: <?php echo $welcome_banner__design_two__section_bg_first ?: ''  ?> ;">
            <div class="container text-center">
                <?php if ($welcome_banner__design_two__title) { ?>
                    <h1 class="hero_heading_h1"><?php echo $welcome_banner__design_two__title ?></h1>
                <?php } ?>
                <?php if ($welcome_banner__design_two__description) { ?>
                    <p class="text-headings font-main text-3xl uppercase pt-4 lg:!text-2xl sm:!text-xl"><?php echo $welcome_banner__design_two__description ?></p>
                <?php } ?>
            </div>
        </div>
        <?php if ($welcome_banner__design_two__image || $welcome_banner__design_two__link) { ?>
            <div>
                <div class="bg-accent pb-20 sm:pb-14 xs:h-full" style="background-color: <?php echo $welcome_banner__design_two__section_bg_second ?: ''  ?> ;">
                    <div class="container flex flex-col items-center">
                        <?php echo wp_get_attachment_image($welcome_banner__design_two__image, 'full', '', ['class' => 'block -mt-32 mdt:-mt-36 sm:-mt-12 w-10/12']) ?>
                        <?php if ($welcome_banner__design_two__link && $welcome_banner__design_two__link['url']) { ?>
                            <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => $welcome_banner__design_two__link['url'],
                                'text' => __($welcome_banner__design_two__link['title'], 'law'),
                                'text_hover' => false,
                                'classes' => 'btn_md text-white hover_headings border-white border-2 uppercase max-w-[460px] center', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                            ]); ?>
                        <?php } ?>

                        <?php if ($welcome_banner__design_two__form_select) { ?>
                            <div class="form banner-form pt-10">
                                <?php if ($welcome_banner__design_two__description_form) { ?>
                                    <p><?php echo $welcome_banner__design_two__description_form ?></p>
                                <?php } ?>
                                <?php echo $welcome_banner__design_two__form_select ? do_shortcode('[contact-form-7 id="' . $welcome_banner__design_two__form_select['0'] . '" title=""]') : '' ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>

    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';
