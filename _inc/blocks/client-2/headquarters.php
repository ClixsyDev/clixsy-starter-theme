<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_headquarters() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'headquarters',
                'title'           => __('Headquarters', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/headquarters.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('headquarters', 'adress', 'email', 'map', 'phone'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/headquarters.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_headquarters');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'headquarters__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . 'block',
            'title' => 'Community',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/headquarters',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'Title',
                ),
            ),

        )
    );

endif;
