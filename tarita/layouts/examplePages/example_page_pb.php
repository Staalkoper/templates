<?php

/*
  type: layout
  content_type: static
  name: Example Pricing Boxes
  description: Home layout
*/
?>
<?php include TEMPLATE_DIR . "header.php"; ?>

    <div class="edit" rel="example_page_pb1" field="example_page_pb1" data-mw="main">
        <div class="container wrapper">
            <div class="purchase">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 animated fadeInLeft">
                            <span>Pricing Boxes</span>

                            <p>Show the offers with style!</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4">
                    <module id="pb21" type="pricingtables"/>
                </div>
                <div class="col-md-4">
                    <module id="pb212" type="pricingtables"/>
                </div>
                <div class="col-md-4">
                    <module id="pb213" type="pricingtables"/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <module type="pricingtables" template="megaprice" id="pb211"/>
                </div>
            </div>

        </div>
    </div>
<?php include TEMPLATE_DIR . "footer.php"; ?>