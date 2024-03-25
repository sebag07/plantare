<?php 

    function get_menu_with_children($menu_name){
    $navbar_items = wp_get_nav_menu_items($menu_name);
    $menu_with_children = array();
    $child_items = [];

    // pull all child menu items into separate object
    foreach ( (array) $navbar_items as $key => $item) {
        if ($item->menu_item_parent) {
            array_push($child_items, $item);
            unset($navbar_items[$key]);
        }
    }

    // push child items into their parent item in the original object
    foreach ( (array) $navbar_items as $item) {
        foreach ($child_items as $key => $child) {
            if ($child->menu_item_parent == $item->ID) {
                if (!$item->child_items) {
                    $item->child_items = [];
                }

                array_push($item->child_items, $child);
                unset($child_items[$key]);
            }
        }
    }

    return $navbar_items;
    }

    function example_add_post_class_to_single_post( $classes ) {

        if ( is_single() ) {
            array_push( $classes, 'single' );
        } // end if
    
        return $classes;
    
    }
    add_filter( 'post_class', 'example_add_post_class_to_single_post' );

    add_theme_support( 'post-thumbnails' );