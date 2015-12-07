<?php

/*

type: layout

name: Default

description: Default template for Timeline

*/
?>
<?php 
$posts = get_posts();
?>
<style type="text/css">
.timeline-v1:before {
    left: 50.8%;
    }

.timeline-v1 > li.timeline-inverted > .timeline-badge{
    left: -3px;
}
.timeline-v1 > li > .timeline-badge {
    right:-21px;

}
</style>
<div class="wrapper">
    <div class="container content">
        <ul class="timeline-v1">
            <?php $len = count($posts); ?>
            <?php $count = 0; foreach ($posts as $item): $count++; if($count % 2==0){ print'<li class="timeline-inverted">';}else{ print "<li>";}?>
        
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <img class="img-responsive" src="<?php print get_picture($item['id'])?>" alt=""/>
                </div>

                <div class="timeline-body text-justify">
                    <h2><a href="<?php print $item['url'];?>"><?php print $item['title'];?></a></h2>
                    <?php if (!isset($item['description']) or $item['description'] == '') {
                        if (isset($item['content']) and $item['content'] != '') {
                            $item['description'] = character_limiter(strip_tags($item['content']), $character_limit);
                            $item['full_description'] = strip_tags($item['content']);
                        } elseif (isset($item['content_body']) and $item['content_body'] != '') {
                            $item['full_description'] = strip_tags($item['content']);
                            $item['description'] = character_limiter(strip_tags($item['content_body']), $character_limit);
                        }
                    } ?>
                    <p class="description"><?php print trim($item['description'])?></p>
                    <a class="btn-u btn-u-sm" href="<?php print $item['url'];?>"><?php print $read_more;?></a>
                </div>
                <div class="timeline-footer">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-clock-o"></i> <?php print $item['created_at'];?></li>
                    </ul>
                      <?php if($view_comments=="yes"):?>
                        <a class="pull-right" href="<?php print $item['url'];?>"><i class="fa fa-comments-o"></i> <?php print (get_comments("rel_type=content&rel_id=".$item['id']."&count=true") ." ". $comments_name);?></a>
                        <?php endif;?>
                </div>
            </div>
        </li>

    <?php endforeach;?>
    <li class="clearfix" style="float: none;"></li>
</ul>
</div>
</div>
<?php if (!empty($data)): ?>
  <?php foreach ($data as $item): ?>
  <?php endforeach; ?>
<?php endif; ?>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
    
<?php endif; ?>
