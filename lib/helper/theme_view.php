<?php

/**
 * Gibt eine Render-Ansicht wieder als String
 *
 * Ist eine Kurzform von object->render(), damit
 * es vom Code her mehr zum theme_controller() passt.
 *
 * @param  string  $view_template Template String / Pfad, z.B. 'header/head'
 * @param  array   $view_data     Optional. Daten für das Template
 * @param  boolean $echo          Optional. Soll die Funktion direkt ausgeben? Default: false
 *
 * @return string                 Der HTML String des gerenderten HTML Objekts
 */
function theme_view( $view_template = NULL, $view_data = [], $echo = true ) {
	if( is_null( $view_template ) ){ return NULL; }

	global $theme_view;
	$render = $theme_view->render( $view_template, $view_data );
	if( !$echo ) {
		return $render;
	}
	echo  $render;
}
