<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_attorney_group_section_design_two()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'attorney-group-section-design-two',
                'title'           => __('Attorney group contact', 'clixsy'),
                'description'      => __('Design v2.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/attorney-group-section__design--two.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('attorney', 'group', 'contact'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/attorney-group-section__design--two.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_attorney_group_section_design_two');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'attorney_group_section_design_two__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . 'a123947qoeiasdawur',
            'title' => 'Community',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/attorney-group-section-design-two',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'first_text',
                    'name' => $block_key . 'first_text',
                    'type' => 'text',
                    'label' => 'First text',
                ),
                array(
                    'key' => $block_key . 'second_text',
                    'name' => $block_key . 'second_text',
                    'type' => 'text',
                    'label' => 'Second text',
                ),
                array(
                    'key' => $block_key . 'section_bg',
                    'name' => $block_key . 'section_bg',
                    'type' => 'color_picker',
                    'label' => 'Set bg color for text section',
                ),
                array(
                    'key' => $block_key . 'form_bg',
                    'name' => $block_key . 'form_bg',
                    'type' => 'color_picker',
                    'label' => 'Set bg color for form section',
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
                    'key' => $block_key . 'form_text',
                    'name' => $block_key . 'form_text',
                    'type' => 'text',
                    'label' => 'Second text',
                ),


            ),

        )
    );

endif;
