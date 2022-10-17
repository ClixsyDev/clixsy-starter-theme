<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_welcome_banner__contact()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'welcome-banner--contact',
                'title'           => __('Welcome hero with running line', 'clixsy'),
                'description'      => __('Contact page version', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/welcome-banner__contact--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('welcome', 'hero', 'contact'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/welcome-banner__contact.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_welcome_banner__contact');

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key'            => 'guttenber_welcome_banner__contact',
        'title'          => 'Welcome hero',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/welcome-banner--contact',
                ),
            ),
        ),
        'fields'         => array(
            array(
                'key' => 'welcome_hero__contact_bg',
                'name' => 'welcome_hero__contact_bg',
                'type' => 'image',
                'label' => 'Background image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'welcome_hero__contact_persone',
                'name' => 'welcome_hero__contact_persone',
                'type' => 'image',
                'label' => 'Persone image',
                'return_format' => 'id',
                'preview_size' => 'thumbnail',
            ),
            array(
                'key' => 'welcome_hero__contact_form_title',
                'name' => 'welcome_hero__contact_form_title',
                'type' => 'text',
                'label' => 'Form title',
                'instructions' => 'If you wrap words in <b>span</b> tag words will be highlighted with accent color',
            ),
            array(
                'key' => 'welcome_hero__contact_form_description',
                'name' => 'welcome_hero__contact_form_description',
                'type' => 'textarea',
                'label' => 'Form description',
            ),
            array(
                'key' => 'welcome_hero__contact_form_select',
                'name' => 'welcome_hero__contact_form_select',
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
                'key' => 'welcome_hero__contact_running_repeater',
                'name' => 'welcome_hero__contact_running_repeater',
                'label' => 'Running line items',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_6345f20f58b9c',
                        'name' => 'text',
                        'label' => 'Text',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_6345f21458b9d',
                        'name' => 'icon',
                        'label' => 'Icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                ),
            ),
        )
    ));
}
