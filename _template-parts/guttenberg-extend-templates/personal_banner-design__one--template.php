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
    $personal_banner_design_one__social_icons = get_field('personal_banner_design_one__social_icons');
    $personal_banner_design_one__logo = get_field('personal_banner_design_one__logo');
    $personal_banner_design_one__bg = get_field('personal_banner_design_one__bg');

?>
    <section class="bg-cover" style="background-image: url('<?php echo $personal_banner_design_one__bg ?>');">
        <div class="max-w-[1920px] m-auto">
            <div class="flex items-center relative mdt:justify-center">
                <?php if ($personal_banner_design_one__persone) { ?>
                    <div class="z-[1] xxl:w-14/24 xl:w-12/24 mdt:w-17/24 md:w-21/24 sm:w-full">
                        <?php echo wp_get_attachment_image($personal_banner_design_one__persone, 'full') ?>
                    </div>
                <?php } ?>
                <div class="bg-kennyGreen w-17/24 py-8 pb-16 absolute right-0 pr-48 xxl:pr-28 xl:pr-20 xl:w-18/24 mdt:z-[1] mdt:right-auto mdt:p-5 mdt:top-50% sm:top-50% xs:top-[40%] xs:w-22/24">
                    <?php if ($personal_banner_design_one__title) { ?>
                        <h1 class="font-avenir font-bold uppercase text-white text-8xl leading-[80px] text-end xxl:text-6xl mdt:text-center mdt:text-5xl mdt:leading-none xs:text-3xl"><?php echo $personal_banner_design_one__title ?></h1>
                    <?php } ?>
                    <?php if ($personal_banner_design_one__role) { ?>
                        <p class="font-avenir text-kennyWhite text-3xl text-end font-bold xxl:text-2xl mdt:text-center mdt:text-xl"><?php echo $personal_banner_design_one__role ?></p>
                    <?php } ?>
                    <?php if ($personal_banner_design_one__phone) { ?>
                        <div class="flex justify-end gap-5 mdt:justify-center mdt:py-2 xs:items-center">
                            <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/telephone-banner.png" class="object-contain xs:w-6" alt="">
                            <h2 class="font-avenir text-kennyBlueFourth text-6xl text-end font-bold leading-[80px] xxl:text-5xl mdt:text-center mdt:text-4xl mdt:leading-none xs:text-2xl"><?php echo $personal_banner_design_one__phone ?></h2>
                        </div>
                    <?php } ?>
                    <?php if ($personal_banner_design_one__mail) { ?>
                        <a href="mailto:<?php echo $personal_banner_design_one__mail ?>" class="block font-avenir text-kennyBlueThird text-3xl font-bold text-end xxl:text-2xl mdt:text-center xs:text-xl"><?php echo $personal_banner_design_one__mail ?></a>
                    <?php } ?>
                    <?php if ($personal_banner_design_one__link) { ?>
                        <div class="text-end mt-5 xl:z-[1] mdt:text-center">
                            <a href="<?php echo $personal_banner_design_one__link['url'] ?>" class="font-avenir bg-kennyGrayText uppercase text-white font-bold text-2xl py-2 px-10 rounded-full lg:px-8 lg:text-base xs:text-base mdt:text-xl mdt:py-3"><?php echo $personal_banner_design_one__link['title'] ?></a>
                        </div>
                    <?php } ?>
                    <?php if ($personal_banner_design_one__social_icons) { ?>
                        <div class="flex justify-end mt-6 gap-2 pb-8 xl:z-[1] xl:pb-1 mdt:justify-center">
                            <?php foreach ($personal_banner_design_one__social_icons as $personal_item) { ?>
                                <a href="<?php echo $personal_item['link'] ?>" target="_blank">
                                    <img src="<?php echo wp_get_attachment_image_url($personal_item['icon'], 'full') ?>" class="xl:w-10 xl:h-10 xs:h-max" alt="social icon" loading="lazy">
                                </a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if ($personal_banner_design_one__logo) { ?>
                        <div class="flex justify-end mt-6 -mb-32 xl:z-[1] lg:-mb-24 mdt:justify-center mdt:mb-0">
                            <?php echo wp_get_attachment_image($personal_banner_design_one__logo, 'full', '', ['class' => 'lg:w-12/24']) ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php }
