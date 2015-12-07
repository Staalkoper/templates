<?php

/*
  type: layout
  content_type: static
  name: Example Colorful Boxes
  description: Home layout
*/
?>
<?php include TEMPLATE_DIR . "header.php"; ?>

    <div class="edit" rel="example_page_boxes" field="example_page_boxes" data-mw="main">
        <div class="container wrapper">
            <div class="purchase">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 animated fadeInLeft">
                            <span>Colorful boxes</span>
                            <p>Colorful solution for your content. Just choose a color and fill it! Fully responsive!</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-6">
                    <module type="boxes" id="2"/>
                </div>
                <div class="col-sm-6">
                    <module type="boxes" id="3"/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <module type="boxes" id="4"/>
                </div>
                <div class="col-sm-4">
                    <module type="boxes" id="5"/>
                </div>
                <div class="col-sm-4">
                    <module type="boxes" id="6"/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <module type="boxes" id="7"/>
                </div>
                <div class="col-sm-6">
                    <module type="boxes" id="8"/>
                </div>
            </div>

        </div>
    </div>
<?php include TEMPLATE_DIR . "footer.php"; ?>