<?php

/**
 * Functions to register welcome banner Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_welcome_banner__single_team_member()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'welcome-banner-single-team-member',
                'title'           => __('Welcome Banner for single team member', 'clixsy'),
                'description'      => __('design v1', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/welcome-banner-single-team-member.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords'           => array('welcome', 'banner', 'single team member'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/welcome-banner-case-design-two.php.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_welcome_banner__single_team_member');

if (function_exists('acf_add_local_field_group')) {
    $block_key = 'welcome_banner__single_team_member_';
    acf_add_local_field_group(array(
        'key'            => $block_key . 'welcome_banner_design_2',
        'title'          => 'Welcome Banner design 2',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/welcome-banner-single-team-member',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $block_key . 'name',
                'name' => $block_key . 'name',
                'type' => 'text',
                'label' => 'Attorney Name',
            ),
            array(
                'key' => $block_key . 'image',
                'name' => $block_key . 'image',
                'type' => 'image',
                'label' => 'Attorney image',
                'return_format' => 'id',
                'preview_size' => 'thumbnail'
            ),
            array(
                'type' => 'text',
                'key' => $block_key . 'title',
                'name' => 'title',
                'label' => 'Title',
                'default_value' => '',
                'placeholder' => 'Enter title at firm...'
            ),
            array(
                'type' => 'text',
                'key' => $block_key . 'position',
                'name' => 'position',
                'label' => 'Position',
                'default_value' => '',
                'placeholder' => 'Enter position at firm...'
            ),
            array(
                'key' => $block_key . 'link',
                'name' => $block_key . 'link',
                'label' => 'Select link',
                'type' => 'link',
                'return_format' => 'array',
            ),
            array(
                'key' => $block_key . 'bg',
                'name' => $block_key . 'bg',
                'type' => 'image',
                'label' => 'Background image',
                'return_format' => 'id',
                'preview_size' => 'thumbnail'
            ),
        )
    ));
}
