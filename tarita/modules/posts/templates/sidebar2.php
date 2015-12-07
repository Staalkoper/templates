<?php

/*
type: layout
name: Sidebar without pictures (Tarita)
description: Posts
*/
?>
<div class="headline edit" rel="awd2<?php print $params['id'];?>" field="awe<?php print $params['id'];?>"><h2>Posts without images</h2></div>

<div class="magazine-mini-news" rel="adwd<?php print $params['id'];?>" field="adwaw<?php print $params['id'];?>">
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
            <h3 itemprop="name"><a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a></h3>
        <?php endif; ?>
        <span><i class="color-green">Created <?php print $item['created_at'] ?>/Created by: <?php print $item['created_by'] ?></i></span>
        <p><?php print $item['description'] ?></p>

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