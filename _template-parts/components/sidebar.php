<?php

use App\Template;
?>
<div class="sidebar">
    <div>
        <div class="w-full bg-headings_second relative p-5">
            <div class=>
                <h3 class="form-h3 text-white w-full m-auto mb-4 block text-3xl"><?php _e('Free Case Evaluation', 'law'); ?></h3>
                <span class="block border-2 border-accent mt-2 mb-4  w-2/4"></span>
            </div>
            <div class="sidebar-form">
                <?php
                $sidebar_form = get_field('sidebar_form', 'options');
                echo do_shortcode('[contact-form-7 id="' . $sidebar_form . '" title="Sidebar form"]'); ?>
                <?php
                Template::load('_template-parts/components/thank-you-message.php', [
                    'classes_disclaimer' => 'text-smoke',
                    'classes_thankyou' => 'text-smoke'
                ]); ?>
            </div>
        </div>
        <!-- Reviews section -->
        <?php
        Template::load('_template-parts/components/sidebar-review.php', []); ?>
        <!-- End Reviews section -->
    </div>
</div>