<?php
/*
type: layout
name: Paralax block
description: Paralax block
*/
$bg= get_option('bgpic',$params['id']);
?>
<div class="parallax-quote parallaxBg" <?php if ($bg): ?> style="background: url('<?php print $bg ?>') 50% 0 repeat fixed;" <?php endif; ?>
    <div class="container ">
        <div class="parallax-quote-in edit" rel="paralaxblock<?php print $params['id'];?>" field="paralaxblock<?php print $params['id'];?>">
            <p>If you can design one thing <span class="color-green">you can design</span> everything. <br> Just Believe It.</p>
            <small>- HtmlStream -</small>
        </div>
    </div>
</div>