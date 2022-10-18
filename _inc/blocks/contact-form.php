<?php

/**
 * Functions to register Contact Form Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */

function register_contact_form()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'contact-form',
                'title'           => __('Contact Form', 'clixsy'),
                'description'	  => __('Contact Form', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/contact-form.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords' 		  => array('welcome', 'banner'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/contact.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_contact_form');

if (function_exists('acf_add_local_field_group')) {
    $key = 'contact_form';
    acf_add_local_field_group(array(
        'key'            => 'contact_form',
        'title'          => 'Contact Form',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/contact-form',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $key . '_cf_title',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_shortcode',
                'label' => 'Form Shortcode',
                'name' => 'form_shortcode',
                'type' => 'text',
            ),
        )
    ));
}
