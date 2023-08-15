<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $about_us__title = get_field('about_us__title');
    $about_us__block_color = get_field('about_us__block_color');
    $about_us__video_id = get_field('about_us__video_id');
    $about_us__video_id_repeater = get_field('about_us__video_id_repeater');
    $about_us__select_img = get_field('about_us__select_img');
    $about_us__image = get_field('about_us__image');
    $about_us__attorney_subtitle = get_field('about_us__attorney_subtitle');
    $about_us__attorney_title = get_field('about_us__attorney_title');
    $about_us__attorney_block_color = get_field('about_us__attorney_block_color');
    $about_us__first_description = get_field('about_us__first_description');
    $phone = get_field('phone', 'options');
    $phone_link = get_field('phone_link', 'options');
    $about_us__second_description = get_field('about_us__second_description');
    $about_us__title_items = get_field('about_us__title_items');
    $about_us__items = get_field('about_us__items');
    $about_us__link = get_field('about_us__link');
    $about_us__background = get_field('about_us__background'); ?>




    <section class="pt-40  -mb-[4%] lg:-mb-[6%] 2xl:pt-44 md:pt-28 relative z-[1] lg:!pt-8">
        <div class="container lg:relative lg:z-10">
            <span class="absolute right-0 left-0 min-h-[71%] top-72 -z-10 w-full bg-smoke hidden lg:!block sm:min-h-[65%] xs:top-80 xs:min-h-[61%]"></span>
            <?php if ($about_us__title) { ?>
                <h2 class="font-second font-bold leading-relaxed text-black text-7xl text-center ml-72 lg:text-left lg:ml-0 lg:mb-[45%] mdt:mb-[65%] xs:mb-[45%] md:text-5xl"><?php echo $about_us__title ?></h2>
            <?php } ?>
            <div class="flex bg-smoke pb-8 px-9 gap-16 lg:gap-8 items-center max-h-96  2xl:pt-8 lg:flex-col lg:max-h-max lg:mb-8 md:gap-8 lg:p-0 lg:bg-inherit md:mb-0 xs:!gap-4">
                <div class="flex flex-col -mt-80 w-[46%] lg:-mt-[55%] mdt:-mt-[70%] leading-none lg:w-full xs:-mt-[42%]">
                    <?php if ($about_us__select_img) { ?>
                        <?php if ($about_us__image) { ?>
                            <?php echo wp_get_attachment_image($about_us__image, 'full', '', ['class' => '2xl:mx-auto']) ?>
                        <?php } ?>
                    <?php }
                    if ($about_us__video_id_repeater) { ?>
                        <div class="videoSlider glide">
                            <div class="glide__track z-[11] relative" data-glide-el="track">
                                <div class="glide__slides">
                                    <?php foreach ($about_us__video_id_repeater as $key => $item) { ?>
                                        <div class="glide__slide">
                                            <?php $video_id = $item['video_id'];

                                            // Check if 'maxresdefault.jpg' exists
                                            $headers = @get_headers("http://img.youtube.com/vi/{$video_id}/maxresdefault.jpg");

                                            if ($headers && strpos($headers[0], '200 OK')) {
                                                $imageUrl = "http://img.youtube.com/vi/{$video_id}/maxresdefault.jpg";
                                            } else {
                                                $imageUrl = "http://img.youtube.com/vi/{$video_id}/hqdefault.jpg";
                                            }
                                            ?>

                                            <div data-yt-url="<?php echo $key ?>" class="bg-center relative mt-40 lg:mt-[15%] h-[15vw] lg:h-[380px] sm:h-auto min-h-[360px] sm:min-h-[190px] max-h-72 bg-cover fireTestimonialModal" style="background-image: url('<?php echo $imageUrl; ?>');">
                                                <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="67.011" height="67.011" viewBox="0 0 67.011 67.011">
                                                        <path id="Icon_awesome-play-circle" data-name="Icon awesome-play-circle" d="M34.068.563A33.506,33.506,0,1,0,67.574,34.068,33.5,33.5,0,0,0,34.068.563ZM49.7,37.311,25.921,50.956A3.248,3.248,0,0,1,21.1,48.119v-28.1a3.25,3.25,0,0,1,4.823-2.837L49.7,31.636A3.253,3.253,0,0,1,49.7,37.311Z" transform="translate(-0.563 -0.563)" fill="rgba(255,255,255,0.84)"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="glide__arrows mr-5 sm:mr-3" data-glide-el="controls">
                                <button class="text-white glide__arrow glide__arrow--left" data-glide-dir="<">
                                    < </button>
                            </div>
                            <div class="flex justify-center mt-3">
                                <div class="glide__bullets flex justify-center items-center gap-1" data-glide-el="controls[nav]">
                                    <?php for ($i = 1; $i <= count($about_us__video_id_repeater); $i++) { ?>
                                        <button class="slider__bullet glide__bullet" data-glide-dir="=<?php echo $i - 1 ?>"></button>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="glide__arrows ml-5 sm:ml-3" data-glide-el="controls">
                                <button class="text-white glide__arrow glide__arrow--right" data-glide-dir="&gt;">
                                    >
                                </button>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($about_us__attorney_subtitle || $about_us__attorney_title) { ?>
                        <div class="pb-7 pt-12 -mt-7 px-8 text-center rounded-md shadow-siteWide sm:px-9 sm:py-4" style="background-color: <?php echo $about_us__attorney_block_color ?: ''  ?> ;">
                            <?php if ($about_us__attorney_subtitle) { ?>
                                <p class=" text-black font-third font-bold text-5xl 2xl:!text-4xl xl:!text-3xl lg:!text-5xl mdt:!text-4xl xs:!text-xl  "><?php echo $about_us__attorney_subtitle ?></p>
                            <?php } ?>
                            <?php if ($about_us__attorney_title) { ?>
                                <h3 class=" font-second font-bold text-white text-12xl 2xl:text-10xl xl:text-[74px] mdt:text-10xl lg:text-12xl md:text-8xl xs:text-[44px] "><?php echo $about_us__attorney_title ?></h3>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <?php if ($about_us__first_description) { ?>
                    <div class="w-12/24 mt-10 lg:w-full lg:mt-4">
                        <div class="font-main text-xl pb-12 font-light text-white lg:!text-xl lg:!pb-4 leading-tight">
                            <?php echo $about_us__first_description ?>
                        </div>
                        <?php if ($phone && $phone_link) { ?>
                            <a href="tel:<?php echo $phone_link ?>" class="text-white text-6xl font-second font-bold lg:text-center xs:!text-5xl"> <?php echo $phone ?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section style="background-image: url('<?php echo $about_us__background ?>');background-size: cover;" class="pb-10 w-full">

        <div class="container pt-[6%]">
            <?php if ($about_us__second_description || $about_us__title_items || $about_us__items || $about_us__link) { ?>
                <div class="flex gap-16 lg:flex-col-reverse justify-center">
                    <div class="flex flex-col gap-20 w-1/2 lg:w-full lg:m-auto lg:items-center lg:gap-10">
                        <?php if ($about_us__second_description) { ?>
                            <div class="font-main font-normal text-xl lg:mt-3 sm:!text-base"><?php echo $about_us__second_description ?></div>
                        <?php } ?>
                        <?php if ($about_us__link && $about_us__link['url']) { ?>
                            <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => $about_us__link['url'],
                                'text' => __($about_us__link['title'], 'law'),
                                'text_hover' => false,
                                'classes' => 'btn-smaller hover_accent sm:mx-auto', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                            ]); ?>
                        <?php } ?>
                    </div>
                    <?php if ($about_us__items || $about_us__title_items) { ?>
                        <div class="shadow-siteWide bg-white w-2/6 px-12 xl:px-8 pt-9 pb-20 xl:pb-9 h-max lg:hidden">
                            <?php if ($about_us__title_items) { ?>
                                <h3 class="font-second text-3xl text-headings pb-16 sm:pb-8 "><?php echo $about_us__title_items ?></h3>
                            <?php } ?>
                            <?php if ($about_us__items) { ?>
                                <div class="flex flex-col gap-8">
                                    <?php foreach ($about_us__items as $item) { ?>
                                        <?php if ($item['title'] || $item['icons']) { ?>
                                            <div class="flex gap-5 items-center">
                                                <?php if ($item['icons']) { ?>
                                                    <div class="min-w-[66px]">
                                                        <?php echo wp_get_attachment_image($item['icons'], 'full', '', ['class' => 'm-auto']) ?>
                                                    </div>
                                                <?php } ?>
                                                <?php if ($item['title']) { ?>
                                                    <h4 class="font-third text-3xl xl:text-2xl font-black sm:!text-xl"><?php echo $item['title'] ?></h4>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>



    <div class="dialog-container" id="testimonialDialog" aria-hidden="true">
        <div class="dialog-overlay" data-a11y-dialog-hide></div>
        <div class="dialog-content">




            <button data-a11y-dialog-hide class="dialog-close" aria-label="Close this dialog window">
                &times;
            </button>

            <?php foreach ($about_us__video_id_repeater as $key => $item) { ?>

                <div class="hytPlayerWrapOuter w-full h-full hytPlayerWrapOuter-<?php echo $key ?>">
                    <div class="hytPlayerWrap w-full h-full">
                        <!-- <iframe class="h-full w-full aspect-video" src="" id="testimonialVideoIdSelector" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe> -->


                        <iframe class="h-full w-full aspect-video modal__iframe-video  data-youtube-key-<?php echo $key ?>" src="https://www.youtube.com/embed/<?php echo $item['video_id'] ?>?rel=0&enablejsapi=1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen frameborder="0"></iframe>

                        <!-- <iframe class="h-full w-full aspect-video" src="https://www.youtube.com/embed/AjWfY7SnMBI?rel=0&enablejsapi=1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy" frameborder="0"></iframe> -->
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
