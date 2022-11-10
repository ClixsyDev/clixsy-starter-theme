<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_faq_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'faq-design-one-with-image',
                'title'           => __('Faq with image', 'clixsy'),
                'description'      => __('Design v1.', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/faq-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('faq', 'quote', 'review'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/faq-design__one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_faq_design__one');

if (function_exists('acf_add_local_field_group')) :
    $block_key = 'faq_design_one__';
    acf_add_local_field_group(
        array(
            'key' => $block_key . '16345f17b35',
            'title' => 'FAQ',
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/faq-design-one-with-image',
                    ),
                ),
            ),
            'fields' => array(
                array(
                    'key' => $block_key . 'faq_repeater_key',
                    'name' => $block_key . 'faq_repeater_name',
                    'label' => 'FAQ',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => array(
                        array(
                            'key' => $block_key . 'question',
                            'name' => 'question',
                            'type' => 'text',
                            'label' => 'Question',
                            'instructions' => '',
                        ),
                        array(
                            'key' => $block_key . 'answer',
                            'name' => 'answer',
                            'type' => 'wysiwyg',
                            'label' => 'Answer',
                            'instructions' => '',
                        ),
                    ),
                ),
                array(
                    'key' => $block_key . 'faq_repeater_key_hidden',
                    'name' => $block_key . 'faq_repeater_name_hidden',
                    'label' => 'FAQ hidden items',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => array(
                        array(
                            'key' => $block_key . 'question_hidden',
                            'name' => 'question_hidden',
                            'type' => 'text',
                            'label' => 'Question',
                            'instructions' => '',
                        ),
                        array(
                            'key' => $block_key . 'answer_hidden',
                            'name' => 'answer_hidden',
                            'type' => 'wysiwyg',
                            'label' => 'Answer',
                            'instructions' => '',
                        ),
                    ),
                ),
                array(
                    'key' => $block_key . 'title',
                    'name' => $block_key . 'title',
                    'type' => 'text',
                    'label' => 'Title',
                    'instructions' => '',
                ),
                array(
                    'key' => $block_key . 'image',
                    'name' => $block_key . 'image',
                    'type' => 'image',
                    'label' => 'Image',
                    'return_format' => 'id',
                    'preview_size' => 'thumbnail'
                ),
            ),

        )
    );

endif;
