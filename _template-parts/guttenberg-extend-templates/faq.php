<?php 
$faq_repeater = get_field('faq_repeater');
$image = get_field('image');
?>

<div class="py-24">
    <div class="container">
        <h2 class="text-kennyBlue font-medium text-4xl text-center leading-tight pb-4"><?= get_field('title') ?></h2>
        <hr class="bg-kennyGreen border-none mx-auto h-1 w-[100px] max-w-full mb-6">
        <div class="flex justify-center gap-2 w-11/12 m-auto md:block">
            <?php if ($image) { ?>
                <div class="md:hidden">
                    <?php echo wp_get_attachment_image($image, 'full', "", ["class" => ""]); ?>
                </div>
            <?php } ?>
            <?php if ($faq_repeater) { ?>
                <div class="w-15/24 md:w-full">
                    <?php foreach ($faq_repeater as $item) { ?>
                        <div class="mt-1.5 faq-block relative">
                            <div>
                                <?php if ($faq_repeater) { ?>
                                    <div class="title-faq text-kennyBlueFourth flex justify-between bg-smoke font-avenir font-bold text-2xl p-4 lg:text-base lg:relative xs:px-7">
                                        <h3><?php echo $item['title'] ?></h3>
                                    </div>
                                <?php } ?>
                                <?php if ($faq_repeater) { ?>
                                    <div class="pt-3 pb-5 px-11 hidden-part hidden">
                                        <?php echo $item['description'] ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>