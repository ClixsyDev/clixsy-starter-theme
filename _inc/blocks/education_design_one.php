<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_education_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'education-design-one',
                'title'           => __('Education', 'clixsy'),
                'description'      => __('block with university icons and text editor', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/education-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('education', 'info'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/education_design_one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_education_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'education_design_one__';
    acf_add_local_field_group(array(
        'key' => 'education_design_one_6345f1712b3ec75',
        'title' => 'Education design one',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/education-design-one',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $block_key . 'icons',
                'name' => $block_key . 'icons',
                'label' => 'Select icons',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'image',
                        'name' => 'image',
                        'type' => 'image',
                        'label' => 'Icon',
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail'
                    ),
                ),
            ),
            array(
                'key' => 'education_design_one__title',
                'name' => 'education_design_one__title',
                'type' => 'text',
                'label' => 'Title',
                'instructions' => 'If you wrap words in <b>span</b> tag it will be highlighted with accent color',
            ),
            array(
                'key' => 'education_design_one__description',
                'name' => 'education_design_one__description',
                'type' => 'wysiwyg',
                'label' => 'Description',
                'instructions' => '',
            ),
            array(
                'key' => 'education_design_one__description__visible_mobile',
                'name' => 'education_design_one__description__visible_mobile',
                'type' => 'wysiwyg',
                'label' => 'Description',
                'instructions' => '',
            ),
            array(
                'key' => 'education_design_one__description__hidden_mobile',
                'name' => 'education_design_one__description__hidden_mobile',
                'type' => 'wysiwyg',
                'label' => 'Description',
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
