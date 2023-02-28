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
?>
    <section class="container mt-14">
        <?php if ($auto_accident_resources__title) { ?>
            <div id="<?php echo $auto_accident_resources__title ?>" class="flex justify-center">
                <h2 class="font-second text-6xl xl:pb-5 2xl:text-4xl xl:text-3xl"> <?php echo $auto_accident_resources__title ?></h2>
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
                    <div class="bg-smoke py-2 w-full">
                        <a href="#<?php echo $item['auto_accident_resources__faq_title'] ?>" class=" text-white text-3xl mdt:!text-2xl pl-8  font-fourth"><?php echo $item['auto_accident_resources__faq_title'] ?></a>
                    </div>
                <?php } ?>
            </div>
            <div class="flex flex-col">
                <?php foreach ($auto_accident_resources__items as $item) { ?>
                    <div id="<?php echo $item['auto_accident_resources__faq_title'] ?>" class="mb-8">
                        <div class="text-3xl font-fourth mb-4">
                            <h3 class=""><?php echo $item['auto_accident_resources__faq_title'] ?></h3>
                        </div>
                        <div class="text-base px-8 py-8 lg:px-4 md:px-2 faq-shadow font-fourth faq-content-box">
                            <div class="mb-16">
                                <?php echo $item['auto_accident_resources__faq_description'] ?>
                            </div>
                            <div class="flex justify-between">
                                <div class=" flex justify-start gap-11 xl:flex-col md:items-center xl:gap-4 ">
                                    <?php if ($item['auto_accident_resources__faq_link']) { ?>
                                        <?php
                                        Template::load('_template-parts/components/button.php', [
                                            'link' => $item['auto_accident_resources__faq_link']['url'],
                                            'text' => __($item['auto_accident_resources__faq_link']['title'], 'law'),
                                            'text_hover' => false,
                                            'classes' => ' hover_accent bg-accent bg-button_color !border-4 !border-button_color hover:!border-accent rounded-xl uppercase !max-w-96 !min-w-[300px]  w-full'
                                        ]); ?>
                                    <?php } ?>

                                    <?php
                                    Template::load('_template-parts/components/button.php', [
                                        'link' => 'tel:' . $item['auto_accident_resources__faq_number'],
                                        'text' => __($item['auto_accident_resources__faq_number'], 'law'),
                                        'text_hover' => false,
                                        'classes' => 'bg-white text-button_color  !border-4 !border-button_color rounded-xl uppercase hover:text-white  hover:!bg-button_color !max-w-96 !min-w-[340px] text-4xl  w-full'
                                    ]); ?>
                                </div>
                                <div class="flex justify-center items-end">
                                    <a href="#<?php echo $auto_accident_resources__title ?>" class=" flex justify-center items-center text-4xl  mdt:text-2xl md:text-[17px] text-button_color border-4 border-button_color rounded-xl h-[75px] w-16 hover:text-white hover:bg-button_color ">↑</a>
                                </div>
                            </div>

                        </div>
                    </div>

                <?php } ?>
            </div>


        </div>




    </section>

<?php }
if (!get_fields()) echo 'Fill block with content';
