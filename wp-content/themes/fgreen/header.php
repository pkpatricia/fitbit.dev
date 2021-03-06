<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "body-content-wrapper" div.
 *
 * @subpackage fGreen
 * @author tishonator
 * @since fGreen 1.0.0
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="body-content-wrapper">
			
			<header id="header-main-fixed">

				<div id="header-content-wrapper">
				
					<div id="header-logo">
						<?php fgreen_show_website_logo_image_and_title(); ?>
					</div><!-- #header-logo -->
					
					<nav id="navmain">
					
						<?php wp_nav_menu( array( 'theme_location' => 'primary',
												  'fallback_cb'    => 'wp_page_menu',
												  
												  ) ); ?>
					</nav><!-- #navmain -->
					
					<div class="clear">
					</div><!-- .clear -->
					
				</div><!-- #header-content-wrapper -->
				
			</header><!-- #header-main-fixed -->
			
			<div id="header-spacer">
				&nbsp;
			</div><!-- #header-spacer -->
