<?php

/**
 * Get post date in time ago format
 */
if (!function_exists('the_time_ago')) {
    function the_time_ago()
    {
        echo human_time_diff(get_the_time('U'), current_time('timestamp'));
    }
}

/**
 * Print the excerpt
 * @param $limit
 */
if (!function_exists('the_starter_excerpt')) {
    function the_starter_excerpt($limit)
    {
        $text  = get_the_content('');
        $text  = strip_shortcodes($text);
        $text  = apply_filters('the_content', $text);
        $text  = str_replace(']]>', ']]>', $text);
        $text  = strip_tags($text);
        $text  = preg_replace('#\[[^\]]+\]#', '', $text);
        $words = explode(' ', $text, $limit + 1);
        if (count($words) > $limit) {
            array_pop($words);
            array_push($words, '');
            $text = trim(implode(' ', $words)) . '...';
        }

        echo $text;
    }
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

function save_tailwind_colors() {
	$screen = get_current_screen();
    
    if (strpos($screen->id, "theme-general-settings") == true) {
        $theme_colors = get_field('theme_colors', 'option');
        $file_value = '';
        $file_value = 'module.exports = {';
        if ($theme_colors) {
            foreach ($theme_colors as $color) {
                $color_value = $color['color'] ? $color['color'] : '#FFFFFF';
                $file_value .= $color['name'] . ": '" . $color_value . "', "; 
            }
        }
        $site_colors = get_field('site_colors', 'option');
        if ($site_colors) {
            foreach ($site_colors as $color_name => $color_value) {
                $color_value = $color_value ? $color_value : '#fff';
                $file_value .= $color_name . ": '" . $color_value . "', "; 
            }
        }
        $file_value .= '};';
        file_put_contents(get_template_directory() . "/tailwind-colors.js",$file_value);
        //file_put_contents(get_stylesheet_directory_uri() . "test.js","Hello World. Testing!");
    }
}
add_action('acf/save_post', 'save_tailwind_colors', 20);