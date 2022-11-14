<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $welcome_banner__design_two__title = get_field('welcome_banner__design_two__title');
    $welcome_banner__design_two__image = get_field('welcome_banner__design_two__image');
    $welcome_banner__design_two__link = get_field('welcome_banner__design_two__link');
    $welcome_banner__design_two__section_bg_first = get_field('welcome_banner__design_two__section_bg_first');
    $welcome_banner__design_two__section_bg_second = get_field('welcome_banner__design_two__section_bg_second');
?>
    <section>
        <div class=" pb-52 pt-20 lg:pb-56 sm:pb-24" style="background-color: <?php echo $welcome_banner__design_two__section_bg_first ?: ''  ?> ;">
            <?php if ($welcome_banner__design_two__title) { ?>
                <div class="container">
                    <h1 class="heading_h1"><?php echo $welcome_banner__design_two__title ?></h1>
                </div>
            <?php } ?>
        </div>
        <?php if ($welcome_banner__design_two__image || $welcome_banner__design_two__link) { ?>
            <div>
                <div class="bg-accent pb-20 sm:h-96 sm:pb-14 xs:h-80" style="background-color: <?php echo $welcome_banner__design_two__section_bg_second ?: ''  ?> ;">
                    <div class="container flex flex-col items-center">
                        <?php echo wp_get_attachment_image($welcome_banner__design_two__image, 'full', '', ['class' => 'm-auto -mt-60 sm:-mt-24']) ?>
                        <?php if ($welcome_banner__design_two__link && $welcome_banner__design_two__link['url']) { ?>
                            <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => $welcome_banner__design_two__link['url'],
                                'text' => __($welcome_banner__design_two__link['title'], 'law'),
                                'text_hover' => false,
                                'classes' => 'btn_md white hover_accent uppercase max-w-[460px] center', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                            ]); ?>
                            <!-- <a href="<?php echo $welcome_banner__design_two__link['url'] ?>" target="<?php echo $welcome_banner__design_two__link['target'] ?: '_self' ?>" class="btn"><?php echo $welcome_banner__design_two__link['title'] ?></a> -->
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>

    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';