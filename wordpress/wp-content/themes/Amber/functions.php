<?php

function amber_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'amber_resources');

function amber_setup() {
	
	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu')
	));
}

add_action('after_setup_theme', 'amber_setup');
?> 