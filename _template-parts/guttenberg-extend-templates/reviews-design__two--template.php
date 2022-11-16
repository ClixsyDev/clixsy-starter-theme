<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $reviews_design_two_select = get_field('reviews_design_two_select');
    $reviews_design_two_title = get_field('reviews_design_two_title');
    $reviews_design_two_link = get_field('reviews_design_two_link');
    $reviews_design_two_bg = get_field('reviews_design_two_bg');
?>
    <section class="py-20 lg:py-16 bg-cover lg:bg-contain lg:bg-repeat sm:py-9" style="background-image: url('<?php echo $reviews_design_two_bg ? wp_get_attachment_image_url($reviews_design_two_bg, 'full') : '' ?>')">
        <div class="container">
            <?php if ($reviews_design_two_title) { ?>
                <h2 class="heading_h2 pb-4"><?php echo $reviews_design_two_title ?></h2>
                <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
            <?php } ?>
            <div class="testmonialsSlider glide relative">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides overflow-visible">
                        <?php foreach ($reviews_design_two_select as $review_item) {
                            $reviews_design_two_stars = get_field('reviews_design_one_stars', $review_item);

                        ?>
                            <div class="glide__slide pt-3">
                                <div class="pt-16 pb-6 px-10 bg-white shadow-reviews w-9/24 m-auto relative xl:w-16/24 md:w-20/24 xs:px-6">
                                    <div class="absolute -right-[10px] top-0">
                                        <div class="w-9/12 md:w-14/24">
                                            <svg class="block w-16 sm:w-7 sm:h-auto" xmlns="http://www.w3.org/2000/svg" width="100.993" height="77.888" viewBox="0 0 100.993 77.888">
                                                <path class="fill-accent" id="quote_1_" data-name="quote (1)" d="M12.06,75.2C6.46,69.04,3.1,62.32,3.1,51.12c0-19.6,14-36.96,33.6-45.92l5.04,7.28C23.26,22.56,19.34,35.44,18.22,43.84a16.606,16.606,0,0,1,10.64-1.68c10.08,1.12,17.92,8.96,17.92,19.6a22.1,22.1,0,0,1-5.6,14,18.574,18.574,0,0,1-14,5.6A22.025,22.025,0,0,1,12.06,75.2Zm56,0c-5.6-6.16-8.96-12.88-8.96-24.08,0-19.6,14-36.96,33.6-45.92l5.04,7.28C79.26,22.56,75.34,35.44,74.22,43.84c2.8-1.68,10.64-1.68,10.64-1.68s17.92,8.96,17.92,19.6a22.1,22.1,0,0,1-5.6,14c-3.36,3.92-8.4,5.6-14,5.6A22.025,22.025,0,0,1,68.06,75.2Z" transform="matrix(-1, 0.017, -0.017, -1, 104.184, 81.293)" fill="#69be26" />
                                            </svg>

                                        </div>


                                        <!-- <img class="w-9/12 md:w-14/24" src="<?= get_stylesheet_directory_uri() ?>/assets/img/slide-marks1.png"> -->
                                    </div>
                                    <div class="absolute -left-[6%] top-0">
                                        <svg class="block w-16 sm:w-7 sm:h-auto" xmlns="http://www.w3.org/2000/svg" width="99.679" height="76.159" viewBox="0 0 99.679 76.159">
                                            <path class="fill-accent" id="quote_1_" data-name="quote (1)" d="M12.06,75.2C6.46,69.04,3.1,62.32,3.1,51.12c0-19.6,14-36.96,33.6-45.92l5.04,7.28C23.26,22.56,19.34,35.44,18.22,43.84a16.606,16.606,0,0,1,10.64-1.68c10.08,1.12,17.92,8.96,17.92,19.6a22.1,22.1,0,0,1-5.6,14,18.574,18.574,0,0,1-14,5.6A22.025,22.025,0,0,1,12.06,75.2Zm56,0c-5.6-6.16-8.96-12.88-8.96-24.08,0-19.6,14-36.96,33.6-45.92l5.04,7.28C79.26,22.56,75.34,35.44,74.22,43.84c2.8-1.68,10.64-1.68,10.64-1.68s17.92,8.96,17.92,19.6a22.1,22.1,0,0,1-5.6,14c-3.36,3.92-8.4,5.6-14,5.6A22.025,22.025,0,0,1,68.06,75.2Z" transform="translate(-3.1 -5.2)" fill="#69be26" />
                                        </svg>
                                    </div>
                                    <div class="pb-14 text-lg leading-6 font-main font-normal">
                                        <?php echo apply_filters('the_content', get_post($review_item)->post_content); ?>
                                    </div>
                                    <?php if ($reviews_design_two_stars) { ?>
                                        <div class="flex justify-between">
                                            <div class="flex gap-0.5 items-center xs:items-center">
                                                <?php
                                                for ($i = 1; $i <= $reviews_design_two_stars; $i++) { ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 md:w-5" width="30" height="27.857" viewBox="0 0 30 27.857">
                                                        <path id="Icon_ionic-ios-star" data-name="Icon ionic-ios-star" d="M31.112,13.018h-9.85L18.268,4.085a1.085,1.085,0,0,0-2.036,0l-2.993,8.933H3.321A1.075,1.075,0,0,0,2.25,14.089a.787.787,0,0,0,.02.181,1.029,1.029,0,0,0,.449.757l8.1,5.705L7.708,29.766a1.075,1.075,0,0,0,.368,1.205,1.036,1.036,0,0,0,.6.261,1.313,1.313,0,0,0,.67-.241l7.9-5.632,7.9,5.632a1.255,1.255,0,0,0,.67.241.962.962,0,0,0,.6-.261,1.061,1.061,0,0,0,.368-1.205l-3.107-9.033,8.029-5.759.194-.167a1.123,1.123,0,0,0,.348-.717A1.134,1.134,0,0,0,31.112,13.018Z" transform="translate(-2.25 -3.375)" fill="#fabf13" />
                                                    </svg>
                                                <?php } ?>
                                            </div>
                                            <p class=" font-second text-base text-black">- <?php echo get_the_title($review_item) ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="text-center relative mt-10 xs:mt-6">
                        <div class="glide__arrows absolute right-[60%] top-11% w-max lg:right-65% md:right-65%" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><img class="w-9/12" src="<?= get_stylesheet_directory_uri() ?>/assets/img/bottom-arrow-left.png"></button>
                        </div>
                        <div class="glide__bullets" data-glide-el="controls[nav]">
                            <?php for ($i = 1; $i <= count($reviews_design_two_select); $i++) { ?>
                                <button class="slider__bullet glide__bullet focus:border-none bg-smoke focus:bg-darkOrange hover:bg-darkOrange w-7 h-1.5 rounded-none xs:h-1 xs:w-6" data-glide-dir="=<?php echo $i - 1 ?>"></button>
                            <?php } ?>
                        </div>
                        <div class="glide__arrows absolute left-[60%] top-11% w-max lg:left-65% md:left-65% xs:left-65%" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;"><img class="w-9/12" src="<?= get_stylesheet_directory_uri() ?>/assets/img/bottom-arrow-right.png"></button>
                        </div>
                    </div>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left absolute top-36 left-25% xl:left-10% md:left-0 xs:top-[46%]" data-glide-dir="<"><img class="w-9/12 xs:h-5 xs:w-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/arrow-back.png"></button>
                    <button class="glide__arrow glide__arrow--right absolute top-36 right-25% xl:right-10% md:right-0 xs:top-[46%]" data-glide-dir="<"><img class="w-9/12 xs:h-5 xs:w-auto" src="<?= get_stylesheet_directory_uri() ?>/assets/img/arrow-next.png"></button>
                </div>
            </div>
            <?php if ($reviews_design_two_link) { ?>
                <div class="text-center mt-10 lg:mt-8">
                    <?php
                    Template::load('_template-parts/components/button.php', [
                        'link' => $reviews_design_two_link['url'],
                        'text' => __($reviews_design_two_link['title'], 'law'),
                        'text_hover' => false,
                        'classes' => 'btn_xl hover_headings uppercase max-w-[460px] center', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                    ]); ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php }
if (!get_fields()) echo 'Fill block with content';
