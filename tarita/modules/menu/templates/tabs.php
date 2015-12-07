<?php

/*

type: layout

name: Tabs

description: Tabs menu

*/
//dd($menu_filter);
?>
  <?php
 $menu_filter['ul_class'] = 'nav navbar-nav';
        $menu_filter['ul_class_deep'] = 'dropdown-menu';
        $menu_filter['li_class'] = 'dropdown';
        $menu_filter['li_class_deep'] = 'dropdown-submenu';
        $menu_filter['data-toggle'] = 'dropdown';
  $mt =  menu_tree($menu_filter);
  if($mt != false){
            print ($mt);
        } else {
            print lnotif("There are no items in the menu <b>".$params['menu-name']. '</b>');
            //pages_tree($params);
            //print "There are no items in the menu <b>".$params['menu-name']. '</b>';
        }
   ?>