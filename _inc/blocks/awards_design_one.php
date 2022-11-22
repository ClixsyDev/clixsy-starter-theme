<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_awards_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'awards-design-one',
                'title'           => __('Awards slider', 'clixsy'),
                'description'      => __('Design v1', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/awards-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('awards', 'slider'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/awards-design__one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_awards_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'awards_design_one__';
    acf_add_local_field_group(array(
        'key' => 'awards_design_one_16345f17b3ec75',
        'title' => 'Awards slider',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/awards-design-one',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $block_key . 'repeater',
                'name' => $block_key . 'repeater',
                'label' => 'Icons/images',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'label' => 'Icon',
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail'
                    ),
                    array(
                        'key' => 'icon_link',
                        'name' => 'icon_link',
                        'type' => 'text',
                        'label' => 'Icon Link',
                    ),
                ),
            ),
            array(
                'key' => $block_key . 'title',
                'name' => $block_key . 'title',
                'type' => 'text',
                'label' => 'Title',
                'instructions' => 'Wrap words with span tag to change color',
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
                'key' => $block_key . 'slide_bg',
                'name' => $block_key . 'slide_bg',
                'type' => 'color_picker',
                'label' => 'Set background color for images/icons',
            ),
            array(
                'key' => $block_key . 'link',
                'name' => $block_key . 'link',
                'type' => 'link',
                'label' => 'Button',
                'return_format' => 'array',
            ),
        ),

    ));

endif;
