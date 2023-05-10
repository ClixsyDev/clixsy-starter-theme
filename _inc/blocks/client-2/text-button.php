<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_text_button()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'text-button',
                'title'           => __('Text button', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/text-button.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('text', 'button', 'text in the middle', 'button in the middle'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/fights-for-you.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_text_button');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'text_button__';
    acf_add_local_field_group(
        array(
            'key' => $block_key,
            'title' => 'Text button',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/text-button',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'cost_title',
                    'name' => $block_key . 'cost_title',
                    'type' => 'text',
                    'label' => 'Title',
                ),
                array(
                    'key' => $block_key . 'cost_link',
                    'name' => $block_key . 'cost_link',
                    'label' => 'Button',
                    'type' => 'link',
                    'return_format' => 'array',
                ),
                array(
                    'key' => $block_key . 'cost_block_bg',
                    'name' => $block_key . 'cost_block_bg',
                    'type' => 'color_picker',
                    'label' => 'Set background color for first section',
                ),

            ),

        )
    );

endif;
