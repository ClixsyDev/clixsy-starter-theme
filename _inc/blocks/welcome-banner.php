<?php

/**
 * Functions to register welcome banner Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_welcome_banner()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'welcome-banner',
                'title'           => __('Welcome Banner', 'clixsy'),
                'description'	  => __('Welcome Banner', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/welcome-banner.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords' 		  => array('welcome', 'banner'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/slider-description-design__two.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_welcome_banner');

if (function_exists('acf_add_local_field_group')) {
    $key = 'welcome_banner';
    acf_add_local_field_group(array(
        'key'            => 'welcome_banner',
        'title'          => 'Welcome Banner',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/welcome-banner',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $key . '_attorney_image',
                'label' => 'Attorney Image',
                'name' => $key . '_attorney_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => $key . '_background_image',
                'label' => 'Background Image',
                'name' => $key . '_background_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => $key . '_banner_text_line_1',
                'label' => 'Banner Text line 1',
                'name' => $key . '_banner_text_line_1',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_banner_text_line_2',
                'label' => 'Banner Text line 2',
                'name' => $key . '_banner_text_line_2',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_banner_text_line_3',
                'label' => 'Banner Text line 3',
                'name' => $key . '_banner_text_line_3',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_button',
                'label' => 'Button',
                'name' => $key . '_button',
                'type' => 'link',
            ),
        )
    ));
}
