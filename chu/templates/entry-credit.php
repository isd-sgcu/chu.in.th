<p class="post-time">
	เขียนเมื่อ <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time> โดย...
</p>
<div class="byline author vcard clearfix">
	<?php if(function_exists('coauthors')): ?>
		<?php $i = 0; ?>
		<?php $len = count(get_coauthors()); ?>
		<?php foreach( get_coauthors() as $coauthor ): ?>
			<div class="clearfix">
				<div class="author-img" style="background-image: url('<?php echo get_avatar_url($coauthor->id, 512); ?>')"></div>
				<div class="author-info">
					<div class="author-name">
						<?php echo $coauthor->first_name; ?>
						<?php echo $coauthor->last_name; ?>
						(<?php echo $coauthor->nickname; ?>)
					</div>
					<div class="author-bio">
						<?php echo $coauthor->description; ?>
					</div>
					<div class="author-social">
						<span class="glyphicon glyphicon-envelope"></span> <?php echo $coauthor->user_email; ?><br>
					</div>
				</div>
			</div>
			<?php if($i < $len - 1): ?>
				<hr>
			<?php endif;?>
			<?php $i++; ?>
		<?php endforeach; ?>
	<?php else: ?>
		<!-- <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a> -->
		<div class="author-img" style="background-image: url('<?php echo get_avatar_url(get_the_author_meta( 'ID' ), 512); ?>')"></div>
		<div class="author-info">
			<div class="author-name">
				<?php the_author_meta('first_name'); ?>
				<?php the_author_meta('last_name'); ?>
				(<?php the_author_meta('nickname'); ?>)
			</div>
			<div class="author-bio">
				<?php the_author_meta('description'); ?>
			</div>
			<div class="author-social">
				<span class="glyphicon glyphicon-envelope"></span> <?php the_author_meta('email'); ?><br>
				<!-- <span class="glyphicon glyphicon-envelope"></span> <a href="https://facebook.com/<?php the_author_meta('facebook'); ?>">fb.com/<?php the_author_meta('facebook'); ?><br></a>
				<span class="glyphicon glyphicon-envelope"></span> <a href="https://twitter.com/<?php the_author_meta('twitter'); ?>">@<?php the_author_meta('twitter'); ?><br></a> -->
			</div>
		</div>
	<?php endif; ?>
</div>
