<?php

namespace App;

use Walker_Nav_Menu;

class Tailwind_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $current_object_id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
    
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
    
        // Add border class for first-level items
        if ($depth === 0) {
            $classes[] = 'border-b border-gray-300';
        }
    
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
    
        $output .= $indent . '<li' . $class_names . '>';
    
        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';
    
        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);
    
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (! empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
    
        $title = apply_filters('the_title', $item->title, $item->ID);
    
        // Add chevron icon for parent items
        $chevron_icon = '';
        if (in_array('menu-item-has-children', $classes)) {
            $chevron_icon = '<svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>';
        }
    
        $item_output = isset($args->before) ? $args->before : '';
        $item_output .= '<a' . $attributes . ' class="block py-2 px-4 tracking-[0.45px] text-black hover:bg-gray-200">';
        $item_output .= '<div class="flex items-center justify-between w-full">'; // Flex container
        $item_output .= '<span>' . $title . '</span>'; // Title in a span
        $item_output .= $chevron_icon; // Append the icon
        $item_output .= '</div>';
        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after : '';
    
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    
    
    
    

    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu hidden  bg-white \">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}