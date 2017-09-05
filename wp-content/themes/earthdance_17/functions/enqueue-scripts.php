<?php

function scripts_n_styles() {
		//wp_register_style( 'style', get_stylesheet_uri() ); // Unprefixed
		wp_register_style( 'style', get_template_directory_uri() . '/style.css' ); // PostCss with Pleeease
		wp_enqueue_style( 'style' );

		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', false, false);

		//Local version when working locally
		//wp_register_script('jquery', get_template_directory_uri().'/js/vendor/jquery.min.js', false, false);

    wp_register_script('modernizr', get_template_directory_uri().'/js/vendor/modernizr-custom.js');

		wp_register_script('script', get_template_directory_uri().'/js/scripts.js', array( 'jquery' ),'0.1', true );

		wp_register_script('headroom', get_template_directory_uri().'/js/vendor/headroom.js');

		//wp_register_script('magpop', get_template_directory_uri().'/js/vendor/magpop.js', array( 'jquery' ),'0.1', true );
		//wp_register_script('waypoints', get_template_directory_uri().'/js/vendor/jquery.waypoints.min.js', array( 'jquery' ),'0.1', true );
		//wp_register_script('inview', get_template_directory_uri().'/js/vendor/inview.min.js', array( 'waypoints' ),'0.1', true );

		//wp_register_script('flickity', get_template_directory_uri().'/js/vendor/flickity.js' );

		wp_enqueue_script('modernizr');
		wp_enqueue_script('jquery');
		wp_enqueue_script('headroom');
		//wp_enqueue_script('flickity');
		//wp_enqueue_script('magpop');
		//wp_enqueue_script('waypoints');
		//wp_enqueue_script('inview');
		wp_enqueue_script('script');
}

add_action( 'wp_enqueue_scripts', 'scripts_n_styles' );
?>
