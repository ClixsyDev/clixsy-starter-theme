<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $headquarters__title = get_field('headquarters__title');
    $headquarters__map = get_field('headquarters__map');
    $headquarters__address = get_field('headquarters__address');
    $headquarters__email = get_field('headquarters__email');
    $headquarters__phone = get_field('headquarters__phone'); ?>
    
    <section class="py-8">
        <div class="container">
            <?php if ($headquarters__title) { ?>
                <h2 class="heading_h2"><?php echo $headquarters__title ?></h2>
                <hr class="bg-button_color border-none mx-auto h-1 w-[124px] max-w-full mt-6">
            <?php } ?>
            <div class="pt-16 flex justify-center gap-10 md:pt-12 md:flex-col md:items-center">
                <?php if ($headquarters__map) { ?>
                    <div>
                        <?php echo $headquarters__map ?>
                    </div>
                <?php } ?>
                <?php if ($headquarters__address || $headquarters__email || $headquarters__phone) { ?>
                    <div class="flex flex-col gap-5 md:text-center xs:gap-3">
                        <?php if ($headquarters__address) { ?>
                            <div>
                                <h4 class="font-second font-bold text-3xl xs:text-2xl">Address</h4>
                                <p class="font-main text-xl"><?php echo $headquarters__address ?></p>
                            </div>
                        <?php } ?>
                        <?php if ($headquarters__email) { ?>
                            <div>
                                <h4 class="font-second font-bold text-3xl xs:text-2xl">Email</h4>
                                <a class="font-main text-xl" href="mailto:<?php $headquarters__email ?>"><?php echo $headquarters__email ?></a>
                            </div>
                        <?php } ?>
                        <?php if ($headquarters__phone) { ?>
                            <div>
                                <h4 class="font-second font-bold text-3xl xs:text-2xl">Phone</h4>
                                <a class="font-main text-4xl xs:text-xl" href="tel:<?php $headquarters__phone ?>"><?php echo $headquarters__phone ?></a>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    
<?php }
if (!get_fields()) echo 'Fill block with content';