<?php

/*
type: layout
name: Sidebar with pictures (Tarita)
description: Posts
*/
?>
<?php $color= get_option("color","tarita");?>
<div class="headline edit" rel="awd2<?php print $params['id'];?>" field="awe<?php print $params['id'];?>"><h2>Sidebar Posts</h2></div>
 
<div class="row margin-bottom-40" rel="adwd<?php print $params['id'];?>" field="adwaw<?php print $params['id'];?>">
    <?php if (!empty($data)): ?>
        <?php $len = count($data); ?>
        <?php $count = 0; foreach ($data as $item): ?>
        <?php
        $count++;
        if($count == 1 or  ($count-1) % 3 == 0){
          print '<div class="row">';
      }
      ?>



      <div class="magazine-posts col-md-12 col-sm-6 margin-bottom-30" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
        <?php if(!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
            <h3 itemprop="name"><a class="hover-effect" href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a></h3>
        <?php endif; ?>
        <span><i class="color-green"></i>Created <?php print $item['created_at'] ?>/Created by: <?php print $item['created_by'] ?></span>
        <div class="magazine-posts-img">
        <a href="<?php print $item['link'] ?>"><img class="img-responsive" src="<?php print thumbnail($item['image'],300,300); ?>" alt=""></a>
            <span class="magazine-badge label-<?php print $color;?> edit" rel="badge" field="badge">Badge</span>
        </div>
    </div>

    <?php
    if(($count%3)==0 or  $len == $count){
     print '</div>';
 }
 ?>
<?php endforeach; ?>
<?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>

