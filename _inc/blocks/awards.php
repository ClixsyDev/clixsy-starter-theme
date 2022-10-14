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
                'name'            => 'awards',
                'title'           => __('awards', 'clixsy'),
                'description'      => __('awards', 'clixsy'),
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
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/blog-image-with-description--preview.png',
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
                        'key' => 'field_63486bf2bc65c',
                        'label' => 'Award html',
                        'name' => 'award_html',
                        'type' => 'textarea',
                    ),
                ),
            ),
        )
    ));
}
