<?php

/**
 * Gibt den Theme- oder einen Asset-Folder-Pfad zurück
 *
 * @param  string $sub Optional. Asset Typ. ( 'css' | 'js' | 'font' | 'image' )
 *
 * @return string      Pfad mit '/' am Ende
 */
function theme_get_folder( $sub = '' ){

	$theme_folder  = get_template_directory_uri() . '/';
	$css_sub_dir   = 'assets/css/';
	$js_sub_dir    = 'assets/js/';
	$font_sub_dir  = 'assets/fonts/';
	$image_sub_dir = 'assets/img/';

	switch ( $sub ) {
		case 'css':
			$folder = $theme_folder . $css_sub_dir;
			break;

		case 'js':
			$folder = $theme_folder . $js_sub_dir;
			break;

		case 'font':
			$folder = $theme_folder . $font_sub_dir;
			break;

		case 'image':
			$folder = $theme_folder . $image_sub_dir;
			break;

		default:
			$folder = $theme_folder;
			break;
	}

	return $folder;
}
