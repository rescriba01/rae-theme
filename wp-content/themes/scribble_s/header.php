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
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
	<script src="https://kit.fontawesome.com/e006fb2a0a.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>

	<?php
	global $post;
	if (!empty($post)){
		$post_slug=$post->post_name;
	}
	?>

</head>

<body id="scribble_s" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<!-- todo: Add div here to attempt a centered logo around a split nav -->


		<header id="masthead" class="site-header">
			<?php include 'template-parts/header/navigation.php'; ?>

			<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$scribble_s_description = get_bloginfo('description', 'display');
				if ($scribble_s_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $scribble_s_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
												?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
		</header><!-- #masthead -->
