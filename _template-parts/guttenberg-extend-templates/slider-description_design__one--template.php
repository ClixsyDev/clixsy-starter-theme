<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $slider_description_design_one__slides = get_field('slider_description_design_one__slides');
    $slider_description_design_one__title = get_field('slider_description_design_one__title');
    $slider_description_design_one__slider_color = get_field('slider_description_design_one__slider_color');


?>
    <section class="pt-10 pb-20 lg:pb-10">
        <div class="container">
            <?php if ($slider_description_design_one__title) { ?>
                <h2 class="heading_h2 pb-4"><?php echo $slider_description_design_one__title ?></h2>
            <?php } ?>
            </hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
            <div class="lifeSlider glide relative md:pt-10">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides overflow-visible">
                        <?php foreach ($slider_description_design_one__slides as $life_slide) { ?>
                            <div class="glide__slide max-w-[75%]">
                                <div class="max-w-[85%] py-6 flex items-center gap-8 m-auto md:mt-[100px] md:flex-col" style="background-color: <?php echo $slider_description_design_one__slider_color ?: "" ?>">
                                    <?php echo wp_get_attachment_image($life_slide['image'], 'full', '', ['class' => 'ml-[-50px] xl:w-12/24 md:ml-0 md:w-19/24 md:mt-[-100px] max-w-[630px]']) ?>
                                    <?php if ($life_slide['content']) { ?>
                                        <div class="prose-lg text-white font-main w-19/24 lg:w-20/24 md:m-auto px-4">
                                            <?php echo $life_slide['content'] ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php if (count($slider_description_design_one__slides) > 1) { ?>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left absolute top-52 left-0 lg:top-36 md:top-80 md:-left-[2%] xs:top-[46%]" data-glide-dir="<">
                            <img class="w-9/12 xs:h-5" src="<?= get_stylesheet_directory_uri() ?>/assets/img/arrow-back.png">
                        </button>
                        <button data-glide-dir="&gt;" class="glide__arrow glide__arrow--right absolute top-52 right-7 md:-right-[2%] lg:top-36 md:top-80 xs:top-[46%]">
                            <img class="w-9/12 xs:h-5" src="<?= get_stylesheet_directory_uri() ?>/assets/img/arrow-next.png">
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php }
if (!get_fields()) echo 'Fill block with content';