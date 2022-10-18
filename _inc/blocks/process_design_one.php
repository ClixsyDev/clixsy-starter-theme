<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_process_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'process-design-one',
                'title'           => __('Process', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/process-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('process'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/process-design__one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_process_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'process_design_one__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . '16345f17b35',
            'title' => 'Slider with description',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/process-design-one',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'sercive_repeater',
                    'name' => $block_key . 'sercive_repeater',
                    'label' => 'Seervices',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => array(
                        array(
                            'key' => $block_key . 'service_text',
                            'name' => $block_key . 'service_text',
                            'type' => 'text',
                            'label' => 'Text',
                            'instructions' => 'wrap text with span and strong tags to change text style and color',
                        ),
                        array(
                            'key' => $block_key . 'service_link',
                            'name' => $block_key . 'service_link',
                            'label' => 'Button',
                            'type' => 'link',
                            'return_format' => 'array',
                        ),
                    ),
                ),
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'Title',
                    'instructions' => 'Wrap text with span to change color of text',
                ),
                array(
                    'key' => $block_key . 'image',
                    'name' => $block_key . 'image',
                    'type' => 'image',
                    'label' => 'Services image on left side',
                    'return_format' => 'id',
                    'preview_size' => 'thumbnail'
                ),
                array(
                    'key' => $block_key . 'image_mobile',
                    'name' => $block_key . 'image_mobile',
                    'type' => 'image',
                    'label' => 'Services image on mobile',
                    'return_format' => 'id',
                    'preview_size' => 'thumbnail'
                ),
                array(
                    'key' => $block_key . 'button',
                    'name' => $block_key . 'button',
                    'label' => 'Button',
                    'type' => 'link',
                    'return_format' => 'array',
                ),
            ),

        )
    );

endif;
