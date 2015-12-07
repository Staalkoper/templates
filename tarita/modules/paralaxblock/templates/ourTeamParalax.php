<?php
/*
type: layout
name: Paralax Team preview
description: Paralax block
*/
$bg = get_option('bgpic', $params['id']);
?>
<div class="flat-testimonials margin-bottom-60" <?php if ($bg): ?> style="background: url('<?php print $bg ?>') 50% 0 repeat fixed;" <?php endif; ?>>
    <div class="container edit" rel="paralaxblock<?php print $params['id']; ?>"
         field="paralaxblock<?php print $params['id']; ?>">>
        <div class="headline-center headline-light margin-bottom-60">
            <h2>What People Are Saying</h2>

            <p>Integer odio ligula, tincidunt id volutpat et, imperdiet eget mi. Quisque laoreet porttitor turpis sed <a
                    href="#">fermentum</a>. Nullam sodales blandit nisi, tristique tempor nunc hendrerit at. Sed posuere
                mollis orci</p>
        </div>
        <!--/end Headline Center-->

        <div class="row">
            <div class="col-sm-4">
                <div class="flat-testimonials-in md-margin-bottom-50">
                    <img class="rounded-x img-responsive" src="<?php print TEMPLATE_URL; ?>assets/img/team/img1-sm.jpg"
                         alt="">

                    <h3>Anthony Connor</h3>
                    <span class="color-green">Software Developer</span>

                    <p>Proin et augue vel nisi rhoncus tincidunt. Cras venenatis, magna id sem ipsum mi interduml</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="flat-testimonials-in md-margin-bottom-50">
                    <img class="rounded-x img-responsive" src="<?php print TEMPLATE_URL; ?>assets/img/team/img2-sm.jpg"
                         alt="">

                    <h3>Angela Danil</h3>
                    <span class="color-green">Web Designer</span>

                    <p>Proin et augue vel nisi rhoncus tincidunt. Cras venenatis, magna id sem ipsum mi interduml</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="flat-testimonials-in">
                    <img class="rounded-x img-responsive" src="<?php print TEMPLATE_URL; ?>assets/img/team/img3-sm.jpg"
                         alt="">

                    <h3>Anthony Connor</h3>
                    <span class="color-green">Software Developer</span>

                    <p>Proin et augue vel nisi rhoncus tincidunt. Cras venenatis, magna id sem ipsum mi interduml</p>
                </div>
            </div>
        </div>
        <!--/end row-->
    </div>
    <!--/end container-->
</div>