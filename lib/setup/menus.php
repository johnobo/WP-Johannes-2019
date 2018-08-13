<?php


// Register Navigation Menus
function theme_menus() {

	$locations = array(
		'Main Menu'   => __( 'Haupt-Navigation', 'text_domain' ),
		'Mobile Menu' => __( 'Mobile Navigation', 'text_domain' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'theme_menus' );
