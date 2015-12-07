<?php

/*
type: layout
name: Owl Carousel(Tarita)
description: Pictures
*/
?>

<div class="owl-carousel-style-v1" rel="carousel<?php print $params['id']; ?>"
     field="carousel<?php print $params['id']; ?>">

    <div class="owl-recent-works-v1">
        <?php if (is_array($data)): ?>
            <?php $rand = uniqid(); ?>
            <?php $count = -1;
            foreach ($data as $item): ?>
                <?php $count++; ?>
                <div class="item">
                    <a href="#">
                        <em class="overflow-hidden">
                            <img class="img-responsive" src="<?php print thumbnail($item['filename']); ?>" alt="">
                        </em>
                                <span>
                                    <strong>Happy New Year</strong>
                                    <i>Anim pariatur cliche reprehenderit</i>
                                </span>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function () {
        OwlCarousel.initOwlCarousel();
    });
</script>