<?php

/**
 * Functions to register Start process today Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_start_process_today_design_two()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'start-process-today-design-2',
                'title'           => __('Start process today design 2', 'clixsy'),
                'description'      => __('Start process today Design v2.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/start-process-today-design-2.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords'           => array('welcome', 'banner'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/start-process-today-design-2.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_start_process_today_design_two');

if (function_exists('acf_add_local_field_group')) {
    $block_key = 'start_process_today_design_2__';
    acf_add_local_field_group(array(
        'key'            => 'start_process_today_design_2',
        'title'          => 'Start process today design 2',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/start-process-today-design-2',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $block_key . 'steps',
                'name' => $block_key . 'steps',
                'label' => 'Steps',
                'type' => 'repeater',
                'layout' => 'row',
                'sub_fields' => array(
                    array(
                        'key' => $block_key . 'title_step',
                        'name' => $block_key . 'title_step',
                        'type' => 'text',
                        'label' => 'Title step',
                    ),
                    array(
                        'key' => $block_key . 'content',
                        'name' => $block_key . 'content',
                        'type' => 'wysiwyg',
                        'label' => 'Content',
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
                        'key' => $block_key . 'number_link',
                        'name' => $block_key . 'number_link',
                        'label' => 'Number link',
                        'type' => 'text',
                    ),
                    array(
                        'key' => $block_key . 'link',
                        'name' => $block_key . 'link',
                        'label' => 'Link',
                        'type' => 'link',
                        'return_format' => 'array',
                    ),
                    array(
                        'key' => $block_key . 'block_bg',
                        'name' => $block_key . 'block_bg',
                        'type' => 'color_picker',
                        'label' => 'Set background color for block',
                    ),
                ),
            ),
            array(
                'key' => $block_key . 'title',
                'name' => $block_key . 'title',
                'type' => 'text',
                'label' => 'Title section',
            ),
            array(
                'key' => $block_key . 'start_link',
                'name' => $block_key . 'start_link',
                'label' => 'Link',
                'type' => 'link',
                'return_format' => 'array',
            ),
        )
    ));
}
