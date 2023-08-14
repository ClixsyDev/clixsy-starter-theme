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
                <h2 class="heading_h2 leading-relaxed text-black text-7xl text-center ml-72 lg:text-left lg:ml-0 lg:mb-[45%] mdt:mb-[65%] xs:mb-[45%] md:text-5xl"><?php echo $about_us__title ?></h2>
            <?php } ?>
            <div class="flex bg-smoke pb-8 px-9 gap-16 lg:gap-8 items-center max-h-96  2xl:pt-8 lg:flex-col lg:max-h-max lg:mb-8 md:gap-8 lg:p-0 lg:bg-inherit md:mb-0 xs:!gap-4">
                <div class="flex flex-col -mt-80 w-12/24 lg:-mt-[55%] mdt:-mt-[70%] leading-none lg:w-full xs:-mt-[42%]">
                    <?php if ($about_us__select_img) { ?>
                        <?php if ($about_us__image) { ?>
                            <?php echo wp_get_attachment_image($about_us__image, 'full', '', ['class' => '2xl:mx-auto']) ?>
                        <?php } ?>
                    <?php }
                    if ($about_us__video_id_repeater) { ?>
                            <div class="videoSlider glide">
                                <div class="glide__track z-[11] relative" data-glide-el="track">
                                    <div class="glide__slides">
                                        <?php foreach ($about_us__video_id_repeater as $item) { ?>
                                            <div class="glide__slide">
                                                <div data-yt-url="https://www.youtube.com/embed/<?php echo $item['video_id'] ?>?enablejsapi=1?rel=0" class="videoSlider glide relative mt-48 lg:mt-[15%] h-[15vw] lg:h-[380px] sm:h-auto min-h-[250px]  max-h-72 bg-cover fireTestimonialModal" data-a11y-dialog-show="testimonialDialog" style="background-image: url('http://img.youtube.com/vi/<?php echo $item['video_id'] ?>/maxresdefault.jpg');">
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
                                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                        <svg width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.334 13.2431C7.50555 13.0719 7.60254 12.8399 7.60386 12.5975C7.60517 12.3552 7.51069 12.1221 7.341 11.9491L3.066 7.66707L19.336 7.66707C19.5784 7.66707 19.8109 7.57078 19.9823 7.39937C20.1537 7.22796 20.25 6.99548 20.25 6.75307C20.25 6.51067 20.1537 6.27819 19.9823 6.10678C19.8109 5.93537 19.5784 5.83908 19.336 5.83908L3.073 5.83908L7.348 1.55307C7.51625 1.3793 7.60974 1.14653 7.60843 0.904648C7.60712 0.662767 7.51112 0.431023 7.341 0.259075C7.25604 0.175022 7.15535 0.108527 7.04469 0.0633888C6.93403 0.0182505 6.81556 -0.0046463 6.69605 -0.0039959C6.57654 -0.00334549 6.45833 0.0208378 6.34816 0.0671768C6.238 0.113516 6.13804 0.181103 6.054 0.266075L0.26 6.10208C0.180864 6.18666 0.116621 6.28404 0.0699997 6.39007C0.0225124 6.50128 -0.00132561 6.62116 0 6.74207C-0.000179291 6.98116 0.0931301 7.21085 0.26 7.38207L6.054 13.2181C6.13604 13.3044 6.23438 13.3736 6.34335 13.4216C6.45231 13.4696 6.56972 13.4955 6.68878 13.4979C6.80784 13.5002 6.92617 13.4789 7.03693 13.4351C7.14768 13.3914 7.24866 13.3261 7.334 13.2431Z" fill="#092557"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="glide__arrows ml-5 sm:ml-3 " data-glide-el="controls">
                                    <button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;">
                                        <svg width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.1521 0.258879C12.9805 0.430065 12.8835 0.662087 12.8822 0.904438C12.8809 1.14679 12.9754 1.37985 13.1451 1.55288L17.4201 5.83488H1.15008C0.907676 5.83488 0.675196 5.93117 0.503788 6.10258C0.33238 6.27399 0.236084 6.50647 0.236084 6.74888C0.236084 6.99129 0.33238 7.22377 0.503788 7.39517C0.675196 7.56658 0.907676 7.66288 1.15008 7.66288H17.4131L13.1381 11.9489C12.9698 12.1227 12.8763 12.3554 12.8777 12.5973C12.879 12.8392 12.975 13.0709 13.1451 13.2429C13.23 13.3269 13.3307 13.3934 13.4414 13.4386C13.5521 13.4837 13.6705 13.5066 13.79 13.5059C13.9095 13.5053 14.0278 13.4811 14.1379 13.4348C14.2481 13.3884 14.348 13.3209 14.4321 13.2359L20.2261 7.39988C20.3052 7.31529 20.3695 7.21792 20.4161 7.11188C20.4636 7.00067 20.4874 6.8808 20.4861 6.75988C20.4863 6.52079 20.393 6.2911 20.2261 6.11988L14.4321 0.283878C14.35 0.197565 14.2517 0.12839 14.1427 0.0803604C14.0338 0.032331 13.9164 0.0064032 13.7973 0.00407788C13.6782 0.00175256 13.5599 0.0230764 13.4492 0.0668144C13.3384 0.110552 13.2374 0.175835 13.1521 0.258879Z" fill="#092557"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                    <?php } ?>
                    <?php if ($about_us__attorney_subtitle || $about_us__attorney_title) { ?>
                        <div class=" py-7 px-8 text-center rounded-md shadow-siteWide sm:px-9 sm:py-4" style="background-color: <?php echo $about_us__attorney_block_color ?: ''  ?> ;">
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

            <!-- <iframe class="w-full aspect-video h-full" src="" id="testimonialVideoIdSelector" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe> -->

            
            <div class="hytPlayerWrapOuter w-full h-full">
                <div class="hytPlayerWrap w-full h-full">
                    <iframe class="h-full w-full aspect-video" src="" id="testimonialVideoIdSelector" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>

                    <!-- <iframe class="h-full w-full aspect-video" src="https://www.youtube.com/embed/AjWfY7SnMBI?rel=0&enablejsapi=1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy" frameborder="0"></iframe> -->
                </div>
            </div>



        </div>
    </div>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
