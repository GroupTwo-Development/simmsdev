<?php

namespace App;

use Walker_Nav_Menu;

class desktop_Nav_Walker extends Walker_Nav_Menu
{
    // Start level for dropdown
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        if ($depth === 0) {
            $output .= '<ul class="dropdown-menu absolute hidden bg-white">';
        } else {
            $output .= '<ul class="dropdown-submenu hidden absolute bg-white">';
        }
    }

    // End level for dropdown
    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= '</ul>';
    }

    // Start each element of the menu
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        // Get classes added in the WordPress menu editor and add default classes
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        
        // Combine user-specified and default classes
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));

        // Add default Tailwind classes and concatenate with custom classes
        $class_names = 'relative group ' . esc_attr($class_names);

        // Start the list item
        $output .= '<li class="' . $class_names . '">';

        // Add menu link with custom and default Tailwind classes
        $output .= '<a href="' . esc_attr($item->url) . '" class="nav-link text-sm px-2 xl:px-3 py-2 text-black uppercase font-semibold hover:bg-gray-200 flex items-center justify-between">';

        $output .= esc_html($item->title);

        // If the menu item has children, add a FontAwesome chevron down icon
        if (in_array('menu-item-has-children', $classes)) {
            $output .= ' <i class="fa-solid fa-chevron-down ml-2"></i>';
        }

        $output .= '</a>';
    }

    // End each element of the menu
    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= '</li>';
    }
}