<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $awards_design_one__title = get_field('awards_design_one__title');
    $awards_design_one__repeater = get_field('awards_design_one__repeater');
    $awards_design_one__bg = get_field('awards_design_one__bg');
    $awards_design_one__slide_bg = get_field('awards_design_one__slide_bg');
    $awards_design_one__link = get_field('awards_design_one__link');
?>
    <div class="pb-12">
        <div class="max-w-[1920px] m-auto md:max-w-none">
            <div class="bg-cover py-10" style="background-image: url('<?php echo $awards_design_one__bg ?>');">
                <?php if ($awards_design_one__title) { ?>
                    <h2 class="text-headings_second text-2xl text-center font-bold font-avenir"><?php echo $awards_design_one__title ?></h2>
                <?php } ?>
                <div class="awardsSlider glide relative mt-7 px-10 md:px-0">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides overflow-visible">
                            <?php foreach ($awards_design_one__repeater as $awards_item) { ?>
                                <div class="glide__slide" style="background-color: <?php echo $awards_design_one__slide_bg ?: '' ?> ;">
                                    <div class="py-6 px-3 flex items-center justify-center w-full">
                                        <?php echo wp_get_attachment_image($awards_item['icon'], 'full', '', ['class' => 'm-auto xxl:w-17/24 object-contain h-44 block m-auto']) ?>
                                    </div>
                                    <span class="m-auto xxl:w-17/24 object-contain h-44 hidden"></span>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php if ($awards_design_one__link) { ?>
                <div class="text-center mt-12">
                    <a href="<?php echo $awards_design_one__link['url'] ?>" class="font-avenir uppercase bg-accent text-white font-bold text-xl py-2 px-12 rounded-full lg:px-8 lg:py-3 lg:text-lg xs:text-2xl"><?php echo $awards_design_one__link['title'] ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';
