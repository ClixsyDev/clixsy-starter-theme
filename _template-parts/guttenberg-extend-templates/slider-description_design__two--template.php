<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $slider_description_design_two__slides = get_field('slider_description_design_two__slides');
    $slider_description_design_two__title = get_field('slider_description_design_two__title');
    $slider_description_design_two__description = get_field('slider_description_design_two__description');
    $slider_description_design_two__bg = get_field('slider_description_design_two__bg');
    $slider_description_design_two__link = get_field('slider_description_design_two__link');


?>
    <section class="py-16 bg-cover" style="background-image: url('<?php echo $slider_description_design_two__bg ?>');">
        <div class="container">
            <?php if ($slider_description_design_two__title) { ?>
                <h2 class="text-headings_second font-medium text-4xl text-center leading-tight pb-4"><?php echo $slider_description_design_two__title ?></h2>
                <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
            <?php } ?>
            <?php if ($slider_description_design_two__description) { ?>
                <p class="text-center text-lg text-headings_second"><?php echo $slider_description_design_two__description ?></p>
            <?php } ?>
            <div class="memorableSlider glide relative mt-10">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides overflow-visible">
                        <?php foreach ($slider_description_design_two__slides as $key => $slider_v2_item) { ?>
                            <div class="glide__slide">
                                <div class="relative w-max m-auto p-5 lg:w-14/24 sm:w-17/24 xs:w-23/24">
                                    <?php echo wp_get_attachment_image($slider_v2_item['image'], 'full', '', ['class' => 'm-auto']) ?>
                                    <?php if ($slider_v2_item['content']) { ?>
                                        <div class="absolute <?php echo $key % 2 == 0 ? 'top-0' : 'bottom-8' ?> ml-5 mt-10 mr-10 p-5 w-18/24 bg-white/60 xl:p-2 xs:ml-3 xs:mt-8">
                                            <div class="font-avenir font-bold text-headings_second prose-xl lg:prose-lg leading-tight"><?php echo $slider_v2_item['content'] ?></div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <?php if (count($slider_description_design_two__slides) > 1) { ?>
                        <div class="text-center relative mt-5 lg:mt-0 xs:mt-6">
                            <div class="glide__bullets" data-glide-el="controls[nav]">
                                <?php for ($i = 0; $i <= count($slider_description_design_two__slides) - 1; $i++) { ?>
                                    <button class="slider__bullet glide__bullet focus:border-none bg-smoke focus:bg-darkOrange hover:bg-darkOrange w-7 h-1.5 rounded-none xs:h-1 xs:w-6" data-glide-dir="=<?php echo $i ?>"></button>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php if (count($slider_description_design_two__slides) > 1) { ?>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left absolute top-55% left-25% xl:top-45% lg:left-17% sm:left-7% xl:left-10% xs:top-[46%] xs:left-0" data-glide-dir="<"><img class="w-9/12 xs:h-7" src="<?= get_stylesheet_directory_uri() ?>/assets/img/arrow-back.png"></button>
                        <button class="glide__arrow glide__arrow--right absolute top-55% right-25% xl:top-45% lg:right-17% sm:right-7% xl:right-10% xs:top-[46%] xs:right-0" data-glide-dir="&gt;"><img class="w-9/12 xs:h-7" src="<?= get_stylesheet_directory_uri() ?>/assets/img/arrow-next.png"></button>
                    </div>
                <?php } ?>
            </div>
            <?php if ($slider_description_design_two__link) { ?>
                <div class="text-center mt-5 lg:mt-8">
                    <a href="<?php echo $slider_description_design_two__link['url'] ?>" class="font-avenir bg-accent uppercase text-white font-bold text-2xl py-2 px-20 rounded-full lg:px-14 lg:py-3 lg:text-xl xs:text-2xl"><?php echo $slider_description_design_two__link['title'] ?></a>
                </div>
            <?php } ?>
        </div>
    </section>
<?php }
if (!get_fields()) echo 'Fill block with content';
