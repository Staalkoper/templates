<?php

/*

  type: layout
  content_type: static
  name: Home
  position: 11
  description: Home layout

*/



 mw_var('photon_layout', 'photon-default');

?>
<?php include THIS_TEMPLATE_DIR. "header.php"; ?>
    <style type="text/css">
        #main-content-holder{
          max-width: none;
        }
    </style>
    <div data-mw="main">
      <module
            data-type="posts"
            data-limit="0"
            id="home-posts"
            data-description-length="100"
            data-show="thumbnail"
            data-hide-paging="true"
            data-template="justified" />
    </div>

<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>
