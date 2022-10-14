<?php

/**
 * Register support for Gutenberg wide images
 * Adds support for editor color palette.
 */
function jeffrey_theme_color_setup()
{
	add_theme_support('align-wide');

	add_theme_support(
		'editor-color-palette',
		apply_filters('villen_gutenberg_palette', array(
			array(
				'name'  => 'White',
				'slug'  => 'white',
				'color'	=> '#fff',
			),
			array(
				'name'  => 'Light gray',
				'slug'  => 'light-gray',
				'color'	=> '#F4F4F4',
			),
			array(
				'name'  => 'Light blue',
				'slug'  => 'light-blue',
				'color'	=> '#CEDBEF',
			),
			array(
				'name'  => 'Blue',
				'slug'  => 'blue',
				'color'	=> '#1B4D9B',
			),
			array(
				'name'  => 'Dark gray',
				'slug'  => 'dark-gray',
				'color'	=> '#232E3F',
			),
		))
	);
}
add_action('after_setup_theme', 'jeffrey_theme_color_setup');

/**
 * Include all widgets
 */
$files = glob(get_template_directory() . '/_inc/blocks/*.php');
foreach ($files as $file) {
	if (file_exists($file)) {
		require_once $file;
	}
}

/**
 * Register Gutenberg Block with ACF
 */

require_once('blocks/welcome-banner.php');
require_once('blocks/awards.php');
require_once('blocks/how-can-help.php');
require_once('blocks/cta.php');
require_once('blocks/customer-service.php');
require_once('blocks/start-process-today.php');
require_once('blocks/habetz-info.php');
require_once('blocks/testimonials.php');
require_once('blocks/cases-we-handle.php');
require_once('blocks/injuries-info.php');

function phillips_register_acf_block_types()
{

	acf_register_block_type(
		array(
			'name'            => 'verdicts',
			'title'           => __('Verdicts', 'clixsy'),
			'description'	  => __('Verdicts', 'clixsy'),
			'render_template' => '_template-parts/guttenberg-extend-templates/verdicts.php',
			'icon'            => 'groups',
			'category'        => 'clixsy',
			'supports' => array(
				'color' => true
			),
			'keywords' 		  => array('verdicts'),
			'example'  => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/blog-image-with-description--preview.png',
					),
				)
			)
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'image-with-description',
			'title'           => __('Image with description', 'clixsy'),
			'description'	  => __('Image with description on right part', 'clixsy'),
			'render_template' => '_template-parts/guttenberg-extend-templates/image-with-description-template.php',
			'icon'            => 'groups',
			'category'        => 'clixsy',
			'supports' => array(
				'color' => true
			),
			'keywords' 		  => array('text', 'alert', 'decorated'),
			'example'  => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/blog-image-with-description--preview.png',
					),
				)
			)
		)
	);



	acf_register_block_type(
		array(
			'name'            => 'phillips-banner',
			'title'           => __('Jeffrey Phillips Banner', 'phillips'),
			'description'	  => __('Banner with photo, description and phone number', 'phillips'),
			'render_template' => '_template-parts/guttenberg-extend-templates/phillips-banner-template.php',
			'icon'            => 'groups',
			'category'        => 'clixsy',
			'keywords' 		  => array('jeffrey', 'banner', 'cta', 'a/b testing'),
			'example'  => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'preview_image' => get_stylesheet_directory_uri() . '/_assets/src/img/guttenberg-preview/phillips-banner-preview.png',
					),
				)
			)
		)
	);


	acf_register_block_type(
		array(
			'name'            => 'phillips-verdicts',
			'title'           => __('Verdicts and settlements', 'phillips'),
			'description'	  => __('Verdicts and settlements blocks', 'phillips'),
			'render_template' => '_template-parts/guttenberg-extend-templates/guttenberg-verdicts-template.php',
			'icon'            => 'groups',
			'category'        => 'clixsy',
			'keywords' 		  => array('jeffrey', 'verdicts', 'Settlements'),
			'example'  => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'preview_image' => get_stylesheet_directory_uri() . '/_assets/public/images/guttenberg-previews/guttenberg-verdicts-preview.png',
					),
				)
			)
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'faq',
			'title'           => __('Faq', 'phillips'),
			'description'	  => __('Faq', 'phillips'),
			'render_template' => '_template-parts/guttenberg-extend-templates/faq.php',
			'icon'            => 'groups',
			'category'        => 'clixsy',
			'keywords' 		  => array('jeffrey', 'verdicts', 'Settlements'),
			'example'  => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'preview_image' => get_stylesheet_directory_uri() . '/_assets/public/images/guttenberg-previews/guttenberg-verdicts-preview.png',
						$faq_repeater = get_field('faq_repeater')
					),
				)
			)
		)
	);

}


add_action('acf/init', 'phillips_register_acf_block_types');

