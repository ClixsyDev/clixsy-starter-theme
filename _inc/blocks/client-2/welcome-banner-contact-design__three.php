<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_welcome_banner_contact_design_three() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'welcome-banner-contact-design-three',
                'title'           => __('Welcome banner contact design three', 'clixsy'),
                'description'      => __('Contact page version Design v3.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/welcome-banner-contact-design__three.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('welcome', 'hero', 'contact'),
                'supports'        => array(
                    'jsx'    => true, // Enable support for JSX.
                ),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/welcome-banner-contact-design__three.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_welcome_banner_contact_design_three');

if (function_exists('acf_add_local_field_group')) {
    $block_key = 'welcome_banner_contact_design_three__';
    acf_add_local_field_group(array(
        'key'            => 'welcome_banner_contact_design_three',
        'title'          => 'Welcome hero',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/welcome-banner-contact-design-three',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $block_key . 'bg',
                'name' => $block_key . 'bg',
                'type' => 'extended-color-picker',
                'label' => 'Set background color for section',
                'wrapper' => array(
                    'width' => '50%',
                ),
            ),
            array(
                'key' => $block_key . 'block_bg',
                'name' => $block_key . 'block_bg',
                'type' => 'image',
                'label' => 'Background image',
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'wrapper' => array(
                    'width' => '50%',
                ),
            ),
            array(
                'key' => $block_key . 'title',
                'name' => $block_key . 'title',
                'type' => 'text',
                'label' => 'Title',
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
                'key' => $block_key . 'form_bg',
                'name' => $block_key . 'form_bg',
                'type' => 'extended-color-picker',
                'label' => 'Set background color for form',
                'wrapper' => array(
                    'width' => '33',
                    'class' => '',
                    'id' => '',
                ),
            ),
            array(
                'key' => $block_key . 'form_subtitle',
                'name' => $block_key . 'form_subtitle',
                'type' => 'text',
                'label' => 'Form subtitle',
                'wrapper' => array(
                    'width' => '33',
                    'class' => '',
                    'id' => '',
                ),
            ),
            array(
                'key' => $block_key . 'form_title',
                'name' => $block_key . 'form_title',
                'type' => 'text',
                'label' => 'Form title',
                'wrapper' => array(
                    'width' => '33',
                    'class' => '',
                    'id' => '',
                ),
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
                'wrapper' => array(
                    'width' => '50%',
                ),
            ),
            array(
                'key' => $block_key . 'form_description',
                'name' => $block_key . 'form_description',
                'type' => 'wysiwyg',
                'label' => 'Form description',
                'wrapper' => array(
                    'width' => '50%',
                ),
            ),
        )
    ));
}
