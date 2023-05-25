<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_title_banner()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'title-banner',
                'title'           => __('Title banner', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/title-banner.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('banner', 'title'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_title_banner');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'title_block__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . 'title_banner',
            'title' => 'Title banner',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/title-banner',
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
                    'key' => $block_key . 'background_image',
                    'label' => 'Background image',
                    'name' => $block_key . 'background_image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
            ),
        )
    );
endif;