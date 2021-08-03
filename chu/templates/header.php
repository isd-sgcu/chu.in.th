<!-- <div class="container"> -->
	<header class="banner">
		<nav class="nav-primary">
			<?php if (has_nav_menu('primary_navigation')) : ?>
				<?php // desktop
				wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav hidden-xs']); ?>

				<?php // mobile
				$menu_name = 'primary_navigation';
				if(($locations = get_nav_menu_locations())&& isset($locations[$menu_name])): ?>
					<div class="dropdown visible-xs pull-right">
						<button type="button" name="button" class="btn btn-nav dropdown-togle" id="nav-dropdown" data-toggle="dropdown">
							MENU <span class="caret"></span>
						</button>
						<?php
						$menu = wp_get_nav_menu_object($locations[$menu_name]);
						$menu_items = wp_get_nav_menu_items($menu->term_id);
						$menu_list = '<ul class="nav-mobile dropdown-menu dropdown-menu-right" aria-labelledBy="nav-dropdown">';
							foreach ((array) $menu_items as $key => $menu_item) {
								$title = $menu_item->title;
								$url = $menu_item->url;
								$menu_list .= '<li class="menu-item"><a href="' . $url . '">' . $title . '</a></li>';
							}
							$menu_list .= '</ul>';
							echo $menu_list;
						?>
					</div>
				<?php endif; ?>
			<?php endif; ?>
			<div class="logo-wrapper">
				<a href="<?= esc_url(home_url('/')); ?>" class="logo"><!-- <?php bloginfo('name'); ?> --></a>
				<p class="sub-logo">
					<?php bloginfo('description') ?>
				</p>
			</div>
		</nav>
	</header>
<!-- </div> -->
