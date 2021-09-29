<?php
/**
 * scribble_s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package scribble_s
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'scribble_s_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function scribble_s_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on scribble_s, use a find and replace
		 * to change 'scribble_s' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'scribble_s', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in 3 locations.
		register_nav_menus(
			array(
				'split_nav_left'  => esc_html__( 'Split Nav Left', 'scribble_s' ),
				'split_nav_right' => esc_html__( 'Split Nav Right', 'scribble_s' ),
				'mobile_nav'      => esc_html__( 'Mobile Nav', 'scribble_s' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'scribble_s_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'scribble_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function scribble_s_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'scribble_s_content_width', 640 );
}
add_action( 'after_setup_theme', 'scribble_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function scribble_s_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'scribble_s' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'scribble_s' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'scribble_s_widgets_init' );

/**
 * Add search form to mobile navigation
 *
 * @link https://developer.wordpress.org/themes/functionality/navigation-menus/
 */

function add_search_form($items, $args) {
	if( $args->theme_location == 'mobile_nav' )
		$items .= '<li class="search"><form role="search" method="get" id="searchform" action="'.home_url( '/' ).'"><input type="text" value="search" name="s" id="s" /><input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" /></form></li>';
	return $items;
}
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

/**
 * Add module attribute to script by applying a filter 'script_loader_tag'.
 *
 * @link https://wp-mix.com/defer-async-wordpress-enqueued-scripts/
 * @link https://stackoverflow.com/questions/58931144/enqueue-javascript-with-type-module
 */

function scribble_s_add_type_attribute($tag, $handle, $src) {
	//don't break WP Admin
	if ( is_user_logged_in() ) {
		return $tag;
	}

	// if not your script, do nothing and return original $tag
	if ( 'scribble_s-scripts' !== $handle ) {
		return $tag;
	}
	if (false === stripos($tag, 'async')) {
		$tag = str_replace(' src', ' async="async" src', $tag);
	}
	if (false === stripos($tag, 'defer')) {
		$tag = str_replace('<script ', '<script defer ', $tag);
	}

	return $tag;

	// change the script tag by adding type="module" and return it.
	return '<script type="module" src="' . esc_url( $src ) . '"></script>';
}
add_filter('script_loader_tag', 'scribble_s_add_type_attribute' , 10, 3);

/**
 * Enqueue scripts and styles.
 */
function scribble_s_scripts() {
	wp_enqueue_style( 'scribble_s-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'scribble_s-style', 'rtl', 'replace' );

	wp_enqueue_script( 'scribble_s-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'scribble_s-scripts', '//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), '3', true );

	/*if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}*/
}
add_action( 'wp_enqueue_scripts', 'scribble_s_scripts' );

/**
 * Implement the Custom header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

