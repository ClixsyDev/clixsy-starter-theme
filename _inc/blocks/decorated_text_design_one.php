<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_decorated_text_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'decorated-text-design-one',
                'title'           => __('Decorated text', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/decorated_text-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('decorated text', 'text'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/decorated_text-design__one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_decorated_text_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'decorated_text_design_one__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . '16345f17b35',
            'title' => 'Decorated text',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/decorated-text-design-one',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'Title',
                    'instructions' => '',
                ),
                array(
                    'key' => $block_key . 'description',
                    'name' => $block_key . 'description',
                    'type' => 'wysiwyg',
                    'label' => 'Description',
                    'instructions' => '',
                ),
                array(
                    'key' => $block_key . 'after_description',
                    'name' => $block_key . 'after_description',
                    'type' => 'wysiwyg',
                    'label' => 'Text after description (bolder and bigger)',
                    'instructions' => '',
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
