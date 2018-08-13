<?php

//
// CONTROLLER
//

$headerLogoPrim  = __get_theme_setting( 'lh_logo_primary', 'Johannes Ulrich Gehrke' );
$headerLogoSeco  = __get_theme_setting( 'lh_logo_secondaray', 'Blog' );

$view_data = [
	'home_url'  => get_home_url(),
	'logo_prim' => $headerLogoPrim,
	'logo_sec'  => $headerLogoSeco,
];



//
// VIEW
//

theme_view( 'header/header', $view_data );
