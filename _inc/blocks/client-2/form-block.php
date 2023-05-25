<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */

function register_form_block()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'form-block',
                'title'           => __('Form block', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/form-block.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('form'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_form_block');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'form_block__';
    acf_add_local_field_group(
        array(
            'key' => $block_key,
            'title' => 'Form block',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/form-block',
                    ),
                ),
            ),
            'fields' => array(
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
                    'key' => $block_key . 'form_subtitle',
                    'name' => $block_key . 'form_subtitle',
                    'type' => 'text',
                    'label' => 'Form subtitle',
                ),
                array(
                    'key' => $block_key . 'form_title',
                    'name' => $block_key . 'form_title',
                    'type' => 'text',
                    'label' => 'Form title',
                ),
                array(
                    'key' => $block_key . 'form_description',
                    'name' => $block_key . 'form_description',
                    'type' => 'wysiwyg',
                    'label' => 'Form description',
                ),
            ),

        )
    );

endif;
