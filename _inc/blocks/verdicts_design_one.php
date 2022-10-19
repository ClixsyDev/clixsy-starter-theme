<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_verdicts_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'verdicts-design-one',
                'title'           => __('Verdicts', 'clixsy'),
                'description'      => __('Full width verdicts', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/verdicts-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('verdicts', 'cases', 'sucess'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/verdicts-design__one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_verdicts_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'verdicts_design_one__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . '16345f17b35',
            'title' => 'Community',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/verdicts-design-one',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'verdicts',
                    'name' => $block_key . 'verdicts',
                    'label' => 'Verdicts',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => array(
                        array(
                            'key' => $block_key . 'price',
                            'name' => 'price',
                            'type' => 'text',
                            'label' => 'Price',
                            'instructions' => '',
                        ),
                        array(
                            'key' => $block_key . 'case',
                            'name' => 'case',
                            'type' => 'text',
                            'label' => 'Case description',
                            'instructions' => '',
                        ),
                    ),
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
