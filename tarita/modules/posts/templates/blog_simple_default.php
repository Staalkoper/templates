<?php

/*
type: layout
name: Blog simple display
description: Posts
*/

?>
<?php if (!empty($data)): 
  // dd($data); ?>
  <?php $len = count($data); ?>
  <?php $count = 0; foreach ($data as $item): ?>
  <?php
  $count++;
  ?>



  <div class="blog margin-bottom-40">
      <?php if(!isset($show_fields) or  ($show_fields == false or in_array('title', $show_fields))): ?>
    <h2><a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a></h2>

       <?php endif; ?> 
    <div class="blog-post-tags">
      <ul class="list-unstyled list-inline blog-info">

      <?php if(!isset($show_fields) or  ($show_fields == false or in_array('created_at', $show_fields))): ?>
         <li><i class="fa fa-calendar"></i> <?php echo date("Y-m-d", strtotime($item['created_at']));?></li>
         <li><i class="fa fa-pencil"></i> <?php print ($item['created_by']);?></li>
         <li><i class="fa fa-comments"></i> <a href="#"><?php print (get_comments("rel_type=content&rel_id=".$item['id']."&count=true"));?> Comments</a></li>

       <?php endif; ?> 
     </ul>                                              
   </div>
   <div class="blog-img">



     <?php if(!isset($show_fields) or  ($show_fields == false or in_array('thumbnail', $show_fields))): ?>
      <a href="<?php print $item['link'] ?>"><img class="img-responsive"  src="<?php print ($item['image']); ?>" alt="<?php print addslashes($item['title']); ?> - <?php _e("image"); ?>"></a>
    <?php endif; ?> 
  </div>
  <p>
    <?php if(!isset($show_fields) or  ($show_fields == false or in_array('description', $show_fields))): ?>
      <p><?php print $item['description'] ?></p>
    <?php endif; ?>
  </div>

<?php endforeach; ?>
<?php endif; ?>


<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
  <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>

