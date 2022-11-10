<?php

/**
 * Functions to register quick links Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_location_design__one()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'location-design-one',
                'title'           => __('Contact location', 'clixsy'),
                'description'      => __('Location with adress, mail, phone and google map', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/location-design__one--template.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'keywords'           => array('contact', 'location'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/location_design_one.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_location_design__one');

if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'location_6345f17b3ec75',
        'title' => 'Location design one',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/location-design-one',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => 'location_design_one__background',
                'name' => 'location_design_one__background',
                'type' => 'image',
                'label' => 'Background image',
                'return_format' => 'id', 
                'preview_size' => 'thumbnail'
            ),
            array(
                'key' => 'location_design_one__title',
                'name' => 'location_design_one__title',
                'type' => 'text',
                'label' => 'Title',
                'instructions' => 'If you wrap words in <b>span</b> tag it will be highlighted with accent color',
            ),
            array(
                'key' => 'location_design_one__description',
                'name' => 'location_design_one__description',
                'type' => 'textarea',
                'label' => 'Description',
                'instructions' => '',
            ),
            array(
                'key' => 'location_design_one__mail',
                'name' => 'location_design_one__mail',
                'type' => 'text',
                'label' => 'Email',
                'instructions' => '',
            ),
            array(
                'key' => 'location_design_one__phone',
                'name' => 'location_design_one__phone',
                'type' => 'text',
                'label' => 'Phone',
                'instructions' => '',
            ),
            array(
                'key' => 'location_design_one__google_map',
                'name' => 'location_design_one__google_map',
                'type' => 'textarea',
                'label' => 'Iframe with map',
                'instructions' => '',
            ),
        ),

    ));

endif;
