<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_bar_admission_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'bar-admission-design-one',
                'title'           => __('Bar admission', 'clixsy'),
                'description'      => __('Design v1', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/bar-admission_design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('form', 'text', 'contact', 'citation'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/bar-admission-design__one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_bar_admission_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'bar_admission_design_one__';
    acf_add_local_field_group(
        array(
            'key' => 'bar_admission_design_one_16345f17b35',
            'title' => 'Bar admission',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/bar-admission-design-one',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'icons',
                    'name' => $block_key . 'icons',
                    'label' => 'Icons',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => array(
                        array(
                            'key' => 'image',
                            'name' => 'image',
                            'type' => 'image',
                            'label' => 'Image',
                            'return_format' => 'id',
                            'preview_size' => 'thumbnail'
                        ),
                    ),
                ),
                array(
                    'key' => $block_key . 'region',
                    'name' => $block_key . 'region',
                    'type' => 'image',
                    'label' => 'Region image',
                    'return_format' => 'id',
                    'preview_size' => 'thumbnail'
                ),
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'textarea',
                    'label' => 'title',
                    'instructions' => 'Wrap words with <b>span</b> tag to make them highlighted with accent color',
                ),
                array(
                    'key' => $block_key . 'content',
                    'name' => $block_key . 'content',
                    'type' => 'wysiwyg',
                    'label' => 'Content',
                ),

            ),

        )
    );

endif;
