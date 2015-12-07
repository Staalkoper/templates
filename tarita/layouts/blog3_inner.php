<?php
/*
  type: layout
  content_type: static
  name: Post
  description: Post layout

*/
?>


<?php include TEMPLATE_DIR . "header.php"; ?>
<style>
    .blog-post img{
        max-width: 100%;
    }
</style>
    <div class="container content edit" rel="content<?php print page_id();?>" field="content<?php print page_id();?>">

        <div class="row blog-page">
            <!-- Left Sidebar -->
            <div class="col-md-9">
                <!--Blog Post-->
                <div class="blog margin-bottom-40">
                    <h2 class="headline edit" field="title" rel="content">Post title goes here</h2>

                    <div class="blog-post-tags">
                        <ul class="list-unstyled list-inline blog-info">
                            <li><i class="fa fa-calendar" field="created_at" rel="content"></i></li>
                            <li><i class="fa fa-pencil" field="created_by" rel="content"></i></li>
                        </ul>
                    </div >

                </div>
                <div class="blog-post edit" field="content" rel="content">
                    <p>My post content</p>
                </div>
                <div class="edit" rel="content" field="comments">
                    <module data-type="comments" data-template="default" data-content-id="<?php print CONTENT_ID; ?>"/>
                </div>

                <!--End Blog Post-->
                <!--End Pagination-->
            </div>
            <!-- End Left Sidebar -->

            <!-- Right Sidebar -->
            <div class="col-md-3 magazine-page">
                <!-- Search Bar -->
                <!-- End Magazine Posts -->

                <!-- Social Icons -->
                <module type="socialbuttons" id="social<?php print PAGE_ID; ?>" template="default"/>
                <!-- End Social Icons -->


                <!-- End Quick Links -->

                <!-- Photo Stream -->
                <module type="pictures" id="picturessmall<?php print PAGE_ID; ?>" template="smallpictures"/>
                <!-- End Photo Stream -->

                <!-- Blog Twitter -->
                <module type="twitter_feed" id="twitter_feed<?php print PAGE_ID; ?>"/>
                <!-- End Blog Twitter -->
            </div>
            <!-- End Sidebar -->
        </div>
    </div>
    <!-- Posts -->


<?php include TEMPLATE_DIR . "footer.php"; ?>