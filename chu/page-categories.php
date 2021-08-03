<?php /* Template Name: Categories */ ?>

<?php get_template_part('templates/page', 'header'); ?>

<!-- TODO fix styling -->
<div class="col-sm-12 text-center">
	<h4>ประเภทบทความทั้งหมด</h4>
	<?php
	wp_reset_query();
	foreach (get_categories('') as $cat) :
		?>
		<a href="#cat-<?= $cat->slug ?>" class="btn btn-style btn-ghost-blk btn-category">
			<?= $cat->name ?> &raquo;
		</a>
	<?php endforeach; ?>
	<hr>
</div>
<?php
	wp_reset_query();
	$cats = get_categories('');
	foreach ($cats as $cat) :
		query_posts(array( 'posts_per_page' => 6, 'cat' => $cat->term_id ));
		if (have_posts()) :
?>
	<div class="col-sm-12 bottom-space" id="cat-<?= $cat->slug ?>">
		<div class="text-center">
			<h3 class="section-title minor"><?= $cat->name ?></h3>
		</div>
		<div class="row">
			<?php while (have_posts()) : the_post(); ?>
				<div class="col-sm-6 no-padding">
					<?php get_template_part('templates/content', 'small') ?>
				</div>
				<?php //get_template_part('templates/content'); ?>
			<?php endwhile; ?>
		</div>
		<div class="col-sm-12 text-center">
			<a href="categories/<?= $cat->slug ?>" class="btn btn-ghost-blk btn-style">More <?= $cat->name ?>s &raquo;</a>
		</div>
	</div>
<?php endif; endforeach; ?>
