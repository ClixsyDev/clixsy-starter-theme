<?php

/**
 * Functions to register Cases We Handle Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_cases_we_handle_two() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'cases-we-handle-2',
                'title'           => __('Cases We Handle design 2', 'clixsy'),
                'description'      => __('Cases We Handle Design v2.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/cases-we-handle-design__two.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords'           => array('Types', 'Auto', 'Auto Accident Types'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/cases-we-handle-design__two.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_cases_we_handle_two');

if (function_exists('acf_add_local_field_group')) {
    $key = 'cases_we_handle_two';
    acf_add_local_field_group(array(
        'key'            => 'cases_we_handle_two',
        'title'          => 'Cases We Handle 2',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/cases-we-handle-2',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $key . '_case_items',
                'label' => 'Case Items',
                'name' => $key . '_case_items',
                'type' => 'relationship',
                'post_type' => array(
                    0 => 'page',
                ),
                'filters' => array(
                    0 => 'search',
                ),
                'elements' => array(
                    0 => 'featured_image',
                ),
                'max' => 5,
                'return_format' => 'id',
            ),
            array(
                'key' => $key . '_title',
                'label' => 'Title',
                'name' => $key . '_title',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_block_bg',
                'name' => $key . '_block_bg',
                'type' => 'color_picker',
                'label' => 'Set background color for section',
            ),
            array(
                'key' => $key . '_button_1',
                'label' => 'Button 1',
                'name' => $key . '_button_1',
                'type' => 'link',
            ),
            array(
                'key' => $key . '_button_2',
                'label' => 'Button 2',
                'name' => $key . '_button_2',
                'type' => 'link',
            ),
            array(
                'key' => $key . '_button_size',
                'name' => $key . '_button_size',
                'label' => 'Button size',
                'type' => 'radio',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'btn_xl' => 'huge button',
                    'btn_md' => 'Large button',
                    'btn_sm' => 'small button',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
            ),
        )
    ));
}
