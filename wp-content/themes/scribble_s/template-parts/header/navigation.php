<nav id="" class="hhnh-desktop-nav" aria-label="Main">
	<?php wp_nav_menu(
		array(
			'theme_location'  => 'split_nav_left',                                              // where it's located in the theme.
			'container'       => 'div',                                                         // add/remove nav container.
			'container_class' => 'nav-container--left',                                         // class of container (should you choose to use it).
			'menu'            => __( 'Split Nav Left', 'scribble_s' ),                          // nav name.
			'menu_class'      => 'main-navigation-contents nav--split split--left',                     // adding custom nav class.
			'before'          => '',                                                            // before the menu.
			'after'           => '',                                                            // after the menu.
			'link_before'     => '',                                                            // before each link.
			'link_after'      => '',                                                            // after each link.
			'depth'           => 0,                                                             // limit the depth of the nav.
			'fallback_cb'     => '',                                                            // fallback function (if there is one).
		)
	); ?>

	<div id="logo--centered">
		<?php
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );
		if ( has_custom_logo() ) {
			echo '<a href="/" class="logo"><img src="' . esc_url( $logo[0] ) . '" alt="HomeHelpNH"></a>';
		}
		?>
	</div>

	<?php
	wp_nav_menu(
		array(
			'theme_location'  => 'split_nav_right',                                             // where it's located in the theme.
			'container'       => 'div',                                                         // add/remove nav container.
			'container_class' => 'nav-container--right',                                        // class of container (should you choose to use it).
			'menu'            => __( 'Split Nav Right', 'scribble_s' ),                         // nav name.
			'menu_class'      => 'main-navigation-contents nav--split split--right',            // adding custom nav class.
			'before'          => '',                                                            // before the menu.
			'after'           => '',                                                            // after the menu.
			'link_before'     => '',                                                            // before each link.
			'link_after'      => '',                                                            // after each link.
			'depth'           => 0,                                                             // limit the depth of the nav.
			'fallback_cb'     => '',                                                            // fallback function (if there is one).
		)
	);
	?>
</nav>

<nav id="mobile-nav"  class="hhnh-mobile-nav">
	<?php dynamic_sidebar('Search'); ?>
	<?php
	wp_nav_menu(
		array(
			'theme_location'  => 'mobile_nav',                          // where it's located in the theme.
			'menu'            => __( 'Mobile Nav', 'scribble_s' ),      // nav name.
			'menu_class'      => 'mobile-nav-contents main-nav mobile', // adding custom nav class.
			'container'       => '',                                    // remove nav container.
			'container_class' => '',                                    // class of container (should you choose to use it).
			'before'          => '',                                    // before the menu.
			'after'           => '',                                    // after the menu.
			'link_before'     => '',                                    // before each link.
			'link_after'      => '',                                    // after each link.
			'depth'           => 0,                                     // limit the depth of the nav.
			'fallback_cb'     => '',                                    // fallback function (if there is one).
		)
	);
	?>
</nav>
<!-- #site-navigation -->
