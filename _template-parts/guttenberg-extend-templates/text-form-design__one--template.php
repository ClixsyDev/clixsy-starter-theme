<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $text_form_design_one__title = get_field('text_form_design_one__title');
    $text_form_design_one__citation = get_field('text_form_design_one__citation');
    $text_form_design_one__author = get_field('text_form_design_one__author');
    $text_form_design_one__icon = get_field('text_form_design_one__icon');
    $text_form_design_one__description = get_field('text_form_design_one__description');
    $text_form_design_one__form_title = get_field('text_form_design_one__form_title');
    $text_form_design_one__form_select = get_field('text_form_design_one__form_select');
    $text_form_design_one__button = get_field('text_form_design_one__button');
    $text_form_design_one__form_remove_citate_icon = get_field('text_form_design_one__remove_citate_icon');

?>
    <div class="pt-24 lg:pt-12 lg:pb-24 xs:pt-24 overflow-hidden relative">
        <div class="container">
            <?php if ($text_form_design_one__title) { ?>
                <h2 class="font-avenir text-headings_second font-medium text-5xl m-auto text-center leading-tight pb-4 xs:text-2xl"><?php echo $text_form_design_one__title ?></h2>
            <?php } ?>
            <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
            <div class="flex mt-16 gap-16 mdt:flex-col mdt:gap-7 md:mt-12">
                <div class="w-20/24 m-auto">

                    <div class="relative mdt:mb-10">
                        <span class="absolute -left-[9%] -top-4">
                            <?php if ($text_form_design_one__form_remove_citate_icon) { ?>
                                <svg class=" w-12 " xmlns="http://www.w3.org/2000/svg" width="99.679" height="76.159" viewBox="0 0 99.679 76.159">
                                    <path class="fill-accent" id="quote_1_" data-name="quote (1)" d="M12.06,75.2C6.46,69.04,3.1,62.32,3.1,51.12c0-19.6,14-36.96,33.6-45.92l5.04,7.28C23.26,22.56,19.34,35.44,18.22,43.84a16.606,16.606,0,0,1,10.64-1.68c10.08,1.12,17.92,8.96,17.92,19.6a22.1,22.1,0,0,1-5.6,14,18.574,18.574,0,0,1-14,5.6A22.025,22.025,0,0,1,12.06,75.2Zm56,0c-5.6-6.16-8.96-12.88-8.96-24.08,0-19.6,14-36.96,33.6-45.92l5.04,7.28C79.26,22.56,75.34,35.44,74.22,43.84c2.8-1.68,10.64-1.68,10.64-1.68s17.92,8.96,17.92,19.6a22.1,22.1,0,0,1-5.6,14c-3.36,3.92-8.4,5.6-14,5.6A22.025,22.025,0,0,1,68.06,75.2Z" transform="translate(-3.1 -5.2)" fill="#69be26" />
                                </svg>
                            <?php } ?>

                        </span>
                        <?php if ($text_form_design_one__citation) { ?>
                            <div class="text-headings_second font-avenir lg:pl-8 sm:pl-0 prose-xl lg:prose-lg leading-snug">
                                <?php echo $text_form_design_one__citation ?>
                            </div>
                        <?php } ?>
                        <?php if ($text_form_design_one__author) { ?>
                            <p class="text-xl text-end font-avenir font-bold mb-6"><?php echo $text_form_design_one__author ?></p>
                        <?php } ?>
                    </div>
                    <div class="py-5 relative ">
                        <span class="bg-smoke w-[280%] -left-[40%] top-0 h-full -z-[1] absolute mdt:h-[320%] block"></span>
                        <div class="<?php echo $text_form_design_one__icon ? 'gap-6 lg:gap-3' : '' ?>  flex items-center ">
                            <div>
                                <?php if ($text_form_design_one__icon) {
                                    echo wp_get_attachment_image($text_form_design_one__icon, 'full', '', ['class' => 'xxl:w-20/24']);
                                } ?>
                            </div>
                            <?php if ($text_form_design_one__description) { ?>
                                <div class="<?php echo $text_form_design_one__icon ? 'w-16/24' : 'w-20/24' ?>">
                                    <div class="font-avenir font-bold text-white text-2xl lg:text-lg span-change_color_1 leading-snug">
                                        <?php echo $text_form_design_one__description ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if ($text_form_design_one__button && $text_form_design_one__button['url']) { ?>
                        <div class="text-center mt-12 lg:mt-8">
                            <a href="<?php echo $text_form_design_one__button['url'] ?>" class="font-avenir bg-accent uppercase text-white font-bold text-2xl py-2 px-20 rounded-full lg:px-14 lg:py-3 lg:text-xl xs:text-2xl"><?php echo $text_form_design_one__button['title'] ?></a>
                        </div>
                    <?php } ?>
                </div>

                <?php if ($text_form_design_one__form_select) { ?>
                    <div class="w-[515px] bg-headings_second z-[1] mdt:m-auto mdt:w-19/24 md:w-full text-white  p-11">
                    <?php if ($text_form_design_one__form_title) { ?>
                            <h2 class="text-white  text-3xl md:text-2xl mb-6 text-center process_text_design__one">
                                <?php echo $text_form_design_one__form_title ?>
                            </h2>
                        <?php } ?>
                        <?php if ($text_form_design_one__description) { ?>
                            <div class="text-white text-lg mb-6 text-center font-noto_serif">
                                <?php echo $text_form_design_one__description ?>
                            </div>
                        <?php } ?>
                        <?php echo $text_form_design_one__form_select ? do_shortcode('[contact-form-7 id="' . $text_form_design_one__form_select['0'] . '" title="Contact form"]') : '' ?>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

<?php
    if (!get_fields()) echo 'Fill block with content';
}
