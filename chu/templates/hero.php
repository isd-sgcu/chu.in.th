<div class="hero-slide hero" id="hero-slide">
	<?php query_posts( 'posts_per_page=5' ); ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="hero-item" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
			<div class="hero-table">
				<div class="hero-center">
					<div class="hero-text">
						<h3 class="hero-column"><?php echo get_the_category_list(','); ?></h3>
						<h2 class="hero-title"><?php the_title(); ?></h2>
						<a href="<?php the_permalink(); ?>" class="btn btn-ghost">Read More &raquo;</a>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</div>
