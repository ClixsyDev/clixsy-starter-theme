<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $welcome_banner_contact_design_three__bg_color = get_field('welcome_banner_contact_design_three__bg');
    $welcome_banner_contact_design_three__block_bg = get_field('welcome_banner_contact_design_three__block_bg');
    $welcome_banner_contact_design_three__title = get_field('welcome_banner_contact_design_three__title');
    $welcome_banner_contact_design_three__image = get_field('welcome_banner_contact_design_three__image');
    $welcome_banner_contact_design_three__form_bg = get_field('welcome_banner_contact_design_three__form_bg');
    $welcome_banner_contact_design_three__form_subtitle = get_field('welcome_banner_contact_design_three__form_subtitle');
    $welcome_banner_contact_design_three__form_title = get_field('welcome_banner_contact_design_three__form_title');
    $welcome_banner_contact_design_three__form_select = get_field('welcome_banner_contact_design_three__form_select');
    $welcome_banner_contact_design_three__form_description = get_field('welcome_banner_contact_design_three__form_description');
?>
    <!-- welcome-banner-contact-design__three.php -->
    <section class="bg-cover" style="
    background-color: <?php echo $welcome_banner_contact_design_three__bg_color ?: ''  ?>; 
    background-image:url('<?php echo !empty($welcome_banner_contact_design_three__block_bg) ? wp_get_attachment_image_url($welcome_banner_contact_design_three__block_bg['ID'], 'full') : ''; ?>');">
        <div class="container">
            <?php if ($welcome_banner_contact_design_three__title) { ?>
                <h1 class="font-bold text-center font-second md:!text-[36px] text-5xl text-black pt-6 pb-6  md:leading-snug"><?php echo $welcome_banner_contact_design_three__title ?></h1>
            <?php } ?>
            <div class="flex items-end lg:flex-col-reverse">
                <div class="w-7/12 lg:w-10/12 lg:m-auto sm:w-full">
                    <?php if ($welcome_banner_contact_design_three__image) { ?>
                        <?php echo wp_get_attachment_image($welcome_banner_contact_design_three__image, 'full', '', ['class' => 'relative bottom-[-1px]']) ?>
                    <?php } ?>
                </div>
                <?php if ($welcome_banner_contact_design_three__form_select) { ?>
                    <div class="w-5/12 mdt:w-20/24 pb-5 lg:w-9/12 lg:m-auto sm:w-full">
                        <div class="form px-10 py-7 md:!p-5" style="background-color: <?php echo $welcome_banner_contact_design_three__form_bg ?: ''  ?> ;">
                            <?php echo $welcome_banner_contact_design_three__form_select ? do_shortcode('[contact-form-7 id="' . $welcome_banner_contact_design_three__form_select['0'] . '" title=""]') : '' ?>
                            <?php
                            Template::load('_template-parts/components/thank-you-message.php', [
                                'classes_disclaimer' => 'text-white',
                                'classes_thankyou' => 'text-white'
                            ]); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="bg-[#393939] py-2">
            <div class="container">
                <?php if ($welcome_banner_contact_design_three__form_description) { ?>
                    <div class="font-main text-white text-sm pt-3 pb-3">
                        <?php echo $welcome_banner_contact_design_three__form_description ?>
                    </div>
                <?php } ?>
            </div>
            <div class="merits_inner_block">
                <?php
                $allowed_blocks = array('acf/merits');
                // Echo out our JSX InnerBlocks compoennt for the editor.
                echo '<InnerBlocks allowedBlocks="' . esc_attr(wp_json_encode($allowed_blocks)) . '" templateLock="false" />';
                ?>
            </div>
        </div>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
