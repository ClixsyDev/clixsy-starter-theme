<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_slider_description_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'slider-description-design-one',
                'title'           => __('Slider with description', 'clixsy'),
                'description'      => __('Design v1. One slide per scroll', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/slider-description_design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('slider', 'description', 'image'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/slider-description-design__one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_slider_description_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'slider_description_design_one__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . '16345f17b35',
            'title' => 'Slider with description',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/slider-description-design-one',
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
                    'key' => $block_key . 'slider_color',
                    'name' => $block_key . 'slider_color',
                    'type' => 'color_picker',
                    'label' => 'Set background color slider',
                ),
            ),

        )
    );

endif;
