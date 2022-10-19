<?php 
$faq_repeater = get_field('faq_repeater');
$faq_repeater_hidden = get_field('faq_repeater_hidden');
$image = get_field('image');
?>

<div class="py-24">
    <div class="container">
        <h2 class="text-headings_second font-medium text-4xl text-center leading-tight pb-4"><?= get_field('title') ?></h2>
        <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
        <div class="flex justify-center gap-2 w-11/12 m-auto md:block">
            <?php if ($image) { ?>
                <div class="md:hidden">
                    <?php echo wp_get_attachment_image($image, 'full', "", ["class" => ""]); ?>
                </div>
            <?php } ?>
            <?php if ($faq_repeater || $faq_repeater_hidden) { ?>
                <div class="w-15/24 md:w-full">
                    <?php if ($faq_repeater) { ?>
                        <?php foreach ($faq_repeater as $item) { ?>
                            <div class="mt-1.5 faq-block relative">
                                <div>
                                    <?php if ($item['title']) { ?>
                                        <div class="title-faq text-headings_second flex justify-between relative bg-process_smoke font-avenir font-bold text-2xl p-4 lg:text-base lg:relative xs:px-7">
                                            <h3><?php echo $item['title'] ?></h3>
                                        </div>
                                    <?php } ?>
                                    <?php if ($item['description']) { ?>
                                        <div class="pt-3 pb-5 px-11 hidden-part hidden">
                                            <?php echo $item['description'] ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($faq_repeater_hidden) { ?>
                        <?php foreach ($faq_repeater_hidden as $item_hidden) { ?>
                            <div class="hidden hidden-text mt-1.5 faq-block relative">
                                <div>
                                    <?php if ($item_hidden['title']) { ?>
                                        <div class="title-faq text-headings_second flex justify-between relative bg-smoke font-avenir font-bold text-2xl p-4 lg:text-base lg:relative xs:px-7">
                                            <h3><?php echo $item_hidden['title'] ?></h3>
                                        </div>
                                    <?php } ?>
                                    <?php if ($item_hidden['description']) { ?>
                                        <div class="pt-3 pb-5 px-11 hidden-part hidden">
                                            <?php echo $item_hidden['description'] ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($faq_repeater_hidden) { ?>
                        <div class="text-end font-avenir font-bold text-xl pt-7">
                            <a href="" class="more-btn">+ read more...</a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php 
if (!get_fields()) echo 'Fill block with content';