<div class="col-sm-12 bottom-space">
	<h2 class="section-title">Latest Stories</h2>
	<div class="row no-mg">
		<?php query_posts( 'posts_per_page=6' ); ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('templates/content') ?>
		<?php endwhile; ?>
	</div>
	<div class="text-center">
		<a href="stories" class="btn btn-ghost-blk btn-style">All Stories &raquo;</a>
	</div>
</div>

<div class="col-sm-12 bottom-space">
	<h2 class="section-title">Categories</h2>
	<div class="row no-mg">
		<?php
			wp_reset_query();
			$cats = get_categories('');
			foreach ($cats as $cat) :
				query_posts(array( 'posts_per_page' => 3, 'cat' => $cat->term_id ));
				if (have_posts()) :
		?>
			<div class="col-sm-6">
				<div class=" block accented-sub">
					<div class="text-center">
						<h3 class="section-title minor"><?= $cat->name ?></h3>
					</div>
					<?php while (have_posts()) : the_post(); ?>
						<?php get_template_part('templates/content', 'small') ?>
					<?php endwhile; ?>
					<a href="categories/<?= $cat->slug ?>" class="btn btn-ghost-blk btn-style btn-block">More &raquo;</a>
				</div>
			</div>
		<?php endif; endforeach; ?>
	</div>
</div>

<div class="col-sm-12 bottom-space">
	<h2 class="section-title">Latest Publications</h2>
	<div class="text-center">
		<div class="bookshelf-box">
			<?php
			$args = array( 'post_type' => 'publication', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="book">
					<div class="book-cover">
						<img src="<?php echo get_field('book_cover'); ?>" alt=""/>
						<a href="<?php echo get_field('book_url'); ?>" class="book-cover-link" target="_blank">VIEW ON ISSUU</a>
					</div>
					<div class="book-name"><?php echo get_field('book_name'); ?></div>
					<div class="book-desc">
						<?php echo get_field('book_issue'); ?>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
	<div class="text-center">
		<a href="publications" class="btn btn-ghost-blk btn-style">All Publications &raquo;</a>
	</div>
</div>

<div class="col-sm-12">
	<h2 class="section-title">Follow Us!</h2>
	<div class="row no-mg">
		<div class="col-sm-6 more-bottom-space">
			<div class="fb-page" data-href="https://www.facebook.com/chumagofficial/" data-small-header="false" data-width="500px" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/saraneeyakornchula/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/saraneeyakornchula/">Saraneeyakorn Chula</a></blockquote></div>
		</div>
		<div class="col-sm-6 more-bottom-space">
			<div class="fb-page" data-href="https://www.facebook.com/saraneeyakornchula/" data-small-header="false" data-width="500px" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/saraneeyakornchula/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/saraneeyakornchula/">Saraneeyakorn Chula</a></blockquote></div>
		</div>
	</div>
</div>
