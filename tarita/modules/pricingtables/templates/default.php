<?php
/*
type: layout
name: Default pricing block
description: Paralax block
*/
$bg = get_option('bgpic', $params['id']);
?>
<script>
mw.require('<?php print $config['url_to_module']; ?>assets/pricing_v1.css');
</script>
<div class="col-md-12 col-sm-6 edit" rel="<?php print $params['id']; ?>" field="<?php print $params['id']; ?>">
    <div class="pricing hover-effect">
        <div class="pricing-head">
            <h3>Begginer</h3>
            <h4><i>$</i>4<i>.90</i> <span>Per Month</span></h4>
            <h6>Labore et dolore magnaras </h6>
        </div>
        <ul class="pricing-content list-unstyled">
            <li class="bg-color"><i class="fa fa-location-arrow"></i>Free customisation<span><i class="fa fa-check"></i></span></li>
            <li><i class="fa fa-inbox"></i> 24 hour support<span><i class="fa fa-check"></i></span></li>
            <li class="bg-color"><i class="fa fa-globe"></i> 10 GB Disckspace<span><i class="fa fa-check"></i></span></li>
            <li><i class="fa fa-cloud-upload"></i> Cloud Storage<span><i class="fa fa-check"></i></span></li>
            <li class="bg-color"><i class="fa fa-cloud"></i> Online Protection<span><i class="fa fa-check"></i></span></li>
        </ul>
        <div class="pricing-footer">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cloud Storage magna psum olor.</p>
            <a class="btn-u" href="#"><i class="fa fa-shopping-cart"></i> Purchase Now</a>
        </div>
    </div>
</div>