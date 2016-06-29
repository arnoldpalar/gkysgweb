<?php
/**
 * Template Name: Dummy Page Template
 * Description: Dummy Page Template
 *
 * @package gkysg
 */


$menu_items = wp_get_nav_menu_items( 'main');
$menu_items_arr = array();
$parents = array();

foreach($menu_items as $key => $menu_item){
    if(isset($menu_item->menu_item_parent) && $menu_item->menu_item_parent != 0){
        $parents[$menu_item->ID] = array(
            'title' => $menu_item->title,
            'target' => $menu_item->url
        );

        if(!array_key_exists('sub-menus', $parents[$menu_item->menu_item_parent])) {
            $parents[$menu_item->menu_item_parent]['sub-menus'] = array();
        }

        $parents[$menu_item->menu_item_parent]['sub-menus'][] = &$parents[$menu_item->ID];
    } else {
        $parents[$menu_item->ID] = array(
            'title' => $menu_item->title,
            'target' => $menu_item->url
        );

        $menu_items_arr[$menu_item->ID] = &$parents[$menu_item->ID];
    }
}
echo '<br><pre>';
print_r($menu_items_arr);
echo '</pre>';