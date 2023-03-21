<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $headquarters__title = get_field('headquarters__title');
    $location = get_field('location', 'options');
    $map = get_field('map', 'options');
    $phone = get_field('phone', 'options');
    $mail = get_field('mail', 'options'); ?>

    <section class="py-8">
        <div class="container">
            <?php if ($headquarters__title) { ?>
                <h2 class="heading_h2"><?php echo $headquarters__title ?></h2>
                <!-- <hr class="bg-button_color border-none mx-auto h-1 w-[124px] max-w-full mt-6"> -->
            <?php } ?>
            <div class="pt-12 md:pt-10">
                <div class=" flex justify-center gap-10  md:flex-col md:items-center shadow-siteWide">
                    <?php if ($map) { ?>
                        <div class="w-6/12 iframe-full-width md:w-full">
                            <?php echo $map ?>
                        </div>
                    <?php } ?>
                    <?php if ($location || $mail || $phone) { ?>
                        <div class="w-6/12 flex flex-col gap-5 md:text-center xs:gap-3 md:w-full pb-6">
                            <?php if ($location) { ?>
                                <div>
                                    <h4 class="font-second font-bold text-3xl xs:text-2xl">Address</h4>
                                    <p class="font-main text-xl"><?php echo $location ?></p>
                                </div>
                            <?php } ?>
                            <?php if ($mail) { ?>
                                <div>
                                    <h4 class="font-second font-bold text-3xl xs:text-2xl">Email</h4>
                                    <a class="font-main text-xl" href="mailto:<?php $mail ?>"><?php echo $mail ?></a>
                                </div>
                            <?php } ?>
                            <?php if ($phone) { ?>
                                <div>
                                    <h4 class="font-second font-bold text-3xl xs:text-2xl">Phone</h4>
                                    <a class="font-main text-4xl xs:text-xl" href="tel:<?php $phone ?>"><?php echo $phone ?></a>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
