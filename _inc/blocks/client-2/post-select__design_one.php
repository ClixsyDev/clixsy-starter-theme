<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_page_select_design__one() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'pag-select-design-one',
                'title'           => __('Select pages', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/page_select-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('select', 'archive', 'posts'),
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
add_action('acf/init', 'register_page_select_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'page_select_design_one__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . '16345f127b35',
            'title' => 'Community',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/pag-select-design-one',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'Title',
                    'instructions' => '',
                ),
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
                array(
                    'key' => $block_key . 'disable_title',
                    'name' => $block_key . 'disable_title',
                    'label' => 'Hide title',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                ),
                array(
                    'key' => $block_key . 'disable_description',
                    'name' => $block_key . 'disable_description',
                    'label' => 'Hide description',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                ),
                array(
                    'key' => $block_key . 'disable_date',
                    'name' => $block_key . 'disable_date',
                    'label' => 'Hide date',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                ),
            ),

        )
    );

endif;
