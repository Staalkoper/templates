<?php

/*

type: layout
content_type: dynamic
name: Shop with right sidebar
is_shop: y
description: shop layout
position: 4
*/


?>
<?php include THIS_TEMPLATE_DIR. "header.php"; ?>
<br>
<div class="container">
  <div class="row">
      <div class="col-md-9">
          <module type="shop/products"   limit="18" description-length="70" hide-paging="n"   />

      </div>
    <div class="col-md-3">
      <?php   include TEMPLATE_DIR. 'layouts' . DS."shop_sidebar.php"; ?>
    </div>

  </div>
</div>
<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>
