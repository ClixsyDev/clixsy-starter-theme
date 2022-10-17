<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_slider_description_design__two()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'slider-description-design-two',
                'title'           => __('Slider with description', 'clixsy'),
                'description'      => __('Design v1. two slide per scroll', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/slider-description_design__two--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('slider', 'description', 'image'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/slider-description-design__two.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_slider_description_design__two');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'slider_description_design_two__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . '16345f17b3435',
            'title' => 'Slider with description',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/slider-description-design-two',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'slides',
                    'name' => $block_key . 'slides',
                    'label' => 'Slides',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => array(
                        array(
                            'key' => 'image',
                            'name' => 'image',
                            'type' => 'image',
                            'label' => 'Image',
                            'return_format' => 'id',
                            'preview_size' => 'thumbnail'
                        ),
                        array(
                            'key' => 'content',
                            'name' => 'content',
                            'type' => 'wysiwyg',
                            'label' => 'Content',
                            'instructions' => '',
                        ),
                    ),
                ),
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'textarea',
                    'label' => 'title',
                    'instructions' => 'Wrap words with <b>span</b> tag to make them highlighted with accent color',
                ),
                array(
                    'key' => $block_key . 'description',
                    'name' => $block_key . 'description',
                    'type' => 'textarea',
                    'label' => 'Description',
                    'instructions' => 'Wrap words with <b>span</b> tag to make them highlighted with accent color',
                ),
                array(
                    'key' => $block_key . 'bg',
                    'name' => $block_key . 'bg',
                    'type' => 'image',
                    'label' => 'Background image',
                    'return_format' => 'url',
                    'preview_size' => 'thumbnail'
                ),
                array(
                    'key' => $block_key . 'link',
                    'name' => $block_key . 'link',
                    'label' => 'Button',
                    'type' => 'link',
                    'return_format' => 'array',
                ),

            ),

        )
    );

endif;
