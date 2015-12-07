<?php

/*
type: layout
name: Small Pictures-sidebar(Tarita)
description: Pictures
*/
?>    <script>mw.require("tools.js", true); </script>
<div class="headline edit" rel="smallfictures" field="smallficturess"><h2>Photo Stream</h2></div>    
<?php if (is_array($data)): ?>
    <?php $rand = uniqid(); ?>
    <ul class="list-unstyled blog-photos margin-bottom-35" id="mw-gallery-<?php print $rand; ?>">
        <?php $count = -1; foreach ($data as $item): ?>
        <?php $count++; ?>
        <li><a a class="fancybox-button" data-rel="fancybox-button"  href="<?php print thumbnail($item['filename']); ?>"><img class="hover-effect" alt="" src="<?php print thumbnail($item['filename']); ?>"></a></li>

    <?php endforeach;  ?>
</ul>
<?php else : ?>
<?php endif; ?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        FancyBox.initFancybox();      
    });
</script>