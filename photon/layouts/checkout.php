<?php

/*

type: layout
content_type: static
name: Checkout page
description: Checkout layout
position: 9
*/
   mw_var('photon_layout', 'photon-inner');  

?>
<?php

if(is_file(THIS_TEMPLATE_DIR. "checkout.php")){
 include THIS_TEMPLATE_DIR. "checkout.php"; 
 
} else if(is_file(DEFAULT_TEMPLATE_DIR. "checkout.php")){
	include DEFAULT_TEMPLATE_DIR. "checkout.php"; 
}
 ?>
 