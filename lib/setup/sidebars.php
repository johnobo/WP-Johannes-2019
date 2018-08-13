<?php
// Register Sidebars
function theme_sidebars() {

	$args = array(
		'id'            => 'footer_sb_01',
		'class'         => 'f-footer__sb',
		'name'          => __( 'Footer (Links)', 'text_domain' ),
		'description'   => __( 'Widgets im Footer Links', 'text_domain' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer_sb_02',
		'class'         => 'f-footer__sb',
		'name'          => __( 'Footer (Mitte)', 'text_domain' ),
		'description'   => __( 'Widgets im Footer Mitte', 'text_domain' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer_sb_03',
		'class'         => 'f-footer__sb',
		'name'          => __( 'Footer (Rechts)', 'text_domain' ),
		'description'   => __( 'Widgets im Footer Rechts', 'text_domain' ),
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'theme_sidebars' );
