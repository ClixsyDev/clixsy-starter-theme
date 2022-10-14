<?php

/**
 * Functions to register welcome banner Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_testimonials()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'testimonials',
                'title'           => __('Welcome Banner', 'clixsy'),
                'description'      => __('Welcome Banner', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/testimonials.php',
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
add_action('acf/init', 'register_testimonials');

if (function_exists('acf_add_local_field_group')) {
    $key = 'testimonials';
    acf_add_local_field_group(array(
        'key'            => 'testimonials',
        'title'          => 'Welcome Banner',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/testimonials',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $key . '_title',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_testimonials_items',
                'name' => 'testimonials_items',
                'label' => 'Testimonials',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => $key . '_name',
                        'label' => 'Name',
                        'name' => 'name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => $key . '_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                    ),
                ),
            ),
        )
    ));
}
