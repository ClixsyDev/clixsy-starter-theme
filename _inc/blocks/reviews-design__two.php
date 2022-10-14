<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_reviews_design__two()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'reviews-design-two',
                'title'           => __('Reviews with rating', 'clixsy'),
                'description'      => __('For clients reviews/verdicts/testimonials', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/reviews-design__two--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('reviews', 'verdicts', 'testimonials'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/reviews-design__two.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_reviews_design__two');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'reviews_design_two_';
    acf_add_local_field_group(array(
        'key' => $block_key . '6345f17b3ec75',
        'title' => 'Reviews design two',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/reviews-design-two',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $block_key . 'select',
                'name' => $block_key . 'select',
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
                'key' => $block_key . 'title',
                'name' => $block_key . 'title',
                'type' => 'text',
                'label' => 'title',
                'instructions' => '',
            ),
            array(
                'key' => $block_key . 'link',
                'name' => $block_key . 'link',
                'label' => 'Button',
                'type' => 'link',
                'return_format' => 'array',
            ),

        ),

    ));

endif;
