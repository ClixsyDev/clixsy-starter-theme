<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_logo_design_two() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'logo-design-two',
                'title'           => __('Logo design two', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/logo-section-design__two.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('logo', 'site image', 'image'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/logo-section-design__two.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_logo_design_two');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'logo_design_two__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . 'block',
            'title' => 'Community',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/logo-design-two',
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
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'Title',
                ),
                array(
                    'key' => $block_key . 'background_image',
                    'label' => 'Background image',
                    'name' => $block_key . 'background_image',
                    'type' => 'image',
                    'return_format' => 'id',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
            ),

        )
    );

endif;
