<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $faq_design_one__faq_repeater = get_field('faq_design_one__faq_repeater_name');
    $faq_design_one__faq_repeater_hidden = get_field('faq_design_one__faq_repeater_name_hidden');
    $faq_design_one__title = get_field('faq_design_one__title');
    $faq_design_one__image = get_field('faq_design_one__image');
    $faq_design_one__disable_schema = get_field('faq_design_one__disable_schema');

?>
    <?php if ($faq_design_one__faq_repeater[0]) { ?>
        <section class="container mb-16">
            <?php if ($faq_design_one__title) { ?>
                <div class=" text-headings text-4xl text-center relative pb-16">
                    <h2 class="heading_h2 pb-4"><?php echo $faq_design_one__title ?></h2>
                    <span class="bg-accent w-32 h-1 absolute left-0 right-0 mx-auto"></span>
                </div>
            <?php } ?>

            <div>
                <?php if ($faq_design_one__image) { ?>
                    <?php echo wp_get_attachment_image($faq_design_one__image, 'full', '', ['class' => 'object-cover mx-auto w-[60%] mdt:w-[80%]  md:w-full h-[487px] 2xl:h-64 md:h-52']) ?>
                <?php } ?>
                <div class="mx-auto w-[60%] mdt:w-[80%] md:w-full ">
                    <?php if ($faq_design_one__faq_repeater) { ?>
                        <div class="w-full">
                            <?php if ($faq_design_one__faq_repeater) { ?>
                                <div class="faq__list">
                                    <?php foreach ($faq_design_one__faq_repeater as $key => $item) { ?>
                                        <div class="faq__position <?php echo $key == 0 ? 'faq__position__active' : '' ?> ">
                                            <div class="faq__header p-4 pr-9 text-headings_second mb-2 bg-process_smoke font-main font-bold  text-2xl lg:text-base lg:relative xs:px-7 cursor-pointer"><?php echo $item['question'] ?></div>
                                            <div class="faq__text" style="<?php echo $key == 0 ? 'max-height: 100%' : '' ?>">
                                                <?php echo $item['answer'] ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                                <?php if ($faq_design_one__faq_repeater_hidden) { ?>
                                    <div class="hidden hidden_faq_image_left">
                                        <?php foreach ($faq_design_one__faq_repeater_hidden as $item_hidden) { ?>

                                            <div class="faq__position ">
                                                <div class="faq__header p-4 pr-9 text-headings_second mb-2 bg-process_smoke font-main font-bold  text-2xl lg:text-base lg:relative xs:px-7 cursor-pointer"><?php echo $item_hidden['question_hidden'] ?></div>
                                                <div class="faq__text">
                                                    <?php echo $item_hidden['answer_hidden'] ?>
                                                </div>
                                            </div>

                                        <?php } ?>
                                    </div>
                                <?php } ?>
                                </div>
                                <?php if ($faq_design_one__faq_repeater_hidden) { ?>
                                    <div class="text-end font-main font-bold text-xl pt-7">
                                        <span class="faq-without-image__btn cursor-pointer">+ read more...</span>
                                    </div>
                                <?php } ?>
                        </div>
                    <?php } ?>
                </div>
        </section>
    <?php } ?>
<?php }
if (!$faq_design_one__disable_schema) {
    faq_schema($faq_design_one__faq_repeater, $faq_design_one__faq_repeater_hidden);
}
if (!get_fields()) echo 'Fill block with content';
