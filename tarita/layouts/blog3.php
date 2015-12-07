<?php

/*
  type: layout
  content_type: static
  name: Blog 3
  description: Blog layout
*/
  ?>
<?php include TEMPLATE_DIR. "header.php";?>

<div class="container content">
  <div class="row blog-page blog-item"> 
    <!-- Begin Content -->
    <div class="col-md-9 md-margin-bottom-60">
      <div class="edit" field="content" rel="content">
        <module type="posts" id="features<?php print PAGE_ID;?>" template="blog_simple_default"/>
      </div>
    </div>
    <!-- End Content --> 
    
    <!-- Begin Sidebar -->
    <div class="col-md-3 magazine-page"> 
      <!-- Magazine Posts -->
      <module type="posts" id="sidebar<?php print PAGE_ID;?>" template="sidebar1"/>
      <module type="pictures" id="picturessmall<?php print PAGE_ID;?>" template="smallpictures"/>
      <!-- End Photo Stream -->
      <module type="twitter_feed" id="twitter_feed<?php print PAGE_ID;?>"/>
    </div>
  </div>
</div>
<?php include TEMPLATE_DIR. "footer.php";?>
