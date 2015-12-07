<?php

/*
type: layout
name: Recent posts (Tarita)
description: Posts
*/

?>
<?php if (!empty($data)): ?>
    <?php $len = count($data); ?>
    <?php $count = 0; foreach ($data as $item): ?>
    <?php
    $count++;
    if($count == 1 or  ($count-1) % 3 == 0){
      print '<div class="row margin-bottom-20"">';
  }
  ?>



<div class="col-sm-4" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
    <div class="thumbnails thumbnail-style">
        <div class="thumbnail-img">
          <div class="overflow-hidden">
            <a href="<?php print $item['link'] ?>"><img class="img-responsive" src="<?php print thumbnail($item['image'], 320,320); ?>" alt="<?php print addslashes($item['title']); ?> - <?php _e("image"); ?>">
</a>
        </div>
        <?php if(!isset($show_fields) or $show_fields == false or in_array('read_more', $show_fields)): ?>
            <a href="<?php print $item['link'] ?>" class="btn-more">Read more...</a>
        <?php endif; ?>
    </div>

        <div class="caption">
            <?php if(!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                <h3 itemprop="name"><a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a></h3>
            <?php endif; ?>
            <?php if(!isset($show_fields) or  ($show_fields == false or in_array('description', $show_fields))): ?>
                <p class="description" itemprop="headline"><?php print $item['description'] ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>



<?php
if(($count%3)==0 or  $len == $count){
   print '</div>';
}
?>
<?php endforeach; ?>
<?php endif; ?>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>

