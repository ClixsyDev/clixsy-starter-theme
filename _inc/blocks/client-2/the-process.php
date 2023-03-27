<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_the_process()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'the-process',
                'title'           => __('The Process', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/the-process.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('The Process', 'process',),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/the_process.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_the_process');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'the_process__';
    acf_add_local_field_group(
        array(
            'key' => $block_key,
            'title' => 'The Process',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/the-process',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'process_box',
                    'name' => $block_key . 'process_box',
                    'label' => 'process_box',
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
                            'key' => 'number',
                            'name' => 'number',
                            'type' => 'text',
                            'label' => 'Number',
                        ),
                        array(
                            'key' => 'title',
                            'name' => 'title',
                            'type' => 'text',
                            'label' => 'Title',
                        ),
                    ),
                ),
                array(
                    'key' => $block_key . 'process_text',
                    'name' => $block_key . 'process_text',
                    'label' => 'Process text',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => array(
                        array(
                            'key' => 'title',
                            'name' => 'title',
                            'type' => 'text',
                            'label' => 'Title',
                        ),
                        array(
                            'key' => 'description',
                            'name' => 'description',
                            'type' => 'wysiwyg',
                            'label' => 'Description',
                        ),
                    ),
                ),
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'Title',
                ),
                array(
                    'key' => $block_key . 'link',
                    'name' => $block_key . 'link',
                    'label' => 'Link',
                    'type' => 'link',
                    'return_format' => 'array',
                ),
                array(
                    'key' => $block_key . 'number',
                    'name' => $block_key . 'number',
                    'type' => 'text',
                    'label' => 'Number',
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
