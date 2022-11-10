<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_win_case_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'win-case-design-one',
                'title'           => __('Win case', 'clixsy'),
                'description'      => __('Design v1. Section with case and form', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/win_case-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('win', 'case', 'form'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/win_case-design__one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_win_case_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'win_case_design_one__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . '16345f142373b35',
            'title' => 'Win case',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/win-case-design-one',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'title',
                    'instructions' => 'Wrap with span tag to change a color',
                ),
                array(
                    'key' => $block_key . 'description',
                    'name' => $block_key . 'description',
                    'type' => 'wysiwyg',
                    'label' => 'Description',
                    'instructions' => '',
                ),
                array(
                    'key' => $block_key . 'persone',
                    'name' => $block_key . 'persone',
                    'type' => 'image',
                    'label' => 'Persone',
                    'return_format' => 'id',
                    'preview_size' => 'thumbnail'
                ),
                array(
                    'key' => $block_key . 'area',
                    'name' => $block_key . 'area',
                    'type' => 'image',
                    'label' => 'Region',
                    'return_format' => 'id',
                    'preview_size' => 'thumbnail'
                ),
                array(
                    'key' => $block_key . 'area_title',
                    'name' => $block_key . 'area_title',
                    'type' => 'text',
                    'label' => 'Region title',
                    'instructions' => '',
                ),
                array(
                    'key' => $block_key . 'cta',
                    'name' => $block_key . 'cta',
                    'type' => 'text',
                    'label' => 'Call to action text',
                    'instructions' => '',
                ),
                array(
                    'key' => $block_key . 'cta_link',
                    'name' => $block_key . 'cta_link',
                    'label' => 'Call to action link',
                    'type' => 'link',
                    'return_format' => 'array',
                ),
                array(
                    'key' => $block_key . 'button',
                    'name' => $block_key . 'button',
                    'label' => 'Button',
                    'type' => 'link',
                    'return_format' => 'array',
                ),
                array(
                    'key' => $block_key . 'form',
                    'name' => $block_key . 'form',
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
                    'type' => 'textarea',
                    'label' => 'Form description',
                    'instructions' => '',
                ),
                array(
                    'key' => $block_key . 'background',
                    'name' => $block_key . 'background',
                    'type' => 'image',
                    'label' => 'Background image',
                    'return_format' => 'id',
                    'preview_size' => 'thumbnail'
                ),
            ),

        )
    );

endif;
