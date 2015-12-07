<?php
   mw_var('photon_layout', 'photon-overflow');
?>

<?php include THIS_TEMPLATE_DIR. "header.php"; ?>
	<div class="container">
      	<div class="mw-ui-row" data-mw="main">
      		<div class="mw-ui-col">
      			<div class="mw-ui-col-container">
      				<module type="pictures" rel="content" template="fotorama" id="product-inner-gallery" />
      			</div>
      		</div>
      		<div class="mw-ui-col" style="width:40%">
      			<div class="mw-ui-col-container" id="portfolio-inner-content">
                      <h2 class="edit main-title" field="title" rel="post">Product inner page</h2>
                      <div class="edit" field="shop-before-post" rel="global"><module type="sharer" id="bloginnermainsharer"></div>
      				<div class="edit richtext product-description" field="content" rel="post">
      					<p class="element">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere on the site. Get creative &amp; <strong style="font-weight: 600">Make Web</strong>.</p>
      				</div>
                      <hr>
                      <module type="shop/cart_add" rel="post" />
                      <hr>
                      <module type="shop/products" template="small" id="product_inner_related" data-limit="6" data-hide-paging="false" ajax-paging="true" data-show="thumbnail,title,price" related="true" />
      			</div>
      		</div>
      	</div>
	</div>

<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>
