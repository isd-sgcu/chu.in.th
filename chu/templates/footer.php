<footer class="container-fluid footer content-info">
	<div class="container">
		<div class="row">
			<?php if(dynamic_sidebar('sidebar-footer')): ?>
				<div class="col-sm-12">
					<?php dynamic_sidebar('sidebar-footer'); ?>
				</div>
			<?php endif ?>
			<div class="footer-logos">
				<a href="https://www.facebook.com/CHUMAGofficial"><img class="footer-logo" src="<?= get_template_directory_uri(); ?>/dist/images/logos/chu.png" alt="" /></a>
				<a href="https://www.facebook.com/saraneeyakornchula"><img class="footer-logo" src="<?= get_template_directory_uri(); ?>/dist/images/logos/sara.png" alt="" /></a>
				<a href="https://www.facebook.com/sgcu.obj"><img class="footer-logo" src="<?= get_template_directory_uri(); ?>/dist/images/logos/sgcu.png" alt="" /></a>
			</div>
			<div class="footer-section">
				<p class="text-muted">
					<span class="text-accented">
						Copyright (c) <?php echo date('Y') ?>
						<br class="visible-xs">Editorial Team, Chulalongkorn University
						<br class="visible-xs">All Rights Reserved.
					</span>
					<br>
					<span class="fa fa-envelope"></span>&nbsp;chumagazine@gmail.com
				</p>
			</div>
		</div>
	</div>
</footer>
