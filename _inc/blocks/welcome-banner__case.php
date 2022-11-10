<?php

/**
 * Functions to register welcome banner Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_welcome_banner__case() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'welcome-banner-case',
                'title'           => __('Welcome Banner for case page', 'clixsy'),
                'description'      => __('design v1', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/welcome-banner__case--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords'           => array('welcome', 'banner', 'case'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/welcome-banner__case--preview.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_welcome_banner__case');

if (function_exists('acf_add_local_field_group')) {
    $block_key = 'welcome_banner__case_';
    acf_add_local_field_group(array(
        'key'            => $block_key . 'welcome_banner',
        'title'          => 'Welcome Banner',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/welcome-banner-case',
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
                'key' => $block_key . 'link',
                'name' => $block_key . 'link',
                'label' => 'Select link',
                'type' => 'link',
                'return_format' => 'array',
            ),
            array(
                'key' => $block_key . 'hover_text',
                'name' => $block_key . 'hover_text',
                'type' => 'text',
                'label' => 'Text on hover',
                'instructions' => '',
            ),
            array(
                'key' => $block_key . 'bg',
                'name' => $block_key . 'bg',
                'type' => 'image',
                'label' => 'Background image',
                'return_format' => 'id',
                'preview_size' => 'thumbnail'
            ),
            array(
                'key' => $block_key . 'icon',
                'name' => $block_key . 'icon',
                'type' => 'image',
                'label' => 'Icon',
                'return_format' => 'id',
                'preview_size' => 'thumbnail'
            ),
            array(
                'key' => $block_key . 'overlay',
                'name' => $block_key . 'overlay',
                'type' => 'extended-color-picker',
                'label' => 'Overlay color',
            ),
        )
    ));
}
