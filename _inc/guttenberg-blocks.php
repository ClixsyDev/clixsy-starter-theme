<?php
/**
 * Register support for Gutenberg wide images
 * Adds support for editor color palette.
 */
function jeffrey_theme_color_setup() {
    add_theme_support( 'align-wide' );

	add_theme_support( 'editor-color-palette',
		apply_filters( 'villen_gutenberg_palette', array(
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
		) )
	);
}
add_action( 'after_setup_theme', 'jeffrey_theme_color_setup' );

/**
 * Include pretty background script
 */
// function extend_gutenberg_enqueue_block_editor_assets() {
//     wp_enqueue_script(
//         'extend-gutenberg-blocks-js',
//         get_template_directory_uri() . '/_dist/extend-blocks.js',
//         array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ),
//         '1.0.2',
//         true
//     );
// }
// add_action( 'enqueue_block_editor_assets', 'extend_gutenberg_enqueue_block_editor_assets' );

/**
 * Include all widgets
 */
$files = glob(get_template_directory() . '/blocks/*.php');
foreach ($files as $file) {
    if (file_exists($file)) {
        require_once $file;
    }
}

/**
 * Register Gutenberg Block with ACF
 */
function phillips_register_acf_block_types()
{
	acf_register_block_type(
		array(
			'name'            => 'image-with-description',
			'title'           => __('Image with description', 'touchpoint'),
			'description'	  => __('Image with description on right part', 'touchpoint'),
			'render_template' => '_template-parts/guttenberg-extend-templates/image-with-description-template.php',
			'icon'            => 'groups',
			'category'        => 'touchpoint',
			'supports' => array(
				'color' => true
			),
			'keywords' 		  => array('text', 'alert', 'decorated'),
			'example'  => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'preview_image' => get_stylesheet_directory_uri() . '/_assets/public/images/guttenberg-preview/blog-image-with-description--preview.png',
					),
				)
			)
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'blog-button',
			'title'           => __('Button', 'touchpoint'),
			'description'	  => __('Orange button', 'touchpoint'),
			'render_template' => '_template-parts/guttenberg-extend-templates/blog-single-button.php',
			'icon'            => 'groups',
			'category'        => 'touchpoint',
			'supports' => array(
				'color' => true
			),
			'keywords' 		  => array('text', 'alert', 'decorated'),
			'example'  => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'preview_image' => get_stylesheet_directory_uri() . '/_assets/public/images/guttenberg-preview/blog-button-preview.png',
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
			'category'        => 'touchpoint',
			'keywords' 		  => array('jeffrey', 'banner', 'cta', 'a/b testing'),
			'example'  => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'preview_image' => get_stylesheet_directory_uri() . '/_assets/public/images/guttenberg-preview/phillips-banner-preview.png',
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
			'category'        => 'touchpoint',
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
}
add_action('acf/init', 'phillips_register_acf_block_types');
