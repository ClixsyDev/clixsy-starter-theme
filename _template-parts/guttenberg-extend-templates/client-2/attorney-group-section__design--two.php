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


?>
    <section class="container mt-40 mb-40  text-white">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-8 text-center bg-white">
                <?php if ($attorney_group_section_design_two__image) { ?>
                    <?php echo wp_get_attachment_image($attorney_group_section_design_two__image, 'full', '', ['class' => 'object-contain mx-auto']) ?>
                <?php } ?>

                <?php if ($attorney_group_section_design_two__first_text || $attorney_group_section_design_two__second_text) { ?>
                    <div class="py-11 font-bold" style="background-color: <?php echo $attorney_group_section_design_two__section_bg ?: ''  ?> ;">
                        <div class=" text-3xl text-[#C6C5C5]">
                            <?php echo $attorney_group_section_design_two__first_text ?>
                        </div>
                        <div class=" text-[75px]">
                            <?php echo $attorney_group_section_design_two__second_text ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php if ($attorney_group_section_design_two__form_select && $attorney_group_section_design_two__form_select['0']) { ?>
                <div class="col-span-4 w-full pt-10 pb-8" style="background-color: <?php echo $attorney_group_section_design_two__form_bg ?: ''  ?> ;">
                    <div class="attorney-group__form">
                        <?php echo $attorney_group_section_design_two__form_select ? do_shortcode('[contact-form-7 id="' . $attorney_group_section_design_two__form_select['0'] . '" title="Contact form"]') : '' ?>
                    </div>
                </div>
            <?php } ?>

        </div>
    </section>

<?php }
if (!get_fields()) echo 'Fill block with content';
