<?php
if (!class_exists('FedFooterWalker')) {

    class FedFooterWalker extends Walker_Nav_Menu
    {
        function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
        {
            $indent = ($depth) ? str_repeat("\t", $depth) : '';
            $i = 0;

            $class_names = $value = '';

            $classes = empty($item->classes) ? array() : (array) $item->classes;
            $classes[] = 'menu-item-' . $item->ID;

            // Check our custom has_children property.
            if ($args->walker->has_children) {
                $classes[] .= 'accordion__title p-0';
            }


            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
            $class_names = ' class="' . esc_attr($class_names) . '"';
            // Check if the item is the current menu item.

            $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
            $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';


            $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
            $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
            $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
            $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
            if ($depth == 0) {
                $attributes .= ' class="h6 text-white mb-0"';
                $output .= $indent . '<div class="col-xl-3 col-md-6"><div class="accordion"><div' . $id . $value . $class_names . '>';
            } else {
                $output .= $indent . '<li' . $id . $value . $class_names . '>';
            }
            if ($depth == 0) {
                $attributes .= ' class="h6 text-white mb-0"';
            } else {
                $attributes .= ' class="footer__list__link""';
            }


            $menutitle = trim(apply_filters('the_title', $item->title, $item->ID));

            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . '' . $menutitle . '' . $args->link_after;
            $item_output .= '</a>';



            if ($args->walker->has_children) {

                $attributesinner = !empty($item->url) ? ' href="'   . esc_attr($item->url) . '"' : '';

                $item_output .= '</div><div class="accordion__body">
                <ul class="footer__list d-flex flex-column " >';
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
        function end_el(&$output, $item, $depth = 0, $args = null)
        {
            if ($depth == 0) {
                $output .= "</div> </div></div>\n"; // Close accordion body div
            } else {
                $output .= "</li>\n"; // Close <li>
            }
        }
    }
}
