<?php
// filter to remove additional <p> tags in CF7
add_filter('wpcf7_autop_or_not', '__return_false');


// rewrite rule to make url for blog posts like :site.com/blog/category/post-slug:
function THEME_SLUG_posts_add_rewrite_rules( $wp_rewrite )
{
    $new_rules = [
        'articles/page/([0-9]{1,})/?$' => 'index.php?post_type=post&paged='. $wp_rewrite->preg_index(1),
        'articles/(.+?)/?$' => 'index.php?post_type=post&name='. $wp_rewrite->preg_index(1),
    ];
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
    return $wp_rewrite->rules;
}
add_action('generate_rewrite_rules', 'THEME_SLUG_posts_add_rewrite_rules');

function THEME_SLUG_posts_change_blog_links($post_link, $id=0){
    $post = get_post($id);
    if( is_object($post) && $post->post_type == 'post'){
        return home_url('/blog/'. $post->post_name.'/');
    }
    return $post_link;
}
add_filter('post_link', 'THEME_SLUG_posts_change_blog_links', 1, 3);