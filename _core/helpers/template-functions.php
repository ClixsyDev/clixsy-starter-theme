<?php

/**
 * Get post date in time ago format
 */
if (!function_exists('the_time_ago')) {
    function the_time_ago() {
        echo human_time_diff(get_the_time('U'), current_time('timestamp'));
    }
}

/**
 * Print the excerpt
 * @param $limit
 */
if (!function_exists('the_starter_excerpt')) {
    function the_starter_excerpt($limit) {
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

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));
}

function save_tailwind_colors() {
    $screen = get_current_screen();

    if (strpos($screen->id, "theme-general-settings") == true) {
        // site colors
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
        file_put_contents(get_template_directory() . "/tailwind-colors.js", $file_value);

        // site Fonts
        $fonts = get_field('fonts', 'option');
        $fonts_file_value = '';
        if (!empty($fonts)) {

            $fonts_file_value = 'module.exports = {';
            $fonts_file_value .= 'main' . ": '" . $fonts['main_font'] . "', ";
            $fonts_file_value .= 'second' . ": '" . $fonts['second_font'] . "', ";
            $fonts_file_value .= '};';

            file_put_contents(get_template_directory() . "/tailwind-fonts.js", $fonts_file_value);
        }
    }
}
add_action('acf/save_post', 'save_tailwind_colors', 20);



// Additional scripts to the footer 
function faq_schema($visible_faq, $hidden_faq = false) {

    
    $case_faq_repeater = $visible_faq;
    $faq_repeater_name_hidden = $hidden_faq;

    $locations_faq_repeater = get_field('faq_items');

    $faq_repeater = '';
    if (!empty($case_faq_repeater)) {
        $faq_repeater = $case_faq_repeater;
    } elseif (!empty($locations_faq_repeater)) {
        $faq_repeater = $locations_faq_repeater;
    } else {
        $faq_repeater = false;
    }
    if ($faq_repeater_name_hidden) {
        $faq_repeater = array_merge($faq_repeater, $faq_repeater_name_hidden);
    }
    if (!empty($faq_repeater)) {
?>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [
                    <?php foreach ($faq_repeater as $key => $question) { ?> {
                            "@type": "Question",
                            "name": "<?php echo preg_replace('/\s+/', ' ',  strip_tags($question['question'])); ?>",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "<?php echo preg_replace('/\s+/', ' ',  strip_tags($question['answer'])); ?>"
                            }
                        }
                        <?php echo $key === array_key_last($faq_repeater) ? '' : ',' ?>
                    <?php } ?>
                ]
            }]
            }
        </script>
<?php }
}
