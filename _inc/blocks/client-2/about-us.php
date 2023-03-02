<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_about_us()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'about us',
                'title'           => __('About Us', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/about-us.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('About us', 'Why'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/about-us.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_about_us');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'about_us__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . 'block',
            'title' => 'About us',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/about-us',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'items',
                    'name' => $block_key . 'items',
                    'label' => 'Benefits',
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
                    'key' => $block_key . 'title_items',
                    'name' => $block_key . 'title_items',
                    'type' => 'text',
                    'label' => 'Title items',
                ),
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'Title',
                ),
                array(
                    'key' => $block_key . 'block_color',
                    'name' => $block_key . 'block_color',
                    'type' => 'color_picker',
                    'label' => 'Set background color for block',
                ),
                array(
                    'key' => $block_key . 'image',
                    'name' => $block_key . 'image',
                    'type' => 'image',
                    'label' => 'Attorney group',
                    'return_format' => 'id',
                    'preview_size' => 'thumbnail'
                ),
                array(
                    'key' => $block_key . 'attorney_subtitle',
                    'name' => $block_key . 'attorney_subtitle',
                    'type' => 'text',
                    'label' => 'Attorney subtitle',
                ),
                array(
                    'key' => $block_key . 'attorney_title',
                    'name' => $block_key . 'attorney_title',
                    'type' => 'text',
                    'label' => 'Attorney title',
                ),
                array(
                    'key' => $block_key . 'attorney_block_color',
                    'name' => $block_key . 'attorney_block_color',
                    'type' => 'color_picker',
                    'label' => 'Set background color for attorney block',
                ),
                array(
                    'key' => $block_key . 'first_description',
                    'name' => $block_key . 'first_description',
                    'type' => 'wysiwyg',
                    'label' => 'First description',
                ),
                array(
                    'key' => $block_key . 'number',
                    'name' => $block_key . 'number',
                    'type' => 'text',
                    'label' => 'Number',
                ),
                array(
                    'key' => $block_key . 'background',
                    'name' => $block_key . 'background',
                    'type' => 'image',
                    'label' => 'About Us bg image',
                    'return_format' => 'url',
                    'preview_size' => 'thumbnail',
                    'library' => 'all',

                ),
                array(
                    'key' => $block_key . 'second_description',
                    'name' => $block_key . 'second_description',
                    'type' => 'wysiwyg',
                    'label' => 'Second description',
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
