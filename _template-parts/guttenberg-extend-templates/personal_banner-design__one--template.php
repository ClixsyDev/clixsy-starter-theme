<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $personal_banner_design_one__persone = get_field('personal_banner_design_one__persone');
    $personal_banner_design_one__title = get_field('personal_banner_design_one__title');
    $personal_banner_design_one__role = get_field('personal_banner_design_one__role');
    $personal_banner_design_one__phone = get_field('personal_banner_design_one__phone');
    $personal_banner_design_one__mail = get_field('personal_banner_design_one__mail');
    $personal_banner_design_one__link = get_field('personal_banner_design_one__link');
    $personal_banner_design_one__hover_text = get_field('personal_banner_design_one__hover_text');
    $personal_banner_design_one__social_icons = get_field('personal_banner_design_one__social_icons');
    $personal_banner_design_one__logo = get_field('personal_banner_design_one__logo');
    $personal_banner_design_one__bg = get_field('personal_banner_design_one__bg');

?>
    <section class="bg-cover" style="background-image: url('<?php echo $personal_banner_design_one__bg ?>');">
        <div class="max-w-[1920px] m-auto">
            <div class="flex items-center relative mdt:justify-center">
                <?php if ($personal_banner_design_one__persone) { ?>
                    <div class="z-[1] ml-52 xxl:ml-[9%] xxl:w-14/24 xl:ml-0 xl:w-12/24 mdt:w-17/24 md:w-21/24 sm:w-full">

                        <?php echo wp_get_attachment_image($personal_banner_design_one__persone, 'full') ?>
                    </div>
                <?php } ?>
                <div class="bg-accent w-17/24 py-8 pb-16 absolute right-0 pr-[408px] fhd:pr-[300px] xxxl:pr-[200px] xxl:pr-28 xl:pr-20 xl:w-18/24 mdt:z-[1] mdt:right-auto mdt:p-5 mdt:top-50% sm:top-50% xs:w-22/24">
                    <?php if ($personal_banner_design_one__title) { ?>
                        <h1 class="font-main font-bold uppercase text-white text-[95px] leading-none pt-4 text-end xxl:text-6xl mdt:text-center mdt:text-5xl mdt:leading-none xs:text-3xl"><?php echo $personal_banner_design_one__title ?></h1>
                    <?php } ?>
                    <?php if ($personal_banner_design_one__role) { ?>
                        <p class="font-main text-white text-4xl text-end font-bold -mt-2  xxl:text-2xl mdt:text-center mdt:mt-0 mdt:text-xl"><?php echo $personal_banner_design_one__role ?></p>
                    <?php } ?>
                    <?php if ($personal_banner_design_one__phone) { ?>
                        <div class="flex justify-end gap-5 mdt:justify-center mdt:py-2 xs:items-center">
                            <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/telephone-banner.png" class="object-contain xs:w-6" alt="">
                            <h2 class="font-main text-headings text-6xl text-end font-bold leading-[80px] xxl:text-5xl mdt:text-center mdt:text-4xl mdt:leading-[40px] xs:text-2xl"><?php echo $personal_banner_design_one__phone ?></h2>
                        </div>
                    <?php } ?>
                    <?php if ($personal_banner_design_one__mail) { ?>
                        <a href="mailto:<?php echo $personal_banner_design_one__mail ?>" class="block font-main text-headings_second text-3xl font-bold text-end xxl:text-2xl mdt:text-center xs:text-xl"><?php echo $personal_banner_design_one__mail ?></a>
                    <?php } ?>
                    <?php if ($personal_banner_design_one__link) { ?>
                        <div class="flex items-end justify-end mt-5 xl:z-[1] mdt:justify-center">
                            <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => $personal_banner_design_one__link['url'],
                                'text' => __($personal_banner_design_one__link['title'], 'law'),
                                'text_hover' =>  $personal_banner_design_one__hover_text ?: false,
                                'classes' => 'btn_md btn_headings hover_white_text_accent', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                            ]); ?>
                        </div>
                    <?php } ?>
                    <?php if ($personal_banner_design_one__social_icons) { ?>
                        <div class="flex justify-end mt-6 gap-2 pb-8 xl:z-[1] xl:pb-1 mdt:justify-center">
                            <?php foreach ($personal_banner_design_one__social_icons as $personal_item) {
                                if ($personal_item['link']) { ?>
                                    <a href="<?php echo $personal_item['link'] ?>" class=" transition-all duration-300 hover:opacity-80" target="_blank">
                                        <img src="<?php echo wp_get_attachment_image_url($personal_item['icon'], 'full') ?>" class="xl:w-10 xl:h-10 xs:h-max" alt="social icon" loading="lazy">
                                    </a> <?php
                                }
                            } ?>
                        </div>
                    <?php } ?>
                    <?php if ($personal_banner_design_one__logo) { ?>
                        <div class="flex justify-end mt-6 -mb-32 xl:z-[1] lg:-mb-24 mdt:justify-center mdt:mb-0 relative top-3">
                            <?php echo wp_get_attachment_image($personal_banner_design_one__logo, 'full', '', ['class' => 'lg:w-12/24']) ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php }
if (!get_fields()) echo 'Fill block with content';
