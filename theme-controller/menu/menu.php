<?php
//
// CONTROLLER
//

$menu_args = array(
	'theme_location'  => 'Main Menu',
	'container'       => false,
	'container_class' => '',
	'echo'            => true,
);

$menu_mobile_args = array(
	'theme_location'  => 'Main Menu',
	'container'       => false,
	'container_class' => '',
	'echo'            => true,
	'items_wrap'      => '%3$s'
);

$blog_title       = get_bloginfo('name');
$blog_description = get_bloginfo('description');

$mobile_menu_title = __get_theme_setting( 'lh_mobile_menu_title', "Menü" );
$mobile_menu_icon  = __get_theme_setting( 'lh_mobile_menu_icon', false );

if( $mobile_menu_icon ) {
	wp_enqueue_style( $mobile_menu_icon["pack-name"],  $mobile_menu_icon["pack-css-uri"], array(), '' );

	$mobile_menu_icon = "<i class=\"f-social__icon " . $mobile_menu_icon["icon-class"] . "\"> <!-- Icon --> </i>";
}

$view_data = [
	'main_menu' => theme_output_buffer( wp_nav_menu, $menu_args ),
	'mobile_button' => [
		'title' => $mobile_menu_title,
		'icon'  => $mobile_menu_icon,
	],
	'mobile_menu' => [
		'title'       => $blog_title,
		'description' => $blog_description,
		'menu'        => theme_output_buffer( wp_nav_menu, $menu_mobile_args ),
	],
];

//
// VIEW
//

theme_view( 'menu/menu', $view_data );
