<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $auto_accident_resources__title = get_field('auto_accident_resources__title');
    $auto_accident_resources__subtitle = get_field('auto_accident_resources__subtitle');
    $auto_accident_resources__items = get_field('auto_accident_resources__items');
    $phone = get_field('phone', 'options');
    $phone_link = get_field('phone_link', 'options'); ?>

    <section class="container mt-14 lg:!mt-0">
        <?php if ($auto_accident_resources__title) { ?>
            <div id="<?php echo $auto_accident_resources__title ?>" class="flex justify-center">
                <h2 class="heading_h2 text-black font-bold text-6xl pb-10  capitalize md:!text-5xl md:leading-10"> <?php echo $auto_accident_resources__title ?></h2>
            </div>
        <?php } ?>

        <div>
            <?php if ($auto_accident_resources__title) { ?>
                <div class="font-fourth text-3xl font-normal">
                    <?php echo $auto_accident_resources__subtitle ?>
                </div>
            <?php } ?>

            <div class="flex flex-col gap-[2px] mb-10">
                <?php foreach ($auto_accident_resources__items as $item) { ?>
                    <a href="#<?php echo $item['auto_accident_resources__faq_title'] ?>" class="bg-smoke block py-2 px-8 sm:px-4 w-full">
                        <h3 class="text-white text-3xl mdt:!text-2xl  font-fourth"><?php echo $item['auto_accident_resources__faq_title'] ?></h3>
                    </a>
                <?php } ?>
            </div>
            <div class="flex flex-col">
                <?php foreach ($auto_accident_resources__items as $item) { ?>
                    <div id="<?php echo $item['auto_accident_resources__faq_title'] ?>" class="mb-8 break-words">
                        <div class="text-3xl font-fourth mb-4">
                            <h3 class=""><?php echo $item['auto_accident_resources__faq_title'] ?></h3>
                        </div>
                        <div class="text-base px-8 py-8 lg:px-4 shadow-siteWide font-fourth faq-content-box">
                            <div class="font-main text-lg mb-16 xs:mb-8">
                                <?php echo $item['auto_accident_resources__faq_description'] ?>
                            </div>
                            <div class="flex justify-between xs:flex-wrap-reverse">
                                <div class=" flex justify-start gap-11 xl:flex-col md:items-center xl:gap-4 bxs:w-full  ">
                                    <?php if ($item['auto_accident_resources__faq_link']) { ?>
                                        <?php
                                        Template::load('_template-parts/components/button.php', [
                                            'link' => $item['auto_accident_resources__faq_link']['url'],
                                            'text' => __($item['auto_accident_resources__faq_link']['title'], 'law'),
                                            'text_hover' => false,
                                            'classes' => 'btn w-full !items-center btn-smaller border-none xs:!max-w-[340px]'
                                        ]); ?>
                                    <?php } ?>

                                    <?php
                                    Template::load('_template-parts/components/button.php', [
                                        'link' => 'tel:' . $phone_link,
                                        'text' => __($phone, 'law'),
                                        'text_hover' => false,
                                        'classes' => 'btn w-full !text-3xl btn-smaller transparent xs:!max-w-[340px]'
                                    ]); ?>
                                </div>
                                <div class="flex justify-center items-end bxs:ml-auto bxs:mb-4 ">
                                    <a href="#<?php echo $auto_accident_resources__title ?>" class=" flex justify-center items-center text-4xl  mdt:text-2xl md:text-[17px] text-button_color rounded-xl h-[75px] w-16 hover:text-white hover:bg-button_color ">↑</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
