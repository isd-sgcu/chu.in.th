<div class="col-sm-4 col-md-3">
	<article class="book-box">
		<a href="<?php the_field('book_url'); ?>" target="_blank">
			<img class="book-cover big-preview" src="<?php the_field('book_cover'); ?>">
		</a>
		<header class="book-info">
			<h2 class="book-name"><?php the_field('book_name'); ?></h2>
			<p class="book-issue"><?php the_field('book_issue'); ?></p>
		</header>
		<a href="<?php the_field('book_url'); ?>" class="btn btn-ghost-blk btn-style" target="_blank">Read &raquo;</a>
	</article>
</div>
