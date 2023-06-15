<?php
add_action('wp_enqueue_scripts', 'starter_scripts');

function starter_scripts() {
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
    $style_path_main = get_template_directory() . '/_assets/dist/css/index.css';
    $style_url_main = get_template_directory_uri() . '/_assets/dist/css/index.css';
    $style_version_main = filemtime($style_path_main);
    wp_enqueue_style('starter-style', $style_url_main, false, $style_version_main);


    // Append dynamic css
    wp_add_inline_style('starter-style', deploy_generate_dynamic_css());


    // Scripts

    // Main Script
    $scripts_path_main = get_template_directory() . '/_assets/dist/js/main.js';
    $scripts_url_main = get_template_directory_uri() . '/_assets/dist/js/main.js';
    $scripts_version_main = filemtime($scripts_path_main);
    wp_enqueue_script('starter-script', $scripts_url_main, false, $scripts_version_main);

    wp_localize_script('starter-script', 'ajax_url', [
        'ajaxurl' => admin_url('admin-ajax.php'),
        'page_id' => get_the_ID(),
    ]);
}

