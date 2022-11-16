<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_welcome_banner_contact_design_two()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'welcome-banner-contact-design-two',
                'title'           => __('Welcome banner contact design two', 'clixsy'),
                'description'      => __('Contact page version Design v2.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/welcome-banner-contact-design__two.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('welcome', 'hero', 'contact'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/welcome-banner-contact-design__two.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_welcome_banner_contact_design_two');

if (function_exists('acf_add_local_field_group')) {
    $block_key = 'welcome_banner_contact_design_two__';
    acf_add_local_field_group(array(
        'key'            => 'welcome_banner_contact_design_two',
        'title'          => 'Welcome hero',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/welcome-banner-contact-design-two',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $block_key . 'bg',
                'name' => $block_key . 'bg',
                'type' => 'color_picker',
                'label' => 'Set background color for section',
            ),
            array(
                'key' => $block_key . 'top_description',
                'name' => $block_key . 'top_description',
                'type' => 'text',
                'label' => 'Top description',
            ),
            array(
                'key' => $block_key . 'title',
                'name' => $block_key . 'title',
                'type' => 'text',
                'label' => 'Title',
            ),
            array(
                'key' => $block_key . 'bottom_description',
                'name' => $block_key . 'bottom_description',
                'type' => 'text',
                'label' => 'Bottom description',
            ),
            array(
                'key' => $block_key . 'tel',
                'name' => $block_key . 'tel',
                'type' => 'text',
                'label' => 'Number phone',
            ),
            array(
                'key' => $block_key . 'image',
                'name' => $block_key . 'image',
                'type' => 'image',
                'label' => 'Image',
                'return_format' => 'array',
                'preview_size' => 'thumbnail'
            ),
            array(
                'key' => $block_key . 'form_bg',
                'name' => $block_key . 'form_bg',
                'type' => 'color_picker',
                'label' => 'Set background color for form',
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
                'key' => $block_key . 'form_description',
                'name' => $block_key . 'form_description',
                'type' => 'wysiwyg',
                'label' => 'Form description',
            ),
        )
    ));
}
