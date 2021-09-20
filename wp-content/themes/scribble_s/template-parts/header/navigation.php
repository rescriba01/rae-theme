<nav id="site-navigation" aria-label="Main">
	<?php wp_nav_menu(array(
		'container' => false,                           // remove nav container
		'container_class' => 'menu cf',                 // class of container (should you choose to use it)
		'menu' => __( 'Split Nav', 'scribble_s' ),  // nav name
		'menu_class' => 'nav main-navigation desktop cf',               // adding custom nav class
		'theme_location' => 'split_nav',                 // where it's located in the theme
		'before' => '',                                 // before the menu
		'after' => '',                                  // after the menu
		'link_before' => '',                            // before each link
		'link_after' => '',                             // after each link
		'depth' => 0,                                   // limit the depth of the nav
		'fallback_cb' => ''                             // fallback function (if there is one)
	)); ?>
	<button class="hamburger hamburger--squeeze" type="button" aria-label="Menu" aria-controls="navigation">
	  <span class="hamburger-box">
		  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
			  <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
		  </svg>
	  </span>
	  </span>
	</button>
</nav>

<div id="mobile_nav">
	<div class="contents">
		<?php wp_nav_menu(array(
			'container' => false,                           // remove nav container
			'container_class' => 'menu cf',                 // class of container (should you choose to use it)
			'menu' => __( 'Mobile Nav', 'scribble_s' ),  // nav name
			'menu_class' => 'nav main-navigation mobile cf',               // adding custom nav class
			'theme_location' => 'main_nav',                 // where it's located in the theme
			'before' => '',                                 // before the menu
			'after' => '',                                  // after the menu
			'link_before' => '',                            // before each link
			'link_after' => '',                             // after each link
			'depth' => 0,                                   // limit the depth of the nav
			'fallback_cb' => ''                             // fallback function (if there is one)
		)); ?>
	</div>
</div><!-- #site-navigation -->
