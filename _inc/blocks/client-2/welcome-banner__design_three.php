<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_welcome_banner_design_three()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'welcome-banner-design-three',
                'title'           => __('Welcome banner design three', 'clixsy'),
                'description'      => __('Design v3.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/welcome-banner-design__three.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('banner', 'welcome', 'hero', 'top', 'three'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/welcome-banner__design_three.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_welcome_banner_design_three');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'welcome_banner__design_three__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . 'a123947qoeiwur',
            'title' => 'Community',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/welcome-banner-design-three',
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
                    'key' => $block_key . 'subtitle',
                    'name' => $block_key . 'subtitle',
                    'type' => 'text',
                    'label' => 'Subtitle',
                ),
                array(
                    'key' => $block_key . 'select_font',
                    'name' => $block_key . 'select_font',
                    'label' => 'Select the font of the subtitle',
                    'type' => 'radio',
                    'choices' => array(
                        'Normal' => 'Normal',
                        'Bold' => 'Bold',
                    ),
                    'layout' => 'vertical',
                    'return_format' => 'value',
                ),
                array(
                    'key' => $block_key . 'subtitle_second',
                    'name' => $block_key . 'subtitle_second',
                    'type' => 'text',
                    'label' => 'Subtitle second',
                ),
                array(
                    'key' => $block_key . 'bg',
                    'name' => $block_key . 'bg',
                    'type' => 'color_picker',
                    'label' => 'Set background color for section',
                ),
                array(
                    'key' => $block_key . 'background_image',
                    'label' => 'Background image',
                    'name' => $block_key . 'background_image',
                    'type' => 'image',
                    'return_format' => 'id',
                    'preview_size' => 'medium',
                    'library' => 'all',
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
                array(
                    'key' => $block_key . 'form_disclaimer',
                    'name' => $block_key . 'form_disclaimer',
                    'type' => 'wysiwyg',
                    'label' => 'Disclaimer to form',
                ),
            ),

        )
    );

endif;
