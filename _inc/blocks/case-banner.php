<?php

/**
 * Functions to register Case Banner Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_case_banner()
{
    if (function_exists('acf_register_block_type')) {
        // acf_register_block_type(
        //     array(
        //         'name'            => 'welcome-banner',
        //         'title'           => __('Case Banner', 'clixsy'),
        //         'description'	  => __('Case Banner', 'clixsy'),
        //         'render_template' => '_template-parts/guttenberg-extend-templates/welcome-banner.php',
        //         'icon'            => 'groups',
        //         'category'        => 'clixsy',
        //         'supports' => array(
        //             'color' => true
        //         ),
        //         'keywords' 		  => array('welcome', 'banner'),
        //         'example'  => array(
        //             'attributes' => array(
        //                 'mode' => 'preview',
        //                 'data' => array(
        //                     'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/blog-image-with-description--preview.png',
        //                 ),
        //             )
        //         )
        //     )
        // );
    }
}
add_action('acf/init', 'register_case_banner');

if (function_exists('acf_add_local_field_group')) {
    $key = 'case_banner';
    acf_add_local_field_group(array(
        'key'            => 'case_banner',
        'title'          => 'Case Banner',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/case-banner',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $key . '_attorney_image',
                'label' => 'Attorney Image',
                'name' => 'attorney_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => 'field_63483da0b29c1',
                'label' => 'Background Image',
                'name' => 'background_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => 'field_63483dafb29c2',
                'label' => 'Banner Text line 1',
                'name' => 'banner_text_line_1',
                'type' => 'text',
            ),
            array(
                'key' => 'field_63483dbfb29c3',
                'label' => 'Banner Text line 2',
                'name' => 'banner_text_line_2',
                'type' => 'text',
            ),
            array(
                'key' => 'field_63483dc1b29c4',
                'label' => 'Banner Text line 3',
                'name' => 'banner_text_line_3',
                'type' => 'text',
            ),
            array(
                'key' => 'field_63483dcdb29c5',
                'label' => 'Button text',
                'name' => 'button_text',
                'type' => 'text',
            ),
            array(
                'key' => 'field_63483e2ab29c6',
                'label' => 'Button url',
                'name' => 'button_url',
                'type' => 'text',
            ),
        )
    ));
}
