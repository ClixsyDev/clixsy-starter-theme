<?php

use App\Template;

function starter_menus()
{
    register_nav_menus([
        'starter_main_menu'     => 'Main Menu',
        'starter_footer_menu_1' => '1st Footer Menu',
        'starter_footer_menu_2' => '2nd Footer Menu',
        'starter_breadcrumbs'   => 'Breadcrumbs',
    ]);
}

add_action('init', 'starter_menus');


class My_Walker_Nav_Menu extends Walker_Nav_Menu
{

    function start_lvl(&$output, $depth = 0, $args = NULL)
    {
        $indent = ($depth > 0  ? str_repeat("\t", $depth) : '');
        $display_depth = ($depth + 1);
        $classes = array(
            'sub-menu',
            'lvl-' . $display_depth,
        );
        $class_names = implode(' ', $classes);

        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

    function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        global $wp_query;

        $item = $data_object;

        $indent = ($depth > 0 ? str_repeat("\t", $depth) : '');

        $depth_classes = array(
            ($depth == 0 ? 'main-menu-item' : 'sub-menu-item'),
            ($depth >= 2 ? 'sub-sub-menu-item' : ''),
            ($depth % 2 ? 'menu-item-odd' : 'menu-item-even'),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr(implode(' ', $depth_classes));

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));

        $output .= $indent . '<li id="nav-menu-item-' . $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
        $attributes .= ' class="menu-link-' . get_post_meta($item->ID, '_menu_item_object_id', true)  . '"';

        $item_output = sprintf(
            '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after
        );

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

function menu_button()
{
    echo '<button aria-label="menu toggle" class="button small" id="main-menu-button">
                <span class="ico-b open-menu"><span></span></span>
                <span class="ico-c close-menu"></span>
            </button>';
}

function main_menu()
{
    // Get menu locations
    $menu_locations = get_nav_menu_locations();
    // Get main menu
    $main_menu = (isset($menu_locations['starter_main_menu'])) ? wp_get_nav_menu_items($menu_locations['starter_main_menu']) : null;

    if (!empty($main_menu) && is_array($main_menu)) {
        // Max 3 levels
        $first_level = $second_level = $third_level = array();

        foreach ($main_menu as $item) {

            if (isset($item->menu_item_parent)) {

                if ($item->menu_item_parent == 0) {

                    // First level items
                    $first_level[$item->ID] = $item;
                } else {

                    if (isset($first_level[$item->menu_item_parent])) {

                        // Second level items
                        $second_level[$item->menu_item_parent][$item->ID] = $item;
                    } else {

                        // Third level items
                        foreach ($second_level as $second_level_menu) {
                            foreach ($second_level_menu as $parent_item_id => $parent_item) {

                                if ($parent_item_id == $item->menu_item_parent) {
                                    $third_level[$item->menu_item_parent][$item->ID] = $item;
                                    break;
                                }
                            }
                        }
                    }
                }
            }
        }

?>

        <nav class="main-menu">
            <div class="wrapper">

                <!-- Display first level -->
                <div class="level-1" data-level="1">
                    <ul>

                        <?php if (!empty($first_level)) { ?>
                            <?php foreach ($first_level as $item) { ?>

                                <li>
                                    <?php if (isset($second_level[$item->ID])) { ?>
                                        <a class="open-submenu o-sub" data-url="<?php echo $item->url; ?>" aria-label="Open dropdown menu" data-item-title="<?php echo $item->title ?>" data-target-alias="alias-<?php echo $item->ID; ?>" href="#" title="<?php echo $item->attr_title; ?>
                                        ">
                                            <?php echo $item->title; ?>
                                        </a>
                                        <button class="open-submenu o-sub" data-url="<?php echo $item->url; ?>" aria-label="Open dropdown menu" data-item-title="<?php echo $item->title ?>" data-target-alias="alias-<?php echo $item->ID; ?>
                                        ">
                                            <span class="ico-r open-menu"></span>
                                            <span class="ico-m close-menu"></span>
                                        </button>
                                    <?php } else { ?>
                                        <a href="<?php echo $item->url; ?>" target="<?php echo $item->target; ?>" title="<?php echo $item->attr_title; ?>">
                                            <?php echo $item->title; ?>
                                        </a>
                                    <?php } ?>

                                </li>

                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>

                <!-- Display second level -->
                <?php if (!empty($second_level)) { ?>
                    <div class="level-2" data-level="2">

                        <?php foreach ($second_level as $menu_parent_id => $second_level_items) { ?>
                            <ul data-alias="alias-<?php echo $menu_parent_id; ?>">

                                <li class="mobile-close-level">
                                    <button class="close-level evt-close-level" data-current-level="2">
                                        <span class="ico-l"></span>
                                        <?php _e('Back', 'bestcasino'); ?>
                                    </button>
                                </li>
                                <li class="level-2-title">
                                    <a href="#" target="self" title="Menu item" class="level-url"></a>
                                </li>
                                <?php foreach ($second_level_items as $item) { ?>

                                    <li>


                                        <?php if (isset($third_level[$item->ID])) { ?>
                                            <a class="open-submenu o-sub" data-url="<?php echo $item->url; ?>" aria-label="Open dropdown menu" data-item-title="<?php echo $item->title ?>" data-target-alias="alias-<?php echo $item->ID; ?>" href="#" title="<?php echo $item->attr_title; ?>
                                        ">
                                                <?php echo $item->title; ?>
                                            </a>
                                            <button class="open-submenu o-sub" data-url="<?php echo $item->url; ?>" aria-label="Open dropdown menu" data-item-title="<?php echo $item->title ?>" data-target-alias="alias-<?php echo $item->ID; ?>
                                        ">
                                                <span class="ico-r open-menu"></span>
                                                <span class="ico-m close-menu"></span>
                                            </button>
                                        <?php } else { ?>
                                            <a href="<?php echo $item->url; ?>" target="<?php echo $item->target; ?>" title="<?php echo $item->attr_title; ?>">
                                                <?php echo $item->title; ?>
                                            </a>
                                        <?php } ?>

                                    </li>

                                <?php } ?>

                            </ul>

                        <?php } ?>
                    </div>
                <?php } ?>

                <!-- Display third level -->
                <?php if (!empty($third_level)) { ?>
                    <div class="level-3" data-level="3">

                        <?php foreach ($third_level as $menu_parent_id => $third_level_items) { ?>
                            <ul data-alias="alias-<?php echo $menu_parent_id; ?>">

                                <li class="mobile-close-level">
                                    <button class="close-level evt-close-level" data-current-level="3">
                                        <span class="ico-l"></span>
                                        <?php _e('Back', 'bestcasino'); ?>
                                    </button>
                                </li>
                                <li class="level-2-title level-3__mod">
                                    <a href="#" target="self" title="Menu item" class="level-url"></a>
                                </li>
                                <?php foreach ($third_level_items as $item) { ?>

                                    <li>
                                        <a href="<?php echo $item->url; ?>" target="<?php echo $item->target; ?>" title="<?php echo $item->attr_title; ?>">
                                            <?php echo $item->title; ?>
                                        </a>
                                    </li>

                                <?php } ?>

                            </ul>
                        <?php } ?>
                    </div>

                <?php } ?>

            </div>
        </nav>
<?php
    }
}
