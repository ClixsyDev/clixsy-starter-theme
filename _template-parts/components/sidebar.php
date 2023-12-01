<?php
extract($args);
use App\Template;
?>
<div class="sidebar col-span-2 py-4">
    <div>
        <?php
        $sidebar_form = get_field('sidebar_form', 'options');
        $sidebar_form_disclaimer = get_field('sidebar_form_disclaimer', 'options');
        if (!empty($sidebar_form)) { ?>
            <div class="w-full bg-accent relative p-8">
                <div>
                    <div class="text-white uppercase font-thin text-2xl 2xl:!text-[20px] mdt:!pb-3 xl:!text-lg xs:!text-base"><?php _e('Big Accident? Big Injuries? Big Insurance?', 'law'); ?></div>
                    <h3 class="text-white font-bold font-second uppercase leading-[1] pb-5 text-6xl 2xl:!text-[50px] xs:!text-3xl"><?php _e('You Need Big Auto.', 'law'); ?></h3>
                </div>
                <div class="sidebar-form form form_elements_design_one <?php echo isset($args['form_class']) ?: '' ?> mb-6">
                    <?php echo !empty($sidebar_form) ? do_shortcode('[contact-form-7 id="' . $sidebar_form . '" title="Sidebar form"]') : ''; ?>
                    <?php
                    Template::load('_template-parts/components/thank-you-message.php', [
                        'classes_disclaimer' => 'text-white',
                        'classes_thankyou' => 'text-white'
                    ]); ?>
                    <?php if ($sidebar_form_disclaimer) { ?>
                        <p><?php echo $sidebar_form_disclaimer ?></p>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <!-- related postd -->

        <?php
        $args_posts = array(
            'post__not_in' => array($post->ID),
            'posts_per_page' => 4, // Number of related posts that will be shown.
            'post_type' => 'post',
            'post_status' => 'publish'
        );
        $my_query = new wp_query($args_posts);
        $posts = $my_query->posts;
        $hide_recent_posts = $args["hide_recent_posts"] ? $args["hide_recent_posts"] : false;
        if (!empty($posts) && $hide_recent_posts ) { ?>
            <div class="read_more_section pt-6 pb-8 mt-4 mb-11 border-accent border-2 border-solid">
                <h3 class="text-black text-2xl font-semibold font-second mb-5 px-7">
                    Read More…
                </h3>
                <div class="related_posts mx-3.5">
                    <?php
                    //$orig_post = $post;
                    //global $post;

                    foreach ($posts as $post) {
                        setup_postdata($post); ?>
                        <a class="related_post_item group pt-2 pb-2.5 px-3.5 block relative hover:bg-gray-300" style="" href="<?= the_permalink() ?>">
                            <div class="title font-oswald text-black text-2xl leading-none pt-1 pb-2">
                                <?= the_title(); ?>
                            </div>
                            <div class="excerpt pb-2 mb-2" style="height: 48px;overflow: hidden; color: #191919">
                                <?= the_excerpt(); ?>
                            </div>
                            <div class="date text-xs">
                                <?php echo get_the_date('F d, Y') ?>
                            </div>
                            <svg class="z-10 hidden group-hover:block absolute right-2 bottom-2" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                                <path class="fill-accent" id="Icon_ionic-ios-arrow-dropright-circle" data-name="Icon ionic-ios-arrow-dropright-circle" d="M3.375,16.375a13,13,0,1,0,13-13A13,13,0,0,0,3.375,16.375Zm15.281,0-5.119-5.069A1.207,1.207,0,1,1,15.244,9.6l5.963,5.981a1.2,1.2,0,0,1,.038,1.662l-5.875,5.894a1.2,1.2,0,1,1-1.706-1.7Z" transform="translate(-3.375 -3.375)" />
                            </svg>
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        <?php } ?>
        <!-- end of related postd -->
    </div>
</div>