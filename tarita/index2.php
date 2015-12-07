<?php

/*
  type: layout
  content_type: static
  name: Home 2
  description: Home layout
*/
  ?>
  <?php include TEMPLATE_DIR . "header.php"; ?>

  <div class="edsdfsdfit edit" rel="homes2" field="homes2" data-mw="main">


    <module type="pictures" id="bigslider2<?php print PAGE_ID();?>" template="sliderbig"/>
      <div class="container content">
          <div class="clearfix margin-bottom-30"></div>
          <div class="shadow-wrapper">
              <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                  <h2>One Template Endless Possibilities</h2>
                  <p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
              </div>
          </div>

          <div class="clearfix margin-bottom-40"></div>

          <!-- Service Blocks -->
          <div class="margin-bottom-20"></div>
          <div class="row margin-bottom-40">
              <div class="col-md-3 col-sm-6">
                  <div class="service-block service-block-default">
                      <i class="icon-custom rounded-x icon-bg-dark fa fa-lightbulb-o"></i>
                      <h2 class="heading-md">Creative Ideas</h2>
                      <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="service-block service-block-default">
                      <i class="icon-custom rounded-x icon-bg-dark fa fa-compress"></i>
                      <h2 class="heading-md">Fully Responsive</h2>
                      <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="service-block service-block-default">
                      <i class="icon-custom rounded-x icon-bg-dark fa fa-plus-square-o"></i>
                      <h2 class="heading-md">Launch Ready</h2>
                      <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="service-block service-block-default">
                      <i class="icon-custom rounded-x icon-bg-dark fa  fa-dot-circle-o"></i>
                      <h2 class="heading-md">Dedicated Support</h2>
                      <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine usce dapibus elit nondapibus</p>
                  </div>
              </div>
          </div>
          <!-- End Service Blokcs -->

          <!-- Info Blokcs -->
          <div class="row margin-bottom-40">
              <!-- Welcome Block -->
              <div class="col-md-8 md-margin-bottom-40">
                  <div class="headline"><h2>Welcome To Unify</h2></div>
                  <div class="row">
                      <div class="col-sm-4">
                          <img class="img-responsive margin-bottom-20" src="<?php
                          print TEMPLATE_URL; ?>assets/img/main/21.jpg" alt="" />
                      </div>
                      <div class="col-sm-8">
                          <p>Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals. It works on all major web browsers, tablets and phone.</p>
                          <ul class="list-unstyled margin-bottom-20">
                              <li><i class="fa fa-check color-green"></i> Donec id elit non mi porta gravida</li>
                              <li><i class="fa fa-check color-green"></i> Corporate and Creative</li>
                              <li><i class="fa fa-check color-green"></i> Responsive Bootstrap Template</li>
                              <li><i class="fa fa-check color-green"></i> Corporate and Creative</li>
                          </ul>
                      </div>
                  </div>

                  <blockquote class="hero-unify">
                      <p>Award winning digital agency. We bring a personal and effective approach to every project we work on, which is why. Unify is an incredibly beautiful responsive Bootstrap Template for corporate professionals.</p>
                      <small>CEO, Jack Bour</small>
                  </blockquote>
              </div><!--/col-md-8-->

              <!-- Posts -->
              <div class="col-md-4 posts">
<module type="posts" id="posts<?php print page_id();?>"/>
          </div><!--/row-->
          <!-- End Info Blokcs -->

          <!-- Our Clients -->
              <div class="headline"><h2>Our Clients</h2></div>
         <module type="pictures" template="owl-carousel" id="images<?php print PAGE_ID();?>"/>
          <!-- End Our Clients -->
      </div><!--/container-->
    </div>
      <!-- End Content Part -->
  	<?php include TEMPLATE_DIR . "footer.php"; ?>