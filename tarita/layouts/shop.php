<?php

/*

type: layout
content_type: static
name: Shop with left sidebar
is_shop: y
description: Shop layout
*/


?>
<?php include THIS_TEMPLATE_DIR. "header.php"; ?>
<br>
<div class="container edit" rel="shops<?php print PAGE_ID();?>" field="shop<?php print PAGE_ID();?>">
  <div class="row">

    <div class="col-md-3">
      <?php   include TEMPLATE_DIR. 'layouts' . DS."shop_sidebar.php"; ?>
    </div>
    <div class="col-md-9">
        <module type="shop/products"   limit="18" description-length="70" hide-paging="n"   />

    </div>
  </div>
</div>
<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>
