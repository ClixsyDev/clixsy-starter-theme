<?php
add_action('wp_enqueue_scripts', 'starter_scripts');

function starter_scripts()
{
    $version = '5.0.0';

    add_action('wp_enqueue_scripts', 'admin_stylesheet');
    wp_enqueue_style('style-name', get_stylesheet_uri());

    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', false);
    }

    if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
        wp_enqueue_script('comment-reply');
    }

    // Stylesheets
    // wp_dequeue_style('wp-block-library');
    // wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style');

    // Main Stylesheet
    wp_enqueue_style(
        'starter-style',
        trailingslashit(get_template_directory_uri()) . '_assets/dist/css/index.css',
        [],
        $version
    );


    // Append dynamic css
    wp_add_inline_style('starter-style', deploy_generate_dynamic_css());


    // Scripts

    // Main Script
    wp_enqueue_script(
        'starter-script',
        trailingslashit(get_template_directory_uri()) . '_assets/dist/js/main.js',
        [],
        $version,
        true
    );

    wp_localize_script('starter-script', 'ajax_url', [
        'ajaxurl' => admin_url('admin-ajax.php'),
    ]);
}


// Update CSS within in Admin
function admin_style()
{
    $version = '5.0.0';
    wp_enqueue_style(
        'starter-style',
        trailingslashit(get_template_directory_uri()) . '_assets/dist/css/admin.css',
        [],
        $version
    );

    // wp_enqueue_style(
    //     'builded-starter-style',
    //     trailingslashit(get_template_directory_uri()) . '_assets/src/builded_css_admin/builded_css_admin.css',
    //     [],
    //     $version
    // );

     // Main Script
     wp_enqueue_script(
        'starter-script-admin',
        trailingslashit(get_template_directory_uri()) . '_assets/dist/js/main.js',
        [],
        $version,
        true
    );
    
}
add_action('admin_enqueue_scripts', 'admin_style');
