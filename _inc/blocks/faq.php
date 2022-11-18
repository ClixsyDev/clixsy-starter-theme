<?php

/**
 * Functions to register FAQ Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_faq() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'faq',
                'title'           => __('FAQ', 'clixsy'),
                'description'      => __('FAQ', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/faq.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords'           => array('faq', 'questions', 'answers'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/faq.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_faq');

if (function_exists('acf_add_local_field_group')) {
    $key = 'faq';
    acf_add_local_field_group(array(
        'key'            => 'faq',
        'title'          => 'FAQ',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/faq',
                ),
            ),
        ),
        'fields' => array(

            array(
                'key' => $key . '_repeater',
                'name' => $key . '_repeater',
                'label' => 'FAQ Items',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => $key . '_items_question',
                        'label' => 'Question',
                        'name' =>  'question',
                        'type' => 'text',
                    ),
                    array(
                        'key' => $key . '_items_answer',
                        'label' => 'Answer',
                        'name' =>  'answer',
                        'type' => 'wysiwyg',
                    ),
                ),
            ),
            array(
                'key' => $key . '_repeater_hidden',
                'name' => $key . '_repeater_hidden',
                'label' => 'FAQ Items Hidden',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => $key . '_items_question_hidden',
                        'label' => 'Question',
                        'name' => 'question',
                        'type' => 'text',
                    ),
                    array(
                        'key' => $key . '_items_answer_hidden',
                        'label' => 'Answer',
                        'name' => 'answer',
                        'type' => 'wysiwyg',
                    ),
                ),
            ),
            array(
                'key' => $key . '_title',
                'label' => 'Title',
                'name' => $key . '_title',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_image',
                'label' => 'Image',
                'name' => $key . '_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
        )
    ));
}
