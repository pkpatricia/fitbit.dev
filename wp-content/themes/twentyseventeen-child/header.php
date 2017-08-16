<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen-Child
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html<?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <title>Patricia Parker's Homepage</title>
    <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link href="http://fonts.googleapis.com/css?family=Signika" rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>
>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
      <?php get_template_part( 'template-parts/header/header', 'image' ); ?>

        <nav class="navigation menu">
            <div class="center navigation">
                <picture>
                    <source media="(min-width: 600px)" srcset="<?php echo get_stylesheet_directory_uri();?>/assets/images/Patricia_Parker.svg">
                    <img class="SvgImage" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/Patricia_Parker.svg" alt="Patricia Parker">
                </picture>
            </div>
	        <?php if ( has_nav_menu( 'top' ) ) : ?>
              <div class="navigation-top">
                  <div class="wrap">
						        <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
                  </div><!-- .wrap -->
              </div><!-- .navigation-top -->
	        <?php endif; ?>
            <a class="toggle-nav custom" href="#">Menu &#9776;</a>

        </nav>

	</header><!-- #masthead -->

	<?php
	// If a regular post or page, and not the front page, show the featured image.
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
		echo '<div class="single-featured-image-header">';
		the_post_thumbnail( 'twentyseventeen-child-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
        <div id="content" class="site-content">
