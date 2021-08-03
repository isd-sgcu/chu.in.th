<?php

/* Template Name: Front Page */

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php //get_template_part('templates/head'); ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url"         content="http://chu.in.th" />
    <meta property="og:type"        content="article" />
    <meta property="og:title"       content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:image"       content="<?php the_post_thumbnail_url(); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if IE]>
	<div class="alert alert-warning">
	<?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.6&appId=849904978448506";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="wrap container page accented" role="document">
	<?php
	do_action('get_header');
	get_template_part('templates/header');
	?>
	<div class="row">
		<main class="main">
			<?php get_template_part('templates/hero'); ?>
		</main><!-- /.main -->
	</div><!-- /.content -->
</div><!-- /.wrap -->
<div class="wrap container page" role="document">
	<div class="content row">
		<?php get_template_part('templates/content', 'home'); ?>
	</div>
</div><!-- /.wrap -->
<?php
do_action('get_footer');
get_template_part('templates/footer');
wp_footer();
?>
<a href="#" id="to-top"><span class="glyphicon glyphicon-chevron-up"></span></a>
</body>
</html>
