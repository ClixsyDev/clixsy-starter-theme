<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_about_us_fights_for_you()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'about us fights for you',
                'title'           => __('About Us Fights For You', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/about-us-fights-for-you.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('About us fights for you', 'About us', 'Fights for you'),
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
add_action('acf/init', 'register_about_us_fights_for_you');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'about_us_fights_for_you__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . 'block',
            'title' => 'About us',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/about-us-fights-for-you',
                    ),
                ),
            ),
            'fields' => array(

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
                    'key' => $block_key . 'cost_title',
                    'name' => $block_key . 'cost_title',
                    'type' => 'text',
                    'label' => 'Title',
                ),
                array(
                    'key' => $block_key . 'cost_description',
                    'name' => $block_key . 'cost_description',
                    'type' => 'text',
                    'label' => 'Description',
                ),
                array(
                    'key' => $block_key . 'cost_link',
                    'name' => $block_key . 'cost_link',
                    'label' => 'Button',
                    'type' => 'link',
                    'return_format' => 'array',
                ),
                array(
                    'key' => $block_key . 'cost_block_bg',
                    'name' => $block_key . 'cost_block_bg',
                    'type' => 'color_picker',
                    'label' => 'Set background color for first section',
                ),
                array(
                    'key' => $block_key . 'cost_select',
                    'name' => $block_key . 'cost_select',
                    'label' => 'Select the width of the block',
                    'type' => 'radio',
                    'choices' => array(
                        'Default' => 'Default',
                        'Wider' => 'Wider',
                    ),
                    'layout' => 'vertical',
                    'return_format' => 'value',
                ),
            ),

        )
    );

endif;
