<?php

use App\Template;

$previewImage = @$block['data']['preview_image'];
// back-end previews
if ($is_preview && !empty($previewImage)) {
    echo ("<img style='display: block; max-width: 100%; height: auto;'  src='{$block['data']['preview_image']}' alt='widget preview'");

    return;
} else {
    $welcome_banner__single_team_member_bg = get_field('welcome_banner__single_team_member_bg');
    $welcome_banner__single_team_member_image = get_field('welcome_banner__single_team_member_image');
    $welcome_banner__single_team_member_name = get_field('welcome_banner__single_team_member_name');
    $welcome_banner__single_team_member_title = get_field('welcome_banner__single_team_member_title');
    $welcome_banner__single_team_member_position = get_field('welcome_banner__single_team_member_position');
    $welcome_banner__single_team_member_link = get_field('welcome_banner__single_team_member_link');
    $phone_link = get_field('phone_link', 'options');
?>



    <section class="bg-cover pb-16 pt-11 relative" style="background-image:url('<?php echo !empty($welcome_banner__single_team_member_bg) ? wp_get_attachment_image_url($welcome_banner__single_team_member_bg, 'full') : ''; ?>');">
        <div class="bg-white !bg-opacity-80 absolute w-full h-full top-0 left-0"></div>

        <div class="container relative z-10 h">
            <div class="flex md:flex-wrap md:justify-center">
                <div class="shadow-siteWide">
                    <?php echo wp_get_attachment_image($welcome_banner__single_team_member_image, 'full', '', ['class' => 'block relative object-cover !h-96 !w-96 ']) ?>
                </div>
                <div class=" pl-6 flex flex-col justify-between ">
                    <div class="leading-none">
                        <h1 class="text-[75px] sm:text-5xl text-accent font-bold font-second pb-2"><?php echo $welcome_banner__single_team_member_name ?></h1>
                        <p class="text-xl font-third"><?php echo $welcome_banner__single_team_member_title ?></p>
                        <p class="text-xl font-third"><?php echo $welcome_banner__single_team_member_position ?></p>
                    </div>

                    <div>
                        <a href="tel:<?php echo $phone_link ?>" class=" text-[70px] sm:text-5xl font-second font-bold ">1 (844) BIG-AUTO</a>
                        <?php if ($welcome_banner__single_team_member_link) { ?>
                            <?php
                            Template::load('_template-parts/components/button.php', [
                                'link' => $welcome_banner__single_team_member_link['url'],
                                'text' => __($welcome_banner__single_team_member_link['title'], 'law'),
                                'text_hover' => false,
                                'classes' => 'bigauto_red hover_accent  mx-auto uppercase min-w-[460px]', // hover_headings hover_accent hover_white btn_headings btn_xl btn_md btn_sm
                            ]); ?>
                        <?php } ?>
                    </div>


                </div>
            </div>
        </div>
        <div class="dots-bg h-32 absolute w-full bottom-0 left-0"></div>
    </section>

<?php }
if (!get_fields()) echo '<p class="text-center bg-accent py-8">Fill block with content</p>';
