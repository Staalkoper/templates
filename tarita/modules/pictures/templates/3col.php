<?php

/*
type: layout
name: Tarita's gallery ( 3 col)
description: Pictures
*/
?>
<?php if (!empty($data)):?>
    <?php $len = count($data); ?>
    <?php $count = 0;
    foreach ($data as $item): ?>
        <?php
        $count++;
        if ($count == 1 or ($count - 1) % 3 == 0) {
            print '<div class="row  margin-bottom-30">';
        }
        ?>
        <div class="col-sm-4 sm-margin-bottom-30">
            <a href="<?php print $item['filename'];?>" rel="gallery" class="fancybox img-hover-v1" title="<?php print $item['title'];?> 1">
                <span><img class="img-responsive" src="<?php print $item['filename']; ?>" alt=""></span>
            </a>
        </div>

        <?php
        if (($count % 3) == 0 or $len == $count) {
            print '</div>';
        }
        ?>
    <?php endforeach; ?>
<?php endif; ?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        FancyBox.initFancybox();
    });
</script>