<?php

/**
 * Functions to register Habetz Info Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_habetz_info()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'habetz-info',
                'title'           => __('Habetz Info', 'clixsy'),
                'description'	  => __('Habetz Info', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/habetz-info.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords' 		  => array('Short', 'Bio'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/bio_short.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_habetz_info');

if (function_exists('acf_add_local_field_group')) {
    $key = 'habetz_info';
    acf_add_local_field_group(array(
        'key'            => 'habetz_info',
        'title'          => 'Habetz Info',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/habetz-info',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $key . '_attorney_image',
                'label' => 'Attorney Image',
                'name' => $key . '_attorney_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => $key . '_small_logo',
                'label' => 'Small logo Image',
                'name' => $key . '_small_logo',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => $key . '_attorney_description',
                'label' => 'Attorney description',
                'name' => $key . '_attorney_description',
                'type' => 'textarea',
            ),
            array(
                'key' => $key . '_name',
                'label' => 'Name',
                'name' => $key . '_name',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_position',
                'label' => 'Position',
                'name' => $key . '_position',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_link',
                'label' => 'Link',
                'name' => $key . '_link',
                'type' => 'link',
            ),
        )
    ));
}
