<?php

namespace App;

class Template
{
    /**
     * Locate template
     * @param $path
     * @return string
     */
    public static function locate($path)
    {
        return locate_template($path, false, false);
    }

    /**
     * Load template
     * @param string $path
     * @param array $args
     * @return void
     */
    public static function include($path, $args = [])
    {
        extract($args);
        include(locate_template($path, false, false));
    }

    /**
     * Load template
     * @param string $path
     * @param array $args
     * @return void
     */
    public static function load($path, $args = [])
    {
        return get_template_part(rtrim($path, '.php'), null, $args);
    }

    /**
     * Get the post ID
     * @return int
     */
    public static function getPostID()
    {
        global $post;
        return $post->ID;
    }
}
