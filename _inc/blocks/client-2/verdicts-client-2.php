<?php

/**
 * Functions to register Verdicts Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_verdicts_design_two()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'verdicts-design-two',
                'title'           => __('Verdicts and Testimonials2', 'clixsy'),
                'description'      => __('Verdicts and Testimonials2', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/verdicts-client-2.php',
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
add_action('acf/init', 'register_verdicts_design_two');

if (function_exists('acf_add_local_field_group')) {
    $key = 'verdicts_design_two';
    acf_add_local_field_group(array(
        'key'            => $key . 'verdicts',
        'title'          => 'Verdicts',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/verdicts-design-two',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $key . '_verdicts_repeater2',
                'name' => $key . '_verdicts_repeater2',
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
