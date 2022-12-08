<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_auto_accident_fault() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'Auto accident fault',
                'title'           => __('Auto accident fault', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/auto-accident-fault.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('Auto accident fault', 'Fault', 'Auto', 'Car', 'Accident'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/auto-accident-fault.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_auto_accident_fault');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'auto_accident_fault__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . 'block',
            'title' => 'About us',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/auto-accident-fault',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'items',
                    'name' => $block_key . 'items',
                    'label' => 'Items',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => array(
                        array(
                            'key' =>  'title',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'icons',
                            'label' => 'Icons',
                            'name' => 'icons',
                            'type' => 'image',
                            'return_format' => 'id',
                            'preview_size' => 'medium',
                            'library' => 'all',
                        ),
                    ),
                ),
                array(
                    'key' => $block_key . 'block_color',
                    'name' => $block_key . 'block_color',
                    'type' => 'color_picker',
                    'label' => 'Set background color for block',
                ),
                array(
                    'key' => $block_key . 'description_repeater',
                    'name' => $block_key . 'description_repeater',
                    'type' => 'text',
                    'label' => 'Description repeater',
                ),
                array(
                    'key' => $block_key . 'image',
                    'name' => $block_key . 'image',
                    'type' => 'image',
                    'label' => 'Image',
                    'return_format' => 'id',
                    'preview_size' => 'thumbnail'
                ),
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'Title',
                ),
                array(
                    'key' => $block_key . 'description',
                    'name' => $block_key . 'description',
                    'type' => 'wysiwyg',
                    'label' => 'Description',
                ),
            ),

        )
    );

endif;