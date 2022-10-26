<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $community_design_one__title = get_field('community_design_one__title');
    $community_design_one__bg = get_field('community_design_one__bg');
    $community_design_one__description = get_field('community_design_one__description');
    $community_design_one__subtitle = get_field('community_design_one__subtitle');
    $community_design_one__organizations = get_field('community_design_one__organizations');
    $community_design_one__button = get_field('community_design_one__button');

?>
    <?php if ($community_design_one__organizations) { ?>
        <div class="py-16 bg-cover" style="background-image: url('<?php echo $community_design_one__bg ? wp_get_attachment_image_url($community_design_one__bg, 'full') : '' ?>')">
            <div class="container">
                <?php if ($community_design_one__title) { ?>
                    <h2 class="heading_h2 heading_second pb-4"><?php echo $community_design_one__title ?></h2>
                <?php } ?>
                <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
                <?php if ($community_design_one__description) { ?>
                    <div class="w-21/24 m-auto prose-lg mt-8 xs:w-full xs:prose-base">
                        <?php echo $community_design_one__description ?>
                    </div>
                <?php } ?>
                <div class="mt-16 xl:mt-9">
                    <?php if ($community_design_one__subtitle) { ?>
                        <h3 class="font-bold text-2xl text-center mdt:text-xl"><?php echo $community_design_one__subtitle ?></h3>
                    <?php } ?>

                    <?php if ($community_design_one__organizations[0]) { ?>
                        <div class="flex justify-center mt-12 gap-9 xl:gap-7 mdt:hidden">
                            <?php foreach ($community_design_one__organizations as $organization_v1_item) { ?>
                                <div class="bg-white w-[28%] pt-10 px-10 pb-7 shadow-lg xl:w-8/24 lg:px-6 lg:pt-7">
                                    <?php if ($organization_v1_item['community_v1_img']) { ?>
                                        <?php echo wp_get_attachment_image($organization_v1_item['community_v1_img'], 'full', '', ['class' => 'm-auto h-44 object-cover']) ?>
                                    <?php } ?>

                                    <?php if ($organization_v1_item['community_v1_title']) { ?>
                                        <h4 class="text-headings_second text-center font-bold my-5 text-xl"><?php echo $organization_v1_item['community_v1_title'] ?></h4>
                                    <?php } ?>

                                    <?php if ($organization_v1_item['community_v1_decription']) { ?>
                                        <div class="text-headings">
                                            <?php echo $organization_v1_item['community_v1_decription'] ?>
                                        </div>
                                    <?php } ?>

                                    <?php if ($organization_v1_item['community_v1_button'] && $organization_v1_item['community_v1_button']['url']) { ?>
                                        <div class="text-center mt-8">
                                            <?php
                                            Template::load('_template-parts/components/button.php', [
                                                'link' => $organization_v1_item['community_v1_button']['url'],
                                                'text' => __($organization_v1_item['community_v1_button']['title'], 'law'),
                                                'text_hover' => false,
                                                'classes' => 'btn_xs btn_headings center hover_headings', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                                            ]); ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="communitySliderAbout glide hidden mt-9 mdt:block">
                            <div class="glide__track" data-glide-el="track">
                                <div class="glide__slides">
                                    <?php foreach ($community_design_one__organizations as $organization_v1_item_mobile) { ?>
                                        <div class="glide__slide">
                                            <div class="bg-white pt-10 px-10 pb-7 shadow-lg lg:px-6 lg:pt-7 xl:w-21/24 xl:m-auto">
                                                <?php if (($organization_v1_item_mobile['community_v1_img'])) { ?>
                                                    <?php echo wp_get_attachment_image($organization_v1_item_mobile['community_v1_img'], 'full', '', ['class' => 'm-auto h-44 object-cover']) ?>
                                                <?php } ?>

                                                <?php if ($organization_v1_item_mobile['community_v1_title']) { ?>
                                                    <h4 class="text-headings_second text-center font-bold my-5 text-xl"><?php echo $organization_v1_item_mobile['community_v1_title'] ?></h4>
                                                <?php } ?>

                                                <?php if ($organization_v1_item_mobile['community_v1_decription']) { ?>
                                                    <div class="text-headings">
                                                        <?php echo $organization_v1_item_mobile['community_v1_decription'] ?>
                                                    </div>
                                                <?php } ?>
                                                <?php if ($organization_v1_item_mobile['community_v1_button'] && $organization_v1_item_mobile['community_v1_button']['url']) { ?>
                                                    <div class="text-center mt-8">
                                                        <?php
                                                        Template::load('_template-parts/components/button.php', [
                                                            'link' => $organization_v1_item_mobile['url'],
                                                            'text' => __($organization_v1_item_mobile['title'], 'law'),
                                                            'text_hover' => false,
                                                            'classes' => 'btn_xs btn_headings center hover_headings', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                                                        ]); ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <?php if (count($community_design_one__organizations) > 1) { ?>
                                    <div class="text-center relative mt-10 xs:mt-6">
                                        <div class="glide__arrows absolute right-[59%] top-11% w-max sm:right-[61%] xs:right-[68%]" data-glide-el="controls">
                                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><img class="w-9/12" src="<?= get_stylesheet_directory_uri() ?>/assets/img/bottom-arrow-left.png"></button>
                                        </div>
                                        <div class="glide__bullets" data-glide-el="controls[nav]">
                                            <?php for ($i = 0; $i == count($community_design_one__organizations); $i++) { ?>
                                                <button class="slider__bullet glide__bullet focus:border-none bg-kennySmoke focus:bg-darkOrange hover:bg-darkOrange w-7 h-1.5 rounded-none xs:h-1.5 xs:w-8" data-glide-dir="=<?php echo $i ?>"></button>
                                            <?php } ?>

                                        </div>
                                        <div class="glide__arrows absolute left-[59%] top-11% w-max sm:left-[61%] xs:left-[68%]" data-glide-el="controls">
                                            <button class="glide__arrow glide__arrow--right" data-glide-dir="<"><img class="w-9/12" src="<?= get_stylesheet_directory_uri() ?>/assets/img/bottom-arrow-right.png"></button>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>


                    <?php if ($community_design_one__button && $community_design_one__button['url']) { ?>
                        <div class="text-center mt-16 mdt:mt-6 xs:mt-10">
                            <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => $community_design_one__button['url'],
                                'text' => __($community_design_one__button['title'], 'law'),
                                'text_hover' =>  false,
                                'classes' => 'btn_xl hover_headings center max-w-[460px]', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                            ]); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <h1>Fill section with content</h1>
<?php }
}
