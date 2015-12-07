<?php

/*
type: layout
name: BigSlider
description: Pictures
*/
?>

<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <?php if (is_array($data)): ?>
                <?php $rand = uniqid(); ?>
                <?php $count = 0;
                foreach ($data as $item): ?>
                    <?php $count++; ?>
                    <li class="revolution-mch-1" onHoverStop="on" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide <?php print $count;?>">
                        <!-- MAIN IMAGE -->
                        <img src="<?php print $item['filename'];?>"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                        <div class="tp-caption revolution-ch1 sft start"
                             <?php if(!in_live_edit()){print 'data-autoplay="false"';}?>
                             data-x="center"
                             onHoverStop="on"
                             data-hoffset="0"
                             data-y="100"
                             data-speed="1500"
                             data-start="500"
                             data-easing="Back.easeInOut"
                             data-endeasing="Power1.easeIn"
                             data-endspeed="300">
                            <div class="edit" rel="0<?php print $params['id'].$count;?>" field="0<?php print $params['id'].$count;?>">
                            Introducing Tarita Template
                                </div>
                        </div>

                        <!-- LAYER -->
                        <div class="tp-caption revolution-ch2 sft"
                            <?php if(in_live_edit()){print 'data-autoplay="false"';}?>
                             data-x="center"
                             data-hoffset="0"
                             data-y="190"
                             onHoverStop="on"
                             data-speed="1400"
                             data-start="2000"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="off"
                             style="z-index: 6">
                            <div class="edit" rel="<?php print $params['id'].$count;?>" field="<?php print $params['id'].$count;?>">
                            We are creative technology company providing <br/>
                            key digital services on web and mobile.
                        </div>
                        </div>

                        <!-- LAYER -->
                        <div class="tp-caption sft"
                            <?php if(in_live_edit()){print 'data-autoplay="false"';}?>
                             data-x="center"
                             data-hoffset="0"
                             data-y="310"
                             onHoverStop="on"
                             data-speed="1600"
                             data-start="2800"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="off"
                             style="z-index: 6">
                            <div class="edit" rel="2<?php print $params['id'].$count;?>" field="2<?php print $params['id'].$count;?>">
                            <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a>
                            <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Our Work</a>
                                </div>
                        </div>
                    </li>

                <?php endforeach; ?>
            <?php else : ?>
            <?php endif; ?>
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        RevolutionSlider.initRSfullWidth();
    });
</script>