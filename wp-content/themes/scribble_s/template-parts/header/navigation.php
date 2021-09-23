<nav id="site-navigation" aria-label="Main">
	<?php wp_nav_menu(array(
		'container' => false,                           // remove nav container
		'container_class' => 'left-container',                 // class of container (should you choose to use it)
		'menu' => __( 'Split Nav', 'scribble_s' ),  // nav name
		'menu_class' => ' main-navigation nav--split ',               // adding custom nav class
		'theme_location' => 'split_nav',                 // where it's located in the theme
		'before' => '',                                 // before the menu
		'after' => '',                                  // after the menu
		'link_before' => '',                            // before each link
		'link_after' => '',                             // after each link
		'depth' => 0,                                   // limit the depth of the nav
		'fallback_cb' => ''                             // fallback function (if there is one)
	)); ?>
</nav>
</div><!-- #site-navigation -->
