<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_auto_accident_resources()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'auto accident resources',
                'title'           => __('Auto Accident Resources', 'clixsy'),
                'description'      => __('Auto Accident Resources', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/auto-accident-resources.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('Auto Accident Resources', 'Accident', 'Auto', 'Resources'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/auto_accident_resources.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_auto_accident_resources');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'auto_accident_resources__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . 'block',
            'title' => 'Auto Accident Resources',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/auto-accident-resources',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'items',
                    'name' => $block_key . 'items',
                    'label' => 'FAQ',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => array(
                        array(
                            'key' =>  $block_key . 'faq_title',
                            'label' => 'Faq Title',
                            'name' => $block_key . 'faq_title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => $block_key . 'faq_description',
                            'name' => $block_key . 'faq_description',
                            'type' => 'wysiwyg',
                            'label' => 'Description',
                        ),
                        array(
                            'key' => $block_key . 'faq_link',
                            'name' => $block_key . 'faq_link',
                            'label' => 'Faq Link',
                            'type' => 'link',
                            'return_format' => 'array',
                        ),
                        array(
                            'key' =>  $block_key . 'faq_number',
                            'label' => 'Faq Number',
                            'name' => $block_key . 'faq_number',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' =>  $block_key . 'title',
                    'label' => 'Title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                ),
                array(
                    'key' =>  $block_key . 'subtitle',
                    'label' => 'Subtitle',
                    'name' => $block_key . 'subtitle',
                    'type' => 'text',
                ),

            ),

        )
    );

endif;
