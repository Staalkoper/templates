<?php

/*
  type: layout
  content_type: static
  name: Services version 2
  description: Services layout
*/
?>

<?php include TEMPLATE_DIR . "header.php"; ?>
    <div class="edit" rel="services2<?php print PAGE_ID(); ?>" field="services2">
        <!--=== News Block ===-->
        <div class="container content-sm">
            <div class="text-center margin-bottom-50">
                <h2 class="title-v2 title-center">OUR SERVICES</h2>
                <p class="space-lg-hor">If you are going to use a <span class="color-green">passage of Lorem Ipsum</span>, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making <span class="color-green">this the first</span> true generator on the Internet.</p>
            </div>

            <div class="row news-v2">
                <div class="">
                    <module type="posts" id="services<?php print PAGE_ID;?>" template="normalview"/>
                </div>
            </div>
        </div>
        <!--=== End News Block ===-->

        <!--=== Parallax Quote ===-->
        <module type="paralaxblock"/ id="paralaxblock<?php print PAGE_ID();?>">
        <!--=== End Parallax Quote ===-->

        <!--=== Colorful Service Blocks ===-->
    <div class="container content-sm">
            <div class="row">
                <div class="col-md-4" style="padding-right: 0;padding-left: 0;">
                    <module type="boxes" id="box1<?php print PAGE_ID();?>"/>
                </div>
                <div class="col-md-4" style="padding-right: 0;padding-left: 0;">
                    <module type="boxes" id="box2<?php print PAGE_ID();?>"/>
                </div>
                <div class="col-md-4" style="padding-right: 0;padding-left: 0;">
                    <module type="boxes" id="box3<?php print PAGE_ID();?>"/>
                </div>
            </div>
        <div class="row">
            <div class="col-md-6" style="padding-right: 0;padding-left: 0;">
                <module type="boxes" id="box4<?php print PAGE_ID();?>"/>
            </div>
            <div class="col-md-6" style="padding-right: 0;padding-left: 0;">
                <module type="boxes" id="box5<?php print PAGE_ID();?>"/>
            </div>
        </div>
        </div>
        <!--=== End Colorful Service Blocks ===-->
        <div class="container content-sm">
        <div class="row">
            <div class="col-md-4" style="padding-right: 0;padding-left: 0;">
                <module id="pb1" type="pricingtables"/>
            </div>
            <div class="col-md-4" style="padding-right: 0;padding-left: 0;">
                <module id="pb2" type="pricingtables"/>
            </div>
            <div class="col-md-4" style="padding-right: 0;padding-left: 0;">
                <module id="pb4" type="pricingtables"/>
            </div>
        </div>
        </div>

        <div class="parallax-counter-v2 parallaxBg1" style="background-position: 50% 90px;">
            <div class="container">
                <ul class="row list-row">
                    <li class="col-md-3 col-sm-6 col-xs-12 md-margin-bottom-30">
                        <div class="counters rounded">
                            <span class="counter">18298</span>
                            <h4 class="text-transform-normal">Web Developers</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 md-margin-bottom-30">
                        <div class="counters rounded">
                            <span class="counter">24583</span>
                            <h4 class="text-transform-normal">Designers</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 sm-margin-bottom-30">
                        <div class="counters rounded">
                            <span class="counter">37904</span>
                            <h4 class="text-transform-normal">Open Contests</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12">
                        <div class="counters rounded">
                            <span class="counter">50892</span>
                            <h4 class="text-transform-normal">Happy Customors</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <span class="mw-icon-bin mw-icon-changeble"></span> <p class="iconfeature-holder mw-icon-truck mw-icon-changeble">&nbsp;
        </p>
        <!--=== End Parallax Counter ===-->

        <!--=== Call To Action ===-->
        <div class="call-action-v1 bg-color-red">
            <div class="container">
                <div class="call-action-v1-box">
                    <div class="call-action-v1-in">
                        <p class="color-light">Creative technology company providing key digital services and focused on helping our clients to build a successful business on web and mobile.</p>
                    </div>
                    <div class="call-action-v1-in inner-btn page-scroll">
                        <a href="#portfolio" class="btn-u btn-brd btn-brd-hover btn-u-light btn-u-block"><span class="mw-icon-bin"></span> Contact us</a>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include TEMPLATE_DIR . "footer.php"; ?>