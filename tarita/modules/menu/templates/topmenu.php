<?php

/*

type: layout

name: Top menu

description:menu

*/
//dd($menu_filter);
?>
<style type="text/css">
  .header .topbar ul.loginbar > li {
  display: inline;
  list-style: none;
  position: relative;
  padding-bottom: 15px;
  margin-right: 10px;
}
</style>
  <?php
  $menu_filter['ul_class'] = 'loginbar pull-right';
  $menu_filter['ul_class_deep'] = 'languages';
  $menu_filter['after'] = 'topbar-devider';
  $menu_filter['li_class_deep'] = '';
  $mt =  menu_tree($menu_filter);
  if($mt != false){
    print ($mt);
  } else {
    print lnotif("There are no items in the menu <b>".$params['menu-name']. '</b>');
            //pages_tree($params);
            //print "There are no items in the menu <b>".$params['menu-name']. '</b>';
  }
  ?>