<?php

/*

type: layout

name: Timeline V2

description: Default template for Timeline

*/
?>
<?php 
$posts = get_posts();
?>
<style type="text/css">
.timeline-v2 > li .cbp_tmicon {
    left: 20.6%;
}
    </style>
    <div class="wrapper">
        <div class="container content"> 
            <ul class="timeline-v2">
                <?php $len = count($posts); ?>
                <?php $count = 0; foreach ($posts as $item): $count++;?>

                <li>
                <time class="cbp_tmtime" datetime=""><span> <?php echo date("Y-m-d", strtotime($item['updated_at']));?></span> <span> <?php echo date("F", strtotime($item['updated_at']));?></span></time>
                    <i class="cbp_tmicon rounded-x hidden-xs"></i>
                    <div class="cbp_tmlabel">
                        <a href="<?php print $item['url'];?>"><h2><?php print $item['title'];?></h2></a>
                        <div class="row">
                            <div class="col-md-4">
                                <img class="img-responsive" src="<?php print thumbnail(get_picture($item['id']))?>" alt=""> 
                                <div class="md-margin-bottom-20"></div>
                            </div>
                            <div class="col-md-8">    
                                <?php if (!isset($item['description']) or $item['description'] == '') {
                                    if (isset($item['content']) and $item['content'] != '') {
                                        $item['description'] = character_limiter(strip_tags($item['content']), $character_limit);
                                        $item['full_description'] = strip_tags($item['content']);
                                    } elseif (isset($item['content_body']) and $item['content_body'] != '') {
                                        $item['full_description'] = strip_tags($item['content']);
                                        $item['description'] = character_limiter(strip_tags($item['content_body']), $character_limit);
                                    }
                                } ?>
                                <h4 class="description"><?php print trim($item['description'])?></h4>
                                <a class="btn-u btn-u-sm" href="<?php print $item['url'];?>"><?php print $read_more;?></a>
                            </div>
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
