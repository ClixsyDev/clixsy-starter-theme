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
    $welcome_banner_contact_design_three__title_color = get_field('welcome_banner_contact_design_three__title_color');
    $welcome_banner_contact_design_three__image = get_field('welcome_banner_contact_design_three__image');
    $welcome_banner_contact_design_three__attorney_link = get_field('welcome_banner_contact_design_three__attorney_link');
    $welcome_banner_contact_design_three__attorney_position = get_field('welcome_banner_contact_design_three__attorney_position');
    $welcome_banner_contact_design_three__form_bg = get_field('welcome_banner_contact_design_three__form_bg');
    $welcome_banner_contact_design_three__form_subtitle = get_field('welcome_banner_contact_design_three__form_subtitle');
    $welcome_banner_contact_design_three__form_title = get_field('welcome_banner_contact_design_three__form_title');
    $welcome_banner_contact_design_three__dots = get_field('welcome_banner_contact_design_three__dots');
    $welcome_banner_contact_design_three__form_select = get_field('welcome_banner_contact_design_three__form_select');
    $welcome_banner_contact_design_three__form_description = get_field('welcome_banner_contact_design_three__form_description');
?>
    <!-- welcome-banner-contact-design__three.php -->
    <section class="bg-cover overflow-hidden" style="
    background-color: <?php echo $welcome_banner_contact_design_three__bg_color ?: ''  ?>; 
    background-image:url('<?php echo !empty($welcome_banner_contact_design_three__block_bg) ? wp_get_attachment_image_url($welcome_banner_contact_design_three__block_bg['ID'], 'full') : ''; ?>');">
        <div class="relative">
            <div class="container">
                <?php if ($welcome_banner_contact_design_three__title) { ?>
                    <h1 class="text-<?php echo $welcome_banner_contact_design_three__title_color ?: 'white' ?> font-bold text-center font-third capitalize md:!text-[36px] text-5xl py-9 md:leading-snug"><?php echo $welcome_banner_contact_design_three__title ?></h1>
                <?php } ?>
                <div class="flex items-end lg:flex-col-reverse">
                    <div class="w-7/12 xl1240:w-6/12 lg:w-10/12 lg:m-auto sm:w-full sm:hidden relative">
                        <?php if ($welcome_banner_contact_design_three__attorney_link) { ?>
                            <a href="<?php echo $welcome_banner_contact_design_three__attorney_link['url'] ?>"> <?php echo wp_get_attachment_image($welcome_banner_contact_design_three__image, 'full', '', ['class' => 'relative z-10 bottom-[-1px]']) ?></a>
                        <?php } else { ?>
                            <?php echo wp_get_attachment_image($welcome_banner_contact_design_three__image, 'full', '', ['class' => 'relative z-10 bottom-[-1px]']) ?>
                        <?php } ?>
                        <?php if ($welcome_banner_contact_design_three__attorney_link) { ?>
                            <a href="<?php echo $welcome_banner_contact_design_three__attorney_link['url'] ?>" class="absolute z-10 bottom-[10%] right-[10%] rounded-2xl bg-[#707070] h-20 w-56 text-white flex flex-col justify-center items-center">
                                <div class="font-third font-bold text-2xl ">
                                    <?php echo $welcome_banner_contact_design_three__attorney_link['title'] ?>
                                </div>
                                <?php if ($welcome_banner_contact_design_three__attorney_position) { ?>
                                    <div class="font-main font-normal text-base ">
                                        <?php echo $welcome_banner_contact_design_three__attorney_position ?>
                                    </div>
                                <?php } ?>
                            </a>
                        <?php } ?>
                    </div>
                    <?php if ($welcome_banner_contact_design_three__form_select) { ?>
                        <div class="w-5/12 xl1240:w-6/12 mdt:w-20/24 pb-7 lg:w-9/12 lg:m-auto sm:w-full">
                            <div class="form z-10 relative banner-form big-auto-footer-form px-10 py-7 md:!p-5 !mb-0 !border-[5px] !border-white" style="background-color: <?php echo $welcome_banner_contact_design_three__form_bg ?: ''  ?> ;">
                                <div class="text-white font-thin text-2xl 2xl:!text-[20px] mdt:!pb-3 xl:!text-lg xs:!text-base"><?php echo $welcome_banner_contact_design_three__form_subtitle ?></div>
                                <div class="text-white font-bold font-second uppercase leading-[1] pb-5 text-6xl 2xl:!text-[50px] xs:!text-3xl "><?php echo $welcome_banner_contact_design_three__form_title ?></div>
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
                <?php if (in_array('Yes', $welcome_banner_contact_design_three__dots)) { ?>
                    <div class="dots-bg h-24 absolute w-full bottom-0 left-0 xl:h-16 xs:h-12"></div>
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
