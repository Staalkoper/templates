<?php

/*
  type: layout
  content_type: static
  name: Example TimeLine
  description: Home layout
*/
?>
<?php include TEMPLATE_DIR . "header.php"; ?>


        <div class="wrapper edit" field="timeline" rel="timeline">
            <div class="purchase">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 animated fadeInLeft">
                            <span>Timeline</span>
                            <p>Beautiful way to show your posts!</p>
                        </div>
                    </div>
                </div>

            </div>


        <div class="content-holder">
            <module type="timeline"/>
            <module type="timeline" template="timeline2"/>
        </div>
        </div>
<?php include TEMPLATE_DIR . "footer.php"; ?>