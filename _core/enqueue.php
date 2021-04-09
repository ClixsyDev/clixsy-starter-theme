<?php

add_action( 'wp_enqueue_scripts', 'starter_scripts' );

function starter_scripts() {
    $version = '1.0.0';

    if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
        wp_enqueue_script('comment-reply');
    }

    // Stylesheets

    // Main Stylesheet
    wp_enqueue_style(
        'starter-style',
        trailingslashit(get_stylesheet_directory_uri()).'_assets/public/css/style.css',
        [], $version
    );

    // Append dynamic css
    wp_add_inline_style('starter-style', deploy_generate_dynamic_css());

    // Scripts

    // Main Script
    wp_enqueue_script(
        'starter-script',
        trailingslashit(get_stylesheet_directory_uri()).'_assets/public/js/script.js',
        [], $version, true
    );

    wp_localize_script( 'starter-script', 'wpAjax', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
    ));
}
