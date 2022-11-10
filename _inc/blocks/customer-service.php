<?php

/**
 * Functions to register Customer Service Gutenberg block.
 * With acf plugin
 *
 * @package csme
 */




function register_customer_service()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'            => 'customer-service',
                'title'           => __('Customer Service', 'clixsy'),
                'description'      => __('Customer Service', 'clixsy'),
                'render_template' => '_template-parts/guttenberg-extend-templates/customer-service.php',
                'icon'            => 'groups',
                'category'        => 'clixsy',
                'supports' => array(
                    'color' => true
                ),
                'keywords'           => array('welcome', 'banner'),
                'example'  => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'preview_image' => get_template_directory_uri() . '/_assets/src/img/guttenberg-preview/customer_services.png',
                        ),
                    )
                )
            )
        );
    }
}
add_action('acf/init', 'register_customer_service');

if (function_exists('acf_add_local_field_group')) {
    $key = 'customer_service';
    acf_add_local_field_group(array(
        'key'            => 'customer_service',
        'title'          => 'Customer Service',
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/customer-service',
                ),
            ),
        ),
        'fields' => array(
            array(
                'key' => $key . '_title',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
            ),
            array(
                'key' => $key . '_company_logo',
                'label' => 'Company Logo',
                'name' => $key . '_company_logo',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => $key . '_background_image',
                'label' => 'Background Image',
                'name' => $key . '_background_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => $key . '_services',
                'name' => $key . '_services',
                'label' => 'Services',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => $key . '_service_logo',
                        'label' => 'Service Logo',
                        'name' => $key . '_service_logo',
                        'type' => 'image',
                        'return_format' => 'id',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),
                    array(
                        'key' => $key . '_service_title',
                        'label' => 'Title',
                        'name' => $key . '_service_title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => $key . '_service_description',
                        'label' => 'Service Description',
                        'name' => $key . '_service_description',
                        'type' => 'textarea',
                    ),
                ),
            ),
        )
    ));
}
