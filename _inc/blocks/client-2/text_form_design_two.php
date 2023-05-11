<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_text_form_design__two()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'text-form-design-two',
                'title'           => __('Text with form on the right side.', 'clixsy'),
                'description'      => __('Design two', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/text-form-design__two--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('form', 'text', 'contact', 'citation'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/text-form-design__two.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_text_form_design__two');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'text_form_design_two__';
    acf_add_local_field_group(array(
        'key' => 'text_with_form_16345f17b3ec7523swe3',
        'title' => 'Text with form and citation',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/text-form-design-two',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $block_key . 'subtitle',
                'name' => $block_key . 'subtitle',
                'type' => 'text',
                'label' => 'Subtitle',
                'instructions' => 'Wrap words with <b>span</b> tag to make them highlighted with accent color',
            ),
            array(
                'key' => $block_key . 'title',
                'name' => $block_key . 'title',
                'type' => 'text',
                'label' => 'Title',
                'instructions' => 'Wrap words with <b>span</b> tag to make them highlighted with accent color',
            ),
            array(
                'key' => $block_key . 'main_content',
                'name' => $block_key . 'main_content',
                'type' => 'wysiwyg',
                'label' => 'Main content',
                'instructions' => '',
            ),
            array(
                'key' => $block_key . 'form_title',
                'name' => $block_key . 'form_title',
                'type' => 'text',
                'label' => 'Form title',
                'instructions' => 'Wrap with span tag to change color',
            ),
            array(
                'key' => $block_key . 'form_description',
                'name' => $block_key . 'form_description',
                'type' => 'textarea',
                'label' => 'Form description',
                'instructions' => '',
            ),
            array(
                'key' => $block_key . 'disclaimer',
                'name' => $block_key . 'disclaimer',
                'type' => 'wysiwyg',
                'label' => 'Form disclaimer',
            ),
            // array(
            //     'key' => $block_key . 'form_select',
            //     'name' => $block_key . 'form_select',
            //     'label' => 'Select form',
            //     'type' => 'relationship',
            //     'post_type' => array(
            //         0 => 'wpcf7_contact_form',
            //     ),
            //     'taxonomy' => '',
            //     'filters' => array(
            //         0 => 'search',
            //     ),
            //     'return_format' => 'id',
            // ),

            array(
                'key' => $block_key . 'button',
                'name' => $block_key . 'button',
                'label' => 'Button',
                'type' => 'link',
                'return_format' => 'array',
            ),
        ),

    ));

endif;
