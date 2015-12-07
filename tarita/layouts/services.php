<?php

/*
  type: layout
  content_type: static
  name: Services
  description: Services layout
*/
?>

<?php include TEMPLATE_DIR . "header.php"; ?>
    <div class="container content edit" rel="services<?php print PAGE_ID(); ?>" field="services">
        <!-- Service Blcoks -->
        <div class="row margin-bottom-10">
            <div class="col-md-3 col-sm-6">
                <module type="boxes" id="box1"/>
            </div>
            <div class="col-md-3 col-sm-6">
                <module type="boxes" id="box2"/>
            </div>
            <div class="col-md-3 col-sm-6">
                <module type="boxes" id="box3/>
        </div>
        <div class=" col-md-3 col-sm-6
                ">
                <module type="boxes" id="box4"/>
            </div>
        </div>

        <div class="row margin-bottom-10">
            <div class="col-md-3 col-sm-6">
                <module type="boxes" id="box5"/>
            </div>
            <div class="col-md-3 col-sm-6">
                <module type="boxes" id="box6"/>
            </div>
            <div class="col-md-3 col-sm-6">
                <module type="boxes" id="box7/>
        </div>
        <div class=" col-md-3 col-sm-6
                ">
                <module type="boxes" id="box8"/>
            </div>
        </div>


        <!-- Tabs and Carousel-->
        <div class="row margin-bottom-30">
            <!-- Accordion-->
            <div class="col-md-7">
                <div class="headline"><h2>Service Offers</h2></div>
                <module type="panels" id="panel1"/>
                <module type="panels" id="panel2"/>
                <module type="panels" id="panel3"/>
            </div>
            <!--/col-md-7-->
            <!-- End Accordion-->

            <!-- Latest Shots -->
            <div class="col-md-5">
                <div class="headline"><h2>Latest Shots</h2></div>
                <module type="pictures" id="<?php print PAGE_ID(); ?>"
            </div>
            <!--/col-md-5-->
            <!-- End Latest Shots -->
        </div>
        <!--/row-->
        <!-- End Tabs and Carousel -->

        <!-- Our Clients -->
        <div id="clients-flexslider" class="flexslider home clients">
            <div class="headline"><h2>Our Clients</h2></div>
            <ul class="slides">
                <li>
                    <a href="#">
                        <img src="assets/img/clients/hp_grey.png" alt=""/>
                        <img src="assets/img/clients/hp.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/igneus_grey.png" alt=""/>
                        <img src="assets/img/clients/igneus.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/vadafone_grey.png" alt=""/>
                        <img src="assets/img/clients/vadafone.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/walmart_grey.png" alt=""/>
                        <img src="assets/img/clients/walmart.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/shell_grey.png" alt=""/>
                        <img src="assets/img/clients/shell.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/natural_grey.png" alt=""/>
                        <img src="assets/img/clients/natural.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/aztec_grey.png" alt=""/>
                        <img src="assets/img/clients/aztec.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/gamescast_grey.png" alt=""/>
                        <img src="assets/img/clients/gamescast.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/cisco_grey.png" alt=""/>
                        <img src="assets/img/clients/cisco.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/everyday_grey.png" alt=""/>
                        <img src="assets/img/clients/everyday.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/cocacola_grey.png" alt=""/>
                        <img src="assets/img/clients/cocacola.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/spinworkx_grey.png" alt=""/>
                        <img src="assets/img/clients/spinworkx.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/shell_grey.png" alt=""/>
                        <img src="assets/img/clients/shell.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/natural_grey.png" alt=""/>
                        <img src="assets/img/clients/natural.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/gamescast_grey.png" alt=""/>
                        <img src="assets/img/clients/gamescast.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/everyday_grey.png" alt=""/>
                        <img src="assets/img/clients/everyday.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/clients/spinworkx_grey.png" alt=""/>
                        <img src="assets/img/clients/spinworkx.png" class="color-img" alt=""/>
                    </a>
                </li>
            </ul>
        </div>
        <!--/flexslider-->
        <!-- End Our Clients -->
    </div>
</div>

<?php include TEMPLATE_DIR . "footer.php"; ?>