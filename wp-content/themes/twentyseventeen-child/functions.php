<?php


	function add_theme_scripts() {

		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'jquery-ui');

		wp_enqueue_style( 'style', get_stylesheet_directory());

		wp_enqueue_style( 'font-awesome.min', get_stylesheet_directory_uri() . 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '1.1', 'all');

		wp_enqueue_style( 'hamburger', get_stylesheet_directory_uri() . '/assets/css/hamburger.css', array(), '1.1', 'all');

		wp_enqueue_style( 'style', get_stylesheet_directory_uri(). '/assets/css/styles.css', array(), '1.1', 'all');

		wp_enqueue_script( 'menu', get_stylesheet_directory_uri() . '/assets/js/menu.js', array ( 'jquery' ), '1.3', 'true');

		wp_enqueue_script( 'picturefill.min.', get_stylesheet_directory_uri() . 'https://cdn.rawgit.com/scottjehl/picturefill/master/dist/picturefill.min.js', array ( 'jquery'), '1.1', 'true');
	}

	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


?>




