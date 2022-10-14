<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");
    return;
} else {
    $reviews_design_one_select = get_field('reviews_design_one_select');
    $reviews_design_one_bg = get_field('reviews_design_one_bg');
    $reviews_design_one_title = get_field('reviews_design_one_title');

?>

    <div class="relative">
        <?php if ($reviews_design_one_bg) {
            echo wp_get_attachment_image($reviews_design_one_bg, 'full', '', ['class' => 'absolute left-0 top-0 w-full h-full object-cover']);
        } ?>
        <div class="container relative pb-16">
            <?php if ($reviews_design_one_title) { ?>
                <h2 class="text-headings_second font-medium text-4xl text-center leading-tight pb-4 pt-10 md:pt-6"><?php echo $reviews_design_one_title ?></h2>
                <hr class="bg-accent border-none mx-auto h-1 w-[100px] max-w-full mb-6">
            <?php } ?>
            <div class="google_reviews_slider glide">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides pb-4 pt-4">
                        <?php foreach ($reviews_design_one_select as $review_design_v1_item) {
                            $revies_design_one_logo = get_field('revies_design_one_logo', $review_design_v1_item);
                            $reviews_design_one_stars = get_field('reviews_design_one_stars', $review_design_v1_item);
                        ?>
                            <div class="glide__slide">
                                <div class=" shadow-reviews slider_item flex-1 bg-white relative pt-9 px-8 pb-16 w-11/12 m-auto mt-14 ">
                                    <svg class="absolute -left-2 -top-12 w-12" xmlns="http://www.w3.org/2000/svg" width="99.679" height="76.16" viewBox="0 0 99.679 76.16">
                                        <path class="fill-accent" id="quote_1_" data-name="quote (1)" d="M12.06,75.2C6.46,69.04,3.1,62.32,3.1,51.12c0-19.6,14-36.96,33.6-45.92l5.04,7.28C23.26,22.56,19.34,35.44,18.22,43.84a16.606,16.606,0,0,1,10.64-1.68c10.08,1.12,17.92,8.96,17.92,19.6a22.1,22.1,0,0,1-5.6,14,18.574,18.574,0,0,1-14,5.6A22.025,22.025,0,0,1,12.06,75.2Zm56,0c-5.6-6.16-8.96-12.88-8.96-24.08,0-19.6,14-36.96,33.6-45.92l5.04,7.28C79.26,22.56,75.34,35.44,74.22,43.84c2.8-1.68,10.64-1.68,10.64-1.68s17.92,8.96,17.92,19.6a22.1,22.1,0,0,1-5.6,14c-3.36,3.92-8.4,5.6-14,5.6A22.025,22.025,0,0,1,68.06,75.2Z" transform="translate(-3.1 -5.2)" fill="#69be26" />
                                    </svg>
                                    <div class="text-lg leading-tight mb-6 text-kennyGrayText">
                                        <?php echo apply_filters('the_content', get_post($review_design_v1_item)->post_content); ?>
                                    </div>
                                    <p class="font-bold text-kennyGrayText"><?php echo get_the_title($review_design_v1_item) ?></p>
                                    <div class="flex items-center">
                                        <?php if ($revies_design_one_logo) {
                                            echo wp_get_attachment_image($revies_design_one_logo, 'full', '', ['class' => 'absolute left-5 bottom-2 w-24']);
                                        } ?>
                                        <?php if ($reviews_design_one_stars) { ?>
                                            <div class="flex absolute right-5 bottom-4">
                                                <?php
                                                for ($i = 1; $i <= $reviews_design_one_stars; $i++) { ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27.857" viewBox="0 0 30 27.857">
                                                        <path id="Icon_ionic-ios-star" data-name="Icon ionic-ios-star" d="M31.112,13.018h-9.85L18.268,4.085a1.085,1.085,0,0,0-2.036,0l-2.993,8.933H3.321A1.075,1.075,0,0,0,2.25,14.089a.787.787,0,0,0,.02.181,1.029,1.029,0,0,0,.449.757l8.1,5.705L7.708,29.766a1.075,1.075,0,0,0,.368,1.205,1.036,1.036,0,0,0,.6.261,1.313,1.313,0,0,0,.67-.241l7.9-5.632,7.9,5.632a1.255,1.255,0,0,0,.67.241.962.962,0,0,0,.6-.261,1.061,1.061,0,0,0,.368-1.205l-3.107-9.033,8.029-5.759.194-.167a1.123,1.123,0,0,0,.348-.717A1.134,1.134,0,0,0,31.112,13.018Z" transform="translate(-2.25 -3.375)" fill="#fabf13" />
                                                    </svg>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>

                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }
