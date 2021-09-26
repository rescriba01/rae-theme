<nav id="site-navigation" aria-label="Main">
	<div id="split__container">
		<div class="left-nav__container">
			<?php wp_nav_menu(array(
				'container' => false,                           // remove nav container
				'container_class' => 'left-container',                 // class of container (should you choose to use it)
				'menu' => __( 'Split Nav Left', 'scribble_s' ),  // nav name
				'menu_class' => ' main-navigation nav--split split--left',               // adding custom nav class
				'theme_location' => 'split_nav_left',                 // where it's located in the theme
				'before' => '',                                 // before the menu
				'after' => '',                                  // after the menu
				'link_before' => '',                            // before each link
				'link_after' => '',                             // after each link
				'depth' => 0,                                   // limit the depth of the nav
				'fallback_cb' => ''                             // fallback function (if there is one)
			)); ?>
		</div>

		<div>
			<img src="" alt="">
		</div>

		<div class="right-nav__container">
			<?php wp_nav_menu(array(
				'container' => false,                           // remove nav container
				'container_class' => 'right-container',                 // class of container (should you choose to use it)
				'menu' => __( 'Split Nav Right', 'scribble_s' ),  // nav name
				'menu_class' => ' main-navigation nav--split split--right',               // adding custom nav class
				'theme_location' => 'split_nav_right',                 // where it's located in the theme
				'before' => '',                                 // before the menu
				'after' => '',                                  // after the menu
				'link_before' => '',                            // before each link
				'link_after' => '',                             // after each link
				'depth' => 0,                                   // limit the depth of the nav
				'fallback_cb' => ''                             // fallback function (if there is one)
			)); ?>
		</div>
	</div>

	<button class="hamburger hamburger--squeeze" type="button" aria-label="Menu" aria-controls="navigation">
	  <span class="hamburger-box">
		<span class="hamburger-inner"></span>
	  </span>
	</button>
</nav>

<div id="mobile_nav">
	<div class="contents">
		<?php wp_nav_menu(array(
			'container' => false,                           // remove nav container
			'container_class' => 'menu cf',                 // class of container (should you choose to use it)
			'menu' => __( 'Main Navigation', 'scribble_s' ),  // nav name
			'menu_class' => 'nav main_nav cf',               // adding custom nav class
			'theme_location' => 'main_nav',                 // where it's located in the theme
			'before' => '',                                 // before the menu
			'after' => '',                                  // after the menu
			'link_before' => '',                            // before each link
			'link_after' => '',                             // after each link
			'depth' => 0,                                   // limit the depth of the nav
			'fallback_cb' => ''                             // fallback function (if there is one)
		)); ?>
	</div>
</div>
<!-- #site-navigation -->
