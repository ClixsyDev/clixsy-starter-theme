<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_text_form_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'text-form-design-one',
                'title'           => __('Text with form and citation', 'clixsy'),
                'description'      => __('', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/text-form-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('form', 'text', 'contact', 'citation'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/text-form-design__one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_text_form_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'text_form_design_one__';
    acf_add_local_field_group(array(
        'key' => 'text_with_form_16345f17b3ec75',
        'title' => 'Text with form and citation',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/text-form-design-one',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $block_key . 'title',
                'name' => $block_key . 'title',
                'type' => 'textarea',
                'label' => 'title',
                'instructions' => 'Wrap words with <b>span</b> tag to make them highlighted with accent color',
            ),
            array(
                'key' => $block_key . 'citation',
                'name' => $block_key . 'citation',
                'type' => 'wysiwyg',
                'label' => 'Citation',
            ),
            array(
                'key' => $block_key . 'author',
                'name' => $block_key . 'author',
                'type' => 'text',
                'label' => 'Author',
                'instructions' => '',
            ),
            array(
                'key' => $block_key . 'icon',
                'name' => $block_key . 'icon',
                'type' => 'image',
                'label' => 'Icon',
                'return_format' => 'id', 'preview_size' => 'thumbnail'
            ),
            array(
                'key' => $block_key . 'description',
                'name' => $block_key . 'description',
                'type' => 'wysiwyg',
                'label' => 'Description near icon',
                'instructions' => '',
            ),
            array(
                'key' => $block_key . 'form_description',
                'name' => $block_key . 'form_description',
                'type' => 'textarea',
                'label' => 'Form description',
                'instructions' => '',
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

    ));

endif;