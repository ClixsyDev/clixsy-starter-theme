<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $welcome_banner__design_three__title = get_field('welcome_banner__design_three__title');
    $welcome_banner__design_three__subtitle = get_field('welcome_banner__design_three__subtitle');
    $welcome_banner__design_three__bg = get_field('welcome_banner__design_three__bg');
    $welcome_banner__design_three__background_image = get_field('welcome_banner__design_three__background_image');
    $welcome_banner__design_three__description_form = get_field('welcome_banner__design_three__description_form');
    $welcome_banner__design_three__form_select = get_field('welcome_banner__design_three__form_select');
    $welcome_banner__design_three__description_second_form = get_field('welcome_banner__design_three__description_second_form');
?>
    <section class="pb-4 pt-10 overflow-x-clip relative" style="background-color: <?php echo $welcome_banner__design_three__bg ?: ''  ?> ;">
        <?php if ($welcome_banner__design_three__background_image) { ?>
            <?php echo wp_get_attachment_image($welcome_banner__design_three__background_image, 'full', '', ['class' => 'absolute top-0 -left-96 h-full object-contain xxl:w-11/24 lg:w-15/24 md:-left-72 xs:-left-40']) ?>
        <?php } ?>
        <div>
            <div class="container text-center">
                <?php if ($welcome_banner__design_three__subtitle) { ?>
                    <h2 class="text-white font-main font-thin text-3xl uppercase lg:!text-2xl sm:!text-xl xs:!text-lg"><?php echo $welcome_banner__design_three__subtitle ?></h2>
                <?php } ?>
                <?php if ($welcome_banner__design_three__title) { ?>
                    <h1 class="hero_heading_h1 banner"><?php echo $welcome_banner__design_three__title ?></h1>
                <?php } ?>
            </div>    
        </div>
        <?php if ($welcome_banner__design_three__background_image) { ?>
            <?php echo wp_get_attachment_image($welcome_banner__design_three__background_image, 'full', '', ['class' => 'absolute top-7 -right-96 h-full object-contain xxl:w-11/24 lg:w-15/24 md:-right-72 xs:-right-40']) ?>
        <?php } ?>
        <?php if ($welcome_banner__design_three__form_select) { ?>
            <div>
                <div class="xs:h-full">
                    <div class="container flex flex-col items-center">
                        <div class="form banner-form pt-4">
                            <?php if ($welcome_banner__design_three__description_form) { ?>
                                <p><?php echo $welcome_banner__design_three__description_form ?></p>
                            <?php } ?>
                            <?php echo $welcome_banner__design_three__form_select ? do_shortcode('[contact-form-7 id="' . $welcome_banner__design_three__form_select['0'] . '" title=""]') : '' ?>
                            <?php if ($welcome_banner__design_three__description_second_form) { ?>
                                <p class="pt-4 m-0">
                                    Or Call    
                                    <a href="tel:<?php echo $welcome_banner__design_three__description_second_form ?>">
                                    <span><?php echo $welcome_banner__design_three__description_second_form ?></span>
                                    </a>
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>

    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';
