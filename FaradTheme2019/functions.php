<?php

//add_theme_support( 'post-thumbnails' );

//add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
//add_image_size( 'homepage-thumb', 220, 180 ); // Soft Crop Mode
//add_image_size( 'singlepost-thumb', 590, 9999 ); // Unlimited Height Mode

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function farad_menu() {
	register_nav_menus(array(
		'primary' => __('Top Menu') 
	));
}

add_action('after_setup_theme','farad_menu');

function farad_theme_styles() {
/**
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . 'css/bootstrap.css' );
	wp_enqueue_style( 'style_css', get_template_directory_uri() . 'style.css' );*/
	wp_enqueue_style('style_css', get_stylesheet_uri());
	wp_enqueue_style('bootstrap_css', get_theme_file_uri('css/bootstrap.css'));
	wp_enqueue_style('fontawsome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'  );
}

add_action ('wp_enqueue_scripts', 'farad_theme_styles');


function farad_theme_js() {

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true );

	wp_enqueue_script( 'javascript_js', get_template_directory_uri() . '/js/javascript.js', array('jquery'), '', true );
	/*wp_enqueue_script('javascript_js', get_theme_file_uri('js/javascript.js'), array(), '1.0',true); 

  	wp_enqueue_script( 'javascript_js', get_template_directory_uri() . '/js/javascript.js', array(), '1.0', true);
  	wp_enqueue_script( 'javascript_js', get_stylesheet_directory_uri() . "/js/javascript.js", array('jquery'));


	wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() . '/js/bootstrap.js', array(),true); */
} 

add_action ( 'wp_enqueue_scripts', 'farad_theme_js'  );

/*
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );*/

?>
