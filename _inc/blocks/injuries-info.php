<?php

/**
 * Functions to register Injuries Info Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_injuries_info()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'injuries-info',
                'title'           => __('Injuries Info', 'clixsy'),
                'description'	  => __('Injuries Info', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/injuries-info.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords' 		  => array('injuries', 'info'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/info_section.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_injuries_info');

if (function_exists('acf_add_local_field_group')) {
    $key = 'injuries_info';
    acf_add_local_field_group(array(
        'key'            => 'injuries_info',
        'title'          => 'injuries Info',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/injuries-info',
                ),
            ),
        ),
        'fields' => array(
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
                'key' => $key . '_title',
                'label' => 'Title',
                'name' => $key . '_title',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_subtitle',
                'label' => 'Subtitle',
                'name' => $key . '_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_description',
                'label' => 'Description',
                'name' => $key . '_description',
                'type' => 'wysiwyg',
            ),
        )
    ));
}
