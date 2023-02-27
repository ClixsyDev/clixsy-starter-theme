<?php

/**
 * Functions to register Cases We Handle Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */


function register_articles() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'articles',
                'title'           => __('Articles', 'clixsy'),
                'description'      => __('Articles', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/client-2/articles.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords'           => array('articles', 'posts', 'blog'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/client-2/articles.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_articles');

if (function_exists('acf_add_local_field_group')) {
    $key = 'articles';
    acf_add_local_field_group(array(
        'key'            => 'articles',
        'title'          => 'articles',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/articles',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $key . '_title',
                'label' => 'Title',
                'name' => $key . '_title',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_link',
                'name' => $key . '_link',
                'label' => 'Link',
                'type' => 'link',
                'return_format' => 'array',
            ),
        )
    ));
}
