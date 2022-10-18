<?php

/**
 * Functions to register awards Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_awards()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'Awards',
                'title'           => __('Awards', 'clixsy'),
                'description'      => __('Awards', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/awards.php',
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
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/awards.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_awards');

if (function_exists('acf_add_local_field_group')) {
    $key = 'awards';
    acf_add_local_field_group(array(
        'key'            => 'awards',
        'title'          => 'awards',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/awards',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $key . 'title',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
            ),
            array(
                'key' => $key . 'awards_items',
                'name' => 'awards_items',
                'label' => 'Awards items',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'award_image',
                        'label' => 'Award image',
                        'name' => 'award_image',
                        'type' => 'image',
                        'return_format' => 'id',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),
                    array(
                        'key' => 'award_url',
                        'label' => 'Award link',
                        'name' => 'award_link',
                        'type' => 'textarea',
                    ),
                ),
            ),
        )
    ));
}
