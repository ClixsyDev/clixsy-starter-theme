<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $services_design_one__services = get_field('services_design_one__services');
    $services_design_one__title = get_field('services_design_one__title');
    $services_design_one__link = get_field('services_design_one__link');

?>
    <div class="pb-16">
        <div class="container">
            <?php if ($services_design_one__title) { ?>
                <h2 class="heading_h2 pb-4"><?php echo $services_design_one__title ?></h2>
                <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
            <?php } ?>
            <?php if ($services_design_one__services) { ?>
                <div class="flex justify-center mt-48 gap-12 xl:gap-6 mdt:flex-col mdt:gap-44 mdt:mt-36 xs:gap-36">
                    <?php foreach ($services_design_one__services as $services_item) { ?>
                        <div class="bg-headings text-center px-5 w-6/24 pb-6 xl:w-18/24 mdt:m-auto mdt:w-16/24 xs:w-21/24">
                            <?php if ($services_item['icon']) { ?>
                                <div class="bg-white shadow-[inset_0_-1px_6px_rgba(0,0,0,0.26)] h-48 w-48 m-auto -mt-32 border-reviewText rounded-full p-9 mdt:w-40 mdt:h-40 mdt:-mt-24 xs:w-36 xs:h-36 xs:p-10">
                                    <?php echo wp_get_attachment_image($services_item['icon'], 'full', '', ['class' => 'm-auto']) ?>
                                </div>
                            <?php } ?>
                            <?php if ($services_item['title']) { ?>
                                <h3 class="text-accent text-2xl font-second my-3">
                                    <?php echo $services_item['title'] ?>
                                </h3>
                            <?php } ?>
                            <?php if ($services_item['description']) { ?>
                                <div class="text-white prose leading-tight"><?php echo $services_item['description'] ?></div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if ($services_design_one__link) { ?>
                <div class="text-center mt-16">
                    <?php
                    Template::load('_template-parts/components/button.php', [
                        'link' => $services_design_one__link['url'],
                        'text' => __($services_design_one__link['title'], 'law'),
                        'text_hover' => false,
                        'classes' => 'btn_xl hover_headings center max-w-[460px]', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                    ]); ?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';
