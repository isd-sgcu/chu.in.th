<?php use Roots\Sage\Titles; ?>

<div class="page-header text-center" style="background-image: url('<?php echo the_post_thumbnail_url() ?>');">
	<h1><?php
	if (is_archive())
		echo get_the_archive_title();
	else
		echo Titles\title(); //the_title();
	?></h1>
	<!-- <h1><?= Titles\title(); ?></h1> -->
</div>
