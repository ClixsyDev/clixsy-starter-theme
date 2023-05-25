<?php

/**
 * Functions to register Verdicts Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_verdicts_design_three()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'verdicts-design-three',
                'title'           => __('Verdicts and Testimonials3', 'clixsy'),
                'description'      => __('Verdicts and Testimonials3', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/verdicts-client-3.php',
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
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/verdicts_and_testimonials.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_verdicts_design_three');

if (function_exists('acf_add_local_field_group')) {
    $key = 'verdicts_design_three';
    acf_add_local_field_group(array(
        'key'            => $key . 'verdicts',
        'title'          => 'Verdicts',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/verdicts-design-three',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $key . '_background_image2',
                'label' => 'Background Image',
                'name' => $key . '_background_image2',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
        )
    ));
}
