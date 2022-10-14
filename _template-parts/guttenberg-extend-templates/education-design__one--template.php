<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $education_design_one__icons = get_field('education_design_one__icons');
    $education_design_one__title = get_field('education_design_one__title');
    $education_design_one__description = get_field('education_design_one__description');
    $education_design_one__description__visible_mobile = get_field('education_design_one__description__visible_mobile');
    $education_design_one__description__hidden_mobile = get_field('education_design_one__description__hidden_mobile');
    $education_design_one__link = get_field('education_design_one__link');
?>
    <section class="pt-16 pb-28 sm:pb-16">
        <div class="container">
            <?php if ($education_design_one__title) { ?>
                <h2 class="text-kennyBlue font-medium text-4xl text-center leading-tight pb-4"><?php echo $education_design_one__title ?></h2>
                <hr class="bg-kennyGreen border-none mx-auto h-1 w-[100px] max-w-full mb-6">
            <?php } ?>
            <div class="flex my-14 mdt:justify-center">
                <div class="flex gap-12 justify-center lg:gap-0 mdt:flex-col">
                    <?php if ($education_design_one__icons) { ?>
                        <div class="flex gap-16 flex-col mdt:flex-row">
                            <?php foreach ($education_design_one__icons as $education_design_one_item) { ?>
                                <div>
                                    <?php echo wp_get_attachment_image($education_design_one_item['image'], 'full', '', ['class' => 'm-auto lg:w-17/24 mdt:w-20/24']) ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if ($education_design_one__description) { ?>
                        <div class="w-14/24 border-l-4 border-kennyGreen pl-12 lg:pl-6 mdt:w-full mdt:hidden mdt:mt-5">
                            <div class="text-lg lg:text-base">
                                <?php echo $education_design_one__description ?>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- for mobile -->
                    <?php if ($education_design_one__description__visible_mobile) { ?>
                        <div class="visible-education-text-tablet hidden w-14/24 pl-12 lg:pl-6 mdt:block mdt:w-full mdt:mt-5">
                            <p class="text-lg lg:text-base"><?php echo $education_design_one__description__visible_mobile ?></p>
                        </div>
                    <?php } ?>
                    <?php if ($education_design_one__description__hidden_mobile) { ?>
                        <div class="hidden-text-education hidden w-14/24 pl-12 lg:pl-6 mdt:w-full mdt:mt-5">
                            <p class="text-lg lg:text-base"><?php echo $education_design_one__description__hidden_mobile ?></p>
                        </div>
                    <?php } ?>
                    <?php if ($education_design_one__description__visible_mobile && $education_design_one__description__hidden_mobile) { ?>
                    <div class="hidden font-avenir font-bold text-xl pl-7 pt-7 mdt:block">
                        <a href="javascript:void(0);" class="more-btn-education">read more...</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
            <?php if ($education_design_one__link) { ?>
            <div class="text-center mt-12">
                <a href="<?php echo $education_design_one__link['url'] ?>" class="font-avenir uppercase bg-kennyGreen text-white font-bold text-xl py-2 px-12 rounded-full lg:py-3 lg:px-8 lg:text-base xs:text-2xl"><?php echo $education_design_one__link['title'] ?></a>
            </div>
            <?php } ?>
        </div>
    </section>
<?php }
