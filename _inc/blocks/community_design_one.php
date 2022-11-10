<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_community_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'community-design-one',
                'title'           => __('Community', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/community-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('community',),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/community-design__one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_community_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'community_design_one__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . '16345f17b35',
            'title' => 'Community',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/community-design-one',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'organizations',
                    'name' => $block_key . 'organizations',
                    'label' => 'Organizations',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => array(
                        array(
                            'key' => 'community_v1_img',
                            'name' => 'community_v1_img',
                            'type' => 'image',
                            'label' => 'Image',
                            'return_format' => 'id',
                            'preview_size' => 'thumbnail'
                        ),
                        array(
                            'key' => 'community_v1_title',
                            'name' => 'community_v1_title',
                            'type' => 'text',
                            'label' => 'Title',
                            'instructions' => '',
                        ),
                        array(
                            'key' => 'community_v1_decription',
                            'name' => 'community_v1_decription',
                            'type' => 'textarea',
                            'label' => 'Description',
                            'instructions' => '',
                        ),
                        array(
                            'key' => 'community_v1_button',
                            'name' => 'community_v1_button',
                            'label' => 'Button',
                            'type' => 'link',
                            'return_format' => 'array',
                        ),
                    ),
                ),
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'Title',
                    'instructions' => 'Wrap with span tag to change color',
                ),
                array(
                    'key' => $block_key . 'description',
                    'name' => $block_key . 'description',
                    'type' => 'textarea',
                    'label' => 'Description',
                    'instructions' => '',
                ),
                array(
                    'key' => $block_key . 'subtitle',
                    'name' => $block_key . 'subtitle',
                    'type' => 'text',
                    'label' => 'Subtitle',
                    'instructions' => '',
                ),
                array(
                    'key' => $block_key . 'button',
                    'name' => $block_key . 'button',
                    'label' => 'Button',
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
            ),

        )
    );

endif;
