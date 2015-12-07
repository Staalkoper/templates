<?php

/*
type: layout
name: Featured (Tarita)
description: Posts
*/

?>
<?php $color= get_option("color","tarita");?>

<div class="magazine-news">
    <?php if (!empty($data)): ?>
        <?php $len = count($data); ?>
        <?php $count = 0; foreach ($data as $item): ?>
        <?php
        $count++;

      ?>
      <div class="col-md-6" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
        <div class="magazine-news-img">
            <a href="<?php print $item['link']; ?>"><img class="img-responsive" src="<?php print thumbnail($item['image'],400,260); ?>" alt="<?php print addslashes($item['title']); ?> - <?php _e("image"); ?>"></a>
            <span class="magazine-badge label-<?php print $color;?> edit" field="<?php print $params['id'].$item['id'].$count;?>" rel="<?php print $params['id'].$item['id'].$count;?>">Badge</span>
        </div>
        <?php if(!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
            <h3 itemprop="name"><a class="hover-effect" href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a></h3>
        <?php endif; ?>
        <div class="by-author">
            <strong>By <?php print $item['created_by'] ?></strong>
            <span>/ <?php print $item['created_at'] ?></span>
        </div> 
        <?php if(!isset($show_fields) or  ($show_fields == false or in_array('description', $show_fields))): ?>
            <p><?php print $item['description'] ?></p>
        </div>
    <?php endif; ?>






<?php

?>
<?php endforeach; ?>
<?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>

