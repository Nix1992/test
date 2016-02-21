<?php
if ( ! function_exists( 'test1_setup' ) ) :
function test1_setup() {
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'test1' ),
	) );
}
endif; 
add_action( 'after_setup_theme', 'test1_setup' );
function test1_scripts() {
	wp_enqueue_style( 'test1-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'test1_scripts' );
