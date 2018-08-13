<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
 * T H E M E
 * O P T I O N S
 */

$options = array(
	// TAB : Header
	fw()->theme->get_options( 'theme-options/general-header' ),
	// TAB : Page
	fw()->theme->get_options( 'theme-options/general-page' ),
);
