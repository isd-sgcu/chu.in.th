<?php /* Template Name: Publcations */ ?>

<!-- TODO fix pagination -->
<?php
query_posts( array(
	'post_type' => 'publication',
	'posts_per_page' => 12,
	'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
));
?>
<?php //get_template_part('templates/page', 'header'); ?>
<div class="page-header text-center" style="background-image: url('<?php echo the_post_thumbnail_url() ?>');">
	<h1><?php the_title(); ?></h1>
</div>
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'publication'); ?>
<?php endwhile; ?>
<div class="col-sm-12 text-center">
	<?php the_posts_pagination(); ?>
</div>
