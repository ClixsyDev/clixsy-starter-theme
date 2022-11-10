<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_services_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'services-design-one',
                'title'           => __('Services', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/services-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('services'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/services-design__one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_services_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'services_design_one__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . '16345f173b35',
            'title' => 'Slider with description',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/services-design-one',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'services',
                    'name' => $block_key . 'services',
                    'label' => 'Services',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => array(
                        array(
                            'key' =>  $block_key . 'icon_repeater',
                            'name' =>   'icon',
                            'type' => 'image',
                            'label' => 'Icon',
                            'return_format' => 'id',
                            'preview_size' => 'thumbnail'
                        ),
                        array(
                            'key' => $block_key . 'title_repeater',
                            'name' =>  'title',
                            'type' => 'text',
                            'label' => 'Title',
                            'instructions' => '',
                        ),
                        array(
                            'key' => $block_key . 'description_repeater',
                            'name' => 'description',
                            'type' => 'textarea',
                            'label' => 'Description',
                            'instructions' => '',
                        ),
                    ),
                ),
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'Title',
                    'instructions' => 'Wrap text with span tag to change color',
                ),
                array(
                    'key' => $block_key . 'link',
                    'name' => $block_key . 'link',
                    'label' => 'Button',
                    'type' => 'link',
                    'return_format' => 'array',
                ),
            ),

        )
    );

endif;
