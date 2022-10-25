<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $faq_design_one__faq_repeater = get_field('faq_design_one__faq_repeater_name');
    $faq_design_one__title = get_field('faq_design_one__title');
    $faq_design_one__image = get_field('faq_design_one__image');

?>
    <?php if ($faq_design_one__faq_repeater[0]) { ?>
        <section class="container mb-16">
            <?php if ($faq_design_one__title) { ?>
                <div class=" text-headings text-4xl text-center relative pb-16">
                    <h2 class="font-bold process_text_design__one"><?php echo $faq_design_one__title ?></h2>
                    <span class="bg-accent w-32 h-1 absolute left-0 right-0 mx-auto"></span>
                </div>
            <?php } ?>

            <div>
                <?php if ($faq_design_one__image) { ?>
                    <?php echo wp_get_attachment_image($faq_design_one__image, 'full', '', ['class' => 'object-cover mx-auto w-[60%] mdt:w-[80%]  md:w-full h-[487px] 2xl:h-64 md:h-52']) ?>
                <?php } ?>
                <div class="mx-auto w-[60%] mdt:w-[80%] md:w-full ">
                    <?php foreach ($faq_design_one__faq_repeater as $faq_item) { ?>
                        <?php if ($faq_item['question'] && $faq_item['answer']) { ?>
                            <div>
                                <div class="pb-2 faq-block">
                                    <div class="title-faq text-headings flex justify-between bg-gray-300 cursor-pointer font-main font-bold text-2xl xl:text-lg p-4 lg:text-base relative xs:px-7">
                                        <h3><?php echo $faq_item['question'] ?></h3>
                                    </div>
                                    <div class="pt-3 pb-5 px-11 hidden hidden-part prose-base">
                                        <?php echo $faq_item['answer'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
        </section>
    <?php } ?>
<?php }
if (!get_fields()) echo 'Fill block with content';
