<?php

/*
  type: layout
  content_type: static
  name: 2 columns right
  description: Services layout
*/
?>

<?php include TEMPLATE_DIR . "header.php"; ?>
    <div class="container content edit" rel="2colr<?php print PAGE_ID(); ?>" field="2colr">
        <!-- Service Blcoks -->
        <div class="container content">
        <div class="row">
        <div class="col-md-9">
            <!-- Our Services -->
            <div class="headline"><h2>Our Services</h2></div>
            <div class="row margin-bottom-20">
                <div class="col-md-4">
                    <module type="boxes" id="b1"/>
                </div>
                <div class="col-md-4">
                    <module type="boxes" id="b12"/>
                </div>
                <div class="col-md-4">
                    <module type="boxes" id="b13"/>
                </div>
            </div><!--/welcome-block-->
            <!-- End Our Services -->

            <!-- Blockquotes -->
            <p>Unify is an <strong class="color-green">incredibly beautiful</strong> responsive Bootstrap Template for corporate and creative professionals. It works on all major web browsers. Award winning digital agency. We bring a personal and effective approach adipiscing elit approach to <strong class="color-green">every project</strong> we work on, which is why our clients love us and why they. Lorem sequat ipsum dolor lorem sit amet, consectetur adipiscing dolor elit.</p>
            <p>Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, conse cteturse adipiscing elit magna consectetur and effective.</p>
            <br>
            <blockquote class="hero-unify margin-bottom-40">
                <p>Award winning digital agency. We bring a personal and effective consectetur and effective approach adipiscing elit approach to every project we work on, which is why our clients love us and why they.</p>
                <small>CEO, Jack Baur</small>
            </blockquote>
            <!-- End Blockquotes -->

            <!-- Recent Works -->
            <div class="owl-carousel-v1 owl-work-v1 margin-bottom-40">
                <div class="headline"><h2 class="pull-left">Recent Works</h2>
                       </div>

                <module type="pictures" template="inner" id="2cr<?php print PAGE_ID();?>"/>

            </div>
            <!-- End Recent Works -->
        </div><!--/col-md-9-->

        <div class="col-md-3">
            <!-- About Us -->
            <div class="margin-bottom-30">
                <div class="headline"><h2>About Us</h2></div>
                <p>Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, conse cteturse adipiscing elit magna.</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-check color-green"></i> Consectetur adipiscing elit</li>
                    <li><i class="fa fa-check color-green"></i> Ipsum dolor sit amet</li>
                    <li><i class="fa fa-check color-green"></i> Personal and effective approach</li>
                    <li><i class="fa fa-check color-green"></i> Ut non libero magna sedot</li>
                </ul>
            </div>

            <!-- Posts -->
            <div class="posts margin-bottom-30">
                <div class="headline"><h2>Recent Blog Entries</h2></div>
                <module type="posts" id="right<?php print PAGE_ID();?>"/>
            </div><!--/posts-->

            <!-- Contact Us -->
            <div class="who margin-bottom-30">
                <div class="headline"><h2>Contact Us</h2></div>
                <p>Vero facilis est etenim a feugiat cupiditate non quos etrerum facilis.</p>
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-home"></i>5B amus ED554, New York, US</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>infp@example.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>1(222) 5x86 x97x</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>http://www.example.com</a></li>
                </ul>
            </div>
        </div><!--/col-md-3-->
        </div><!--/row-->

        <!-- Our Clients -->
        <div id="clients-flexslider" class="flexslider home clients">
            <div class="headline"><h3>Our Clients</h3></div>
            <module  type="pictures" template="owl-carousel" id="clients<?php print PAGE_ID();?>"/>
        </div><!--/flexslider-->
        <!-- End Our Clients -->
        </div>
    </div>

<?php include TEMPLATE_DIR . "footer.php"; ?>