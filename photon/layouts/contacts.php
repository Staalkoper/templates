<?php

/*

type: layout
content_type: static
name: Contact Us

description: Contact us layout
position: 7
*/


 mw_var('photon_layout', 'photon-inner');
?>
<?php include THIS_TEMPLATE_DIR. "header.php"; ?>

<div id="content">
	<div class="container">
		
		<div class="contacts-holder">
		<div class="edit" field="content" rel="content">


            <module type="contact_form" template="inline" class="contact-form" id="contact-form" />

            <p class="element"><em>Email: info@example.com &nbsp;&nbsp;Phone: 001 123 456 78</em></p>
            <p class="element"><em>Address: Sofia, Bulgaria, Pimen Zographski 14</em></p>

        </div>


        <module type="social_links" id="contact-socials">




		</div>

         <module type="google_maps" template="inline" class="contact-form" id="contact-map" />
	</div>
</div>
<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>
