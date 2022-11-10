<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_button()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'blog-button',
                'title'           => __('Button', 'clixsy'),
                'description'      => __('', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/blog-single-button.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords'           => array('text', 'alert', 'decorated'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/blog-button-preview.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_button');

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key'            => 'guttenberg_button',
        'title'          => 'Button',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/blog-button',
                ),
            ),
        ),
        'fields'         => array(
            array(
                'key' => 'button_link',
                'label' => 'Link',
                'name' => 'button_link',
                'return_format' => 'array',
                'type' => 'link',
            ),
        )
    ));
}
