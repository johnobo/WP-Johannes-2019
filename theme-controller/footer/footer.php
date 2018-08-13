<?php
//
// CONTROLLER
//

$view_data = [
	'wp_footer' =>  theme_output_buffer( wp_footer ),
	'sidebars'  => [
		'footer_sb_01' => theme_output_buffer( dynamic_sidebar, 'footer_sb_01' ),
		'footer_sb_02' => theme_output_buffer( dynamic_sidebar, 'footer_sb_02' ),
		'footer_sb_03' => theme_output_buffer( dynamic_sidebar, 'footer_sb_03' ),
	],
];

//
// VIEW
//

theme_view( 'footer', $view_data );
