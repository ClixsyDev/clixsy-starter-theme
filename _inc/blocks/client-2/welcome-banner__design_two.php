<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_welcome_banner_design_two() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'welcome-banner-design-two',
                'title'           => __('Welcome banner', 'clixsy'),
                'description'      => __('Design v2.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/welcome-banner-design__two.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('banner', 'welcome', 'hero', 'top'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/welcome-banner__design_two.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_welcome_banner_design_two');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'welcome_banner__design_two__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . 'a123947qoeiwur',
            'title' => 'Community',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/welcome-banner-design-two',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'Title',
                    'instructions' => 'To change text color wrap the part of text with span tag',
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
                    'key' => $block_key . 'link',
                    'name' => $block_key . 'link',
                    'label' => 'Button',
                    'type' => 'link',
                    'return_format' => 'array',
                ),
                array(
                    'key' => $block_key . 'section_bg_first',
                    'name' => $block_key . 'section_bg_first',
                    'type' => 'color_picker',
                    'label' => 'Set background color for first section',
                ),

                array(
                    'key' => $block_key . 'section_bg_second',
                    'name' => $block_key . 'section_bg_second',
                    'type' => 'color_picker',
                    'label' => 'Set background color for first section',
                ),
                array(
                    'key' => $block_key . 'description_form',
                    'name' => $block_key . 'description_form',
                    'type' => 'text',
                    'label' => 'Description to form',
                ),
                array(
                    'key' => $block_key . 'form_select',
                    'name' => $block_key . 'form_select',
                    'label' => 'Select form',
                    'type' => 'relationship',
                    'post_type' => array(
                        0 => 'wpcf7_contact_form',
                    ),
                    'taxonomy' => '',
                    'filters' => array(
                        0 => 'search',
                    ),
                    'return_format' => 'id',
                ),
            ),

        )
    );

endif;
