<?php

/*
type: layout
name: Boxed (Tarita)
description: Posts
*/

?>
<div class="headline edit" rel="awd2<?php print $params['id'];?>" field="awe<?php print $params['id'];?>"><h2>Boxed posts</h2></div>

<div class="funny-boxes funny-boxes-top edit" rel="adwd<?php print $params['id'];?>" field="adwaw<?php print $params['id'];?>">
    <?php if (!empty($data)): ?>
        <?php $len = count($data); ?>
        <?php $count = 0; foreach ($data as $item): ?>
        <?php
        $count++;
        if($count == 1 or  ($count-1) % 3 == 0){
          print '<div class="row">';
      }
      ?>


      <div class="row">




        <div class="col-md-4 funny-boxes-img">
            <a href="<?php print $item['link'] ?>"><img class="img-responsive"  src="<?php print thumbnail($item['image'],400,260); ?>" alt="<?php print addslashes($item['title']); ?> - <?php _e("image"); ?>"></a>
            <div class="by-author">
                <strong>By <?php print $item['created_by'] ?></strong>
                <span>/ <?php print $item['created_at'] ?></span>
            </div> 
        </div>
        <div class="col-md-8">
            <?php if(!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                <h2 itemprop="name"><a class="hover-effect" href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a></h2>
            <?php endif; ?>
            <?php if(!isset($show_fields) or  ($show_fields == false or in_array('description', $show_fields))): ?>
                <p><?php print $item['description'] ?></p>
            <?php endif; ?>  </div>


            <?php
            if(($count%3)==0 or  $len == $count){
             print '</div>';
         }
         ?>
         </div>
     <?php endforeach; ?>
 <?php endif; ?>


<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>

