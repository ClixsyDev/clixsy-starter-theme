<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_settlement_case_type()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'settlement-case-type',
                'title'           => __('Settlement case type', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/settlement-case-type.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('settlement', 'case type', 'offer', 'final'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/settlement-case-type.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_settlement_case_type');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'settlement_case_type__';
    acf_add_local_field_group(
        array(
            'key' => $block_key,
            'title' => 'Settlement case type',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/settlement-case-type',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'background_image',
                    'label' => 'Background image',
                    'name' => $block_key . 'background_image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'Title',
                ),
                array(
                    'key' => $block_key .'description',
                    'name' => $block_key .'description',
                    'type' => 'wysiwyg',
                    'label' => 'Description',
                    'instructions' => '',
                ),
                array(
                    'key' => $block_key . 'link',
                    'name' => $block_key . 'link',
                    'label' => 'Button',
                    'type' => 'link',
                    'return_format' => 'array',
                ),
                array(
                    'key' => $block_key . 'insurance_offer',
                    'name' => $block_key . 'insurance_offer',
                    'type' => 'text',
                    'label' => 'Insurance offer',
                ),
                array(
                    'key' => $block_key . 'final_settlement',
                    'name' => $block_key . 'final_settlement',
                    'type' => 'text',
                    'label' => 'Final settlement',
                ),
                array(
                    'key' => $block_key .'description_settlement',
                    'name' => $block_key .'description_settlement',
                    'type' => 'wysiwyg',
                    'label' => 'Description settlement',
                    'instructions' => '',
                ),
            ),

        )
    );

endif;
