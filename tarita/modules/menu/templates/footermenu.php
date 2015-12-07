<?php

/*

type: layout

name: Footer menu

description:menu

*/
//dd($menu_filter);
?>
<div class="col-md-12 md-margin-bottom-40 edit" rel="footermenu" field="footermenu" >
  <div class="headline"><h2>Useful Links</h2></div>

  <?php
  $menu_filter['ul_class'] = 'list-unstyled link-list';
  $menu_filter['ul_class_deep'] = 'dropdown-menu';
  $menu_filter['li_class'] = 'dropdown';
  $menu_filter['li_class_deep'] = 'dropdown-submenu';
  $mt =  menu_tree($menu_filter);
  if($mt != false){
    print ($mt);
  } else {
    print lnotif("There are no items in the menu <b>".$params['menu-name']. '</b>');
            //pages_tree($params);
            //print "There are no items in the menu <b>".$params['menu-name']. '</b>';
  }
  ?>

</div>