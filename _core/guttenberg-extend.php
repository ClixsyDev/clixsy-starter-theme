<?php
/*
 * Change gutenberg palette
 */
function csme_gutenberg_palette($palette)
{
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

function theme_customize_register($wp_customize)
{
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


function theme_get_customizer_css()
{
    ob_start();

    $text_color = get_theme_mod('text_color', '');
    if (!empty($text_color)) {
?>
        body {
        color: <?php echo $text_color; ?>;
        }
    <?php
    }


    $link_color = get_theme_mod('link_color', '');
    if (!empty($link_color)) {
    ?>
        a {
        color: <?php echo $link_color; ?>;
        border-bottom-color: <?php echo $link_color; ?>;
        }
    <?php
    }


    $border_color = get_theme_mod('border_color', '');
    if (!empty($border_color)) {
    ?>
        input,
        textarea {
        border-color: <?php echo $border_color; ?>;
        }
    <?php
    }


    $accent_color = get_theme_mod('accent_color', '');
    if (!empty($accent_color)) {
    ?>
        a:hover {
        color: <?php echo $accent_color; ?>;
        border-bottom-color: <?php echo $accent_color; ?>;
        }

        button,
        input[type="submit"] {
        background-color: <?php echo $accent_color; ?>;
        }
    <?php
    }


    $sidebar_background = get_theme_mod('sidebar_background', '');
    if (!empty($sidebar_background)) {
    ?>
        .sidebar {
        background-color: <?php echo $sidebar_background; ?>;
        }
<?php
    }

    $css = ob_get_clean();
    return $css;
}

// Modify our styles registration like so:

function theme_enqueue_styles()
{
    wp_enqueue_style('theme-styles', get_stylesheet_uri()); // This is where you enqueue your theme's main stylesheet
    $custom_css = theme_get_customizer_css();
    wp_add_inline_style('theme-styles', $custom_css);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
