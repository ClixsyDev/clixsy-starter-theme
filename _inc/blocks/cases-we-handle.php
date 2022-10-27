<?php

/**
 * Functions to register Cases We Handle Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_cases_we_handle() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'cases-we-handle',
                'title'           => __('Cases We Handle', 'clixsy'),
                'description'      => __('Cases We Handle', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/cases-we-handle.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords'           => array('welcome', 'banner'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/cases_we_handle.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_cases_we_handle');

if (function_exists('acf_add_local_field_group')) {
    $key = 'cases_we_handle';
    acf_add_local_field_group(array(
        'key'            => 'cases_we_handle',
        'title'          => 'Cases We Handle',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/cases-we-handle',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $key . '_case_items',
                'label' => 'Case Items',
                'name' => $key . '_case_items',
                'type' => 'relationship',
                'post_type' => array(
                    0 => 'page',
                ),
                'filters' => array(
                    0 => 'search',
                ),
                'elements' => array(
                    0 => 'featured_image',
                ),
                'max' => 4,
                'return_format' => 'id',
            ),
            array(
                'key' => $key . '_title',
                'label' => 'Title',
                'name' => $key . '_title',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_button_1',
                'label' => 'Button 1',
                'name' => $key . '_button_1',
                'type' => 'link',
            ),
            array(
                'key' => $key . '_button_2',
                'label' => 'Button 2',
                'name' => $key . '_button_2',
                'type' => 'link',
            ),
        )
    ));
}
