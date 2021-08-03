<div class="col-sm-6 col-md-4">
	<article class="block post-box accented-sub">
		<div class="post-cover" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
		<header class="post-header">
			<p class="post-column"><?php echo get_the_category_list(','); ?></p>
			<a href="<?php the_permalink(); ?>"><h2 class="entry-title"><?php the_title(); ?></h2></a>
			<hr>
			<em><?php get_template_part('templates/entry-meta'); ?></em>
		</header>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
		<div class="read-more">
			<div class="gradient"></div>
			<a href="<?php the_permalink(); ?>" class="btn btn-ghost-blk btn-block btn-style">Read More &raquo;</a>
		</div>
	</article>
</div>
