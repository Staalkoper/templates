<?php

/*
  type: layout
  content_type: static
  name: Example Page Panels
  description: Home layout
*/
?>
<?php include TEMPLATE_DIR . "header.php"; ?>

    <div class="edit" rel="example_page_panels2" field="example_page_panels2" data-mw="main">
        <div class="container wrapper">
            <div class="purchase">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 animated fadeInLeft">
                            <span>Panels</span>
                            <p>Colorful solution for your content. Just choose a color and fill it!</p>
                        </div>
                    </div>
                </div>

            </div>
            <module type="panels" id="<?php print PAGE_ID();?>1" template="aqua"/>
            <module type="panels" id="<?php print PAGE_ID();?>2" template="blue"/>
            <module type="panels" id="<?php print PAGE_ID();?>3" template="brown"/>
            <module type="panels" id="<?php print PAGE_ID();?>4" template="Danger"/>
            <module type="panels" id="<?php print PAGE_ID();?>5" template="dark"/>
            <module type="panels" id="<?php print PAGE_ID();?>6" template="dark-blue"/>
            <module type="panels" id="<?php print PAGE_ID();?>7" template="default"/>
            <module type="panels" id="<?php print PAGE_ID();?>8" template="gray"/>
            <module type="panels" id="<?php print PAGE_ID();?>9" template="green"/>
            <module type="panels" id="<?php print PAGE_ID();?>10" template="info"/>
            <module type="panels" id="<?php print PAGE_ID();?>11" template="light-green"/>
            <module type="panels" id="<?php print PAGE_ID();?>12" template="lightgreen"/>
            <module type="panels" id="<?php print PAGE_ID();?>13" template="orange"/>
            <module type="panels" id="<?php print PAGE_ID();?>14" template="purple"/>
            <module type="panels" id="<?php print PAGE_ID();?>15" template="Sea"/>
            <module type="panels" id="<?php print PAGE_ID();?>16" template="Success"/>
            <module type="panels" id="<?php print PAGE_ID();?>17" template="Warning"/>
            <module type="panels" id="<?php print PAGE_ID();?>18" template="yellow"/>
        </div>
    </div>
<?php include TEMPLATE_DIR . "footer.php"; ?>