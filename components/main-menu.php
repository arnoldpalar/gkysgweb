<?php
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
?>
<nav class="collapse navbar-collapse navbar-responsive-collapse">
    <div class="menu-container">
        <ul class="nav navbar-nav">
            <?php
            foreach($menu_items_arr as $key => $menu_item){
                echo '<li class="dropdown">';
                if(array_key_exists('sub-menus', $menu_item)){
                    ?><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $menu_item['title'] ?> </a><?php
                    echo '<ul class="dropdown-menu">';
                    foreach($menu_item['sub-menus'] as $key1 => $menu_item1){
                        if(array_key_exists('sub-menus', $menu_item1)){
                            ?><li class="dropdown-submenu"><?php
                            ?><a href="javascript:void(0);"> <?php echo $menu_item1['title'] ?> </a><?php
                            echo '<ul class="dropdown-menu">';
                            foreach($menu_item1['sub-menus'] as $key2 => $menu_item2){
                                ?><li><a href="<?php echo $menu_item2['target'] ?>"> <?php echo $menu_item2['title'] ?> </a></li><?php
                            }
                            echo '</ul>';
                        } else {
                            ?><li><a href="<?php echo $menu_item1['target'] ?>"> <?php echo $menu_item1['title'] ?> </a></li><?php
                        }
                    }
                    echo '</ul>';
                } else {
                    ?><a href="<?php echo $menu_item['target'] ?>"> <?php echo $menu_item['title'] ?> </a><?php
                }
                echo '</li>';
            }
            ?>
        </ul>
    </div>
</nav>