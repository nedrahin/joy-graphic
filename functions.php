<?php
	
	if ( ! function_exists('theme_init')) :
		function theme_init()
		{
			add_theme_support( 'title-tag' );
			
		}
		add_action( 'init', 'theme_init' );		
	endif;

	if ( ! function_exists('theme_enqueue')) :
		function theme_enqueue()
		{
			wp_enqueue_style( 'bootstrap-min', get_template_directory_uri().'/css/bootstrap.min.css', 'null', 'v4.0.0-beta', 'all' );
			wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css', 'null', 'v1.0', 'all' );
			wp_enqueue_style( 'style', get_stylesheet_uri() );

			wp_enqueue_script('jquery-min-js', get_template_directory_uri().'/js/jquery.min.js', 'null', 'v3.3.1', true);
			wp_enqueue_script('popper-min-js', get_template_directory_uri().'/js/popper.min.js', 'null', 'Federico Zivolo 2017', true);
			wp_enqueue_script('bootstrap-min-js', get_template_directory_uri().'/js/bootstrap.min.js', 'null', 'v4.0.0-beta', true);
		}
		add_action( 'wp_enqueue_scripts', 'theme_enqueue' );
	endif;