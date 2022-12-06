<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_fights_for_you()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'fights-for-you',
                'title'           => __('Fights for-you', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/fights-for-you.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('fights', 'for you', 'Experts Available'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/fights-for-you.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_fights_for_you');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'fights_for_you__';
    acf_add_local_field_group(
        array(
            'key' => $block_key,
            'title' => 'Fights for you',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/fights-for-you',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'benefits',
                    'name' => $block_key . 'benefits',
                    'label' => 'Benefits',
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
                            'key' => 'title',
                            'name' => 'title',
                            'type' => 'text',
                            'label' => 'Title',
                        ),
                        array(
                            'key' => 'description',
                            'name' => 'description',
                            'type' => 'text',
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
                    'key' => $block_key . 'singleattorney_image',
                    'label' => 'Attorney image',
                    'name' => 'attorney_image',
                    'type' => 'image',
                    'return_format' => 'id',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
                array(
                    'key' => $block_key . 'rating_image',
                    'label' => 'Rating image',
                    'name' => 'rating_image',
                    'type' => 'image',
                    'return_format' => 'id',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
                array(
                    'key' => $block_key . 'color',
                    'name' => $block_key . 'color',
                    'type' => 'color_picker',
                    'label' => 'Set background color for block',
                ),
                array(
                    'key' => $block_key . 'text_available',
                    'name' => $block_key . 'text_available',
                    'type' => 'text',
                    'label' => 'Text available',
                ),
                array(
                    'key' => $block_key . 'time_available',
                    'name' => $block_key . 'time_available',
                    'type' => 'text',
                    'label' => 'Time available',
                ),
                array(
                    'key' => $block_key . 'color_available',
                    'name' => $block_key . 'color_available',
                    'type' => 'color_picker',
                    'label' => 'Set background color for available block',
                ),
                array(
                    'key' => $block_key . 'description',
                    'name' => $block_key . 'description',
                    'type' => 'wysiwyg',
                    'label' => 'Description',
                ),
                array(
                    'key' => $block_key . 'number',
                    'name' => $block_key . 'number',
                    'type' => 'text',
                    'label' => 'Number',
                ),
                array(
                    'key' => $block_key . 'link',
                    'name' => $block_key . 'link',
                    'label' => 'Link',
                    'type' => 'link',
                    'return_format' => 'array',
                ),
            ),

        )
    );

endif;
