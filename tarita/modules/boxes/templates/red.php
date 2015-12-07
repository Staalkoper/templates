<?php
/*
type: layout
name: Red
*/

?>
<?php $color = get_option('color', $params['id']);?>
    <div class="col-md-12 col-sm-6">
        <div class="service-block service-block-red edit" rel="services<?php print $params['id']?>" field="services">
            <i class="icon-custom icon-color-dark rounded-x fa fa-lightbulb-o"></i>
            <h2 class="heading-md">Red Box</h2>
            <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus</p>
        </div>
    </div>
