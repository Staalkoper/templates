<?php

/*

type: layout
content_type: dynamic
name: Portfolio
position: 3
description: Portfolio

*/


 mw_var('photon_layout', 'photon-overflow');

?>
<?php include THIS_TEMPLATE_DIR. "header.php"; ?>

    <script> $(document).ready(function(){ $("#sidenav").removeClass('active'); }); </script>
    <module
          data-type="posts"
          data-limit="0"
          id="portfolio-posts"
          data-description-length="100"
          data-show="thumbnail"
          data-hide-paging="true"
          data-template="justified" />



<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>
