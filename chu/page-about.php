<?php /* Template Name: About*/ ?>

<?php get_template_part('templates/page', 'header'); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="reading-area reverse-top-margin">
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>
