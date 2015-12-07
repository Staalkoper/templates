<?php

/*

type: layout

name: Default

description: Default


*/


?>
<?php if (isset($data) and is_array($data)):?>
    <div class="breadcrumbs">

        <div class="container">

<!--                    <h1 class="pull-left">--><?php //print page_title(); ?><!--</h1>-->

            <ul class="pull-right breadcrumb">
                <li><a href="<?php print site_url();?>">Home</a></li>
                <?php foreach ($data as $item): ?>
                    <?php if (!($item['is_active'])): ?>
                        <li><a href="<?php print($item['url']);?>"><?php print($item['title']); ?></a></li>
                    <?php else: ?>
                        <li><a href="<?php print($item['url']);?>"> <?php print($item['title']); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>

