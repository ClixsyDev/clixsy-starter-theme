<?php

/**
 * Functions to register CTA Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_cta()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'cta',
                'title'           => __('CTA', 'clixsy'),
                'description'	  => __('CTA', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/cta.php',
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
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/cta.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_cta');

if (function_exists('acf_add_local_field_group')) {
    $key = 'cta';
    acf_add_local_field_group(array(
        'key'            => 'cta',
        'title'          => 'CTA',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/cta',
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
                'key' => $key . '_button_title',
                'label' => 'Button Title',
                'name' => 'button_title',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_button_link',
                'label' => 'Button Link',
                'name' => 'button_link',
                'type' => 'text',
            ),
        )
    ));
}
