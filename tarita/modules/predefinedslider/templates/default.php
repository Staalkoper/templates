<?php
/*
type: layout
name: Tarita's slideshow
description: Slideshow
*/
$slidescount = get_option('slidescount', $params['id']);
$bg= get_option('bgpic',$params['id']);
?>
<script type="text/javascript">
    jQuery(document).ready(function () {
        ParallaxSlider.initParallaxSlider();
    });
</script>
<div class="slider-inner flexslider edit" field="awe" rel="wawe">
    <div id="da-slider" class="da-slider" <?php if ($bg): ?> style="background-image: url('<?php print $bg ?>')" <?php endif; ?>>
        <?php for ($i = 1;
         $i <= $slidescount;
         $i++):
         ?>
         <div class="da-slide edit" rel="slide<?php echo $params['id'] . $i; ?>" field="slider<?php echo $i; ?>">
            <h2><i>Lorem &amp; ipsum </i> <br/> <i>dolor amet</i> <br/> <i>tempor incididunt ut</i></h2>

            <p><i>Lorem ipsum dolor amet</i> <br/> <i>tempor incididunt ut</i> <br/> <i>veniam omnis </i></p>

            <div class="da-img"><img class="img-responsive" src="<?php
                print TEMPLATE_URL; ?>assets/plugins/parallax-slider/img/1.png" alt=""></div>
            </div>
        <?php endfor; ?>
        <div class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </div>
    </div>
</div>