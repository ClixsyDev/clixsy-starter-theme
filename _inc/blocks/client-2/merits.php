<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_merits() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'merits',
                'title'           => __('Merits', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/merits.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('merits', 'good qualities'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/merits.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_merits');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'merits__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . 'block',
            'title' => 'Merits',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/merits',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'items',
                    'name' => $block_key . 'items',
                    'label' => 'Merits',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => array(
                        array(
                            'key' => $block_key . 'icons',
                            'label' => 'Merits icons',
                            'name' => $block_key . 'icons',
                            'type' => 'image',
                            'return_format' => 'id',
                            'preview_size' => 'medium',
                            'library' => 'all',
                        ),
                        array(
                            'key' => $block_key . 'title',
                            'label' => 'Title',
                            'name' => $block_key . 'title',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => $block_key . 'block_bg',
                    'name' => $block_key . 'block_bg',
                    'type' => 'color_picker',
                    'label' => 'Set background color for section',
                ),
            ),

        )
    );

endif;