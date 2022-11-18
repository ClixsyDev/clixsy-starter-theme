<?php
/*
 * Change gutenberg palette
 */
function csme_gutenberg_palette($palette) {
    return array(
        array(
            'name'  => 'White',
            'slug'  => 'white',
            'color'    => '#fff',
        ),
        array(
            'name'  => 'Light gray',
            'slug'  => 'light-gray',
            'color'    => '#F4F4F4',
        ),
        array(
            'name'  => 'Light blue',
            'slug'  => 'light-blue',
            'color'    => '#5d9ccb',
        ),
        array(
            'name'  => 'Blue',
            'slug'  => 'blue',
            'color'    => '#364D96',
        ),
        array(
            'name'  => 'Dark gray',
            'slug'  => 'dark-gray',
            'color'    => '#232E3F',
        ),
    );
}
add_filter('villen_gutenberg_palette', 'csme_gutenberg_palette');

add_filter('render_block', 'wrap_table_block', 10, 2);
function wrap_table_block($block_content, $block) {
    if (!is_single()) {
        if ('core/paragraph' === $block['blockName'] || 'core/heading' === $block['blockName'] ||  'core/list' === $block['blockName']) {
            $block_content = '<div class="container prose-lg">' . $block_content . '</div>';
        }
    }
    return $block_content;
}

function theme_customize_register($wp_customize) {
    // Text color
    $wp_customize->add_setting('text_color', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'text_color', array(
        'section' => 'colors',
        'label'   => esc_html__('Text color', 'theme'),
    )));

    // Link color
    $wp_customize->add_setting('link_color', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'section' => 'colors',
        'label'   => esc_html__('Link color', 'theme'),
    )));

    // Accent color
    $wp_customize->add_setting('accent_color', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'accent_color', array(
        'section' => 'colors',
        'label'   => esc_html__('Accent color', 'theme'),
    )));

    // Border color
    $wp_customize->add_setting('border_color', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'border_color', array(
        'section' => 'colors',
        'label'   => esc_html__('Border color', 'theme'),
    )));

    // Sidebar background
    $wp_customize->add_setting('sidebar_background', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_background', array(
        'section' => 'colors',
        'label'   => esc_html__('Sidebar Background', 'theme'),
    )));
}

add_action('customize_register', 'theme_customize_register');


add_filter('block_categories_all', function ($categories) {

    // Adding a new category.
    $categories[] = array(
        'slug'  => 'clixsy',
        'title' => 'Clixsy blocks'
    );

    return array_reverse($categories);
});
