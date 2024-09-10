<?php
if (!class_exists('FedWalker')) {

    class FedWalker extends Walker_Nav_Menu
    {
        function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
        {
            $indent = ($depth) ? str_repeat("\t", $depth) : '';

            $class_names = $value = '';

            $classes = empty($item->classes) ? array() : (array) $item->classes;
            $classes[] = 'menu-item-' . $item->ID;

            // Check our custom has_children property.
            if ($args->walker->has_children) {
                $classes[] .= 'header__nav-item dropdown';
            }

            if (0 != $item->menu_item_parent) {
                $classes[] .= '';
            } else {
                $classes[] .= 'header__nav-item ';
            }

            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
            $class_names = ' class="' . esc_attr($class_names) . '"';
            // Check if the item is the current menu item.

            $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
            $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

            $output .= $indent . '<li' . $id . $value . $class_names . '>';

            $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
            $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
            $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
            $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
            if (in_array('current-menu-item', $classes)) {
                $attributes .= ' class="header__nav-link is-active"';
            } else {
                if ($args->walker->has_children) {
                    $attributes .= ' class="header__nav-link dropdown-toggle" title="' . $item->title . '"';
                } else {
                    $attributes .= ' class="header__nav-link" aria-current="page" title="' . $item->title . '"';
                }
            }


            $menutitle = trim(apply_filters('the_title', $item->title, $item->ID));

            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . '' . $menutitle . '' . $args->link_after;

            if ($args->walker->has_children) {

                $item_output .= '<i class="icon-down"></i></a>';
            } else {
                $item_output .= '</a>';
            }

            if ($args->walker->has_children) {

                $attributesinner = !empty($item->url) ? ' href="'   . esc_attr($item->url) . '"' : '';

                $item_output .= '
                <ul class="header__dropdown-menu fade-up m-0" >';
            }

            $item_output .= $args->after;

            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }


        function start_lvl(&$output, $depth = 0, $args = array())
        {
            // Depth-dependent classes.
            $indent = ''; // code indent

            // Build HTML for output.
            $output .= "\n" . $indent . '' . "\n";
        }

        function end_lvl(&$output, $depth = 0, $args = array())
        {
            $indent = str_repeat("\t", $depth);
            $output .= "$indent</ul>";
        }
    }
}
