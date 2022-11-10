<?php

/**
 * Functions to register Start process today Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_start_process_today()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'start-process-today',
                'title'           => __('Start process today', 'clixsy'),
                'description'	  => __('Start process today', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/start-process-today.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords' 		  => array('welcome', 'banner'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/proccess.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_start_process_today');

if (function_exists('acf_add_local_field_group')) {
    $key = 'start_process_today';
    acf_add_local_field_group(array(
        'key'            => 'start_process_today',
        'title'          => 'Start process today',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/start-process-today',
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
                'key' => $key . '_step_1_icon',
                'label' => 'Step 1 icon',
                'name' => $key . '_step_1_icon',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => $key . '_step_1_text',
                'label' => 'Step 1 text',
                'name' => $key . '_step_1_text',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_step_1_phone',
                'label' => 'Step 1 phone',
                'name' => $key . '_step_1_phone',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_step_1_link',
                'label' => 'Step 1 link',
                'name' => $key . '_step_1_link',
                'type' => 'link',
            ),
            array(
                'key' => $key . '_step_2_icon',
                'label' => 'Step 2 icon',
                'name' => $key . '_step_2_icon',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => $key . '_step_2_text',
                'label' => 'Step 2 text',
                'name' => $key . '_step_2_text',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_step_3_icon',
                'label' => 'Step 3 icon',
                'name' => $key . '_step_3_icon',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => $key . '_step_3_text',
                'label' => 'Step 3 text',
                'name' => $key . '_step_3_text',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_start_btn',
                'label' => 'Start button',
                'name' => $key . '_start_btn',
                'type' => 'link',
            ),
        )
    ));
}
