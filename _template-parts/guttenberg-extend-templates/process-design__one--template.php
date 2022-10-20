<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $process_design_one__sercive_repeater = get_field('process_design_one__sercive_repeater');
    $process_design_one__title = get_field('process_design_one__title');
    $process_design_one__image = get_field('process_design_one__image');
    $process_design_one__image_mobile = get_field('process_design_one__image_mobile');
    $process_design_one__button = get_field('process_design_one__button');

?>
    <?php if ($process_design_one__sercive_repeater || $process_design_one__title || $process_design_one__image || $process_design_one__button) { ?>
        <div class="pt-20 pb-24 xs:pb-16">
            <div class="container md:p-0">
                <?php if ($process_design_one__title) { ?>
                    <h2 class="text-headings font-medium text-5xl text-center leading-tight pb-4 lg:text-4xl md:text-3xl xs:text-2xl"><?php echo $process_design_one__title ?></h2>
                <?php } ?>
                <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
                <div class="flex md:flex-col">
                    <?php if ($process_design_one__image) { ?>
                        <div class="w-12/24 md:hidden">
                            <?php echo wp_get_attachment_image($process_design_one__image, 'full', '', ['class' => 'h-full w-full object-cover']) ?>
                        </div>
                    <?php }
                    if ($process_design_one__image_mobile) { ?>
                        <div class="hidden md:block">
                            <?php echo wp_get_attachment_image($process_design_one__image_mobile, 'full', '', ['class' => 'w-full']) ?>
                        </div>
                    <?php } ?>
                    <?php if ($process_design_one__sercive_repeater) { ?>
                        <div class="flex flex-col w-18/24 md:w-full md:-mt-[15px]">
                            <?php foreach ($process_design_one__sercive_repeater as $key => $process_design_one__sercive_repeater_item) {
                                if ($key % 2 == 0) { ?>
                                    <div class="bg-process_smoke min-h-[246px] flex gap-5 px-5 py-12 xl:py-8 xl:min-h-[195px] xl:items-center lg:min-h-max md:px-20 xs:px-6 xs:py-5">
                                        <div class="text-accent font-noto_serif font-bold text-7xl xl:text-6xl xs:text-5xl">
                                            <?php echo str_pad(++$key, 2, '0', STR_PAD_LEFT) ?>
                                        </div>
                                        <div class="text-4xl font-avenir xl:text-3xl lg:text-2xl xs:text-xl">
                                            <div class="text-headings process_text_design__one"><?php echo $process_design_one__sercive_repeater_item['process_design_one__service_text'] ?></div>
                                            <?php if ($process_design_one__sercive_repeater_item['process_design_one__service_link'] && $process_design_one__sercive_repeater_item['process_design_one__service_link']['url']) { ?>
                                                <div class="">
                                                    <a href="<?php echo $process_design_one__sercive_repeater_item['process_design_one__service_link']['url'] ?>" class="font-avenir bg-accent text-white font-bold text-2xl py-2 px-12 rounded-full lg:px-8 lg:py-2 lg:text-lg xs:text-lg xs:py-1"><?php echo $process_design_one__sercive_repeater_item['process_design_one__service_link']['title'] ?></a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="bg-smoke min-h-[246px] flex items-center gap-5 px-5 py-12 xl:py-8 xl:min-h-[195px] xl:items-center lg:min-h-max md:px-20 xs:px-6 xs:py-5">
                                        <div class="text-white font-noto_serif font-bold text-7xl xl:text-6xl xs:text-5xl">
                                            <?php echo str_pad(++$key, 2, '0', STR_PAD_LEFT) ?>
                                        </div>
                                        <div class="text-4xl font-avenir xl:text-3xl lg:text-2xl xs:text-xl">
                                            <div class="text-headings process_text_design__one"><?php echo $process_design_one__sercive_repeater_item['process_design_one__service_text'] ?></div>
                                        </div>
                                        <?php if ($process_design_one__sercive_repeater_item['process_design_one__service_link'] && $process_design_one__sercive_repeater_item['process_design_one__service_link']['url']) { ?>
                                            <div class="">
                                                <a href="<?php echo $process_design_one__sercive_repeater_item['process_design_one__service_link']['url'] ?>" class="font-avenir bg-accent text-white font-bold text-2xl py-2 px-12 rounded-full lg:px-8 lg:py-2 lg:text-lg xs:text-lg xs:py-1"><?php echo $process_design_one__sercive_repeater_item['process_design_one__service_link']['title'] ?></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    <?php } ?>
                </div>
                <?php if ($process_design_one__button) { ?>
                    <div class="text-center mt-16 xs:mt-12">
                        <a href="<?php echo $process_design_one__button['url'] ?>" class="font-avenir uppercase bg-accent text-white font-bold text-2xl py-2 px-20 rounded-full lg:px-8 lg:py-3 lg:text-lg xs:text-xl"><?php echo $process_design_one__button['title'] ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } else { ?>
        <h1>Please fill out with content</h1>
    <?php } ?>
<?php }
