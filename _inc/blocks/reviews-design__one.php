<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_reviews_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'reviews-design-one',
                'title'           => __('Reviews with rating', 'clixsy'),
                'description'      => __('For clients reviews/verdicts', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/reviews-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('reviews', 'verdicts'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/reviews-design__one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_reviews_design__one');

if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'group_6345f17b3ec75',
        'title' => 'Reviews design one',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/reviews-design-one',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => 'field_6345f20558b9b',
                'name' => 'reviews_design_one_select',
                'label' => 'Select reviews',
                'type' => 'relationship',

                'post_type' => array(
                    0 => 'reviews',
                ),
                'taxonomy' => '',
                'filters' => array(
                    0 => 'search',
                ),
                'elements' => array(
                    0 => 'featured_image',
                ),
                'min' => '',
                'max' => '',
                'return_format' => 'id',
            ),
            array(
                'key' => 'reviews_design_one_bg',
                'name' => 'reviews_design_one_bg',
                'type' => 'image',
                'label' => 'Background image',
                'return_format' => 'id',
                'preview_size' => 'thumbnail',
            ),
            array(
                'key' => 'reviews_design_one_title',
                'name' => 'reviews_design_one_title',
                'type' => 'text',
                'label' => 'Title',
                'instructions' => '',
            ),
            array(
                'key' => 'reviews_design_one_arrows',
                'label' => 'Display Arrows',
                'name' => 'reviews_design_one_arrows',
                'type' => 'true_false',
            ),
            array(
                'key' => 'reviews_design_one_next_section_arrow',
                'label' => 'Next Section Arrow',
                'name' => 'reviews_design_one_next_section_arrow',
                'type' => 'true_false',
            ),
            array(
                'key' => 'reviews_design_one_next_section_selector',
                'name' => 'reviews_design_one_next_section_selector',
                'type' => 'text',
                'label' => 'Next Section Selector',
                'instructions' => '',
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'reviews_design_one_next_section_arrow',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ),
        ),
    ));

endif;
