<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class(); ?>>
		<header class="post-cover" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
			<div class="entry-hero">
				<p class="post-column"><?php echo get_the_category_list(',') ?></p>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<hr>
				<?php get_template_part('templates/entry-meta'); ?>
			</div>
		</header>
		<div class="entry-content">
			<?php the_content(); ?>
			<footer>
				<?php get_template_part('templates/entry-credit'); ?>
				<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
			</footer>
			<h2>More to Read...</h2>
			<div class="post-suggest">
				<?php $posts = get_posts('orderby=rand&numberposts=5'); foreach($posts as $post) : ?>
					<a class="post-box suggest" href="<?php the_permalink(); ?>" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
						<span class="post-title"><?php the_title(); ?></span>
					</a>
				<?php endforeach; ?>
			</div>
			<?php wp_reset_query(); ?>
			<?php comments_template('/templates/comments.php'); ?>
		</div>
	</article>
<?php endwhile; ?>
