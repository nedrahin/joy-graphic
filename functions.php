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
			wp_enqueue_style( 'fonts-min', get_template_directory_uri().'/fonts/feather/style.css', 'null', 'v4.0.0-beta', 'all' );
			
			wp_enqueue_style( 'bootstrap-min', get_template_directory_uri().'/css/bootstrap.min.css', 'null', 'v4.0.0-beta', 'all' );
			wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css', 'null', 'v1.0', 'all' );

			wp_enqueue_style( 'demo', get_template_directory_uri().'/zoms/demo.css', 'null', 'v1.0', 'all' );
			wp_enqueue_style( 'component', get_template_directory_uri().'/zoms/component.css', 'null', 'v1.0', 'all' );
			wp_enqueue_style( 'style', get_stylesheet_uri() );



			// wp_enqueue_script('jquery-min-js', get_template_directory_uri().'/js/jquery.min.js', 'null', 'v3.3.1', true);
			wp_enqueue_script('jquery');
			wp_enqueue_script('popper-min-js', get_template_directory_uri().'/js/popper.min.js', 'null', 'Federico Zivolo 2017', true);
			wp_enqueue_script('bootstrap-min-js', get_template_directory_uri().'/js/bootstrap.min.js', 'null', 'v4.0.0-beta', true);

			// zoom slider js
			wp_enqueue_script('modernizr-min-js', get_template_directory_uri().'/zoom/modernizr.custom.js', 'null', 'v4.0', true);
			wp_enqueue_script('classie-min-js', get_template_directory_uri().'/zoom/classie.js', 'null', 'v4.0', true);
			wp_enqueue_script('dynamics-min-js', get_template_directory_uri().'/zoom/dynamics.min.js', 'null', 'v4.0', true);
			wp_enqueue_script('main-min-js', get_template_directory_uri().'/zoom/main.js', 'null', 'v4.0', true);
		}
		add_action( 'wp_enqueue_scripts', 'theme_enqueue' );
	endif;