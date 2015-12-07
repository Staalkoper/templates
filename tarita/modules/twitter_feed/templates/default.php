<?php

/*

type: layout

name: Default

description: Default Twitter Feed

*/

?>

<?php if($items):?>
	<div class="blog-twitter">
		<div class="headline edit" rel="aw" field="awea"><h2>Latest Tweets</h2></div>
		<?php foreach($items as $tweet): ?>
			<div class="blog-twitter-inner">
				<i class="icon-twitter"></i>
				<a href="#">	<?php print $tweet['name']; ?> </a> 
				<?php print $tweet['text']; ?> 
				<a href="<?php print $tweet['url']; ?>">Link to the tweet</a>
				<span class="twitter-time"><?php print $tweet['ago']; ?>"</span>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>