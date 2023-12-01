<?php
$socials = get_field('socials', 'options');
$footer_logo = get_field('footer_logo', 'options');
$location = get_field('location', 'options');
$map = get_field('map', 'options');
$phone = get_field('phone', 'options');
$phone_link = get_field('phone_link', 'options');
$mail = get_field('mail', 'options');
$subscribe_form = get_field('subscribe_form', 'options');
$info_site = get_field('info_site', 'options');
$bottom_links = get_field('bottom_links', 'options');
?>

<footer class="pb-6 pt-40 bg-headings">
    <div class="container">
        <div class="flex gap-5 flex-col justify-between items-baseline md:items-center xl:flex-col xl:gap-10">
            <div class="flex pt-3 gap-x-4">
                <?php if ($socials) { ?>
                    <?php foreach ($socials as $social_item) { ?>
                        <a target="_blank" href="<?php echo esc_url($social_item['link']); ?>"><?php echo wp_get_attachment_image($social_item['icon'], 'full', "", ["class" => "h-14 w-auto sm:h-10 "]); ?></a>
                    <?php } ?>
                <?php } ?>
            </div>
            <?php if ($subscribe_form) { ?>
                <div class="xl:ml-16 sm:w-full sm:ml-0">
                    <?php
                    echo do_shortcode('[contact-form-7 id="' . $subscribe_form . '" title="Subscribe form"]');
                    ?>
                </div>
            <?php } ?>
        </div>
        <div class="flex pt-10 gap-8 xl:gap-5 mdt:flex-col lg:pt-8 lg:gap-8">
            <div class="flex gap-8 xl:gap-5 mdt:flex-col">
                <div class="mdt:w-full">
                    <?php echo $map ?>
                </div>
            </div>
            <div class="flex gap-80 sm:flex-col sm:gap-8 xl:gap-28 mdt:justify-between">
                <div class="flex flex-col gap-6">
                    <?php if ($location) { ?>
                        <div>
                            <h5 class="text-accent font-main font-bold text-xl">LOCATION</h5>
                            <p class="text-white font-main font-bold text-xl xl:text-xl"><?php echo $location ?></p>
                        </div>
                    <?php } ?>
                    <?php if ($mail) { ?>
                        <div>
                            <h5 class="text-accent font-main font-bold text-xl">EMAIL</h5>
                            <a href="mailto:<?php echo $mail ?>" class="text-white font-main font-bold text-xl xl:text-xl"><?php echo $mail ?></a>
                        </div>
                    <?php } ?>
                    <?php if ($phone && $phone_link) { ?>
                        <div>
                            <h5 class="text-accent font-main font-bold text-xl">PHONE</h5>
                            <a href="tel:<?php echo $phone_link ?>" class="text-white font-main font-bold text-lg xl:text-xl"><?php echo $phone  ?></a>
                        </div>
                    <?php } ?>
                </div>
                <div>
                    <h5 class="text-accent font-main font-bold text-xl uppercase">Quick Links</h5>
                    <?php wp_nav_menu([
                        'menu'                 => 'Footer menu',
                        'container'            => '',
                        'container_class'      => '',
                        'container_id'         => '',
                        'container_aria_label' => '',
                        'menu_class'           => 'footer-menu',
                        'menu_id'              => '',
                        'echo'                 => true,
                        'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'item_spacing'         => 'preserve',
                        'depth'                => 0,
                        'walker'               => '',
                        'theme_location'       => 'starter_footer_menu_1',
                    ]) ?>
                </div>
            </div>
        </div>
        <div class="flex justify-between w-21/24 mt-8 lg:w-full sm:flex-col-reverse">
            <?php if ($info_site) { ?>
                <div class="sm:mt-5">
                    <p class="text-white font-avnir text-lg"><?php echo $info_site ?></p>
                </div>
            <?php } ?>
            <?php if ($footer_logo) { ?>
                <div class="w-full">
                    <?php echo wp_get_attachment_image($footer_logo, 'full', "", ["class" => "w-19/24 mx-auto sm:w-9/24"]); ?>
                </div>
            <?php } ?>
        </div>
        <?php if ($bottom_links) { ?>
            <div class="flex gap-6 mt-5 sm:justify-between">
                <?php foreach ($bottom_links as $link_item) { ?>
                    <a href="<?php echo esc_url($link_item['link']['url']); ?>" class="text-white text-lg"> <?php echo esc_html($link_item['link']['title']); ?></a>
                <?php } ?>
            </div>
        <?php } ?>
        <!-- <div>
            
        </div> -->

    </div>
</footer>


<?php wp_footer(); ?>

</body>

</html>