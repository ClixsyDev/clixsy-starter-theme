<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_personal_banner_design__one() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'personal-banner-design-one',
                'title'           => __('Personal Banner', 'clixsy'),
                'description'      => __('design v1', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/personal_banner-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('banner', 'person', 'bio'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/personal_banner_design_one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_personal_banner_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'personal_banner_design_one__';
    acf_add_local_field_group(array(
        'key' => 'location_16345f17b3ec75',
        'title' => 'Location design one',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/personal-banner-design-one',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $block_key . 'social_icons',
                'name' => $block_key . 'social_icons',
                'label' => 'Social icons',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'icon_key_1',
                        'name' => 'icon',
                        'type' => 'image',
                        'label' => 'Icon',
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail'
                    ),
                    array(
                        'key' => 'link_key_1',
                        'name' => 'link',
                        'label' => 'Link',
                        'type' => 'link',
                        'return_format' => 'url',
                    ),
                ),
            ),
            array(
                'key' => $block_key . 'bg',
                'name' => $block_key . 'bg',
                'type' => 'image',
                'label' => 'Background',
                'return_format' => 'url',
                'preview_size' => 'thumbnail'
            ),
            array(
                'key' => $block_key . 'persone',
                'name' => $block_key . 'persone',
                'type' => 'image',
                'label' => 'Persone image',
                'return_format' => 'id',
                'preview_size' => 'thumbnail'
            ),
            array(
                'key' => $block_key . 'title',
                'name' => $block_key . 'title',
                'type' => 'text',
                'label' => 'Name',
                'instructions' => '',
            ),
            array(
                'key' => $block_key . 'phone',
                'name' => $block_key . 'phone',
                'type' => 'text',
                'label' => 'Phone',
                'instructions' => '',
            ),
            array(
                'key' => $block_key . 'role',
                'name' => $block_key . 'role',
                'type' => 'text',
                'label' => 'Position/role',
                'instructions' => '',
            ),
            array(
                'key' => $block_key . 'mail',
                'name' => $block_key . 'mail',
                'type' => 'text',
                'label' => 'Email',
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
                'key' => $block_key . 'hover_text',
                'name' => $block_key . 'hover_text',
                'type' => 'text',
                'label' => 'Text on hover',
                'instructions' => '',
            ),
            array(
                'key' => $block_key . 'logo',
                'name' => $block_key . 'logo',
                'type' => 'image',
                'label' => 'Logo',
                'return_format' => 'id', 'preview_size' => 'thumbnail'
            )
        ),

    ));

endif;
