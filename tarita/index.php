<?php

/*
  type: layout
  content_type: static
  name: Home
  description: Home layout
*/
  ?>
  <?php include TEMPLATE_DIR . "header.php"; ?>

  <div class="edsdfsdfit edit" rel="homes" field="homes" data-mw="main">

<module type="pictures" id="bigslider<?php print PAGE_ID();?>" template="bigslider"/>

  		<div class="purchase edsdfsdfit" rel="animatedtext" field="animatedtext">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-9 animated fadeInLeft">
  						<span>Lorem ipsum dolar amet tempor incididunt ut veniam omnis</span>

  						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
  							voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi vehicula sem
  							ut
  							volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat corrupti
  							quos.</p>
  						</div>
  						<div class="col-md-3 btn-buy animated fadeInRight">
  							<a href="#" class="btn-u btn-u-lg"><i class="fa fa-cloud-download"></i> Download Now</a>
  						</div>
  					</div>
  				</div>
  			</div>
      <module type="separator" />
  		<div class="wrapper container content edit" rel="hwf<?php print PAGE_ID;?>" field="hwf<?php print PAGE_ID;?>">


  			<module type="posts" id="<?php print PAGE_ID;?>" template="recentposts"/>

  				<!-- End Recent Works -->

  				<!-- Info Blokcs -->
  				<div class="row margin-bottom-30">
  					<!-- Welcome Block -->
  					<div class="mw-row">
  						<div class="mw-col" style="width: 60%">
  							<div class="col-md-12 md-margin-bottom-40">
  								<div class="headline"><h2>Hello World!</h2></div>
  								<div class="row">
  									<div class="col-sm-4">
  										<img class="img-responsive margin-bottom-20" src="<?php
  										print TEMPLATE_URL; ?>assets/img/main/21.jpg" alt="">
  									</div>
  									<div class="col-sm-8">
  										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
                      excepturi vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat corrupti quos</p>
  											<ul class="list-unstyled margin-bottom-20">
  												<li><i class="fa fa-check color-green"></i> Donec id elit non mi porta gravida
  												</li>
  												<li><i class="fa fa-check color-green"></i> Corporate and Creative</li>
  												<li><i class="fa fa-check color-green"></i> Responsive Bootstrap Template</li>
  												<li><i class="fa fa-check color-green"></i> Corporate and Creative</li>
  											</ul>
  										</div>
  									</div>

  									<blockquote class="hero-unify">
  										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
                      excepturi vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat corrupti quos</p>
  											<small>CEO, Jack Bour</small>
  										</blockquote>
  									</div>
  								</div>
  								<!--/col-md-8-->
  								<div class="mw-col" style="width: 40%">
  									<div class="col-md-12">
  										<div class="headline"><h2>Latest Images</h2></div>
  										<module type="pictures" id="awd<?php PRINT PAGE_ID; ?>" template="slider"/>
  										</div>
  									</div>
  									<!--/col-md-4-->
  								</div>
  							</div>
  							<!-- End Info Blokcs -->

  						</div>
  					</div>

  				</div>
  			</div>
  		</div>
  	</div>
  	<?php include TEMPLATE_DIR . "footer.php"; ?>