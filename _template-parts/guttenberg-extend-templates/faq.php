<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $key = 'faq';
    $title = get_field($key . '_title');
    $faq_repeater = get_field($key . '_repeater');
    $faq_repeater_hidden = get_field($key . '_repeater_hidden');
    $image = get_field($key . '_image');
?>
    <div class="py-24">
        <div class="container">
            <?php if ($title) { ?>
                <div class="mb-16 lg:mb-8">
                    <h2 class="heading_h2 pb-4"><?= $title ?></h2>
                    <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
                </div>
            <?php } ?>
            <div class="flex justify-center gap-2 w-11/12 m-auto md:block">
                <?php if ($image) { ?>
                    <div class="md:hidden">
                        <?php echo wp_get_attachment_image($image, 'full', "", ["class" => ""]); ?>
                    </div>
                <?php } ?>
                <?php if ($faq_repeater || $faq_repeater_hidden) { ?>
                    <div class="w-15/24 md:w-full">
                        <?php if ($faq_repeater) { ?>
                            <div class="faq__list">
                                <?php foreach ($faq_repeater as $key => $item) { ?>
                                    <div class="faq__position <?php echo $key == 0 ? 'faq__position__active' : '' ?> ">
                                        <div class="faq__header p-4 pr-9 text-headings_second mb-2 bg-process_smoke font-main font-bold  text-2xl lg:text-base lg:relative xs:px-7 cursor-pointer"><?php echo $item['question'] ?></div>
                                        <div class="faq__text" style="<?php echo $key == 0 ? 'max-height: 100%' : '' ?>">
                                            <?php echo $item['answer'] ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            <?php if ($faq_repeater_hidden) { ?>
                                <div class="hidden hidden_faq_image_left">
                                    <?php foreach ($faq_repeater_hidden as $item_hidden) { ?>
                                        <div class="faq__position ">
                                            <div class="faq__header p-4 pr-9 text-headings_second mb-2 bg-process_smoke font-main font-bold  text-2xl lg:text-base lg:relative xs:px-7 cursor-pointer"><?php echo $item_hidden['question'] ?></div>
                                            <div class="faq__text">
                                                <?php echo $item_hidden['answer'] ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            </div>
                            <?php if ($faq_repeater_hidden) { ?>
                                <div class="text-end font-main font-bold text-xl pt-7">
                                    <span class="faq-without-image__btn cursor-pointer">+ read more...</span>
                                </div>
                            <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php }
if ($faq_repeater) {
    faq_schema($faq_repeater, $faq_repeater_hidden);
}
if (!get_fields()) echo 'Fill block with content';
