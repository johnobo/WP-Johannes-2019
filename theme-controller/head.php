<?php
//
// CONTROLLER
//

$blog_title      = get_bloginfo( 'name' );
$blog_desc       = get_bloginfo( 'description' );

$view_data = [
	'wp_head'    => theme_output_buffer( wp_head ),
	'body_class' => theme_output_buffer( body_class ),
];



//
// VIEW
//

theme_view( 'head', $view_data );
