<?php

/**
 * Functions to register Verdicts Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_verdicts()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'verdicts',
                'title'           => __('Verdicts and Testimonials', 'clixsy'),
                'description'      => __('Verdicts and Testimonials', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/verdicts.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords'           => array('verdicts', 'banner'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/verdicts_and_testimonials.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_verdicts');

if (function_exists('acf_add_local_field_group')) {
    $key = 'verdicts';
    $reviews_key = 'reviews_design_two_';
    acf_add_local_field_group(array(
        'key'            => 'verdicts',
        'title'          => 'Verdicts',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/verdicts',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $key . '_verdicts_repeater',
                'name' => $key . '_verdicts_repeater',
                'label' => 'Verdicts',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'verdicts_value',
                        'name' => 'verdicts_value',
                        'label' => 'Value',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'verdicts_description',
                        'name' => 'verdicts_description',
                        'label' => 'Description',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => $key . '_display_testimonials',
                'name' => $key . '_display_testimonials',
                'label' => 'Display Testimonials',
                'type' => 'true_false',
            ),
            array(
                'key' => $key . '_background_image',
                'label' => 'Background Image',
                'name' => $key . '_background_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
        )
    ));
}
