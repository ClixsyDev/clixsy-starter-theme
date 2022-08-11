<?php
function set_post_order_in_admin($wp_query)
{

    global $pagenow;

    if (is_admin() && 'edit.php' == $pagenow && !isset($_GET['orderby'])) {

        $wp_query->set('orderby', 'date');
        $wp_query->set('order', 'desc');
    }
}

add_filter('pre_get_posts', 'set_post_order_in_admin', 5);
