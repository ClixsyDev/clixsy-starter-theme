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
                'key' => $key . '_items',
                'name' => $key . '_items',
                'label' => 'Cases',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => $key . '_case_name',
                        'name' => $key . '_case_name',
                        'label' => 'Case Name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => $key . '_case_link',
                        'name' => $key . '_case_link',
                        'label' => 'Case URL',
                        'type' => 'text',
                    ),
                    array(
                        'key' => $key . '_case_image',
                        'label' => 'Case Image',
                        'name' => $key . '_case_image',
                        'type' => 'image',
                        'return_format' => 'id',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),
                    array(
                        'key' => $key . '_description',
                        'name' => $key . '_description',
                        'type' => 'text',
                        'label' => 'Description',
                        'instructions' => '',
                    ),
                ),
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
