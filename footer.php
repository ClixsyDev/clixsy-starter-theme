<footer class="bg-accent py-8">
    <div class="container grid grid-cols-[2fr,1fr] gap-24 md:flex md:flex-col-reverse md:gap-12">
        <div>
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
</footer>


<?php wp_footer(); ?>

</body>

</html>