<?php


function starter_scripts() {

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


    // Main Script
    $nitropack_exclude_path_main = get_template_directory() . '/_assets/dist/js/nitropack-excluded.js';
    $nitropack_exclude_url_main = get_template_directory_uri() . '/_assets/dist/js/nitropack-excluded.js';
    $nitropack_exclude_version_main = filemtime($nitropack_exclude_path_main);
    wp_enqueue_script('nitropack-excluded', $nitropack_exclude_url_main, false, $nitropack_exclude_version_main);

    wp_localize_script('starter-script', 'ajax_url', [
        'ajaxurl' => admin_url('admin-ajax.php'),
        'page_id' => get_the_ID(),
    ]);
}


add_action('wp_enqueue_scripts', 'starter_scripts');


// Update CSS within in Admin
function admin_style() {
    if (isset($_GET['action']) && $_GET['action'] == 'edit') {
        $version = '5.0.0';
        wp_enqueue_style(
            'starter-style-admin',
            trailingslashit(get_template_directory_uri()) . '_assets/dist/css/admin.css',
            [],
            $version
        );

        // Main Script
        wp_enqueue_script(
            'starter-script-admin',
            trailingslashit(get_template_directory_uri()) . '_assets/dist/js/main.js',
            [],
            $version,
            true
        );
    }
}
add_action('admin_enqueue_scripts', 'admin_style');



function generate_theme_css($theme_data) {
    $css = '';

    // Add global styles
    if (isset($theme_data['settings']['color']['text']) && isset($theme_data['settings']['color']['primary'])) {
        $css .= 'body { color: ' . $theme_data['settings']['color']['text'] . '; }';
        $css .= 'a { color: ' . $theme_data['settings']['color']['primary'] . '; }';
    }

    // Add block styles
    if (isset($theme_data['settings']['__experimentalBlockStyles'])) {
        $block_styles = $theme_data['settings']['__experimentalBlockStyles'];
        foreach ($block_styles as $block => $styles) {
            $selector = '.wp-block-' . str_replace('/', '-', $block);
            foreach ($styles as $property => $value) {
                $css .= $selector . ' { ' . $property . ': ' . $value . '; }';
            }
        }
    }

    // Add editor styles
    if (isset($theme_data['settings']['__experimentalEditorStyle'])) {
        $editor_styles = $theme_data['settings']['__experimentalEditorStyle'];
        foreach ($editor_styles as $property => $value) {
            $css .= '.editor-styles-wrapper ' . $property . ' { ' . $value . '; }';
        }
    }

    return $css;
}


add_theme_support('align-wide');
add_theme_support('wp-block-styles');
