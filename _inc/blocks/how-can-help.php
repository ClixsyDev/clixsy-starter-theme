<?php

/**
 * Functions to register how can help Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_how_can_help()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'how-can-help',
                'title'           => __('How Can Help', 'clixsy'),
                'description'      => __('How Can Help', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/how-can-help.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords'           => array('How', 'can', 'help'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/how_can_help.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_how_can_help');

if (function_exists('acf_add_local_field_group')) {
    $key = 'how_can_help';
    acf_add_local_field_group(array(
        'key'            => 'how_can_help',
        'title'          => 'how can help',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/how-can-help',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $key . '_attorney_image',
                'label' => 'Attorney Image',
                'name' => $key . '_attorney_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => $key . '_company_logo',
                'label' => 'Company Logo',
                'name' => $key . '_company_logo',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => $key . '_state_icon',
                'label' => 'State Icon',
                'name' => $key . '_state_icon',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => $key . '_state_name',
                'label' => 'State Name',
                'name' => $key . '_state_name',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_title',
                'label' => 'Title',
                'name' => $key . '_title',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_form_description',
                'label' => 'Form Description',
                'name' => $key . '_form_description',
                'type' => 'textarea',
            ),
            array(
                'key' => $key . '_form_shortcode',
                'label' => 'Form Shortcode',
                'name' => $key . '_form_shortcode',
                'type' => 'post_object',
            ),
            array(
                'key' => $key . '_form_shortcode',
                'label' => 'Form',
                'name' => $key . '_form_shortcode',
                'type' => 'post_object',
                'post_type' => array(
                    0 => 'wpcf7_contact_form',
                ),
                'return_format' => 'id',
                'ui' => 1,
            ),
        )
    ));
}
