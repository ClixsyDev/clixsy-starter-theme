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
                    'color' => true,
                    'jsx' => true
                ),
                'keywords' 		  => array('welcome', 'banner'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/contact.png',
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
                'key' => $key . '_title',
                'label' => 'Title',
                'name' => $key . '_title',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_form_id',
                'label' => 'Form',
                'name' => $key . '_form_id',
                'type' => 'post_object',
                'post_type' => array(
                    0 => 'wpcf7_contact_form',
                ),
                'return_format' => 'id',
                'ui' => 1,
            ),
            array(
                'key' => $key . '_change_form_style',
                'name' => $key . '_change_form_style',
                'label' => 'Dark style',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
            ),
        )
    ));
}
