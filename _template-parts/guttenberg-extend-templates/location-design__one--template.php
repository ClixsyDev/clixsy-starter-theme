<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $location_design_one__background = get_field('location_design_one__background');
    $location_design_one__title = get_field('location_design_one__title');
    $location_design_one__description = get_field('location_design_one__description');
    $location_design_one__mail = get_field('location_design_one__mail');
    $location_design_one__phone = get_field('location_design_one__phone');
    $location_design_one__google_map = get_field('location_design_one__google_map');

?>
    <section class="w-full pt-16 pb-20 font-main bg-cover lg:bg-contain lg:bg-repeat" style="background-image: url('<?php echo wp_get_attachment_image_url($location_design_one__background, 'full') ?>');">
        <div class="container">
            <div class=" text-headings_second text-5xl text-center relative pb-16">
                <?php if ($location_design_one__title) { ?>
                    <h2 class="font-bold"> <?php echo $location_design_one__title ?></h2>
                <?php } ?>
                <span class="bg-accent w-32 h-1 absolute left-0 right-0 mx-auto"></span>
            </div>

            <div class="flex flex-row mdt:flex-wrap justify-center w-full">
                <div class="text-headings_second text-4xl mdt:text-2xl mx-auto w-full  order-1 mdt:order-2 ">
                    <div class="w-[90%] mx-auto mdt:w-[80%] md:w-8/12 sm:w-full mdt:ml-0">
                        <p class="mb-6"><?php echo $location_design_one__description ?></p>
                        <?php if ($location_design_one__mail) { ?>
                            <a class="block mb-6" href="mailto:<?php echo $location_design_one__mail ?>"><?php echo $location_design_one__mail ?></a>
                        <?php } ?>
                        <?php if ($location_design_one__phone) { ?>
                            <a href="tel:<?php echo $location_design_one__phone ?>" class="block text-6xl lg:text-5xl font-bold"><?php echo $location_design_one__phone ?></a>
                        <?php } ?>
                    </div>
                </div>

                <div class="mx-auto order-2 mdt:order-1 w-full mdt:pb-12 ">
                    <?php if ($location_design_one__google_map) { ?>
                    <div class=" h-[295px] w-full border-2 shadow-lg mx-auto ">
                        <?php echo $location_design_one__google_map ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php }
if (!get_fields()) echo 'Fill block with content';