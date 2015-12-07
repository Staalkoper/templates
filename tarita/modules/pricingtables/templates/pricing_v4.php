<?php
/*
type: layout
name: Pricing v4
*/
$bg = get_option('bgpic', $params['id']);
?>
 
<style scoped>
@import url('<?php print $config['url_to_module']; ?>assets/pricing.css');
@import url('<?php print $config['url_to_module']; ?>assets/pricing_v4.css');
</style>
<div class="col-md-12 col-sm-6 edit pricing-v4 pricing-v4-red" rel="<?php print $params['id']; ?>" field="<?php print $params['id']; ?>">
 <div class="pricing-v4 pricing-v4-red">
                    <div class="pricing-v4-head">
                        <h4 class="text-center">BUSINESS</h4>
                        <div class="pricing-rounded">
                            <h5 class="text-center"><span>$</span>49<i>/Month</i></h5></div>
                            <a class="btn-u btn-u-red" href="#">
                                <i class="price-corner"></i>
                                Purchase Now    
                                <span class="icon-basket"></span>
                            </a> 
                        </div>
                    <ul class="list-unstyled pricing-v4-content">
                        <li><span class="icon-user-female"></span> Users - 50</li>
                        <li><span class="icon-drawer"> Disckspace - 500GB</span></li>
                        <li><span class="icon-envelope-open"> Email Addresses - 900</span></li>    
                        <li><span class="icon-layers"> MySQL Databases</span></li>
                        <li><span class="icon-wrench"> Customisable Toolbar</span></li>
                    </ul>
                </div>
</div>