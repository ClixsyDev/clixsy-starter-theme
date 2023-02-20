<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_logo() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'logo',
                'title'           => __('Logo', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/logo-section.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('logo', 'site image', 'image'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/logo-section.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_logo');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'logo__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . 'block',
            'title' => 'Community',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/logo',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'image',
                    'label' => 'Image',
                    'name' => $block_key . 'icons',
                    'type' => 'image',
                    'return_format' => 'id',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
            ),

        )
    );

endif;
