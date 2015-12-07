<?php
/*
  type: layout
  content_type: static
  name: Post
  description: Post layout

*/
$id = post_id();
$content = get_content_by_id($id);


  ?>


  <?php include TEMPLATE_DIR. "header.php";?>
 <div class="container content edit" rel="content<?php print PAGE_ID();?>" field="content<?php print PAGE_ID();?>">
	<div class="row blog-page">
		<!-- Left Sidebar -->
		<div class="col-md-9">
			<!--Blog Post-->
			<div class="blog margin-bottom-40">
				<h2 class="headline edit" field="title" rel="content"><?php print $content['title'];?></h2>
				<div class="blog-post-tags">
					<ul class="list-unstyled list-inline blog-info">
						<li><i class="fa fa-calendar"></i> <?php print $content['created_at'];?></li>
						<li><i class="fa fa-pencil"></i> <?php print $content['created_by'];?></li>
					</ul>
				</div>
				<div class="blog-img">
					<img class="img-responsive" src="" alt="">
				</div>
			</div>
			<div class="blog-post edit" field="content" rel="content">
				<p>My post content</p>
			</div>
      <div class="edit" rel="content" field="comments">
            <module data-type="comments" data-template="default" data-content-id="<?php print CONTENT_ID; ?>"  />
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
  								<module type="socialbuttons" id="social<?php print PAGE_ID;?>" template="default"/>
  									<!-- End Social Icons -->

  									<!-- Quick Links -->

  									<!-- End Quick Links -->

  									<!-- Photo Stream -->
  									<module type="pictures" id="picturessmall<?php print PAGE_ID;?>" template="smallpictures"/>
  										<!-- End Photo Stream -->

  										<!-- Blog Twitter -->
  										      <module type="twitter_feed" id="twitter_feed<?php print PAGE_ID;?>"/>
  										<!-- End Blog Twitter -->
  									</div>
  									<!-- End Sidebar -->
  								</div>
  							</div>
			<!-- Posts -->
		</div>

		<!-- End Right Sidebar -->
	</div><!--/row-->
</div>


<?php include TEMPLATE_DIR. "footer.php";?>