<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scribble_s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/e006fb2a0a.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/remedy.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">


	<?php wp_head(); ?>

	<?php
	global $post;
	if ( ! empty( $post ) ) {
		$post_slug = $post->post_name;
	}
	?>

</head>

<body id="scribble_s" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="masthead" class="site-header">
			<div class="container">
				<?php require 'template-parts/header/navigation.php'; ?>
			</div>
		</header><!-- #masthead -->
