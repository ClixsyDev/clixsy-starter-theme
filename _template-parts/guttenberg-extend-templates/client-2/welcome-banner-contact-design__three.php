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
    $welcome_banner_contact_design_three__video_id = get_field('welcome_banner_contact_design_three__video_id');
    $welcome_banner_contact_design_three__video_image = get_field('welcome_banner_contact_design_three__video_image');
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
                <div class="flex lg:flex-col-reverse <?php echo $welcome_banner_contact_design_three__video_id ? "items-center gap-10 md:gap-5" : "items-end" ?>">
                    <div class="w-7/12 xl1240:w-6/12 lg:w-10/12 lg:m-auto sm:w-full relative <?php echo $welcome_banner_contact_design_three__video_id ? "" : "sm:hidden" ?>">
                        <?php if ($welcome_banner_contact_design_three__video_id) { 
                            // Check if 'maxresdefault.jpg' exists
                            $headers = @get_headers("http://img.youtube.com/vi/{$welcome_banner_contact_design_three__video_id}/maxresdefault.jpg");

                            if ($headers && strpos($headers[0], '200 OK')) {
                                $imageUrl = "http://img.youtube.com/vi/{$welcome_banner_contact_design_three__video_id}/maxresdefault.jpg";
                            } else {
                                $imageUrl = "http://img.youtube.com/vi/{$welcome_banner_contact_design_three__video_id}/hqdefault.jpg";
                            }    
                        ?>
                            <div data-yt-url="1" class="bg-center shadow-bannerForm hover:cursor-pointer relative h-[15vw] lg:h-[380px] sm:h-auto min-h-[510px] sm:min-h-[190px] max-h-72 bg-cover lg:mb-10 fireTestimonialModal" style="background-image: url('<?php echo $welcome_banner_contact_design_three__video_image ?>');">
                                <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    <svg width="100" height="67" viewBox="0 0 100 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="100" height="66.7683" rx="18" fill="black" fill-opacity="0.65"/>
                                        <path d="M65.3728 33.662L42.8229 48.483L42.5767 19.2224L65.3728 33.662Z" fill="white"/>
                                        <path d="M65.3728 33.662L42.8229 48.483L42.5767 19.2224L65.3728 33.662Z" fill="white"/>
                                    </svg>
                                </span>
                            </div>
                        <?php } ?>
                        <?php if (!$welcome_banner_contact_design_three__video_id) { ?>
                            <?php if ($welcome_banner_contact_design_three__attorney_link) { ?>
                                <a href="<?php echo $welcome_banner_contact_design_three__attorney_link['url'] ?>"> <?php echo wp_get_attachment_image($welcome_banner_contact_design_three__image, 'full', '', ['class' => 'relative z-10 bottom-[-1px]']) ?></a>
                            <?php } else { ?>
                                <?php echo wp_get_attachment_image($welcome_banner_contact_design_three__image, 'full', '', ['class' => 'relative z-10 bottom-[-1px]']) ?>
                            <?php } ?>
                        <?php } ?>
                        <?php if (!$welcome_banner_contact_design_three__video_id) { ?>
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

    <?php if ($welcome_banner_contact_design_three__video_id) { ?>
        <div class="dialog-container" id="testimonialDialog" aria-hidden="true">
            <div class="dialog-overlay" data-a11y-dialog-hide></div>
            <div class="dialog-content">
                <button data-a11y-dialog-hide class="dialog-close" aria-label="Close this dialog window">
                    &times;
                </button>
                <div class="hytPlayerWrapOuter w-full h-full hytPlayerWrapOuter-1">
                    <div class="hytPlayerWrap w-full h-full">
                        <iframe class="h-full w-full aspect-video modal__iframe-video  data-youtube-key-1" src="https://www.youtube.com/embed/<?php echo $welcome_banner_contact_design_three__video_id ?>?rel=0&enablejsapi=1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
