<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_big_auto_footer_form()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'big-auto-footer-form',
                'title'           => __('Big Auto Footer Form', 'clixsy'),
                'description'      => __('Design v2.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/footer-form.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('Footer Form', 'Big Auto Footer Form', 'form', 'footer'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/footer_form.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_big_auto_footer_form');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'big_auto_footer_form__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . 'a123947qoeiwur',
            'title' => 'Community',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/big-auto-footer-form',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'image',
                    'name' => $block_key . 'image',
                    'type' => 'image',
                    'label' => 'Image',
                    'return_format' => 'id',
                    'preview_size' => 'thumbnail'
                ),
                array(
                    'key' => $block_key . 'title_form',
                    'name' => $block_key . 'title_form',
                    'type' => 'text',
                    'label' => 'Title Form',
                ),
                array(
                    'key' => $block_key . 'description_form',
                    'name' => $block_key . 'description_form',
                    'type' => 'text',
                    'label' => 'Description Form',
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
                    'key' => $block_key . 'disclaimer',
                    'name' => $block_key . 'disclaimer',
                    'type' => 'wysiwyg',
                    'label' => 'Form disclaimer',
                ),
            ),
        )
    );

endif;
