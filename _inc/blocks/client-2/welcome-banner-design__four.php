<?php

/**
 * Functions to register welcome banner Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_welcome_banner__case_design_four()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'welcome-banner-4',
                'title'           => __('Welcome Banner 4', 'clixsy'),
                'description'      => __('design v4', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/welcome-banner-design__four.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords'           => array('welcome', 'banner', 'v4'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/welcome-banner-case-design-four.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_welcome_banner__case_design_four');

if (function_exists('acf_add_local_field_group')) {
    $block_key = 'welcome_banner__design_four_';
    acf_add_local_field_group(array(
        'key'            => $block_key . 'welcome_banner_design_four',
        'title'          => 'Welcome Banner design 4',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/welcome-banner-4',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $block_key . 'bg',
                'name' => $block_key . 'bg',
                'type' => 'image',
                'label' => 'Background image',
                'return_format' => 'id',
                'preview_size' => 'thumbnail'
            ),
            array(
                'key' => $block_key . 'logo',
                'name' => $block_key . 'logo',
                'type' => 'image',
                'label' => 'Logo',
                'return_format' => 'id',
                'preview_size' => 'thumbnail'
            ),
            array(
                'key' => $block_key . 'bannertag',
                'label' => 'Banner Heading Tag',
                'name' => 'banner_heading_tag',
                'type' => 'radio',
                'instructions' => 'Select the heading tag to use.',
                'choices' => array(
                    'h1' => 'H1',
                    'h2' => 'H2',
                    'h3' => 'H3',
                    'h4' => 'H4',
                    'h5' => 'H5',
                    'h6' => 'H6'
                ),
                'default_value' => 'h1',
                'layout' => 'horizontal'
            ),
            array(
                'key' => $block_key . 'title',
                'name' => $block_key . 'title',
                'type' => 'text',
                'label' => 'Title',
            ),
            array(
                'key' => $block_key . 'subtitle',
                'name' => $block_key . 'subtitle',
                'type' => 'text',
                'label' => 'Subtitle',
            ),
            array(
                'key' => $block_key . 'link',
                'name' => $block_key . 'link',
                'label' => 'Select link',
                'type' => 'link',
                'return_format' => 'array',
            ),
        )
    ));
}
