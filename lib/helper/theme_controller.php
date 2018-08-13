<?php

/**
 * Gibt ein Template-File zurück
 *
 * Diese Funktion existert nur um weniger
 * 'Template' Funktionnen im Code zu haben
 * und 'template-controller' als base-path
 * festzuhalten
 *
 * Syntax ist wie : get_template_part()
 *
 * @param  string  $template       Controller der Geladen werden soll
 * @param  string  $sub_template   Optional. Alternativer Controller
 *
 */
function theme_controller( $template = false, $sub_template = NULL ){
	if( !$template ) { return false; }
	get_template_part( '/'.THEME_FOLDER_CONTROLLER . $template,  $sub_template );
}
