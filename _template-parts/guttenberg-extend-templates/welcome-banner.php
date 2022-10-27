<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $bg_image = get_field('welcome_banner_background_image');
    $bg_image_with_attorney = get_field('welcome_banner_attorney_image');
    $bg_image_with_attorney_mobile = get_field('welcome_banner_attorney_image_mobile');
    $text_line_1 = get_field('welcome_banner_banner_text_line_1');
    $text_line_2 = get_field('welcome_banner_banner_text_line_2');
    $text_line_3 = get_field('welcome_banner_banner_text_line_3');
    $button = get_field('welcome_banner_button');
    $wecome_banner_button_text = get_field('welcome_banner_button_text');
    $welcome_banner_company_logo = get_field('welcome_banner_company_logo');

?>
    <div class="welcome_banner relative h-[780px] 2xl:h-[600px] lg:h-[427px] mdt:h-auto sm:h-[486px] md:overflow-hidden">
        <?php if ($welcome_banner_company_logo) { ?>
            <div class="absolute left-1/2 -translate-x-1/2 w-full max-w-[1920px] h-full z-10">
                <img src="<?= wp_get_attachment_image_url($welcome_banner_company_logo, 'full') ?>" class="absolute left-9 bottom-9 w-[143px] h-auto object-cover z-10 fhd:w-20 md:hidden" alt="">
                
            </div>
        <?php } ?>
        <img src="<?= wp_get_attachment_image_url($bg_image, 'full') ?>" class="absolute left-0 top-0 w-full h-full object-cover" alt="">
        <div class="container relative z-10 flex flex-col h-full justify-center items-end  mdt:items-center mdt:p-0">
            <div class="flex flex-col items-center xl: mb-6 mdt:mb-0 mdt:w-[496px] mdt:bg-white/75 mdt:px-6 mdt:py-8 mdt:absolute mdt:left-1/2 mdt:bottom-10 mdt:-translate-x-1/2 z-10 md:bottom-2 sm:w-10/12">
                <h1 class="flex flex-col mb-16 items-center text-headings_second lg:mb-10 lg:px-3 mdt:mb-6 sm:mb-4">
                    <?php if ($text_line_1) { ?>
                        <div class="font-second relative text-3xl leading-tight 
                        before:block before:absolute before:bg-accent before:right-full before:w-40 before:h-1 before:top-1/2 before:mr-4
                        after:block after:absolute after:bg-accent after:left-full after:w-40 after:h-1 after:top-1/2 after:ml-4
                        2xl:after:w-24 2xl:before:w-24
                        xl:text-2xl mdt:text-xl mdt:after:w-20 mdt:before:w-20 sm:text-sm sm:after:w-12 sm:before:w-12">
                            <?= $text_line_1 ?>
                        </div>
                    <?php } ?>
                    <?php if ($text_line_2) { ?>
                        <div class=" text-[150px] font-main font-bold leading-none my-3 xl:text-[100px] mdt:text-8xl mdt:my-1 sm:text-[53px]">
                            <?= $text_line_2 ?>
                        </div>
                    <?php } ?>
                    <?php if ($text_line_3) { ?>
                        <div class="font-second relative text-3xl leading-tight
                        before:block before:absolute before:bg-accent before:right-full before:w-40 before:h-1 before:top-1/2 before:mr-4
                        after:block after:absolute after:bg-accent after:left-full after:w-40 after:h-1 after:top-1/2 after:ml-4
                        2xl:after:w-24 2xl:before:w-24
                        xl:text-2xl mdt:text-xl mdt:after:w-20 mdt:before:w-20 sm:text-sm sm:after:w-12 sm:before:w-12">
                            <?= $text_line_3 ?>
                        </div>
                    <?php } ?>
                </h1>
                <?php if ($button) { ?>
                    <?php
                    Template::load('_template-parts/components/button.php', [
                        'link' => $button['url'],
                        'text' => __($button['title'], 'law'),
                        'text_hover' => $wecome_banner_button_text ?: false,
                        'classes' => 'btn_xl hover_headings', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                    ]); ?>
                <?php } ?>
                <svg class="absolute bottom-7 mdt:hidden" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="280.38" height="39.76" viewBox="0 0 280.38 39.76">
                    <defs>
                        <clipPath id="clip-path">
                            <rect width="150.101" height="32.21" fill="none" />
                        </clipPath>
                    </defs>
                    <g id="Group_221" data-name="Group 221" transform="translate(-524.82 -472.064)">
                        <g id="Repeat_Grid_2" data-name="Repeat Grid 2" transform="translate(524.82 479.614)" clip-path="url(#clip-path)">
                            <g transform="translate(-638 -764)">
                                <path id="Icon_ionic-ios-star" data-name="Icon ionic-ios-star" d="M25.9,11.276H17.826L15.374,3.957a.889.889,0,0,0-1.668,0l-2.452,7.319H3.128a.88.88,0,0,0-.878.878.645.645,0,0,0,.016.148.843.843,0,0,0,.368.62L9.267,17.6,6.722,25a.88.88,0,0,0,.3.988.849.849,0,0,0,.494.214,1.076,1.076,0,0,0,.549-.2l6.474-4.614L21.014,26a1.028,1.028,0,0,0,.549.2.788.788,0,0,0,.488-.214.87.87,0,0,0,.3-.988l-2.546-7.4,6.578-4.718.159-.137a.92.92,0,0,0,.285-.587A.929.929,0,0,0,25.9,11.276Z" transform="translate(635.75 760.625)" fill="#fabf13" />
                            </g>
                            <g transform="translate(-608 -764)">
                                <path id="Icon_ionic-ios-star-2" data-name="Icon ionic-ios-star" d="M25.9,11.276H17.826L15.374,3.957a.889.889,0,0,0-1.668,0l-2.452,7.319H3.128a.88.88,0,0,0-.878.878.645.645,0,0,0,.016.148.843.843,0,0,0,.368.62L9.267,17.6,6.722,25a.88.88,0,0,0,.3.988.849.849,0,0,0,.494.214,1.076,1.076,0,0,0,.549-.2l6.474-4.614L21.014,26a1.028,1.028,0,0,0,.549.2.788.788,0,0,0,.488-.214.87.87,0,0,0,.3-.988l-2.546-7.4,6.578-4.718.159-.137a.92.92,0,0,0,.285-.587A.929.929,0,0,0,25.9,11.276Z" transform="translate(635.75 760.625)" fill="#fabf13" />
                            </g>
                            <g transform="translate(-578 -764)">
                                <path id="Icon_ionic-ios-star-3" data-name="Icon ionic-ios-star" d="M25.9,11.276H17.826L15.374,3.957a.889.889,0,0,0-1.668,0l-2.452,7.319H3.128a.88.88,0,0,0-.878.878.645.645,0,0,0,.016.148.843.843,0,0,0,.368.62L9.267,17.6,6.722,25a.88.88,0,0,0,.3.988.849.849,0,0,0,.494.214,1.076,1.076,0,0,0,.549-.2l6.474-4.614L21.014,26a1.028,1.028,0,0,0,.549.2.788.788,0,0,0,.488-.214.87.87,0,0,0,.3-.988l-2.546-7.4,6.578-4.718.159-.137a.92.92,0,0,0,.285-.587A.929.929,0,0,0,25.9,11.276Z" transform="translate(635.75 760.625)" fill="#fabf13" />
                            </g>
                            <g transform="translate(-548 -764)">
                                <path id="Icon_ionic-ios-star-4" data-name="Icon ionic-ios-star" d="M25.9,11.276H17.826L15.374,3.957a.889.889,0,0,0-1.668,0l-2.452,7.319H3.128a.88.88,0,0,0-.878.878.645.645,0,0,0,.016.148.843.843,0,0,0,.368.62L9.267,17.6,6.722,25a.88.88,0,0,0,.3.988.849.849,0,0,0,.494.214,1.076,1.076,0,0,0,.549-.2l6.474-4.614L21.014,26a1.028,1.028,0,0,0,.549.2.788.788,0,0,0,.488-.214.87.87,0,0,0,.3-.988l-2.546-7.4,6.578-4.718.159-.137a.92.92,0,0,0,.285-.587A.929.929,0,0,0,25.9,11.276Z" transform="translate(635.75 760.625)" fill="#fabf13" />
                            </g>
                            <g transform="translate(-518 -764)">
                                <path id="Icon_ionic-ios-star-5" data-name="Icon ionic-ios-star" d="M25.9,11.276H17.826L15.374,3.957a.889.889,0,0,0-1.668,0l-2.452,7.319H3.128a.88.88,0,0,0-.878.878.645.645,0,0,0,.016.148.843.843,0,0,0,.368.62L9.267,17.6,6.722,25a.88.88,0,0,0,.3.988.849.849,0,0,0,.494.214,1.076,1.076,0,0,0,.549-.2l6.474-4.614L21.014,26a1.028,1.028,0,0,0,.549.2.788.788,0,0,0,.488-.214.87.87,0,0,0,.3-.988l-2.546-7.4,6.578-4.718.159-.137a.92.92,0,0,0,.285-.587A.929.929,0,0,0,25.9,11.276Z" transform="translate(635.75 760.625)" fill="#fabf13" />
                            </g>
                            <g transform="translate(-488 -764)">
                                <path id="Icon_ionic-ios-star-6" data-name="Icon ionic-ios-star" d="M25.9,11.276H17.826L15.374,3.957a.889.889,0,0,0-1.668,0l-2.452,7.319H3.128a.88.88,0,0,0-.878.878.645.645,0,0,0,.016.148.843.843,0,0,0,.368.62L9.267,17.6,6.722,25a.88.88,0,0,0,.3.988.849.849,0,0,0,.494.214,1.076,1.076,0,0,0,.549-.2l6.474-4.614L21.014,26a1.028,1.028,0,0,0,.549.2.788.788,0,0,0,.488-.214.87.87,0,0,0,.3-.988l-2.546-7.4,6.578-4.718.159-.137a.92.92,0,0,0,.285-.587A.929.929,0,0,0,25.9,11.276Z" transform="translate(635.75 760.625)" fill="#fabf13" />
                            </g>
                        </g>
                        <g id="Google-Logo" transform="translate(680.82 472.064)">
                            <path id="Path_48" data-name="Path 48" d="M91.417,34.761A10.264,10.264,0,1,1,81.154,24.53,10.1,10.1,0,0,1,91.417,34.761Zm-4.493,0a5.785,5.785,0,1,0-11.541,0,5.785,5.785,0,1,0,11.541,0Z" transform="translate(-38.19 -13.868)" fill="#ea4335" />
                            <path id="Path_49" data-name="Path 49" d="M139.417,34.761A10.264,10.264,0,1,1,129.154,24.53,10.1,10.1,0,0,1,139.417,34.761Zm-4.493,0a5.785,5.785,0,1,0-11.541,0,5.785,5.785,0,1,0,11.541,0Z" transform="translate(-64.048 -13.868)" fill="#fbbc05" />
                            <path id="Path_50" data-name="Path 50" d="M186.484,25.148V43.516c0,7.556-4.456,10.642-9.724,10.642a9.743,9.743,0,0,1-9.069-6.029L171.6,46.5a5.652,5.652,0,0,0,5.153,3.63c3.372,0,5.462-2.08,5.462-6V42.663h-.157a6.966,6.966,0,0,1-5.388,2.325,10.238,10.238,0,0,1,0-20.458,7.09,7.09,0,0,1,5.388,2.288h.157V25.153h4.267Zm-3.949,9.65c0-3.6-2.4-6.237-5.462-6.237a5.916,5.916,0,0,0-5.7,6.237,5.872,5.872,0,0,0,5.7,6.163C180.132,40.961,182.535,38.364,182.535,34.8Z" transform="translate(-89.896 -14.398)" fill="#4285f4" />
                            <path id="Path_51" data-name="Path 51" d="M219.522,2.53V32.513H215.14V2.53Z" transform="translate(-115.9 -1.363)" fill="#34a853" />
                            <path id="Path_52" data-name="Path 52" d="M243.92,38.123l3.487,2.325a10.184,10.184,0,0,1-8.524,4.534A10.01,10.01,0,0,1,228.73,34.751c0-6.084,4.378-10.231,9.65-10.231,5.309,0,7.906,4.225,8.755,6.509l.466,1.162-13.677,5.665a5.207,5.207,0,0,0,4.959,3.1,5.839,5.839,0,0,0,5.037-2.832Zm-10.734-3.681,9.143-3.8a3.961,3.961,0,0,0-3.8-2.168A5.612,5.612,0,0,0,233.186,34.442Z" transform="translate(-123.221 -13.863)" fill="#ea4335" />
                            <path id="Path_53" data-name="Path 53" d="M16.113,18.885V14.544H30.74a14.382,14.382,0,0,1,.217,2.62c0,3.257-.89,7.284-3.759,10.153a14.527,14.527,0,0,1-11.08,4.456A16.11,16.11,0,0,1,0,15.887,16.11,16.11,0,0,1,16.117,0,15.138,15.138,0,0,1,27,4.378L23.94,7.44a11.064,11.064,0,0,0-7.828-3.1A11.4,11.4,0,0,0,4.719,15.887,11.4,11.4,0,0,0,16.113,27.432a10.628,10.628,0,0,0,8.022-3.178,9,9,0,0,0,2.353-5.374Z" fill="#4285f4" />
                        </g>
                    </g>
                </svg>
            </div>
            <?php echo wp_get_attachment_image($bg_image_with_attorney_mobile, 'full', '', ['class' => 'hidden relative left-0 bottom-0 w-auto h-full object-cover max-w-[1920px] mx-auto mdt:flex mdt:m-0 mdt:l-0']) ?>
        </div>
        <img src="<?= wp_get_attachment_image_url($bg_image_with_attorney, 'full') ?>" class="absolute left-1/2 bottom-0 w-full h-full object-cover max-w-[1920px] mx-auto -translate-x-1/2 fhd:left-0 fhd:translate-x-0 fhd:w-auto mdt:hidden" alt="">
    </div>
<?php }
if (!get_fields()) echo 'Fill block with content';
