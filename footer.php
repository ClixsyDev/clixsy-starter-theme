<?php 
$socials = get_field('socials', 'options');
$footer_logo = get_field('logo', 'options');
$location = get_field('location', 'options');
$phone = get_field('phone', 'options');
$mail = get_field('mail', 'options');
$subscribe_form = get_field('subscribe_form', 'options');
$info_site = get_field('info_site', 'options');
$bottom_links = get_field('bottom_links', 'options');
?>

<footer class="pb-6 pt-40 bg-headings" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/background-footer.png')">
    <div class="container">
        <div class="flex gap-64 items-center xl:flex-col xl:gap-10">
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
                        echo do_shortcode('[contact-form-7 id="'.$subscribe_form.'" title="Subscribe form"]');
                    ?>
                </div>
            <?php } ?>
        </div>
        <div class="flex pt-10 gap-8 xl:gap-5 mdt:flex-col lg:pt-8 lg:gap-8">
            <div class="flex gap-8 xl:gap-5 mdt:flex-col">
                <div class="mdt:w-full">
                    <iframe class="mdt:w-full mdt:h-[270px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.63958832173!2d-92.0125401!3d30.190287800000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86249ce1f85f0c93%3A0xb6eb9ef9323d6b2a!2s110%20E%20Kaliste%20Saloom%20Rd%20Ste%20101%2C%20Lafayette%2C%20LA%2070508%2C%20%D0%A1%D0%A8%D0%90!5e0!3m2!1sru!2sua!4v1664983362246!5m2!1sru!2sua" width="340" height="235" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="flex gap-80 sm:flex-col sm:gap-8 xl:gap-28 mdt:justify-between">
                <div class="flex flex-col gap-6">
                    <?php if ($location) { ?>
                        <div>
                            <h5 class="text-accent font-main font-bold text-xl">LOCATION</h5>
                            <p class="text-white font-main font-bold text-2xl xl:text-xl"><?php echo $location ?></p>
                        </div>
                    <?php } ?>
                    <?php if ($phone) { ?>
                        <div>
                            <h5 class="text-accent font-main font-bold text-xl">EMAIL</h5>
                            <p class="text-white font-main font-bold text-lg xl:text-xl"><?php echo $phone ?></p>
                        </div>
                    <?php } ?>
                    <?php if ($mail) { ?>
                        <div>
                            <h5 class="text-accent font-main font-bold text-xl">PHONE</h5>
                            <p class="text-white font-main font-bold text-lg xl:text-xl"><?php echo $mail ?></p>
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
                <div>
                    <?php echo wp_get_attachment_image($footer_logo, 'full', "", ["class" => "w-19/24 sm:w-9/24"]); ?>
                </div> 
            <?php } ?>      
        </div>
        <?php if ($bottom_links) { ?>
            <div class="flex gap-6 mt-5 sm:justify-between">
                <?php foreach ($bottom_links as $link_item) { ?>
                    <a href="<?php echo esc_url( $link_item['link']['url'] ); ?>" class="text-white text-lg"> <?php echo esc_html( $link_item['link']['title'] ); ?></a>
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