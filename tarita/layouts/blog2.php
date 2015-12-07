<?php
/*
  type: layout
  content_type: static
  name: Blog v2
  description: Blog layout
*/
?>

<?php include TEMPLATE_DIR . "header.php"; ?>
    <div class="container content">
        <div class="row magazine-page">

            <div class="col-md-9">

                <!-- Magazine Mini News and Info Block -->
                <module type="posts" id="one<?php print PAGE_ID; ?>" template="featured"/>

                <hr>


            </div>

            <div class="col-md-3 edit" field="sidebarblog2<?php print PAGE_ID();?>" rel="sidebarblog2<?php print PAGE_ID();?>">


                <module type="twitter_feed" id="twitter_feed<?php print PAGE_ID; ?>"/>

            </div>
            <!-- End Sidebar -->
        </div>
    </div>

<?php include TEMPLATE_DIR . "footer.php"; ?>