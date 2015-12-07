<?php

/*

type: layout
content_type: dynamic
name: Blog
position: 3
description: Blog

*/


?>
<?php

 mw_var('photon_layout', 'photon-inner');
include THIS_TEMPLATE_DIR. "header.php"; ?>

<div id="content">
	<div class="container" id="blog-container">
		<div class="mw-ui-row">
			<div class="mw-ui-col">
    			<div class="mw-ui-col-container">
    				<div class="edit" field="content" rel="page">
    					<module data-type="posts" data-page-id="<?php print CONTENT_ID ?>" template="photon" data-show="thumbnail,title,description,read_more" />
    				</div>
    			</div>
			</div>
			<?php /*<div class="mw-ui-col sidebar">
    			<div class="mw-ui-col-container">
    				<?php include_once "blog_sidebar.php"; ?>
    			</div>
			</div>*/ ?>
		</div>
	</div>
</div>
<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>
