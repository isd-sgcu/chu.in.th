<?php /* Template Name: Posts */ ?>

<?php
query_posts( array(
      'posts_per_page' => 12,
      'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
 ));
?>
<?php get_template_part('templates/page', 'header'); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('templates/content'); ?>
	<?php endwhile; ?>
<?php else : ?>
	<div class="col-sm-12">
		<h2>ไม่มีบทความที่ท่านค้นหา</h2>
	</div>
<?php endif; ?>
<div class="col-sm-12 text-center">
	<?php the_posts_pagination(); ?>
</div>
