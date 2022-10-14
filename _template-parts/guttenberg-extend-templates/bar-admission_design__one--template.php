<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $bar_admission_design_one__icons = get_field('bar_admission_design_one__icons');
    $bar_admission_design_one__region = get_field('bar_admission_design_one__region');
    $bar_admission_design_one__title = get_field('bar_admission_design_one__title');
    $bar_admission_design_one__content = get_field('bar_admission_design_one__content');

?>
    <div class="py-12 lg:py-6">
        <div class="container">
            <?php if ($bar_admission_design_one__title) { ?>
                <h2 class="text-kennyBlue font-medium text-4xl text-center leading-tight pb-4"><?php echo $bar_admission_design_one__title ?></h2>
            <?php } ?>
            <hr class="bg-kennyGreen border-none mx-auto h-1 w-[100px] max-w-full mb-6">
            <div class=" bg-gray-200 flex mt-24 lg:px-5 lg:gap-7 md:flex-col">
                <?php if ($bar_admission_design_one__region) { ?>
                    <div class="mt-[-50px] w-12/24 md:w-full">
                        <?php echo wp_get_attachment_image($bar_admission_design_one__region, 'full', '', ['class' => 'm-auto md:w-14/24']) ?>
                    </div>
                <?php } ?>
                <?php if ($bar_admission_design_one__content) { ?>
                    <div class="w-10/24 pt-10 pb-20 xl:w-14/24 xl:py-7 md:w-full md:pt-0">
                        <div class="prose-lg px-6">
                            <?php echo $bar_admission_design_one__content ?>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <?php if ($bar_admission_design_one__icons) {  ?>
                <div class="shadow-lg py-5 flex justify-around md:flex-wrap xl:justify-center xl:gap-10">
                    <?php foreach ($bar_admission_design_one__icons as $bar_item) { ?>
                        <?php echo wp_get_attachment_image($bar_item['image'], 'full', '', ['class' => 'object-contain xl:w-4/24 md:w-8/24']) ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }
