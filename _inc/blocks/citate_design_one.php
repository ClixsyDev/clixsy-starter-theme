<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_citate_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'citate-design-one',
                'title'           => __('Citate', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/citate-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('citate', 'quote', 'review'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/citate-design__one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_citate_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'citate_design_one__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . '16345f17b35',
            'title' => 'Community',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/citate-design-one',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'citate',
                    'name' => $block_key . 'citate',
                    'type' => 'wysiwyg',
                    'label' => 'Citate',
                    'instructions' => '',
                ),
                array(
                    'key' => $block_key . 'author',
                    'name' => $block_key . 'author',
                    'type' => 'text',
                    'label' => 'Author',
                    'instructions' => '',
                ),
            ),

        )
    );

endif;
