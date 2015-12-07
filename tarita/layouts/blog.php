<?php

/*
  type: layout
  content_type: static
  name: Blog
  description: Blog layout
*/
  ?>

  <?php include TEMPLATE_DIR. "header.php";?>
  <div class="container content">
  	<div class="row magazine-page">
  		<!-- Begin Content -->
  		<div class="col-md-9">


  			<module type="posts" id="featuress<?php print PAGE_ID;?>" template="featured"/>

  				<hr>

  				<!-- Magazine Mini News and Info Block -->
  				<div class="mw-row">
  					<!--Mini News-->
  					<div class="mw-col" style="width: 40%;">
  						<module type="posts" id="featuress<?php print PAGE_ID;?>" template="sidebar2"/>
  						</div>
  						<!--End Mini News-->

  						<!--Info Block-->
  						<div class="mw-col" style="width: 80%;">
  							<module type="posts" id="featuress<?php print PAGE_ID;?>" template="boxed"/>
  							</div>
  							<!--End Info Block-->
  						</div>
  						<!-- End Magazine Mini News and Info Block -->

  						<hr>

  						<!-- Magazine News -->
  						<module type="posts" id="featuress<?php print PAGE_ID;?>" template="normalview"/>
  							<!-- End Magazine News -->
  						</div>
  						<!-- End Content -->

  						<!-- Begin Sidebar -->
  						<div class="col-md-3">
  							<!-- Magazine Posts -->
  							<module type="posts" id="sidebar<?php print PAGE_ID;?>" template="sidebar1"/>


  									<module type="pictures" id="picturessmall<?php print PAGE_ID;?>" template="smallpictures"/>
  										<!-- End Photo Stream -->
                      <module type="twitter_feed" id="twitter_feed<?php print PAGE_ID;?>"/>


  									</div>

  								</div>
  							</div>

  						<?php include TEMPLATE_DIR. "footer.php";?>