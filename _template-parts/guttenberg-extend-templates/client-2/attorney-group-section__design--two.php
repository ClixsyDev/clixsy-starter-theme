<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $attorney_group_section_design_two__first_text = get_field('attorney_group_section_design_two__first_text');
    $attorney_group_section_design_two__second_text = get_field('attorney_group_section_design_two__second_text');
    $attorney_group_section_design_two__image = get_field('attorney_group_section_design_two__image');
    $attorney_group_section_design_two__section_bg = get_field('attorney_group_section_design_two__section_bg');
    $attorney_group_section_design_two__form_bg = get_field('attorney_group_section_design_two__form_bg');
    $attorney_group_section_design_two__form_select = get_field('attorney_group_section_design_two__form_select');
    $attorney_group_section_design_two__form_text = get_field('attorney_group_section_design_two__form_text');



?>
    <section class="container mt-24 mb-36  xl:w-11/12 xl:max-w-full">
        <div class="grid grid-cols-12 row-auto gap-5 mdt:gap-0">
            <div class="col-span-8 xl:col-span-7 mdt:col-span-10 mdt:col-start-2 text-center bg-white">
                <?php if ($attorney_group_section_design_two__image) { ?>
                    <?php echo wp_get_attachment_image($attorney_group_section_design_two__image, 'full', '', ['class' => 'object-contain mx-auto']) ?>
                <?php } ?>

                <?php if ($attorney_group_section_design_two__first_text || $attorney_group_section_design_two__second_text) { ?>
                    <div class="py-11 font-bold " style="background-color: <?php echo $attorney_group_section_design_two__section_bg ?: ''  ?> ;">
                        <div class=" text-3xl md:text-2xl sm:text-lg text-[#C6C5C5] font-second">
                            <?php echo $attorney_group_section_design_two__first_text ?>
                        </div>
                        <div class="text-[75px] md:text-5xl sm:text-4xl text-white ">
                            <?php echo $attorney_group_section_design_two__second_text ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php if ($attorney_group_section_design_two__form_select && $attorney_group_section_design_two__form_select['0'] || $attorney_group_section_design_two__form_text) { ?>
                <div class="col-span-4 xl:col-span-5  mdt:col-span-10 mdt:col-start-2 w-full pt-10 pb-8 mdt:p-4" style="background-color: <?php echo $attorney_group_section_design_two__form_bg ?: ''  ?> ;">
                    <div class="attorney-group__form ">
                        <?php echo $attorney_group_section_design_two__form_select ? do_shortcode('[contact-form-7 id="' . $attorney_group_section_design_two__form_select['0'] . '" title="Contact form"]') : '' ?>
                    </div>
                    <div class="flex justify-center items-center w-4/5 mx-auto text-white">
                        <?php echo $attorney_group_section_design_two__form_text ?>
                    </div>

                </div>
            <?php } ?>

        </div>
    </section>

<?php }
if (!get_fields()) echo 'Fill block with content';
