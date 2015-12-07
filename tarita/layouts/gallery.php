<?php

/*

  type: layout
  content_type: static
  name: Gallery
  position: 3
  description: Gallery
  tag:home

*/

?>
<?php include TEMPLATE_DIR . "header.php"; ?>

<div class="container">
    <div class="box-container">
        <div class="edit headline" field="content" rel="content">
            <h2 class="edit " field="title" rel="content">Hot Concept Art</h2>

            <div class="edit" field="content_body" rel="content"></div>
            <br>
            <h2>Two columns</h2>
            <module content-id="1<?php print PAGE_ID; ?>" type="pictures" template="2col"/>
            <br>
            <h2>Three columns</h2>
            <module content-id="2<?php print PAGE_ID; ?>" type="pictures" template="3col"/>
            <br>
            <h2>Four columns</h2>
            <module content-id="3<?php print PAGE_ID; ?>" type="pictures" template="4col"/>
            <br>
            <h2>Six columns</h2>
            <module content-id="4<?php print PAGE_ID; ?>" type="pictures" template="6col"/>
        </div>
    </div>
</div>
<?php include TEMPLATE_DIR . "footer.php"; ?>
