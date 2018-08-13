<?php


function theme_add_favicons() {

	$icon_folder = theme_get_folder( 'image' ) . 'favicon/';

	$template = "
		<!-- FAVICONS -->
		<link rel=\"shortcut icon\"                       href=\"%PATH%/favicon.ico\" type=\"image/x-icon\" />

		<!-- Apple -->
		<link rel=\"apple-touch-icon\" sizes=\"57x57\"    href=\"%PATH%/apple-touch-icon-57x57.png\">
		<link rel=\"apple-touch-icon\" sizes=\"60x60\"    href=\"%PATH%/apple-touch-icon-60x60.png\">
		<link rel=\"apple-touch-icon\" sizes=\"72x72\"    href=\"%PATH%/apple-touch-icon-72x72.png\">
		<link rel=\"apple-touch-icon\" sizes=\"76x76\"    href=\"%PATH%/apple-touch-icon-76x76.png\">
		<link rel=\"apple-touch-icon\" sizes=\"114x114\"  href=\"%PATH%/apple-touch-icon-114x114.png\">
		<link rel=\"apple-touch-icon\" sizes=\"120x120\"  href=\"%PATH%/apple-touch-icon-120x120.png\">
		<link rel=\"apple-touch-icon\" sizes=\"144x144\"  href=\"%PATH%/apple-touch-icon-144x144.png\">
		<link rel=\"apple-touch-icon\" sizes=\"152x152\"  href=\"%PATH%/apple-touch-icon-152x152.png\">
		<link rel=\"apple-touch-icon\" sizes=\"180x180\"  href=\"%PATH%/apple-touch-icon-180x180.png\">

		<!-- Android -->
		<meta name=\"theme-color\" content=\"rgb(50,50,50)\">
		<link rel=\"icon\" type=\"image/png\"             href=\"%PATH%/favicon-16x16.png\" sizes=\"16x16\">
		<link rel=\"icon\" type=\"image/png\"             href=\"%PATH%/favicon-32x32.png\" sizes=\"32x32\">
		<link rel=\"icon\" type=\"image/png\"             href=\"%PATH%/favicon-96x96.png\" sizes=\"96x96\">
		<link rel=\"icon\" type=\"image/png\"             href=\"%PATH%/android-chrome-192x192.png\" sizes=\"192x192\">

		<!-- Microsoft -->
		<meta name=\"msapplication-square70x70logo\"   content=\"%PATH%/smalltile.png\" />
		<meta name=\"msapplication-square150x150logo\" content=\"%PATH%/mediumtile.png\" />
		<meta name=\"msapplication-wide310x150logo\"   content=\"%PATH%/widetile.png\" />
		<meta name=\"msapplication-square310x310logo\" content=\"%PATH%/largetile.png\" />
	";

	$template_data = [
		'%PATH%'            => $icon_folder,
	];
	$output = strtr( $template, $template_data );

	echo $output;
}

add_action( 'wp_head', 'theme_add_favicons' );
