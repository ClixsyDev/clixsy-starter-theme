<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_how_much_cost() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'how-much-cost',
                'title'           => __('How much cost', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/how-much-cost.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('cost', 'how much'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/how-much-cost.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_how_much_cost');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'how_much_cost__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . 'block',
            'title' => 'Community',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/how-much-cost',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'Title',
                ),
                array(
                    'key' => $block_key . 'description',
                    'name' => $block_key . 'description',
                    'type' => 'text',
                    'label' => 'Description',
                ),
                array(
                    'key' => $block_key . 'link',
                    'name' => $block_key . 'link',
                    'label' => 'Button',
                    'type' => 'link',
                    'return_format' => 'array',
                ),
                array(
                    'key' => $block_key . 'block_bg',
                    'name' => $block_key . 'block_bg',
                    'type' => 'color_picker',
                    'label' => 'Set background color for first section',
                ),
                array(
                    'key' => $block_key . 'select',
                    'name' => $block_key . 'select',
                    'type' => 'color_picker',
                    'label' => 'Set background color for first section',
                ),
                array(
                    'key' => $block_key . 'select',
                    'name' => $block_key . 'select',
                    'label' => 'Select the width of the block',
                    'type' => 'radio',
                    'choices' => array(
                        'Default' => 'Default',
                        'Wider' => 'Wider',
                    ),
                    'layout' => 'vertical',
                    'return_format' => 'value',
                ),
            ),

        )
    );

endif;
