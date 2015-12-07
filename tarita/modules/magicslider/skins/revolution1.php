<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
    <!-- MAIN IMAGE -->
    <img src="<?php print $slide['images'][0];?>"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

    <div class="tp-caption revolution-ch1 sft start"
        <?php if(in_live_edit()){print 'data-autoplay="false"';}?>
         data-x="center"
         data-hoffset="0"
         data-y="100"
         data-speed="1500"
         data-start="500"
         data-easing="Back.easeInOut"
         data-endeasing="Power1.easeIn"
         data-endspeed="300">
        <?php if(isset($slide['primaryText'])){ ?>
            <?php print $slide['primaryText']; ?>
        <?php } ?>
    </div>

    <!-- LAYER -->
    <div class="tp-caption revolution-ch2 sft"
        <?php if(in_live_edit()){print 'data-autoplay="false"';}?>
         data-x="center"
         data-hoffset="0"
         data-y="190"
         data-speed="1400"
         data-start="2000"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Power1.easeIn"
         data-captionhidden="off"
         style="z-index: 6">
        <?php if(isset($slide['secondaryText'])){ ?>
            <?php print $slide['secondaryText']; ?>
        <?php } ?>
    </div>

    <!-- LAYER -->
    <div class="tp-caption sft"
        <?php if(in_live_edit()){print 'data-autoplay="false"';}?>
         data-x="center"
         data-hoffset="0"
         data-y="310"
         data-speed="1600"
         data-start="2800"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Power1.easeIn"
         data-captionhidden="off"
         style="z-index: 6">
            <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a>
            <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Our Work</a>
    </div>
</li>