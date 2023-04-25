<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_page_select_design__two()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'pag-select-design-two',
                'title'           => __('Select team member', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/team-member-select-cpt.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('select', 'archive', 'posts', 'team member select'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/page_select-design__one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_page_select_design__two');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'page_select_design_two__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . '16345f127b35',
            'title' => 'Community',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/pag-select-design-two',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'select_pages',
                    'name' => $block_key . 'select_pages',
                    'label' => 'Select pages/posts',
                    'type' => 'relationship',
                    'post_type' => '',
                    'taxonomy' => '',
                    'filters' => array(
                        0 => 'search',
                        1 => 'post_type',
                    ),
                    'elements' => array(
                        0 => 'featured_image',
                    ),
                    'return_format' => 'id',
                ),
            ),

        )
    );

endif;
